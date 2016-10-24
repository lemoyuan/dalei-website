
#include "W5500.h"
#include "mbtcp.h"


extern uint8_t buf[100];
extern short regs[100] ;

enum
{
	FC_READ_REGS  = 0x03, //Read contiguous block of holding register
	FC_WRITE_REG  = 0x06, //Write single holding register
};

enum
{
	MAX_READ_REGS  = 100,
	MAX_WRITE_REGS = 20,
	MAX_MESSAGE_LENGTH = 256
};


enum
{
	TRAN_H = 0,
	TRAN_L,
	PRO_H,
	PRO_L,
	LEN_H,
	LEN_L,
	SID,
	FUNC,

	BYTES = 8,
	PL_RES,

	ADDR_H = 8,
	ADDR_L,
	VAL_H,
	VAL_L
};

enum 
{
	NO_REPLY = -1,
	EXC_FUNC_CODE = 1,
	EXC_ADDR_RANGE = 2,
	EXC_REGS_QUANT = 3,
	EXC_EXECUTE = 4
};





uint8_t mb_init_device(uint8_t sock,uint16_t port)
{
	// reset registers
	w5500_wr_comm_1b(MR, RST);

	// mac address
	w5500_wr_comm_6b(SHAR, 0xa4, 0x5b, 0x82, 0x55, 0x15, 0x29);

	// gateway, mask, ip
	w5500_wr_comm_4b(GAR,  192, 168, 1, 1);
	w5500_wr_comm_4b(SUBR, 255, 255, 255, 0);
	w5500_wr_comm_4b(SIPR, 192, 168, 1, 26);
        
    //set the RTC time
    w5500_wr_comm_2b(RTR,0x0f,0xa0);   //400mS
        
	// socket rx/tx buffer size for sock 
	w5500_wr_sock_1b(sock, Sn_RXBUF_SIZE, RX_BUF_SIZE ); // 4 KB rx buffer
	w5500_wr_sock_1b(sock, Sn_TXBUF_SIZE, TX_BUF_SIZE ); // 4 KB tx buffer

	// socket port number
	w5500_wr_sock_2b(sock, Sn_PORT, port>>8, port);   // initial port;

	// set socket to tcp mode
	w5500_wr_sock_1b(sock, Sn_MR, MR_TCP);

	return 1;
}

// init the device and start listening
uint8_t  mb_start_server(uint8_t sock)
{
	uint8_t rx;



	// enable global interrupt. per socket interrupt mask enabled by default
	//w5500_wr_comm_1b(SIMR, S0_IMR);
	//w5500_wr_sock_1b(0, Sn_IMR, 0x07);

	// open the socket
	w5500_wr_sock_1b(sock, Sn_CR, OPEN);

	// start listening
	w5500_wr_sock_1b(sock, Sn_CR, LISTEN);

	// verify
	w5500_rd_sock(sock, Sn_SR, 1, &rx);

	// had to dodge the SOCK_CLOSED state since the value of SOCK_CLOSED is also 0
	return rx;
}


uint16_t mb_process(uint8_t sock, uint16_t recv_len, uint8_t *rx)
{
	uint16_t dlen;
	uint16_t slen;
	dlen = w5500_rd_sock_buffer(sock, rx, recv_len);
	if(dlen == 0)
		return 0;
	switch(rx[FUNC])
	{
		case FC_READ_REGS:
			slen = build_readreg_reply_packet(rx,regs);
			break;
		case FC_WRITE_REG:
			slen = build_preset_single_packet(rx,regs);
			break;
		default  :
			slen = build_res_except(EXC_FUNC_CODE,rx);
			break;
	}
	if(slen < 9)
		return 0;
	w5500_wr_sock_tx_buffer(sock, buf,slen);
	return rx[FUNC];
}

uint8_t w5500_state(uint8_t sock)
{
	uint8_t state;
	w5500_rd_sock(sock, Sn_SR, 1, &state);
	switch(state)
	{
		case SOCK_CLOSED:
			w5500_wr_sock_1b(sock, Sn_CR, OPEN);
			break;
		case SOCK_INIT:
			w5500_wr_sock_1b(sock, Sn_CR, LISTEN);
			break;
		case SOCK_CLOSE_WAIT:
			w5500_wr_sock_1b(sock, Sn_CR, CLOSE);
			break;
		default:
                        ;
	}
	return state;
}

uint8_t build_readreg_reply_packet(uint8_t *rx,  short *regs)
{
  uint8_t j,cnt,i;
  uint16_t addr;
  addr = (rx[ADDR_H] << 8) + rx[ADDR_L];
  if(addr > MAX_READ_REGS)
  	return build_res_except(EXC_REGS_QUANT,rx);
  buf[TRAN_H]=rx[0];          //Transaction id High order
  buf[TRAN_L]=rx[1];
  buf[PRO_H]=rx[2];          //MBAP protocol id
  buf[PRO_L]=rx[3];
  buf[LEN_H]=rx[4];           
  buf[LEN_L]=2*rx[11]+3;    //lenth order including unit id,function code,byte count
  buf[SID]=rx[6];           //  unit identifer
  buf[FUNC]=rx[7];            //function code
  buf[BYTES]=2*rx[11];            // byte count
  j = 2*rx[11];
  i = rx[9];                // start address
  for(cnt=0; cnt<j;cnt++)
  {
    buf[PL_RES+2*cnt] = regs[i+cnt]>>8;
    buf[PL_RES+1+2*cnt] = (unsigned char)(regs[i+cnt]);
  }
  return 2*rx[VAL_L]+9;
}

uint8_t build_preset_single_packet(uint8_t *rx, short *regs)
{
	uint16_t addr;
  	addr = (rx[ADDR_H] << 8) + rx[ADDR_L];
  	if(addr > MAX_READ_REGS)
		return build_res_except(EXC_REGS_QUANT,rx);
	regs[addr] = (rx[VAL_H]<<8) + rx[VAL_L];
	return 12;
}


uint8_t build_res_except(uint8_t err, uint8_t *rx)
{

	buf[TRAN_H] = rx[TRAN_H];
	buf[TRAN_L] = rx[TRAN_L];
	buf[PRO_H ] = rx[PRO_H ];
	buf[PRO_L ] = rx[PRO_L ];
	buf[LEN_H ] = 0;
	buf[LEN_L ] = 3;
	buf[SID   ] = rx[SID   ];
	buf[FUNC  ] = rx[FUNC  ] + 0x80;
	buf[ADDR_H] = err;

	return 9;
}
