/*******************************************************
**note: 此处为开启timer0中断。E:\arduino FUN\arduino-1.0.5-r2\hardware\arduino\cores\arduino\wiring.c 里的timer0中断被注释了。
**
**
**
**
*********************************************************/
#include <Arduino.h>
#include "W5500.h"
#include <inttypes.h>
#include <string.h>
#include <SPI.h>
#include "mbtcp.h"
#include <MsTimer2.h>
#include <avr/wdt.h>


#define SPI_CS   10
#define SPI_MOSI 11
#define SPI_MISO 12
#define SPI_SCK  13
#define PWM_OUT  9
#define F_M_EN   7
#define F_CH_CS  6    //channel select
#define ERR_DETECT 2
#define E_GUN_RST  0
#define SET_CS_L 	PORTB&=~(1<<PORTB2)
#define SET_CS_H 	PORTB|=(1<<PORTB2)
#define waitspi()       while(!(SPSR&(1<<SPIF)))



short regs[100] = {0} ;
uint8_t buf[100];
uint8_t f_state = 0;
uint8_t counter = 0;
uint8_t reset_mask = 0;
uint8_t temp_val;
uint8_t freq_val0,freq_val1;
uint16_t temp_cnt = 0;
bool isr_state = true;
uint16_t set_val = 200;
uint8_t mark = 0;

void setup()
{
    //Serial.begin(9600);
    //memset(regs,0,20);
    //wdt_enable(WDTO_4S);           // set the dog
    spi_init();
    pinMode(F_CH_CS,OUTPUT);
    pinMode(F_M_EN,OUTPUT);
    pinMode(E_GUN_RST, OUTPUT);
    pinMode(ERR_DETECT, INPUT);
    digitalWrite(ERR_DETECT,HIGH);
    digitalWrite(F_M_EN, LOW);     //enable the frequence measure
    pwm_init();
    freq_measure_init();
    mb_init_device(0,502);
    mb_start_server(0);
    sei();
    regs[12] = 0x29;    // last byte of mac
    regs[13] = 26;     // last byte of ip
    regs[16] = 1;

}

void loop()
{
    uint8_t rx[100];
    uint8_t  func;
    uint16_t dlen;
    dlen = get_sn_rsr(0);
    func = mb_process(0, dlen, rx);
    w5500_state(0);
    module_reset();
    err_process();
    if(set_val < regs[14])
    {
        if(counter >= 4)
        {
            set_val = set_val + regs[16];  
            counter = 0;
        }

    }
    else
    {   
        if((set_val-regs[14])<20)
            set_val = regs[14];
        else
        {
            if(counter >=4)
            {
                set_val = set_val - 5*regs[16];
                counter = 0;
            }
        }
    }
    OCR1A = set_val;
    regs[4]=OCR1A;
    //OCR1A = regs[14];        // set the duty
    //if((func == 3) ||(func == 6))
        wdt_reset();             // feed the watch dog

}


ISR(TIMER0_OVF_vect)
{
    temp_cnt += 255;

}

//********spi initial
void spi_init(void)
{
    pinMode(SPI_CS,OUTPUT);
    pinMode(SPI_MOSI,OUTPUT);
    pinMode(SPI_MISO,INPUT);
    pinMode(SPI_SCK,OUTPUT);
    SPCR = (1<<SPE)|(1<<MSTR)|(1<<SPR0);      //enable spi  ,master mode,2M rate
    SPSR |= (1<<SPI2X);
}

//**********init the pwm module 
void pwm_init(void)
{
    pinMode(PWM_OUT,OUTPUT);
    TCCR1A = 0x83;    //set PWM freq (16M/(8*1024))
    TCCR1B = 0x0a;
    regs[14] = 200;    //reg to modify the value in OCR1A
}


//****freq measure module
void freq_measure_init(void)
{
    PORTD &= ~(1<<PORTD6);
    MsTimer2::set(200,getfreqisr);                //sample the frequence within 20mS
    MsTimer2::start();
    TIMSK0 |= (1<<TOIE0);
    TCCR0A = 0x00;
    TCCR0B = 0x06;                                // clocked falling edge
    TCNT0 =0;
    f_state = 0;
}


//     time2 interrupt 
void getfreqisr(void)
{
    if(f_state == 0)
    {
        temp_cnt += TCNT0;
        regs[0] = temp_cnt;
        temp_cnt = 0;
        TCNT0 = 0;
        PORTD |= (1<< PORTD6);
        PORTD &= ~(1<<PORTD0);

    }
    f_state++;
    counter++;
    reset_mask++;
    if(f_state == 2)
    {
        temp_cnt += TCNT0;
        regs[1] = temp_cnt;
        temp_cnt = 0;
        TCNT0 = 0;
        f_state = 0;
        PORTD &= ~(1<<PORTD6);
    }


   // f_state ++;
   // temp_val = TCNT0;
   // TCNT0 = 0;
   // digitalWrite(F_CH_CS, isr_state);
   // isr_state = !isr_state;
}

void getfreq(void)
{
    if(f_state == 1)
    {
        regs[0] = temp_val*50;
    }
    if(f_state == 2)
    {
        regs[1] = temp_val*50;
        f_state = 0;
                  // e_gun_rst last time maybe servral uS  maybe 20mS
    }
}

//******e_gun error process
void err_process(void)
{   
    if(!(PIND & 0x04))
    {
            regs[2] = 1;      //if error regs[2] ==1 normal regs[2] == 0
            TCCR1A = 0;       //close the pwm
            TCCR1B = 0;
            regs[14] = 200;
    }

}

//****reset the e_gun error
void module_reset(void)
{

    if(regs[15] == 1)
    {
        digitalWrite(E_GUN_RST, HIGH);
        mark = 1;
        reset_mask = 0;
        regs[15] = 0;
    }  
    if((reset_mask == 3)&&(mark == 1))
    {
        TCCR1A = 0x83;    //set PWM freq (16M/(8*1024))
        TCCR1B = 0x0a;      //re-open the pwm
        regs[2] = 0;
        reset_mask = 0;
        mark = 0;
        digitalWrite(E_GUN_RST, LOW);
    }
}


