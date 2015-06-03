<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

	<?php require ('../head.html');?>

	<body class="pattern8"><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

		<?php require('../nav.html');?>


    	<!-- WRAPPER -->
		<div id="wrapper">
			
			<header id="page-title">
                <div class="container">	

		                <h1>科普</h1>

			            <ul class="breadcrumb">
					       <li><a href="../index.php">首页</a></li>
					       <li><a href="../tech-garden.php">技术园地</a></li>
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
							    <li><a href="../tech-garden.php"><i class="fa fa-circle-o"></i>技术园地</a></li>
						    </ul>
						</div>

						<!-- recent posts -->
                        <?php require ('article-updating.html');?>
				    </aside>

                    <div class="col-md-9" style="padding:20px">
				    	<div class="col-md-12">

						    <h2><strong>辐照量单位与剂量测量</strong></h2>
                            <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大镭核新技术研究部</P>
                            <div class="divider half-margins"><!-- divider -->
							    <i class="fa fa-star"></i>
						    </div>

                            <h4><strong>放射性强度与放射性比度</strong></h4>

					    	<ul>
									<li>放射性强度<P style="color:#bbb">又称放射性活度，是度量放射性强弱的物理量。　曾采用的单位有：</P>	

										<ul>
												<li>贝可勒尔（Becqurel，简称贝可Bq）<P style="color:#bbb">1贝可表示放射性同位素每秒有一个原子核衰变。</P></li>
												<li>克镭当量<P style="color:#bbb">放射γ射线的放射性同位素（即γ辐射源）和1克镭（密封在0.5mm厚铂滤片内）在同样条件下所起的电离作用相等时，其放射性强度就称为1克镭当量。</P></li>
												<li>居里（Curie简写Ci）<P style="color:#bbb">若放射性同位素每秒有3.7×1010次核衰变，则它的放射性强度为1居里（Ci）。</P></li>
										</ul>
									</li>
									<li>放射性比度<P style="color:#bbb">将一个化合物或元素中的放射性同位素的浓度称为"放射性比度"，也用以表示单位数量的物质的放射性强度。</P>	
							</ul>
						
                            <h4><strong>照射量</strong></h4>
 							<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;照射量（Exposure）是用来度量X射线或γ射线在空气中电离能力的物理量。使用的单位有：伦琴（Roentgen，简写R）、SI库仑/千克（C·kg-1）</P>

                            <h4><strong>吸收剂量</strong></h4>
					    	<ul>
									<li>吸收剂量单位
<P style="color:#bbb">又称放射性活度，是度量放射性强弱的物理量。　曾采用的单位有：</P>	

										<ul>
												<li>吸收剂量<P style="color:#bbb">被照射物质所吸收的射线的能量称为吸收剂量，其单位有：</P><ul><li>拉德（rad））：<P style="color:#bbb">每克物质吸收100尔格的能量</p></li><li>戈瑞（Gray，简称Gy）：<P style="color:#bbb">每kg物质吸收1焦耳的能量。</p></li></ul><P style="color:#bbb">换算关系：1 GY =100 rad；1kGY = 0.1 mrad = 1 KW.S/kg</p></li>
												<li>剂量率<P style="color:#bbb">是用来度量不同类型的辐照所引起的不同的生物学效应，其单位为希（沃特）（Sv）。</P></li>
												<li>剂量当量<P style="color:#bbb">是用来度量不同类型的辐照所引起的不同的生物学效应，其单位为希（沃特）（Sv）。</P></li>
												<li>剂量当量率<P style="color:#bbb">是指单位时间内的剂量当量，单位为Sv·s-1或Sv·h-1。</P></li>
										</ul>
									</li>
									<li>吸收剂量测量</P>	
											<ul>
												<li><P style="color:#bbb">国家基准--采用Frickle剂量计（硫酸亚铁剂量计）</p></li>
												<li><P style="color:#bbb">国家传递标准剂量测量体系--丙氨酸/ESR剂量计（属自由基型固体剂量计），硫酸铈-亚铈剂量计，重铬酸钾（银）-高氯酸剂量计，重铬酸银剂量计等</P></li>
												<li><P style="color:#bbb">常规剂量计--无色透明或红色有机玻璃片（聚甲基丙烯酸甲酯），三醋酸纤维素，基质为尼龙或PVC的含有隐色染料的辐照显色薄膜等</P></li>
											</ul>
									</li>
							</ul>
		       			       			       			       	
					    </div>
                       
				    </div>
						
				</div>
			</section>
			<!-- /article -->

		</div>
		<!-- /WRAPPER -->

    <?php require('../footer.html');?>
    <?php require('../script.html');?>
		
	</body>
</html>


