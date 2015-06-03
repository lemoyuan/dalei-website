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

		                <h1>技术</h1>

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

						    <h2><strong>国内外食品辐照发展史</strong></h2>
                            <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大镭核新技术研究部</P>
                            <div class="divider half-margins"><!-- divider -->
							    <i class="fa fa-star"></i>
						    </div>

                            <h4><strong>国外</strong></h4>

					    	<ul>
								<li><P style="color:#bbb">1896年--明克（Minck）经实验证实X-射线对原生虫有致死作用</P></li>
								<li><P style="color:#bbb">1921年--斯彻瓦特日（Schwatz）使用X-射线杀死肉中的旋毛虫（Trichinella Spiralis）并获得美国专利</P></li>
								<li><P style="color:#bbb">1930年--乌斯特（Wüst）证实"所有食品包装在密封金属罐中，再用强力伦琴射线照射可杀灭所有细菌"，并获得法国专利</P></li>
							</ul>

							<P>第二次世界大战结束后--随着放射性同位素的大量应用和电子加速器等机械辐射源的问世，促进了射线处理食品的发展。</p>

							<ul>
								<li><P style="color:#bbb">1953年--艾森豪威尔（Eisehower）促使美国军方深入研究食品辐照</P></li>
								<li><P style="color:#bbb">1957年--美国军方负责，为期5年的辐照食品研究计划启动，投入了大量人力、物力</P></li>
								<li><P style="color:#bbb">1960年--在美国军队开始试用辐照食品</P></li>
								<li><P style="color:#bbb">1963年--在美国军方Natick实验室举行首次辐照食品国际会议</P></li>
								<li><P style="color:#bbb">1965年--加拿大建立起世界最大的马铃薯辐照工厂</P></li>
								<li><P style="color:#bbb">1970年--FAO/IAEA/WHO的专家在日内瓦会议上确立食品辐照领域的国际计划（IFIP）</P></li>
								<li><P style="color:#bbb">1976年--联合国粮农组织认为五种辐照产品（即马铃薯、小麦、鸡肉、木瓜和草莓）是绝对安全的</P></li>
								<li><P style="color:#bbb">1978年--世界用于辐照消毒灭菌的60Co工厂有80家（其中60家用于医疗消毒）</P></li>
								<li><P style="color:#bbb">1980年--FAO/IAEA/WHO的会议认为，受辐照食品平均吸收剂量10千戈瑞（kGy）及以下，没有毒性危害，无必要再进行毒性试验</P></li>
								<li><P style="color:#bbb">1988年--世界用于辐照消毒灭菌的60Co工厂发展到182家，全世界辐照食品产量约50万吨</P></li>
								<li><P style="color:#bbb">1997年以后--WHO进一步废除10 kGy的上限量，国际食品法规委员会（CAC）相继提出辐照食品的通用标准及法规</P></li>
						    </ul>
						    <br/>
						
                            <h4><strong>国内</strong></h4>

						    <ul>
						        	<li><P style="color:#bbb">1958年--开始食品辐照研究工作</P></li>
							        <li><P style="color:#bbb">七十年代中期--国内多个地区相继进行辐照保藏食品的研究，辐照品种有肉类、水产品、水果、干果、蔬菜、粮食、蛋类等</P></li>
						            <li><P style="color:#bbb">八十年代--食品辐照已进入一定规模的生产阶段</P></li>	
						            <li><P style="color:#bbb">九十年代初--我国建成辐照装置近150多台，其中设计装机能量1.11×1016贝可以上的装置超过50座</P></li>	
						            <li><P style="color:#bbb">1984年～1997年--国家卫生部颁布的食品辐照卫生标准基本覆盖了绝大部份食品</P></li>
						    </ul>	
							<P>我国食品辐照不仅用于保藏、防疫、医疗等目的，而且已用于提高产品质量等加工目的。</P>	
		       			       			       			       	
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


