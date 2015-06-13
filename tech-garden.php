<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

	<?php require ('head.html');?>

	<body class="pattern8"><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

		<?php require('nav.html');?>

    <!-- /WRAPPER -->
		<div id="wrapper">
			
			<div id="blog">
			    <header id="page-title">

                    <div class="container">	

		                <h1>新&nbsp; &nbsp; 技&nbsp;  &nbsp;术</h1>

			            <ul class="breadcrumb">
					       <li><a href="index.php">首页</a></li>
                                                     <li><a href="tech-garden.php">技术园地</a></li>
				        </ul>
		            </div>
                </header>

				<section class="container">

						<aside  class="col-md-3">
							<ul class="nav nav-list">
								<li><a href="tech-garden.php"><i class="fa fa-pencil-square-o"></i> 新&nbsp; &nbsp; 技&nbsp;  &nbsp;术</a></li>
								<li><a href="tech-garden-applications.php"><i class="fa fa-pencil-square-o"></i> 辐 照 应 用</a></li>
								<li><a href="tech-garden-science.php"><i class="fa fa-pencil-square-o"></i> 加速器百科</a></li>
								<li><a href="tech-garden-experience.php"><i class="fa fa-pencil-square-o"></i> 技术  /  经验</a></li>
							</ul>

							<div class="widget">
    								<h4><strong>近期更新</strong></h4>
									<ul>
											<li><a href="/articles/article-accel-tube.php"><i class="fa fa-sign-out"></i>带电粒子高梯度加速的研究</a></li>
									</ul>
							</div>

				    	</aside>

					<div class="col-md-9">

							<div id="new-tech" class="row">
									<div class="white-row styleBackground">

											<!-- article title -->
											<h4><a href="/articles/article-accel-tube.php">辐照加速器的新技术——带电粒子高梯度加速的研究</a></h4>

											<!-- blog short preview -->
											<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高梯度加速结构是未来直线加速器的一个重要的发展方向。然而高频真空击穿（rf breakdown）现象严重制约了高梯度加速结构的发展。这是一个极其复杂的物理现象，关于它的研究已经进行几十年了，然而目前学术界对该现象的认识还有很多争议。 · · · · · ·</p>

											<div class="col-md-12 col-sm-6 col-xs-12" style="margin-bottom:20px;">
													<figure>
															<img class="img-responsive" src="assets/images/articles/tube3.png" alt="大镭核技术" />
													</figure>
											</div>

											<!-- read more button -->
											<a href="/articles/article-accel-tube.php" class="btn btn-s pull-center" style="background-color:#2a6496"><i class="fa fa-sign-out"></i>阅读全文&nbsp;&nbsp;&nbsp;&nbsp;READ MORE</a>



									</div>
							</div>

               </section>
		    </div>
		</div>
		<!-- /WRAPPER -->

		<footer>

			<!-- copyright , scrollTo Top -->
			<div class="footer-bar">
				<div class="container">
					<span class="copyright">版权所有 &copy; 浙江大镭核技术应用设备有限公司。浙ICP备14037100号-1</span>
					<a class="toTop" href="#topNav">All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BACK TO TOP <i class="fa fa-arrow-circle-up"></i></a>
				</div>
			</div>
			<!-- copyright , scrollTo Top -->
		</footer>

    <?php require('script.html');?>
		
	</body>
</html>
