#include "W5500.h"
#include <Arduino.h>
//#include "avr_compat.h"
#include <inttypes.h>
#include <SPI.h>


#define SET_CS_L 	PORTB&=~(1<<PORTB2)
#define SET_CS_H 	PORTB|=(1<<PORTB2)
#define waitspi() while(!(SPSR&(1<<SPIF)))


#define min(x, y) ( ((x)<(y)) ? (x) : (y) )

//transfer MSB first.
// ------------------------------
 void w5500_rd_comm(uint16_t addr, uint16_t bytes, uint8_t * rx)
{
	uint8_t tx[3] = { addr >> 8, addr, COMMON_R | RWB_READ };
        uint8_t i;
	SET_CS_L;
        
        SPI.transfer(tx[0]);       //send msb data
        SPI.transfer(tx[1]);       //send lsb data
        SPI.transfer(tx[2]);       // send control data
        for(i=0;i<bytes;i++)
        {
	  rx[i] = (uint8_t)SPI.transfer(0);          //read data
        }
	SET_CS_H;
}

//*****************read socket register
 void w5500_rd_sock(uint8_t sock, uint16_t addr, uint16_t bytes, uint8_t * rx)
{
	uint8_t tx[3] = { addr >> 8, addr, (sock << 5) | S0_REG | RWB_READ };
	uint8_t i;
	SET_CS_L;
	// issue read command
        SPI.transfer(tx[0]);       //send msb data
        SPI.transfer(tx[1]);       //send lsb data
        SPI.transfer(tx[2]);       // send control data
	for(i=0;i<bytes; i++)
	{
		rx[i] = (uint8_t)SPI.transfer(0);
		
	}

	SET_CS_H;
}

uint16_t w5500_rd_sock_u16(uint8_t sock, uint16_t addr)
{
	uint8_t rx[2];
	w5500_rd_sock(sock, addr, 2, rx);
	return (rx[0] << 8) | rx[1];
}

// ---------read rx-buffer data
 void w5500_rd_srx(uint8_t sock, uint16_t addr, uint16_t bytes, uint8_t * rx)
{
	uint8_t tx[3] = { addr >> 8, addr, (sock << 5) | S0_RX_BUF | RWB_READ };
	uint8_t  i;
	SET_CS_L;
        SPI.transfer(tx[0]);       //send msb data
        SPI.transfer(tx[1]);       //send lsb data
        SPI.transfer(tx[2]);       // send control data
	for(i=0;i<bytes;i++)
	{
		rx[i] = (uint8_t)SPI.transfer(0);
	}
	SET_CS_H;
}


//****************write tx-buffer
 void w5500_wr_stx(uint8_t sock, uint16_t addr, uint16_t bytes, uint8_t * tx)
{
	//tx[0] = addr >> 8; tx[1] = addr; tx[2] = (sock << 5) | S0_TX_BUF | RWB_WRITE;
	uint8_t ctx[3] = {addr >> 8, addr, (sock << 5) | S0_TX_BUF | RWB_WRITE };
	uint8_t i;
	SET_CS_L;
        SPI.transfer(ctx[0]);       //send msb data
        SPI.transfer(ctx[1]);       //send lsb data
        SPI.transfer(ctx[2]);       // send control data
	for(i=0; i<bytes;i++)
	{
		SPI.transfer(tx[i]);

	}
	SET_CS_H;
}

//*************write common register a byte
 void w5500_wr_comm_1b(uint16_t addr, uint8_t val)
{
	uint8_t tx[4] = { addr >> 8, addr, COMMON_R | RWB_WRITE, val };
	uint8_t i;
	SET_CS_L;
	for(i=0; i<4;i++)
	{
		SPI.transfer(tx[i]);
	}
	SET_CS_H;
}

//***********write common register two bytes
 void w5500_wr_comm_2b(uint16_t addr, uint8_t v1, uint8_t v2)
{
	uint8_t tx[5] = { addr >> 8, addr, COMMON_R | RWB_WRITE, v1, v2 };
	uint8_t i;
	SET_CS_L;
	for(i=0; i<5;i++)
	{
		SPI.transfer(tx[i]);
	}
	SET_CS_H;
}

//**********write common register four bytes
 void w5500_wr_comm_4b(uint16_t addr, uint8_t v1, uint8_t v2, uint8_t v3, uint8_t v4)
{
	uint8_t tx[7] = { addr >> 8, addr, COMMON_R | RWB_WRITE, v1, v2, v3, v4 };
	uint8_t i;
	SET_CS_L;
	for(i=0; i<7;i++)
	{
		SPI.transfer(tx[i]);
	}
	SET_CS_H;
}

//**********write common register 6 bytes
 void w5500_wr_comm_6b(uint16_t addr, uint8_t v1, uint8_t v2, uint8_t v3, uint8_t v4, uint8_t v5, uint8_t v6)
{
	uint8_t tx[9] = { addr >> 8, addr, COMMON_R | RWB_WRITE, v1, v2, v3, v4, v5, v6 };
	uint8_t i;
	SET_CS_L;
	for(i=0; i<9;i++)
	{
		SPI.transfer(tx[i]);
	}
	SET_CS_H;
}

//**********write socket register 1 byte
 void w5500_wr_sock_1b(uint8_t sock, uint16_t addr, uint8_t val)
{
	uint8_t tx[4] = { addr >> 8, addr, (sock << 5) | S0_REG | RWB_WRITE, val };
	uint8_t i;
	SET_CS_L;
	for(i=0; i<4;i++)
	{
		SPI.transfer(tx[i]);
	}
	SET_CS_H;
}

//**********write socket register 2 byte
 void w5500_wr_sock_2b(uint8_t sock, uint16_t addr, uint8_t v1, uint8_t v2)
{
	uint8_t tx[5] = { addr >> 8, addr, (sock << 5) | S0_REG | RWB_WRITE, v1, v2 };
	uint8_t i;
	SET_CS_L;
	for(i=0; i<5;i++)
	{
		SPI.transfer(tx[i]);
	}
	SET_CS_H;
}

//**********write socket register 4 byte
 void w5500_wr_sock_4b(uint8_t sock, uint16_t addr, uint8_t v1, uint8_t v2, uint8_t v3, uint8_t v4)
{
	uint8_t tx[7] = { addr >> 8, addr, (sock << 5) | S0_REG | RWB_WRITE, v1, v2, v3, v4 };
	uint8_t i;
	SET_CS_L;
	for(i=0; i<7;i++)
	{
		SPI.transfer(tx[i]);
	}
	SET_CS_H;
}

//**********get rx RSR
uint16_t get_sn_rsr(uint8_t sock)
{
    uint16_t val=0,val1=0;
    do {
        val1 = w5500_rd_sock_u16(sock, Sn_RX_RSR);
        if (val1 != 0)
            val = w5500_rd_sock_u16(sock, Sn_RX_RSR);
    } 
    while (val != val1);
    return val;
}

//*********get tx FSR
uint16_t get_sn_fsr(uint8_t sock)
{
    uint16_t val=0, val1=0;
    do {
        val1 = w5500_rd_sock_u16(sock, Sn_TX_FSR);
        if (val1 != 0)
            val = w5500_rd_sock_u16(sock, Sn_TX_FSR);
    } 
    while (val != val1);
    return val;
}

//********read data in rx-buffer 
uint16_t w5500_rd_sock_buffer(uint8_t sock, uint8_t *rx, uint16_t len)
{
	uint16_t recv_bytes = 0;
	uint16_t recv_bytes1= 0;
	uint16_t read_bytes = 0;
	uint16_t read_ptr;
	/*do{
		recv_bytes1 = w5500_rd_sock_u16(sock, Sn_RX_RSR);
		if(recv_bytes1 > 0)
			recv_bytes = w5500_rd_sock_u16(sock, Sn_RX_RSR);
	}while(recv_bytes != recv_bytes1);*/
        recv_bytes = get_sn_rsr(0);
	if(recv_bytes == 0)
		return 0;
	read_bytes = min(recv_bytes,len);
	read_ptr = w5500_rd_sock_u16(sock, Sn_RX_RD);

	w5500_rd_srx(sock, read_ptr, read_bytes, rx);
	read_ptr = read_ptr + read_bytes;
	w5500_wr_sock_2b(sock, Sn_RX_RD, read_ptr >> 8, read_ptr); 
	w5500_wr_sock_1b(sock, Sn_CR, RECV);
	return read_bytes;
}

//************write to tx-buffer
uint16_t w5500_wr_sock_tx_buffer(uint8_t sock, uint8_t * tx, uint16_t len)
{
	uint16_t tx_slots = 0;
	uint16_t tx_slots1= 0;
	uint16_t tx_bytes = 0;
	uint16_t tx_ptr;
	/*do{
		tx_slots1 = w5500_rd_sock_u16(sock, Sn_TX_FSR);
		if(tx_slots1 > 0)
			tx_slots = w5500_rd_sock_u16(sock, Sn_TX_FSR);
	}while(tx_slots != tx_slots1);
*/
	if(len == 0)
		return 0;
	tx_bytes = len;//min(len,tx_slots);
	tx_ptr = w5500_rd_sock_u16(sock, Sn_TX_WR);

	w5500_wr_stx(sock, tx_ptr, tx_bytes, tx);
	tx_ptr = tx_ptr + tx_bytes;
	w5500_wr_sock_2b(sock, Sn_TX_WR, tx_ptr >> 8, tx_ptr); 
	w5500_wr_sock_1b(sock, Sn_CR, SEND);
	return tx_bytes;
}
