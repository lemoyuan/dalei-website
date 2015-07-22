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

		            <h1>电子枪智能控制器</h1>

			        <ul class="breadcrumb">
					   <li><a href="index.php">首页</a></li>
					   <li><a href="produc-disp.php">产品</a></li>
					   <li class="active">电子枪智能控制器</li>
				    </ul>
		        </div>
            </header>

             

			<!-- product -->
            <section class="container">

				<div class="row ">
					<?php require ('prod-aside.html');?>

					<div class="col-md-9"  style="padding:20px">

					    <div class="col-md-7">
					    	<h3><strong>电子枪智能控制器</strong></h3>
					    
						</div>

						<!--one picture -->
					    <div class="col-md-5">
						    <div class="owl-carousel controlls-over" data-plugin-options='{"items": 1, "singleItem": true, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
							    <div><br/><br/><br/><br/><br/><br/>
								    <img alt="直线电子加速器辐照加工应用大镭核技术电子枪智能控制器" class="img-responsive" src="assets/images/dalei/fnal-1.jpg">
							    </div>
							
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
