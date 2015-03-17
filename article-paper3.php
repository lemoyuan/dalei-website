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

						    <h2><strong>电真空器件的使用与维护</strong></h2>
                            <ul>
						        <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;王超其&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆锐锋</P>
						    </ul>
                            <div class="divider half-margins"><!-- divider -->
							    <i class="fa fa-star"></i>
						    </div>

					    	<ul>
						        <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大型电子管、电子枪等电真空器件是高功率直线电子加速器中的重要部件，其工作状态直接关系到电子加速器设备运行的稳定性、可靠性、效率和运行成本。而电真空器件又是有一定寿命的消耗性部件，价格昂贵，如何用好、维护好这些器件是技术维护工作中非常重要的一部分，这里面也有许多值得研究和探索的课题。</P>
						    </ul>

					        <br/>

						    <h4>&nbsp;&nbsp;&nbsp;&nbsp;<strong>工作状态的观察和调整</strong></h4>
						    </ul>
					    	<ul>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;每个电真空器件都有它特定的工作条件，例如速调管的灯丝电压电流、收集极电压电流、聚焦磁场线圈的电流，闸流管的氢发生器电压，充电控制电子管的灯丝电压和控制栅、帘栅极偏压等，可以通过这些工作参数变化情况来判断其工作状态和故障所在。电真空器件的性能指标通常都有一定的离散性，所以观察、分析、调整相当重要。我们曾发现用于主回路充电控制的大功率四极陶瓷管TM702FT更换后经常出现加速器输出束流往小的方向波动，速调管的收集极电流也在往小的方向变化，通过长期观察和分析，发现在供电电压稍有波动的情况下，电子管的灯丝电压也跟着变化（仅仅是0.1～0.2V的波动），这才注意到其灯丝电源（10V160A）是未经过稳压的，因为管子性能的离散性，对于这个管子来说，灯丝电压稍向下偏离便造成了阴极电子发射的不足，主充电回路压降增大，速调管高压减低，收集极电流减小，微波输出功率降低，引起加速器输出束流往小的方向变化。将灯丝电压略为调高，同时调整供电稳压电源的稳压范围，问题得到了解决。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平时可以通过观察溅射离子泵的工作电流来判断系统的真空度情况。一般在几个uA时说明真空度还是不错的。如果逐渐变大在几十到几百uA以上，那就基本可以肯定有地方漏气了。真空出问题是比较麻烦的，除了把系统拆开逐件用仪器检漏外，最常用的办法就是“怀疑部位涂有机溶剂法”。有机溶剂渗到微裂缝时能把漏气的通道暂时堵住，所以只要发现将溶剂涂到某处时离子泵的工作电流马上变小，便基本可以肯定此处就是漏点。我们有一次发现靠近电子枪部位的离子泵工作电流从平时的1～2uA慢慢增加到5～6uA，加速器的输出束流也在逐步变小，说明系统真空度变差，电子枪已轻度中毒，发射电流下降。当时我们仅化了2个小时就用上述方法找到了漏点并堵上，电子枪发射能力也在几十小时后慢慢恢复。还有一段时间我们发现每次开机前离子泵电流有数百uA，开机出束后泵电流渐渐变小，关机后又变大，初步分析是开机后温度升高物体膨胀使渗漏处裂缝变小减少了气体分子的渗漏量，如此快的温升最有可能就是出束时散射的低能电子打到漂移管壁上引起，结果在漂移管与法兰的焊接部位查到了漏点。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用真空封泥或硅橡胶修补堵漏的效果还是不错，两者抗辐射老化性能也都过得去，可以维持1年以上。</P>
						    </ul>

						    <br/>

                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;<strong>电子管外围电路的检查和改造</strong></h4>
						    </ul>
					    	<ul>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速器的脉冲高压调制部分电路复杂，有时因设计、工艺、元器件参数变化等原因会使电路工作不正常，这就需要在深入了解各种功能的电子管的基本工作原理的基础上进行分析，必要时对局部电路进行改造，使其工作在最佳状态。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有一段时间，我们发现闸流管触发电路中的快速可控硅经常发生“连通”（关不断），损坏率很高。通过分析闸流管的触发原理和触发电路，认为有两个原因引起，一是闸流管点火瞬间栅极高压尖脉冲未能滤除对触发可控硅造成冲击，二是小人工线负失配不够。将这部分电路元件全部拆下清洗检测，有些作了更换，加大小人工线第1节的电感，最后问题得到了彻底解决。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;对于有些易打火的高压部件，能将其置于绝缘油中是一劳永逸的办法。我们起初用的一台电子枪灯丝隔离变压器，其高压侧绕组原来用环氧树脂整体封固，使用中出现了环氧绝缘击穿而报废，后来改用多层厚有机玻璃做骨架，但仍经常发生爬电打火现象，以至打坏过多个电子枪。后来我们做了1个铁箱，将该隔离变压器放入其中并灌满25#变压器油，问题彻底得到了解决。</P>
					    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还有一次我们发现有一台加速器的充电波形上升沿的中部叠加有一簇毛刺（见图），一时怎么也找不到原因。后来也是通过仔细分析，根据毛刺出现位置正是充电电流最大、充电控制电子管又是增益很高的四极陶瓷发射管的情况来判断，很可能是大电流时某处压降产生的反馈引发高频自激，在该充电电子管的栅阴之间并一个电容，问题立即解决。</P>

						        <div class="row">
						            <div class="col-md-6 col-sm-6 col-xs-12">
						                <figure>
							                    <img class="img-responsive" src="assets/images/articles/electric-vacuum1.jpg" alt="大镭" />
						                </figure>
					                </div>

					                <div class="col-md-6 col-sm-6 col-xs-12">
						                <figure>
							                    <img class="img-responsive" src="assets/images/articles/electric-vacuum2.jpg" alt="大镭" />
						                </figure>
					                </div>
					            </div>
						        
                           	</ul>	

                           	<br/>
                           	
                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;<strong>电真空器件的更换和使用状态对寿命的影响</strong></h4>
                            <ul>
                              <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子管、电子枪都是有寿命的部件，技术维护人员必定要碰到更换这些器件的情况。大型电子管新启用时一般都要经过老练程序，像加速器电子枪还要经过激活程序。老练和激活做得好坏对以后的使用寿命是会有影响的。按照我们的经验，新管子第1次使用先尽量延长灯丝预热时间，然后分档逐步加高压，整个过程在数小时以上，目的是使管子内残余气体尽量吸附掉，有毛刺的被打火打掉。</P>
                              <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备用的新电子管不一定是可靠的，有时候因为储存的原因或时间长了真空度变化，会出现上去后短时间内报废的现象。尽管大型电子管有规定的保修期，但在没有第二个备管的情况下，必定是造成了设备停机事故，对有些应用单位来说会带来很大的损失。我们的经验是将工作一段时间的稳定工作的电子管换下作备份，有条件时再备一个新管，这样就可以做到万无一失。</P>
                              <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大型电子管阴极的工作状态对使用寿命的影响非常大。阴极冷态时电阻很小，如果一下子加足电压，冲击电流会导致阴极变形引发栅阴短路而使管子报废。一般设备中都有分档加灯丝电压的电路，如果能改成均匀缓慢升压加灯丝自然是最理想的。平时开机时尽管设备开机程序已设定15分钟就加足灯丝可以开高压，但我们坚持起码预热30分钟后再开高压，这对延长管子的寿命是有利的。如果关机时对大型电子管加“黑灯丝”，对延长管子阴极的寿命将会非常有利。</P>
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

				

