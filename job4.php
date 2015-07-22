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

            <!--jobs-->
			<section class="container">

				<div class="row">

				    <?php require('job-aside.html');?>

					<div class="col-md-9">

						<h3>机械与自动化工程师</h3>
						<table class="table" style="background-color:rgba(0,0,0,0.1); color:rgba(255,255,255,1);">
						    <tr>
                              <td width="423" style="text-align:left"><span>工作地点：浙江-舟山市-定海区</span></td>
                              <td width="424" style="text-align:left"><span>招聘人数：1</span></td>
                            </tr>
                            <tr>
                              <td width="423" style="border-top:1px dashed rgba(102,102,102,0.5);"><span>专业要求：机械电子工程、机械设计与制造等相关专业</span></td>
                              <td width="424" style="border-top:1px dashed rgba(102,102,102,0.5);"><span>学历要求：本科</span></td>
                            </tr>
                            <tr>
                              <td width="423" style="border-top:1px dashed rgba(102,102,102,0.5);"><span>工作经验：不限</span></td>
                              <td width="424" style="border-top:1px dashed rgba(102,102,102,0.5);"><span>外语要求：不限</span></td>
                            </tr>
                            <tr>
                              <td width="423"  style="border-top:1px dashed rgba(102,102,102,0.5);"><span>提供食宿：提供</span></td>
                              <td width="424"  style="border-top:1px dashed rgba(102,102,102,0.5);"><span>薪资待遇：面谈</span></td>
                            </tr>
                        </table>
						<div class="toogle">

							<div class="toggle active">
								<label>职位描述</label>
								<div class="toggle-content">
									<p>1、从事机械、机电设备设计、研制，钳工及机床操作；<br/>
										2、有一定机械设计等方面的基础；<br/>
										3、能虚心好学，专注、静心，在实践中不断成长；<br/>
										4、有相关工作经验者优先考虑。<br/>
									</p>
								</div>
							</div>

						</div>

					</div>

				</div>

			</section>
           <!--jobs-->
			
		</div>
		<!-- /WRAPPER -->

    <?php require('footer.html');?>
    <?php require('script.html');?>
	
	</body>
</html>
