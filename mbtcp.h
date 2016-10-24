


#ifndef	_MBTCP_H_
#define	_MBTCP_H_

#include "W5500.h"



uint16_t mb_process(uint8_t sock, uint16_t recv_len, uint8_t *rx);   //return the func code
uint8_t w5500_state(uint8_t sock);
uint8_t mb_init_device(uint8_t sock,uint16_t port);
uint8_t  mb_start_server(uint8_t sock);
uint8_t build_readreg_reply_packet(uint8_t *rx,  short *regs);
uint8_t build_preset_single_packet(uint8_t *rx, short *regs);
uint8_t build_res_except(uint8_t err, uint8_t *rx);














































#endif

