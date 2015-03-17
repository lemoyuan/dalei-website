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
							<a href="brief-intro.php" class="btn btn-primary btn-lg">详细资料</a>
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
							<a href="prod-eaccel.php"class="btn btn-primary btn-lg">详细资料</a>
							</div>
						</li>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
							<img src="assets/images/dummy.png"  alt="" data-lazyload="assets/images/dalei/fnal-1.jpg" data-fullwidthcentering="on">
							<div class="tp-caption medium_text lft"
							data-x="90" 
							data-y="180"
							data-speed="300" 
							data-start="500" 
							data-easing="easeOutExpo">脉冲调制器
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

			<!-- ONE NATION -->
			<section class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="page-header nomargin-top">
							<strong class="styleColor"></strong>
						</h3>
						<p></p>
					</div>

					<div class="col-md-6">

						<!--one picture -->
						<div class="owl-carousel controlls-over" data-plugin-options='{"items": 1, "singleItem": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
							<div>
								<img alt="大镭" class="img-responsive" src="assets/images/dalei/fnal-3.jpg">
							</div>
							
						</div>
						<!-- /one picture -->

					</div>
				</div>
			</section>
			<!-- /ONE NATION -->




         

		</div>
		<!-- /WRAPPER -->


    <?php require('footer.html');?>
    <?php require('script.html');?>



		
	</body>
</html>
