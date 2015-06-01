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

		                <h1>科普</h1>

			            <ul class="breadcrumb">
					       <li><a href="index.php">首页</a></li>
					       <li><a href="tech-garden.php">技术园地</a></li>
				        </ul>
		        </div>
            </header>
			
            <!--article-->
            <section class="container">

				<div class="row">

				    <aside class="col-md-3">

				    	<div class="widget">

							<h4><strong>文章搜索</strong></h4>

							<form method="get" action="#" class="input-group">
								<input type="text" class="form-control" name="k" id="k" value="" placeholder="search..." />
								<span class="input-group-btn">
									<button class="btn btn-primary"><i class="fa fa-search"></i></button>
								</span>
							</form>
						</div>

						<div class="widget">

							<h4><strong>首页</strong></h4>

						    <ul class="nav nav-list">
							    <li><a href="tech-garden.php"><i class="fa fa-circle-o"></i>技术园地</a></li>
						    </ul>
						</div>

						<!-- recent posts -->
                        <?php require ('article-updating.html');?>
				    </aside>

                    <div class="col-md-9" style="padding:20px">
				    	<div class="col-md-12">

						    <h2><strong>辐射源与食品辐照装置</strong></h2>
                            <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大镭核新技术研究部</P>
                            <div class="divider half-margins"><!-- divider -->
							    <i class="fa fa-star"></i>
						    </div>

                            <h4><strong>辐射源</strong></h4>
					    	<ul>
									<li>放射性同位素
										<ul>
											<li><P style="color:#bbb">钴-60（60Co）辐射源</p></li>
											<li><P style="color:#bbb">铯-137（137Cs）辐射源</p></li>
										</ul>
									</li>

									<li>电子加速器<P style="color:#bbb">是用电磁场使电子获得较高能量，将电能转变成射线（高能电子射线，X射线）的装置。</P>	
										<ul>
											<li>电子射线<P style="color:#bbb">电子射线又称电子流、电子束，其能量越高，穿透能力就越强。电子加速器的电子密度大，电子束（射线）射程短，穿透能力差，一般适用于食品表层的辐照。</P></li>
											<li>X射线<P style="color:#bbb">加速器产生的高能电子打击在重金属靶子上会产生能量从零到入射电子能量的X射线。</P></li>
										</ul>
									</li>
							</ul>
						
                            <h4><strong>防护设备</strong></h4>
 							<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;常用于防护设备的材料有：</P>
 							<ul>
									<li><P style="color:#bbb">铅--铅容器可以用来储存辐射源 </P></li>
									<li><P style="color:#bbb">钢材--容器和设备的结构骨架</P></li>
									<li><P style="color:#bbb">铁--用于制作防护门，铁钩和盖板等。</P></li>
									<li><P style="color:#bbb">水--将辐射源（如60Co、137Cs等）储存在深井内</P></li>
									<li><P style="color:#bbb">混凝土墙--既是建筑结构又是屏蔽物</P></li>
							</ul>

                            <h4><strong>输送与安全系统</strong></h4>
					    	<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;工业用食品辐照装置是以辐射源为核心，并配有严格的安全防护设施和自动输送、报警系统。所有的运转设备、自动控制、报警与安全系统必须组合得极其严密。</P>	       			       	
					    </div>
                       
				    </div>
						
				</div>
			</section>
			<!-- /article -->

		</div>
		<!-- /WRAPPER -->

    <?php require('footer.html');?>
    <?php require('script.html');?>
		
	</body>
</html>


