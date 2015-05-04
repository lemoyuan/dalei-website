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
                                                          <div class="niu2-sidebar-value">论文</div>
                                                          <div class="niu2-sidebar-label"><i class="icon-tag"></i>关键词:</div>
                                                          <div class="niu2-sidebar-inter-value niu2-sidebar-tag">射线设备</div>
                                                          <div class="niu2-sidebar-inter-value niu2-sidebar-tag">辐照</div>
                                                          <div class="niu2-sidebar-inter-value niu2-sidebar-tag">剂量</div>
                                                          <div class="niu2-sidebar-inter-value niu2-sidebar-tag">灭菌</div>
                                                     </div>

                                                     <div id="niu2-sidebar-toc" class="niu2-sidebar" data-status="closed">
                                                          <div class="niu2-sidebar-label">
                                                               <i id="niu2-sidebar-toc-ctrl" class="icon-open-tocs"></i>目录
                                                          </div>
                                                          <ol id="niu2-sidebar-toc-list">
                                                              <li><a href="#content-heading">摘要</a></li>
                                                              <li><a href="#chart1">前言</a></li>
                                                              <li><a href="#chart2">射线产生装置及剂量分布要求</a>
                                                                  <ol><li><a href="#chart2-section1">射线产生装置及剂量分布要求</a>
                                                                  <li><a href="#chart2-section2">被照射物体内剂量分布情况分析</a></ol>
                                                              </li>
                                                              <li><a href="#chart3">试验方法与过程</a>
                                                                 <ol><li><a href="#chart3-section1">试验样本制作</a>
                                                                 <li><a href="#chart3-section2">试验方法</a></ol>
                                                              </li>
                                                              <li><a href="#chart4">主观评价测试</a>
                                                                 <ol><li><a href="#chart4-section1">主观评价方法</a>
                                                                 <li><a href="#chart4-section2">测试结果及分析</a></ol>
                                                              </li>
                                                              <li><a href="#chart5">微生物检测与分析</a>
                                                                 <ol><li><a href="#chart5-section1">微生物培养试验</a>
                                                                 <li><a href="#chart5-section2">数据分析</a></ol>
                                                              </li>
                                                              <li><a href="#chart6">结论</a></li>

                                                          </ol>

                                                          <div><a href="tech-garden.php"><i class="fa fa-rotate-left"></i>返回前一页</a></div>
                                                      </div>

                                                 </div>
				     </aside>

                                         <div class="col-md-9" style="padding:20px">
				    	<div class="body-content">
                                                   <div><h2>高能量β射线设备与海鲜食品高剂量辐照试验</h2></div>

                                                   <div id="niu2-left-container">
                                                        <div id="niu2-main-content">
						      <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大镭加速器研发中心&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;王超其&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆锐锋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;欧阳家祥&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;成军</P>
	
                                                             <div class="divider half-margins"><!-- divider -->
						           <i class="fa fa-star"></i>
						      </div>
					    	   
						      <P style="color:#bbb"><h4 id="content-heading"  style="color:#ffe100">[摘要]</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;按使用需求研制高剂量率辐照射线设备，对几种精加工高水分即食海鲜食品用β射线进行高剂量辐照试验，通过主观评价加权平均和计量测试结果表明，高达25kGy剂量辐照高水分海鲜食品并不对其食用性和风味带来明显的影响，各类微生物可以有效杀灭，能达到常温下长期保存的效果。专用的射线设备结合高剂量辐照工艺，有助于推出不同于传统灭菌保鲜的新型即食海鲜食品产品。</P>
                                                             <P style="color:#bbb"><label style="color:#ffe100">[关键词]</label>&nbsp;&nbsp;射线设备  辐照  剂量  灭菌 </p>

						      <h3 id="chart1"><strong>前言</strong></h3>
						 
					               <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;现在的食品类产品的辐照加工，大多是为了延长保质期，辐照剂量控制在10kGy以下，少见有高剂量彻底灭菌的产业化的辐照加工。对于高水分的需长期保存的食品罐头类产品，还是在采用传统的高温灭菌的方法。高温或巴氏杀菌法很难彻底灭菌，有些只能添加防腐剂，影响食品安全。另外，高温灭菌影响许多食品的口味，对于鲜嫩的高蛋白海鲜类产品，通过高温或巴氏杀菌后风味尽失，所以市场上少见海鲜罐头与其他软包装鲜食类产品。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;射线辐照灭菌是一种新的常温灭菌的加工方法，能最大限度保留食品原有风味。但如果采用放射源60Co辐照，也会因剂量率低辐照时间过长引起被辐照食品的变色并产生较为严重的“辐照味”。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;近几年，电子直线加速器取代60Co放射源用于工业辐照，技术上已逐步成熟。如何利用电子直线加速器输出能量高、射线集中、剂量率高的特点，对某些食品进行高剂量辐照加工试验，研究分析其灭菌效果和对食品理化及感官性状影响，推出一些避免高温工序的、保留特色风味的食品新产品，是一件十分有意义的工作。</P> 
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;射线辐照食品所需的剂量与食品原始的菌落总数、细菌种类、食品的性质、保质期要求和保存环境都有很大关系。对于含水高的如真空包装的泡椒凤爪、鱼糜制品、熟制鱼肉，尽管成品的菌落总数较低，但为了不依赖“冷链”常温保存，通常需要通过20kGy以上的剂量辐照才能达到完全无菌的水平，远超过目前国内相关规定10kGy的水平。高剂量辐照对食品带来的影响究竟如何，目前国内还缺少这方面的研究。1999年，联合国粮农组织（FAO）、世界卫生组织（WHO）、国际原子能机构（IAEA）的“辐照食品安全性联合专家委员会”根据多年评估研究对该委员会在1980年发布的总体平均剂量 10kGy以下辐照食品无害的结论作了补充，宣告超过10kGy高剂量辐射也是安全的[6]。2003年7月国际食品法典委员会（CAC）通过了修订后的《辐照食品国际通用标准》和《食品辐照加工工艺国际推荐准则》，从法规上突破了辐照食品10KGy剂量的限制[7]。说明食品通过高剂量辐照后安全性不用担心，但其他诸如食品的保存期、风味、色泽、外观影响如何仍是需要研究的。</P>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们用10MeV能量、8KW束功率的电子直线加速器作为射线源，用舟山海域出产的新鲜漂汤贻贝肉及真空包装熟制鲜鱼肉制品作为主要的试验样本，进行了15kGy到25kGy剂量的辐照处理试验，分别作微生物培养试验和多项目主观评审，对各种结果进行分析和比较，得出的实验数据对开发深度灭菌即食海鲜产品具有实际指导意义。</P>
						  
                                                             <h3 id="chart2"><strong>射线产生装置及剂量分布要求</strong></h3>

                                                             <h4 id="chart2-section1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>高剂量辐照对射线装置的要求</strong></h4>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;放射源60Co装置用于海产品高剂量辐照是不适宜的，主要是60Co装置γ射线剂量率低，需要辐照的时间长，而海鲜产品肉质鲜嫩颜色白净容易变质和辐照变色，且易产生“辐照味”，影响食品感官性能。另外，建60Co辐照装置投入大，审批困难，海鲜产品辐照货源不稳定，普及应用比较困难。所以，目前最合适的射线产生装置还是能产生高能量β射线的电子直线加速器。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器输出能量集中，辐照效率高，能够以较快的速度实施高剂量辐照。食品辐照允许射线最高能量为10MeV。不同于γ射线的是，10MeV能量的β射线在密度为1的物体中理论穿透深度约为5CM，实际大约在4.5CM，通常的小包装食品需双向照射才能达到均匀的剂量。被照射物体接受剂量的均匀度同时也取决于射线能谱的分布情况，所以对加速器输出束流波形前后沿时间都有比较高的要求。</P>
					               <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们采用浙江大镭核技术应用设备有限公司研发制造DL-Ⅱ型直线加速器作为射线源，主要特点为模块化组合的整机型的设备，方便安装使用，智能化程度高，便于剂量、能量、扫描均匀度的调整控制。主要技术指标为：
                                                                <ul>
                                                                   <li>输出电子束能量：10MeV</li>
                                                                   <li>输出电子束功率：8kW</li>
                                                                   <li>扫描宽度：300～800mm可调</li>
                                                                   <li>能量不稳定度：≤2%</li>
                                                                   <li>束流不稳定度：≤5%</li>
                                                                   <li>扫描不均匀度：≤5%</li>
                                                                </ul>
                                                             </P>

                                                             <h4 id="chart2-section2">&nbsp;&nbsp;&nbsp;&nbsp;<strong>被照射物体内剂量分布情况分析</strong></h4>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;剂量在物体深度的分布情况是我们所关心的，否则就有可能因为剂量分布的不均匀而使实验数据不准。</p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;按GB/T 16841-1997 电子束辐射加工装置剂量学导则，在均质物体中不同深度剂量分布情况如图1。  </p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;从图中可以看出，β射线单向照射从表面到最佳深度，剂量不均匀度；弥补的办法是双向照射，单次深度取，剂量不均匀度可以减到1.1。 </p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高水分海鲜产品通常浸泡在汤中，按密度等于1来考虑。10MeVβ射线的作用深度可以根据GB/T15447-95中的计算公式 Ep = 0.22 + 1.9Rp + 0.0025 (Rp ^ 2),推出≈5.18cm，≈4.5CM。</p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;对于罐装海鲜食品和真空包装鲜鱼肉类产品，装箱时控制总高度8～9CM，双向照射，可望获得较为均匀的剂量吸收。</p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;射线作用于物体，是以电子射线束横向扫描、物体纵向均匀移动的方式进行的。根据物体吸收剂量单位定义，1，在已知电子束射线的能量、功率、扫描宽度的条件下，容易求得匀速移动物体所接受的剂量。为使实验样品所接受的剂量尽量均匀，将实验样品置于横向尺寸小于射线扫描幅度1/3的盒子中以减少扫描不均匀带来的影响。 </p>

                                                             <h3 id="chart3"><strong>试验方法与过程</strong></h3>

                                                             <h4 id="chart3-section1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>试验样本制作</strong></h4>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;将洗净泥沙、漂汤预煮到两壳张开的紫壳贻贝肉摘下放入70～80℃水中烫洗1次，沥水装PET透明塑料瓶，再加2%的盐水作汤汁，部分试样拌番茄酱、辣油等作对比。用0.2铝箔热熔封装再加螺旋瓶盖。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;工厂铝箔袋真空封装鲜鱼肉产品，经高温灭菌处理，作不同条件试验样本。</p>

                                                             <h4 id="chart3-section2">&nbsp;&nbsp;&nbsp;&nbsp;<strong>试验方法</strong></h4>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;将批量制作的模拟贻贝肉罐头试验样本分成12组（每组4平行样，用不同调料调制），封装后装箱，进入β射线装置实施剂量为15kGy和25kGy的双向照射，在室温下保存3天后放入38℃恒温培养箱内作微生物培养试验。按相关技术标准，平板菌落计数的标准培养时间是48h。为了得到破坏性的试验结果，现将培养时间延长到10d、20d、30d，逐次对试验样本的菌落总数和致病大肠菌群进行检测。</p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;另按同样方法制作4瓶鲜贻贝肉罐头制品，分A、B两组，A组2瓶经β射线25kGy剂量辐照，B组2瓶不经任何处理，同在4℃避光环境中储存60小时后用于主观评测。  </p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真空铝箔袋封装鲜鱼肉制品6袋，分A、B两组，A组经β射线20kGy剂量辐照，B组不经任何处理，在常温下保存1星期后用于主观评测。 </p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;细菌总数测定依据标准：《食品卫生微生物学检验 菌落总数测定》，中华人民共和国国家标准GB4789.2-94。</p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大肠菌群测定依据标准：《出口食品中大肠菌群、粪大肠菌群和大肠杆菌检验方法》中华人民共和国进出口商品检验行业标准SN0169-92。</p>
                      
                                                             <h3 id="chart4"><strong>主观评价测试</strong></h3>

                                                             <h4 id="chart4-section1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>主观评价方法</strong></h4>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;将在4℃下冷藏60h的两组贻贝肉样本取出分别置于相同的2个标有A、B的洁净白色瓷盘中，另取与A、B样本同样方法加工煮熟的未经辐照和储存的贻贝肉作为对照原样置于C瓷盘中；在自然光线、不受任何干扰、不告知A、B样本中哪一份是经过辐照的情况下，邀请8位以上专业人员各自独立对A、B样本的颜色、光泽、气味、口感与C样本比较后进行主观评价打分。</P>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主观评价采用5级评分法，评分标准为：与原样相比，无法区别的，记5分；有区别，但没有对食品风味带来影响的，记4分；区别明显，对食品风味有影响，但可以接受的，记3分；区别很明显，风味比较差，影响食用的，记2分；区别非常明显，风味已经很差，无食用价值的，记1分；严重变质，只能废弃的，记0分。评价介于两者之间的，取一位小数。</P>
					               <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真空包装鲜鱼肉制品A、B两组打开直接视觉和味觉检查。</P>

                                                             <h4 id="chart4-section2">&nbsp;&nbsp;&nbsp;&nbsp;<strong>测试结果及分析</strong></h4>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;对所有评分表进行综合统计平均后得出的结果见表1。</p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;从表1数据可以看出，除外观色泽这一项外，其余所有项目均为A组远优于B组，得分情况与实际有较好的对应。总的来看，通过高剂量辐照之后，新鲜贻贝肉的色泽略微变浅，隐约可闻得有的“辐照味”，对口感稍有影响但不明显，不影响食欲，如果不与对照组比较单独食用则根本感觉不到。影响较小的是口味鲜美度，综合得分4.86分。未经辐照的样本在4℃下冷藏60h后，已轻微变质，除外观色泽未变外，肉质口感已经变差。主观评价结果证明，经过25kGy辐照后对贻贝肉制品风味的影响基本可以忽略。 </p>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;鲜鱼肉制品主观评价情况基本近似。未经辐照的通过7天常温保存，已有轻微变质现象，口感变差，而经过辐照的口感、色泽无变化，也感觉不到有辐照味。 </p>
                                                             
                                                             <h3 id="chart5"><strong>微生物检测与分析</strong></h3>

                                                             <h4 id="chart5-section1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>微生物培养试验</strong></h4>
					    	      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;所有样本在38℃恒温培养箱内连续培养，每隔10天左右对不同批次的样本抽样检测，检测数据如表2。</P>
					    	      
                                                             <h4 id="chart5-section2">&nbsp;&nbsp;&nbsp;&nbsp;<strong>数据分析</strong></h4>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;从表2的数据可以看出，所有样本在38℃恒温培养箱中培养9～31天后菌落总数都小于1×104cfu/g，致病菌（大肠菌群）未检出，优于国家商检对于出口即食食品微生物含量的控制标准。在这种恒温38℃下培养几十天的条件下有3个样本的菌落总数仅在1次方数量级，说明通过高剂量灭菌的样本基本上达到了无菌的程度。通过破坏性试验的放大效应还可以看出，25kGy剂量的灭菌效果要优于15kGy的剂量。按照在38℃培养箱中放7天等效于常温下保质期6个月的推算，通过足够剂量辐照灭菌的高水分含量的海鲜制品在常温下保质12个月到24个月是可行的。</p>
                                                             					    	    
                                                             <h3 id="chart6"><strong>结论</strong></h3>
                                                      
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主观评价记分和技术指标测试的结果表明，对于高水分、高蛋白质含量的海鲜类制品要达到常温下保质期超过6个月的要求，通过20kGy以上高剂量的β射线灭菌处理是行之有效的。高剂量辐照对海鲜制品风味影响可以忽略。如果改变包装设计，使其符合用加速器β射线辐照时剂量分布要求，采用高剂量辐照取代罐头、真空包装类即食食品的高温和巴氏灭菌工艺，提高产品品质是可行的。</P>
                                                             <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;实验中所观察到的轻微辐照味，经分析与包装内留有部分空气有关；β射线在物体中射程有限，双面照射翻转包装时容器内汤料流动会影响灭菌效果，采用真空包装或浆状调料的制品效果会更好些。</p>

                                                  </div>
                                                  <div class="alert alert-info" style="background-color:#05173b">
                                                     <h4>参考文献</h4>
                                                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.曾庆孝.食品加工与保藏原理（第二版）[M].化学工业出版社,2007.</p>
                                                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.施培新.食品辐照加工原理与技术[M].中国农业科学技术出版社,2004.</p>
                                                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.傅俊杰.农产品辐照加工及检测[M].浙江大学出版社，2013.</p>
                                                     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.唐鄂生,袁勤良,徐殿斗.电子束食品辐照保鲜技术[C].第四届中国核学会省市区“三核”论坛论文集,2007.</p>
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
