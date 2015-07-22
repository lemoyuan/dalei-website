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

						<h3>电子设备技术开发工程师</h3>
						<table class="table" style="background-color:rgba(0,0,0,0.1); color:rgba(255,255,255,1);">
						    <tr>
                              <td width="423" style="text-align:left"><span>工作地点：浙江-舟山市-定海区</span></td>
                              <td width="424" style="text-align:left"><span>招聘人数：2</span></td>
                            </tr>
                            <tr>
                              <td width="423" style="border-top:1px dashed rgba(102,102,102,0.5);"><span>专业要求：电磁场与无线技术、电子信息工程等相关专业</span></td>
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
									<p>1、从事电子加速器系统中电子设备、控制系统的技术维护和技术开发；<br/>
										2、有扎实的模电、数电、电路原理、高频电路及微机控制方面的基础；<br/>
										3、能熟练应用电路设计软件，动手能力强；<br/>
										4、对本专业爱好并感兴趣，能静心、执着、求上进； <br/>
										5、有相关工作经验者优先考虑。
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
