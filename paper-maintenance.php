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

							<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i>搜索</label>

					         	<form method="get" action="#" class="input-group">
								<input type="text" class="form-control" name="k" id="k" value="" placeholder="search..." />
								<span class="input-group-btn">
									<button class="btn btn-primary"><i class="fa fa-search"></i></button>
								</span>
							</form>
                                                        </br>
						</div>

						<div class="widget">

							<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>近期更新</label>

							<ul>
								<li><a href="article-paper3.php"><i class="fa fa-sign-out"></i>电真空器件的使用与维护 </a> <small></small></li>
								<li><a href="article-paper2.php"><i class="fa fa-sign-out"></i>工业辐照直线电子加速器技术维护要点与实践 </a> <small> </small></li>
								<li><a href="article-paper1.php"><i class="fa fa-sign-out"></i>食品与半导体辐照加工等行业对射线设备性能的要求 </a> <small></small></li>
							</ul>
                                                       </br>

						</div>

                                                 <div class="niu2-right-container">
                                                     <div id="niu2-sidebar-meta" class="niu2-sidebar">
                                                          <div class="niu2-sidebar-label"><i class="icon-book"></i>分类:</div>
                                                          <div class="niu2-sidebar-value">技术</div>
                                                     </div>

                                                     <div id="niu2-sidebar-toc" class="niu2-sidebar" data-status="closed">
                                                          <div class="niu2-sidebar-label">
                                                               <i id="niu2-sidebar-toc-ctrl" class="icon-open-tocs"></i>目录
                                                          </div>
                                                          <ol id="niu2-sidebar-toc-list">
                                                              <li><a href="#content-heading">摘要</a></li>
                                                              <li><a href="#chart1">前言</a></li>
                                                              <li><a href="#chart2">真空系统常见故障与解决办法</a></li>
                                                              <li><a href="#chart3">高压系统的维护</a></li>
                                                              <li><a href="#chart4">电真空器件的使用与维护</a>
                                                                  <ol><li><a href="#chart4-section1">工作状态的观察和调整</a></li>
                                                                     <li><a href="#chart4-section2">电子管外围电路的检查和改造</a></li>
                                                                     <li><a href="#chart4-section3">电真空器件的更换和使用状态对寿命的影响</a></li>
                                                                  </ol>
                                                              </li>
                                                              <li><a href="#chart5">其他应注意维护保养的部位</a>
                                                                  <ol><li><a href="#chart5-section1">大电流接点的维护</a></li>
                                                                     <li><a href="#chart5-section2">辐射环境中设备和部件的维护</a></li>
                                                                     <li><a href="#chart5-section3">配套系统的维护</a></li>
                                                                  </ol>
                                                              </li>
                                                              <li><a href="#chart6">局部电路改造和元器件更换</a></li>
                                                              <li><a href="#chart7">结束语</a></li>
                                                          </ol>

                                                          <div><a href="tech-garden.php"><i class="fa fa-rotate-left"></i>返回前一页</a></div>
                                                      </div>

                                                 </div>
				    </aside>

                                         <div class="col-md-9" style="padding:20px">
				    	<div class="body-content">
                                                   <div><h2>工业辐照直线电子加速器技术维护要点与实践</h2></div>

                                                   <div id="niu2-left-container">
                                                        <div id="niu2-main-content">
						      <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大镭加速器研发中心&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;王超其&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆锐锋</P>

                                                             <div class="divider half-margins"><!-- divider -->
							  <i class="fa fa-star"></i>
						      </div>

						      <P style="color:#bbb"><h4 id="content-heading"  style="color:#ffe100">[摘要]</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;根据工业辐照直线电子加速器系统特点和工作条件的特殊性，分析了技术维护工作中应注意的要点与常见故障的排除方法，提出了保障其安全可靠运行的几项技术维护和改造措施。</P>
                                                             <P style="color:#bbb"><label style="color:#ffe100">[关键词]</label>&nbsp;&nbsp;电子加速器  技术维护  电真空器件 </p>

                                                             <h3 id="chart1"><strong>前言</strong></h3>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;应用于食品、医疗用品辐照灭菌和其他大剂量、连续工作用途的直线电子加速器，由于输出束功率大、连续工作时间长、系统复杂，技术维护工作稍有不慎，便有可能产生重大故障。况且，直线电子加速器系统牵涉多方面的专业，技术上实现的方法多种多样，工作状态和环境也各不相同，又很少有综合性的技术维护方面的资料可供参考，故障停机时如未能及时修复后果影响严重，维护工作的难度可想而知。</p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;根据我们多年来在电子加速器技术维护过程中所碰到的各种问题以及维修、局部改造经验，在对整个系统深入了解的基础上，分门别类有针对性地实施技术维护工作，防患于未然，是能够掌握主动权，保证设备安全可靠运行的。即使出现故障，也能很快找到问题所在，快速排除。对于速调管、电子枪等大型电真空器件，注意其合适的工作条件和维护措施，还能大幅度提高其工作寿命，节约可观的运行成本。</p>


						      <h3 id="chart2"><strong>真空系统常见故障与解决办法</strong></h3>

					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器必须在高真空条件下运行，要求真空度要达到1×10-8Pa左右，平时由数个溅射离子泵维持其需要的真空度。由于连接部件多，形状复杂，以及材料缺陷等原因，真空系统的故障随时都有可能出现，而且一旦真空出现问题，查找起来非常困难。真空系统容易出问题的是焊接部位，两个厚薄不一的部件如厚法兰与薄壁管焊接时，不管用氩弧焊还是电弧焊，都存在受热不匀冷却后在材料内部残留内应力的问题。这种情况开始用仪器检漏都检不出来，但随着使用时间的增加，设备开关机多次重复温差变化，就有可能产生细微裂缝而导致系统真空变坏。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平时可以通过观察溅射离子泵的工作电流来判断系统的真空度情况。一般在几个uA时说明真空度还是不错的。如果逐渐变大在几十到几百uA以上，那就基本可以肯定有地方漏气了。真空出问题是比较麻烦的，除了把系统拆开逐件用仪器检漏外，最常用的办法就是“怀疑部位涂有机溶剂法”。有机溶剂渗到微裂缝时能把漏气的通道暂时堵住，所以只要发现将溶剂涂到某处时离子泵的工作电流马上变小，便基本可以肯定此处就是漏点。我们有一次发现靠近电子枪部位的离子泵工作电流从平时的1～2uA慢慢增加到5～6uA，加速器的输出束流也在逐步变小，说明系统真空度变差，电子枪已轻度中毒，发射电流下降。当时我们仅化了2个小时就用上述方法找到了漏点并堵上，电子枪发射能力也在几十小时后慢慢恢复。还有一段时间我们发现每次开机前离子泵电流有数百uA，开机出束后泵电流渐渐变小，关机后又变大，初步分析是开机后温度升高物体膨胀使渗漏处裂缝变小减少了气体分子的渗漏量，如此快的温升最有可能就是出束时散射的低能电子打到漂移管壁上引起，结果在漂移管与法兰的焊接部位查到了漏点。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用真空封泥或硅橡胶修补堵漏的效果还是不错，两者抗辐射老化性能也都过得去，可以维持1年以上。</P>   

                                                             <h3 id="chart3"><strong>高压系统的维护</strong></h3>

					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器系统离不开高压，通常电子枪上就加有几十KV的高压，脉冲调制器中的充放电回路也有一、二十KV以上的高压，速调管上更是加有一百二、三十KV以上的高压。任何设备中高电压、大电流部位历来都是技术维护保养的重点，对于加速器来说也不例外。高压部位最常见的故障现象便是打火，有时候甚至会出现炸雷一样的打火声，且很难找到打火的地方和原因，重复出现打火故障时往往打火点也不在同一处。高压打火的原因通常有绝缘和某些部件故障引起。我们曾遇到过因充电电感绝缘子问题以及高压过荷保护电路同时故障引起的调制器内到处打火并打坏许多零件的现象。也有闸流管到寿命失效引起的机架内到处打火的现象。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高压系统的维护重点是清洁、环境与绝缘处理。设备运行期间空气中的灰尘会逐渐沉积在各高压部件的表面，受潮后很容易引起高压拉弧；另外，去电子枪的是直流高压，在潮湿的空气环境中很容易产生电化学作用而腐蚀接点、吸附灰尘和潮气。因此，要防止高压系统的故障，必须做到勤维护，保持高压绝缘零件表面的清洁；机房环境尽量做到干净、密闭、干燥。设备关机后在高压部位加红外线灯泡烘烤是个有效的办法，可以防止高压部件表面结露引发爬电打火。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;对于有些易打火的高压部件，能将其置于绝缘油中是一劳永逸的办法。我们起初用的一台电子枪灯丝隔离变压器，其高压侧绕组原来用环氧树脂整体封固，使用中出现了环氧绝缘击穿而报废，后来改用多层厚有机玻璃做骨架，但仍经常发生爬电打火现象，以至打坏过多个电子枪。后来我们做了1个铁箱，将该隔离变压器放入其中并灌满25#变压器油，问题彻底得到了解决。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在脉冲变压器内部，有供速调管工作的125KV高压，尽管所有部件都是浸在变压器油中，但还会有打火的可能。平时可以用手电筒从脉冲变压器观察窗照进去观察，如果发现有黑褐色絮状物附着在绕组上，或发现油液浑浊，就可以基本肯定脉冲变压器内部有打火现象。我们曾好几次发现过脉冲变压器内部环氧层压板支架夹层内打火烧焦的故障，起初不严重时很难发现，仅感觉油液中有烟灰，后来严重时就出现了高压过荷，将脉冲变压器吊出来切除打坏的环氧板才使故障排除。</P>

					    	      <h3 id="chart4"><strong>电真空器件的使用与维护</strong></h3>

					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大型电子管、电子枪等电真空器件是高功率直线电子加速器中的重要部件，其工作状态直接关系到电子加速器设备运行的稳定性、可靠性、效率和运行成本。而电真空器件又是有一定寿命的消耗性部件，价格昂贵，如何用好、维护好这些器件是技术维护工作中非常重要的一部分，这里面也有许多值得研究和探索的课题。</p>

                                                             <h4 id="chart4-section1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>工作状态的观察和调整</strong></h4>

					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;每个电真空器件都有它特定的工作条件，例如速调管的灯丝电压电流、收集极电压电流、聚焦磁场线圈的电流，闸流管的氢发生器电压，充电控制电子管的灯丝电压和控制栅、帘栅极偏压等，可以通过这些工作参数变化情况来判断其工作状态和故障所在。电真空器件的性能指标通常都有一定的离散性，所以观察、分析、调整相当重要。我们曾发现用于主回路充电控制的大功率四极陶瓷管TM702FT更换后经常出现加速器输出束流往小的方向波动，速调管的收集极电流也在往小的方向变化，通过长期观察和分析，发现在供电电压稍有波动的情况下，电子管的灯丝电压也跟着变化（仅仅是0.1～0.2V的波动），这才注意到其灯丝电源（10V160A）是未经过稳压的，因为管子性能的离散性，对于这个管子来说，灯丝电压稍向下偏离便造成了阴极电子发射的不足，主充电回路压降增大，速调管高压减低，收集极电流减小，微波输出功率降低，引起加速器输出束流往小的方向变化。将灯丝电压略为调高，同时调整供电稳压电源的稳压范围，问题得到了解决。</p>

                                                             <h4 id="chart4-section2">&nbsp;&nbsp;&nbsp;&nbsp;<strong>电子管外围电路的检查和改造</strong></h4>

					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速器的脉冲高压调制部分电路复杂，有时因设计、工艺、元器件参数变化等原因会使电路工作不正常，这就需要在深入了解各种功能的电子管的基本工作原理的基础上进行分析，必要时对局部电路进行改造，使其工作在最佳状态。</p>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有一段时间，我们发现闸流管触发电路中的快速可控硅经常发生“连通”（关不断），损坏率很高。通过分析闸流管的触发原理和触发电路，认为有两个原因引起，一是闸流管点火瞬间栅极高压尖脉冲未能滤除对触发可控硅造成冲击，二是小人工线负失配不够。将这部分电路元件全部拆下清洗检测，有些作了更换，加大小人工线第1节的电感，最后问题得到了彻底解决。</p>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还有一次我们发现有一台加速器的充电波形上升沿的中部叠加有一簇毛刺（见图），一时怎么也找不到原因。后来也是通过仔细分析，根据毛刺出现位置正是充电电流最大、充电控制电子管又是增益很高的四极陶瓷发射管的情况来判断，很可能是大电流时某处压降产生的反馈引发高频自激，在该充电电子管的栅阴之间并一个电容，问题立即解决。</p>

                                                             <div class="row">
						            <div class="col-md-6 col-sm-6 col-xs-12">
						                <figure>
							                    <img class="img-responsive" src="assets/images/articles/electric-vacuum1.jpg" alt="直线电子加速器辐照加工应用大镭核技术成套设备" />
						                </figure>
                                                                       <div class="text-center"><label>图a. 故障时充电波形</label></div>   
					                     </div>

					                     <div class="col-md-6 col-sm-6 col-xs-12">
						                <figure>
							                    <img class="img-responsive" src="assets/images/articles/electric-vacuum2.jpg" alt="直线电子加速器辐照加工应用大镭核技术成套设备" />
						                </figure>
                                                                       <div class="text-center"><label>图b. 故障排除后正常充电波形</label></div>   
					                     </div>
					               </div>

                                                             <h4 id="chart4-section3">&nbsp;&nbsp;&nbsp;&nbsp;<strong>电真空器件的更换和使用状态对寿命的影响</strong></h4>

					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子管、电子枪都是有寿命的部件，技术维护人员必定要碰到更换这些器件的情况。大型电子管新启用时一般都要经过老练程序，像加速器电子枪还要经过激活程序。老练和激活做得好坏对以后的使用寿命是会有影响的。按照我们的经验，新管子第1次使用先尽量延长灯丝预热时间，然后分档逐步加高压，整个过程在数小时以上，目的是使管子内残余气体尽量吸附掉，有毛刺的被打火打掉。</p>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备用的新电子管不一定是可靠的，有时候因为储存的原因或时间长了真空度变化，会出现上去后短时间内报废的现象。尽管大型电子管有规定的保修期，但在没有第二个备管的情况下，必定是造成了设备停机事故，对有些应用单位来说会带来很大的损失。我们的经验是将工作一段时间的稳定工作的电子管换下作备份，有条件时再备一个新管，这样就可以做到万无一失。</p>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大型电子管阴极的工作状态对使用寿命的影响非常大。阴极冷态时电阻很小，如果一下子加足电压，冲击电流会导致阴极变形引发栅阴短路而使管子报废。一般设备中都有分档加灯丝电压的电路，如果能改成均匀缓慢升压加灯丝自然是最理想的。平时开机时尽管设备开机程序已设定15分钟就加足灯丝可以开高压，但我们坚持起码预热30分钟后再开高压，这对延长管子的寿命是有利的。如果关机时对大型电子管加“黑灯丝”，对延长管子阴极的寿命将会非常有利。</p>

					    	      <h3 id="chart5"><strong>其他应注意维护保养的部位</strong></h3>

					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器是一个多专业技术集成的大系统，技术维护中有很多细节问题还是要注意的，有时稍有疏忽就会酿成大的故障。</p>
 
                                                             <h4 id="chart5-section1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>大电流接点的维护</strong></h4>
   				    	               <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器耗电在几十到几百KVA以上，有许多要通过大电流的连接点，如果接触点结合不紧产生接触电阻，便有电压降引起发热，发热的接点进一步增大了接触电阻，于是发热功率更大，最后导致接点烧毁、起火等大事故。速调管的磁场线圈如果断电在毫秒级的时间内就可以烧坏管子造成重大事故。所以加速器中的电源部分、各变压器接线头、聚焦磁场线圈的接头等都是要重点监控的。常用的办法是在接头处涂点油漆，有点发热便可以闻到焦味。或者用红外测温枪定期测量各接点温度。</p>

                                                             <h4 id="chart5-section2">&nbsp;&nbsp;&nbsp;&nbsp;<strong>辐射环境中设备和部件的维护</strong></h4>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;辐照室的环境是及其恶劣的，不仅有强烈的电离辐射，而且有害气体浓度高、电磁环境恶劣。辐照室中的开关、按钮、继电器及电子元器件没多长时间便要烂掉、失效，所以辐照室中尽量不要有电气控制部件，机械部件尽量采用不锈钢材料。电机和输送机中的轴承中的润滑脂在射线的作用下很容易分解，所以要经常检查，如果风机等设备在运转时噪声增大，就要及时更换轴承，设备工作时钛窗散热风机一旦停转后果将会非常严重；辐照室内的导线也要经常检查定期更换，否则极易因电线绝缘烂掉引起短路故障。</p>

                                                             <h4 id="chart5-section3">&nbsp;&nbsp;&nbsp;&nbsp;<strong>配套系统的维护</strong></h4>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速器中大型电子管等部件的散热、加速管的恒温控制等都离不开多种多样的水泵、风机、管道流量计，这些部件的维护同样重要。液体的流量计内部通常用小永久磁铁取样，时间一长就会因磁铁烂掉而失效或卡住，管道的接头时间长了有漏水的可能，如果漏水进到脉冲变压器的油箱里面麻烦就会非常大，所以维护工作相当重要。多装一些温度探头和流量控制保护开关是大有好处的，可以根据设备工作时某些部位的温度变化趋向判断设备的工作状况，防患与未然。</p>
 
                                                             <h3 id="chart6"><strong>局部电路改造和元器件更换</strong></h3>

                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器不同于工厂流水线生产的成熟的电子产品，设计和工艺方面的缺陷在所难免，对于使用者来说，为了能使设备安全可靠工作，发现问题及时进行局部改造或更换元器件也是很必要的。</p>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大型的电子设备中都有许多不同电压的直流电源供各电路单元工作，很多设备中都采用了那种方形外壳环氧灌封的硅整流桥堆。根据我们的经验，这种桥堆在使用中出故障的概率非常高，所以如果发现设备中有这种桥堆还是趁早换掉为好。事实证明根据需要的耐压和电流用4个金属壳整流二机管搭成桥式整流电路是非常可靠的。</p>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们在使用的这套设备过去经常发现输出束流缓慢变化波动的现象，通过观察和电路分析，发现高压脉冲和微波脉冲的同步有问题。分析电路后发现两者都是由同步脉冲各自延时几十μs后触发的，由于RC延时电路的不稳定性造成了两个脉冲同步上的偏差。我们把电路改成高压脉冲由微波脉冲延时0.5μs触发，同步关系得到了稳定的保持，改装后设备输出束流一直来非常稳定。</p>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加速器许多线路中走的是脉冲直流信号，由于我们靠近海边空气潮湿且含有盐分，容易使接插件部分产生电化学作用而接触不良，这也是一个非常头疼的问题，后来只能在接插件两端焊跳线解决问题。</p>

                                                             <h4 id="chart7">结束语</strong></h4>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器系统组成复杂，通常又属于研制类的装置，使用初期可能会暴露出一些问题，故障率也许会比较高。作为应用单位的技术维护工程师，应该在充分了解系统工作原理的基础上，运用专业基础知识，排除故障，分析原因，逐步地予以完善提高，使设备达到比较理想的工作状态，大型电真空器件的寿命也尽量得以延长，大幅度节约运行成本。多年来，我们遵循了这一指导思想，逐步解决加速器运行过程中出现的各类问题，科学细致地做好技术维护工作，使设备运行渐趋向于正常、安全、稳定的状态，也有过盛夏季节机房温度33℃的条件下连续开机400多小时的记录；应用国产电子枪寿命达到了10000小时以上，应用国产速调管寿命达到7000～10000小时，应用国产的闸流管寿命达到4000～5000小时。</p>
                           
                                                             <div class="row bs-callout" style="background-color:#05173b; margin-bottom:0px"><!-- divider -->
						    	<div class="text-center">
							    <h4 class="padding20"><i class="fa fa-hand-o-right" style="color:#36a0da"></i>声明：供学习和交流使用，引用请注明出处</h4>
							</div>
					              </div>
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
    <script type="text/javascript">
            onContentLoaded();
    </script>


		
	</body>
</html>
