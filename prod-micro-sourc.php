<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

	<?php require ('head.html');?>

	<body class="pattern8"><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

		<?php require('nav.html');?>

    <!-- WRAPPER -->
		<div id="wrapper">
			
			<header id="page-title">

                <div class="container">	

		            <h1>微波功率源</h1>

			        <ul class="breadcrumb">
					   <li><a href="index.php">首页</a></li>
					   <li><a href="produc-disp.php">产品</a></li>
					   <li class="active">微波功率源</li>
				    </ul>
		        </div>
            </header>

			<!-- product -->
            <section class="container">

				<div class="row ">
					<?php require ('prod-aside.html');?>

					<div class="col-md-9"  style="padding:20px">

					    <div class="col-md-7">
					    	<h3><strong>全固态微波功率源</strong></h3>
					    	<h4><strong>设备结构</strong></h4>
						    <ul>
						
						        <li> <P>采用集成的RF合成器，相位噪声小，频率稳定，直接在工作频率上振荡锁相，省略了常规的倍频电路部分，使整机更简洁可靠。中心控制采用了AVR微处理器，液晶数码显示，频率设置方便，指示直观。</P></li>
						    
						    </ul>

						</div>

						<!--one picture -->
					    <div class="col-md-5">

						
						    <div class="owl-carousel controlls-over" data-plugin-options='{"items": 1, "singleItem": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
							    <div><br/>
								    <img alt="直线电子加速器辐照加工应用大镭核技术全固态微波功率源" class="img-responsive" src="assets/images/dalei/fnal-1.jpg">
							    </div>
							
						    </div>
				        </div>

				        <div class="col-md-12"><br/>	
						    <h4><strong>主要技术指标</strong></h4>
				            <table class="table" style="background-color:rgba(0,0,0,0.1); color:rgba(255,255,255,1);">
                                <tr>
                                    <td width="423"  style="border-top:1px dashed rgba(102,102,102,0.5); "><span>射频频率：</span></td>
                                        <td width="424"  style="border-top:1px dashed rgba(102,102,102,0.5); border-left:1px dashed rgba(102,102,102,0.5);"><span>0.6GHz∽4.5GHz（选定）</span></td>
                                    </tr>
                                <tr>
                                    <td width="423"  style="border-top:1px dashed rgba(102,102,102,0.5); "><span>频率稳定度：</span></td>
                                    <td width="424"  style="border-top:1px dashed rgba(102,102,102,0.5); border-left:1px dashed rgba(102,102,102,0.5);"><span>  3×10-6</span></td>
                                </tr>
                                <tr>
                                    <td width="423"  style="border-top:1px dashed rgba(102,102,102,0.5); "><span> 输出微波脉冲功率：</span></td>
                                    <td width="424"  style="border-top:1px dashed rgba(102,102,102,0.5); border-left:1px dashed rgba(102,102,102,0.5);"><span>400W</span></td>
                                </tr>
                                <tr>
                                    <td width="423"  style="border-top:1px dashed rgba(102,102,102,0.5); "><span>脉冲宽度：</span></td>
                                    <td width="424"  style="border-top:1px dashed rgba(102,102,102,0.5); border-left:1px dashed rgba(102,102,102,0.5);"><span>1～22us</span></td>
                                </tr>
                            </table>  
					    </div>

				    </div>

				</div>
			</section>
			<!--/product-->


		</div>
		<!-- /WRAPPER -->

    <?php require('footer.html');?>
    <?php require('script.html');?>



		
	</body>
</html>
