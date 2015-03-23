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

		                <h1>技术</h1>

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
						<div class="widget">

							<h4><strong>近期更新</strong></h4>

							<ul>
								<li><a href="article-paper3.php"><i class="fa fa-sign-out"></i>电真空器件的使用与维护 </a> <small></small></li>
								<li><a href="article-paper2.php"><i class="fa fa-sign-out"></i>工业辐照直线电子加速器技术维护要点与实践 </a> <small> </small></li>
								<li><a href="article-paper1.php"><i class="fa fa-sign-out"></i>食品与半导体辐照加工等行业对射线设备性能的要求 </a> <small></small></li>
							</ul>

						</div>
				    </aside>

                    <div class="col-md-9" style="padding:20px">
				    	<div class="col-md-12">

						    <h2><strong>工业辐照直线电子加速器技术维护要点与实践（节选）</strong></h2>
                            <ul>
						        <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大镭加速器研发中心&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;王超其&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆锐锋</P>
						    </ul>
                            <div class="divider half-margins"><!-- divider -->
							    <i class="fa fa-star"></i>
						    </div>

					    	<ul>
						        <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;根据工业辐照直线电子加速器系统特点和工作条件的特殊性，分析了技术维护工作中应注意的要点与常见故障的排除方法，提出了保障其安全可靠运行的几项技术维护和改造措施。</P>
						    </ul>

					        <br/>

						    <h4>&nbsp;&nbsp;&nbsp;&nbsp;<strong>真空系统常见故障与解决办法</strong></h4>
						    </ul>
					    	<ul>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器必须在高真空条件下运行，要求真空度要达到1×10-8Pa左右，平时由数个溅射离子泵维持其需要的真空度。由于连接部件多，形状复杂，以及材料缺陷等原因，真空系统的故障随时都有可能出现，而且一旦真空出现问题，查找起来非常困难。真空系统容易出问题的是焊接部位，两个厚薄不一的部件如厚法兰与薄壁管焊接时，不管用氩弧焊还是电弧焊，都存在受热不匀冷却后在材料内部残留内应力的问题。这种情况开始用仪器检漏都检不出来，但随着使用时间的增加，设备开关机多次重复温差变化，就有可能产生细微裂缝而导致系统真空变坏。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平时可以通过观察溅射离子泵的工作电流来判断系统的真空度情况。一般在几个uA时说明真空度还是不错的。如果逐渐变大在几十到几百uA以上，那就基本可以肯定有地方漏气了。真空出问题是比较麻烦的，除了把系统拆开逐件用仪器检漏外，最常用的办法就是“怀疑部位涂有机溶剂法”。有机溶剂渗到微裂缝时能把漏气的通道暂时堵住，所以只要发现将溶剂涂到某处时离子泵的工作电流马上变小，便基本可以肯定此处就是漏点。我们有一次发现靠近电子枪部位的离子泵工作电流从平时的1～2uA慢慢增加到5～6uA，加速器的输出束流也在逐步变小，说明系统真空度变差，电子枪已轻度中毒，发射电流下降。当时我们仅化了2个小时就用上述方法找到了漏点并堵上，电子枪发射能力也在几十小时后慢慢恢复。还有一段时间我们发现每次开机前离子泵电流有数百uA，开机出束后泵电流渐渐变小，关机后又变大，初步分析是开机后温度升高物体膨胀使渗漏处裂缝变小减少了气体分子的渗漏量，如此快的温升最有可能就是出束时散射的低能电子打到漂移管壁上引起，结果在漂移管与法兰的焊接部位查到了漏点。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用真空封泥或硅橡胶修补堵漏的效果还是不错，两者抗辐射老化性能也都过得去，可以维持1年以上。</P>   
						    </ul>

						    <br/>

                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;<strong>高压系统的维护</strong></h4>
						    </ul>
					    	<ul>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器系统离不开高压，通常电子枪上就加有几十KV的高压，脉冲调制器中的充放电回路也有一、二十KV以上的高压，速调管上更是加有一百二、三十KV以上的高压。任何设备中高电压、大电流部位历来都是技术维护保养的重点，对于加速器来说也不例外。高压部位最常见的故障现象便是打火，有时候甚至会出现炸雷一样的打火声，且很难找到打火的地方和原因，重复出现打火故障时往往打火点也不在同一处。高压打火的原因通常有绝缘和某些部件故障引起。我们曾遇到过因充电电感绝缘子问题以及高压过荷保护电路同时故障引起的调制器内到处打火并打坏许多零件的现象。也有闸流管到寿命失效引起的机架内到处打火的现象。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高压系统的维护重点是清洁、环境与绝缘处理。设备运行期间空气中的灰尘会逐渐沉积在各高压部件的表面，受潮后很容易引起高压拉弧；另外，去电子枪的是直流高压，在潮湿的空气环境中很容易产生电化学作用而腐蚀接点、吸附灰尘和潮气。因此，要防止高压系统的故障，必须做到勤维护，保持高压绝缘零件表面的清洁；机房环境尽量做到干净、密闭、干燥。设备关机后在高压部位加红外线灯泡烘烤是个有效的办法，可以防止高压部件表面结露引发爬电打火。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;对于有些易打火的高压部件，能将其置于绝缘油中是一劳永逸的办法。我们起初用的一台电子枪灯丝隔离变压器，其高压侧绕组原来用环氧树脂整体封固，使用中出现了环氧绝缘击穿而报废，后来改用多层厚有机玻璃做骨架，但仍经常发生爬电打火现象，以至打坏过多个电子枪。后来我们做了1个铁箱，将该隔离变压器放入其中并灌满25#变压器油，问题彻底得到了解决。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在脉冲变压器内部，有供速调管工作的125KV高压，尽管所有部件都是浸在变压器油中，但还会有打火的可能。平时可以用手电筒从脉冲变压器观察窗照进去观察，如果发现有黑褐色絮状物附着在绕组上，或发现油液浑浊，就可以基本肯定脉冲变压器内部有打火现象。我们曾好几次发现过脉冲变压器内部环氧层压板支架夹层内打火烧焦的故障，起初不严重时很难发现，仅感觉油液中有烟灰，后来严重时就出现了高压过荷，将脉冲变压器吊出来切除打坏的环氧板才使故障排除。</P>
                           	</ul>	

                           	<br/>
                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;<strong>结束语</strong></h4>
                            <ul>
                              <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器系统组成复杂，通常又属于研制类的装置，使用初期可能会暴露出一些问题，故障率也许会比较高。作为应用单位的技术维护工程师，应该在充分了解系统工作原理的基础上，运用专业基础知识，排除故障，分析原因，逐步地予以完善提高，使设备达到比较理想的工作状态，大型电真空器件的寿命也尽量得以延长，大幅度节约运行成本。多年来，我们遵循了这一指导思想，逐步解决加速器运行过程中出现的各类问题，科学细致地做好技术维护工作，使设备运行渐趋向于正常、安全、稳定的状态，也有过盛夏季节机房温度33℃的条件下连续开机400多小时的记录；应用国产电子枪寿命达到了10000小时以上，应用国产速调管寿命达到7000～10000小时，应用国产的闸流管寿命达到4000～5000小时。</P>
                           	</ul>	
                           	
                            <div class="row bs-callout" style="background-color:#05173b; margin-bottom:0px"><!-- divider -->
						    	<div class="text-center">
							    <h4 class="padding20"><i class="fa fa-hand-o-right" style="color:#36a0da"></i>声明：公司技术指导性文章，供学习和交流使用，引用请注明出处</h4>
							</div>
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
