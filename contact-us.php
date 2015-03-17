<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

	<?php require ('head.html');?>

	<body class="pattern8"><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

		<?php require('nav.html');?>


    <!-- WRAPPER -->
		<div id="wrapper">
			
			<!-- REVOLUTION SLIDER -->
			<div class="fullwidthbanner-container roundedcorners">
				<div class="fullwidthbanner">
					<ul>	
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
							<img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/dalei/fnal-2.jpg" data-fullwidthcentering="on">
							<div class="tp-caption medium_text lft"
							data-x="90" 
							data-y="180"
							data-speed="300" 
							data-start="500" 
							data-easing="easeOutExpo">大镭核技术
							</div>

							<div class="tp-caption large_text lfb"
							data-x="90" 
							data-y="222"
							data-speed="300" 
							data-start="800" 
							data-easing="easeOutExpo">电子直线加速器专业制造<br />
							</div>

							<div class="tp-caption lfb"
							data-x="90" 
							data-y="330"
							data-speed="300" 
							data-start="1100" 
							data-easing="easeOutExpo">
							<a href="brief-intro.php"  class="btn btn-primary btn-lg">详细资料</a>
							</div>
						</li>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
							<img src="assets/images/dummy.png"  alt="" data-lazyload="assets/images/dalei/fnal-3.jpg" data-fullwidthcentering="on">
							<div class="tp-caption medium_text lft"
							data-x="90" 
							data-y="180"
							data-speed="300" 
							data-start="500" 
							data-easing="easeOutExpo">电子加速器
							</div>

							<div class="tp-caption large_text lfb"
							data-x="90" 
							data-y="222"
							data-speed="300" 
							data-start="800" 
							data-easing="easeOutExpo">智能化、模块化、结构化
							</div>

							<div class="tp-caption lfb"
							data-x="90" 
							data-y="330"
							data-speed="300" 
							data-start="1100" 
							data-easing="easeOutExpo">
							<a href="prod-eaccel.php" class="btn btn-primary btn-lg">详细资料</a>
							</div>
						</li>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
							<img src="assets/images/dummy.png"  alt="" data-lazyload="assets/images/dalei/fnal-1.jpg" data-fullwidthcentering="on">
							<div class="tp-caption medium_text lft"
							data-x="90" 
							data-y="180"
							data-speed="300" 
							data-start="500" 
							data-easing="easeOutExpo">调制器
							</div>

							<div class="tp-caption large_text lfb"
							data-x="90" 
							data-y="222"
							data-speed="300" 
							data-start="800" 
							data-easing="easeOutExpo">智能高功率脉冲调制器
							</div>

							<div class="tp-caption lfb"
							data-x="90" 
							data-y="330"
							data-speed="300" 
							data-start="1100" 
							data-easing="easeOutExpo">
							<a href="prod-modulator.php" class="btn btn-primary btn-lg">详细资料</a>
							</div>
						</li>
						
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
			<!-- /REVOLUTION SLIDER -->

			<section id="contact" class="container">

				<div class="row">

					<!-- INFO -->
					<div class="col-md-8">

						<h2>联系方式</h2>

						<p>
							如果您有任何的疑问或需求，请致电或邮件我们！
						</p>

						<div class="divider half-margins"><!-- divider -->
							<i class="fa fa-star"></i>
						</div>

						<p style="font-size:20px">
							<span class="block"><strong><i class="fa fa-flag"></i> &nbsp;公司名称：</strong> 浙江大镭核技术应用设备有限公司</span>
							<br />
							<span class="block"><strong><i class="fa fa-home"></i> &nbsp;大镭官网：</strong> <a href="http://www.bigradium.com">http://www.bigradium.com</a></span>
							<br />
							<span class="block"><strong><i class="fa fa-map-marker"></i> &nbsp;&nbsp;公司地址：</strong> 浙江省舟山市经济开发区新港工业园区迎宾大道36号</span>
							<br />
							<span class="block"><strong><i class="fa fa-envelope-o"></i> &nbsp;邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编：</strong> 316000</span>
							<br />
							<span class="block"><strong><i class="fa fa-phone"></i> &nbsp;电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</strong> 0580-2929878</span>
							<br />
							<span class="block"><strong><i class="fa fa-print"></i> &nbsp;传&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真：</strong> 0580-2929879</span>
							<br />
							<span class="block"><strong><i class="fa fa-envelope"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</strong> <a href="mailto:support@bigradium.com"> &nbsp;&nbsp;support@bigradium.com</a></span>			

						</p>

					</div>
					<!-- /INFO -->

                    <!-- FORM -->
					<div class="col-md-4">

						<h2>邮件大镭</h2>

						<form class="white-row" action="php/contact.php" method="post">
							<div class="row">
								<div class="form-group">
									<div class="col-md-6">
										<label>姓名 *</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
									</div>
									<div class="col-md-6">
										<label>电子邮箱*</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>主题</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>消息内容 *</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="submit" value="发送" class="btn btn-primary btn-md" data-loading-text="Loading...">
								</div>
							</div>
						</form>
					
					</div>
					<!-- /FORM -->
				</div>

			</section>

		</div>
		<!-- /WRAPPER -->


        <?php require('footer.html');?>
        <?php require('script.html');?>



		
	</body>
</html>
						
