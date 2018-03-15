<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->

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

                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i>搜索</label>

                <form method="get" action="#" class="input-group">
                  <input type="text" class="form-control" name="k" id="k" value="" placeholder="search..." />
                  <span class="input-group-btn">
                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </span>
                </form>
               </br>
              </div>

              <?php require ('article-updating.html');?>

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
                          <li><a href="#chart1">前言</a></li>
                          <li><a href="#chart2">辐照加工射线源分析</a>
                              <ol><li><a href="#chart2-section1">钴60辐照装置</a>
                              <li><a href="#chart2-section2">电子加速器</a></ol>
                          </li>
                          <li><a href="#chart3">用户对辐照加工的需求</a></li>
                          <li><a href="#chart4">针对需求推出新型射线源</a>
                             <ol><li><a href="#chart4-section1">工厂化产品，整机成品出厂</a></li>
                             <li><a href="#chart4-section2">模块化组合</a></li>
                             <li><a href="#chart4-section3">紧凑型结构</a></li>
                             <li><a href="#chart4-section4">智能化控制系统</a></li>
                             <li><a href="#chart4-section5">专业化技术服务</a></li>
                             <li><a href="#chart4-section6">主要性能指标和特点</a></li></ol>
                          </li>
                          <li><a href="#chart5">结束语</a>
                          </li>

                      </ol>

                      <div><a href="../tech-garden.php"><i class="fa fa-rotate-left"></i>返回前一页</a></div>
                  </div>

              </div>
            </aside>

            <div class="col-md-9" style="padding:20px">
              <div class="body-content">
                <div><h2>电子射线设备与辐照加工</h2></div>

                  <div id="niu2-left-container">
                    <div id="niu2-main-content">
                    <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆锐锋</P>
  
                    <div class="divider half-margins"><!-- divider -->
                       <i class="fa fa-star"></i>
                    </div>

                    <h3 id="chart1"><strong>前言</strong></h3>
             
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新兴的辐照加工产业，由于其在食品安全、医疗灭菌、材料改性等应用领域的巨大贡献，曾被认为是最具发展潜力和发展速度的行业之一；2004年初，国家发改委数次发文大力鼓励支持放射性同位素、电子加速器用于工业辐照，称之为“民用非动力核技术高技术产业化应用”。但是十多年过去了，这一行业的发展并没有像我们想象的那么快，一方面，全国一百多家钴源辐照中心、几十家加速器辐照中心任务不饱满，互相竞争压价；另一方面，大量的食品生产企业苦于灭菌问题难以解决、大量的医用敷料生产企业还在用有毒致癌的环氧乙烷灭菌。这里面，辐射加工的射线源问题显然是一个重要的瓶颈。</P>

                      <h3 id="chart2"><strong>辐照加工射线源分析</strong></h3>

                      <h4 id="chart2-section1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>钴60辐照装置</strong></h4>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们都知道辐照加工射线源主要有钴60和电子加速器。对于钴源，其γ射线穿透力强、均匀度好、运行可靠性好等仍是其突出的优点；但其审批和安全管理的困难、高昂的购源和定期补源费用、射线利用率低等难以回避的问题严重限制了它的应用普及，特别是难以承受的空置损失。在当前辐照装置不断普及，辐照加工货源难以保证的情况下，空置成本的分摊将使钴60装置陷入越来越困难的境地。而且，其特性所决定的以辐照中心集中运行的商业模式有有着很大的局限性。所以，指望多建钴60装置推进辐照加工业的快速发展显然是与现实有差距的。</P>
                     
                      <h4 id="chart2-section2">&nbsp;&nbsp;&nbsp;&nbsp;<strong>电子加速器</strong></h4>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;这里专指高能量（10MeV）的专用于食品、医用敷料等产品辐照的高功率电子射线源，以电子直线加速器为主。</p>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电子加速器射线定向集中照射，能量利用率高，造价较低，作为Ⅱ类射线源，审批和管理相对简单，在辐照加工成本方面有着较大的优势；不足之处是β射线穿透力欠缺，但对于医用敷料、成品包装食品来说，问题并不大。而且，电子加速器有条件直接进入生产企业从事专属产品辐照加工，从根本上改变辐照加工传统商业模式，有条件快速推进辐照加工业的发展。</p>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;但是，电子加速器的普及应用却同样缓慢。根本原因在于设备的技术问题。</p>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在现代科技水平背景下，直线加速器真算不上一套很复杂的系统，国内好几家科研单位、高校、企业都有能力建造起一套辐照加速器，但本质上却都是实验室产品装置。往往是依靠技术专家花好几年时间搭建起一套加速器辐照装置，要作为一项重大技术成果，还要请院士专家开个评审会。即使是进口的加速器设备，也同样是来几个专家和技术人员在现场一件件装配调试几个月再测量验收，出了故障得以上万元1小时的代价请国外专家过来维修。现在的问题是，从事辐照加工服务的是企业而不是科研或事业单位，如何掌握侍候好加速器这种复杂设备，如何承受故障和事故的风险，技术上是否受制于人，对于企业来说是首要考虑的问题。 </p>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;直线加速器有大型电真空器件，有使用寿命，其参数会随时间缓慢变化，也有突发故障的风险；脉冲功率源存在强大的电磁脉冲干扰，精密部件与微电子器件、信息处理电路工作在非常恶劣的电磁环境中，简单的ms量级的PLC逻辑控制，许多技术细节上的不成熟，使加速器在辐照加工领域的普及还显得那样的步履维艰。很多地方在上辐照中心项目时还在首选钴60辐照装置。</p>

                      <h3 id="chart3"><strong>用户对辐照加工的需求</strong></h3>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;辐照加工作为一种新兴的加工技术越来越被广大用户所认识，但被拒之门外的往往是成本、运输等原因，而不是效果、副作用、担心“辐射残留”等原因。</P>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;随着新食品安全法的实施，越来越多的食品生产企业都在寻找有效的食品灭菌方法以减少食品添加剂的用量；大量的医疗用品生产企业还在他们自己也认为污染和危害太大、不愿意长期使用的环氧乙烷熏蒸灭菌。为什么辐射灭菌还是不能大量普及，其重要原因还是成本和货物流转运输问题。目前将近每公斤0.5到1元的辐照灭菌成本对于附加值不高的食品制品来说是难以承受的；同样，比环氧乙烷灭菌高出几倍的医用产品辐照灭菌成本也是难以普及的重要原因。</p>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;货物的运输、装卸也是辐射加工成本的重要组成，按目前辐射加工流程模式，这一块还较难压缩。</p>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;企业是营利机构，他们需要的是用简单可靠低成本的方式达到产品提升、增值赢利的目的。所以，大幅度下降辐照加工的成本，是推进这一产业发展的重要因素。 </p>

                      <h3 id="chart4"><strong>针对需求推出新型射线源</strong></h3>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;按我们长期从事直线加速器辐照加工的经验积累，综合了运行、维护、客户需求种种考虑，通过多年努力，研发了一种新型的辐照射线源——简型商品化的高功率工业辐照用电子直线加速器，其特点为</P>
                      <h4 id="chart4-section1">&nbsp;&nbsp;&nbsp;&nbsp;<strong>工厂化产品，整机成品出厂</strong></h4>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在工厂内完成零部件制造、整机装配调试、真空老炼、出束调试、技术指标测试等工序，层层品质把关，避免了通常的现场装配工期长、质量难以管控、调试耗时、出现问题不便解决等弊端。</P>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主要零件、部件、设备包括脉冲调制器、微波源、电子枪、聚焦磁铁、恒温机组、束下系统全部自行设计制造，确保系统按理想技术求适配组合。</P>
                      <figure style="text-align:center;">
                        <img  style="width:250px;height:190px;margin-right:15px;" src="../assets/images/articles/pic1.png" alt="">
                        <img  style="width:250px;height:190px;margin-right:15px;" src="../assets/images/articles/pic2.png" alt="">
                        <img  style="width:250px;height:190px;margin-right:15px;" src="../assets/images/articles/pic3.png" alt="">
                        <br/><br/>
                        <figcaption>图1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;设备生产装配车间</figcaption>
                      </figure>  

                      <h4 id="chart4-section2">&nbsp;&nbsp;&nbsp;&nbsp;<strong>模块化组合</strong></h4>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高功率直线加速器是一个复杂的系统，牵涉高压、大电流、辐射、机械、微波、电真空、电子信息、热交换等等，通常是各设备机架在特定建筑物中分别布置，管道走线交错，结构布局不一，部件通用和互换性差，技术维护困难。</p>

                       
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本设备系统把相应功能部件归结到几个主要功能块中，使系统成为几个简单的模块组合，便于安装、维护、互换。几个主要模块分别为一体化主机、微波脉冲功率调制器、恒温冷却机组、控制台、束下输送装置。设备安装只需要将各模块安放连接就能投入运行。 </p>
                      <figure style=" padding:0;" >
                         <img  style="" src="../assets/images/articles/pic4.png" alt="">
                         <br><br>
                         <figcaption style="text-align:center;">图2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主机 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 调制器 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  恒温机组&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  主控  </figcaption>
                         <br><br>
                      <figure>
                      <!--h4 id="chart4-section3">&nbsp;&nbsp;&nbsp;&nbsp;<strong>紧凑型结构</strong></h4>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;将脉冲变压器、速调管及输出波导、电子加速、扫描输出等部分集成到一个机架中，形成紧凑型结构，在工厂内完成组装、调试校准、真空与微波老炼、出束老炼，使复杂精密的加速器系统成为一台易于运输安装的普通工业设备。 </p>
                        <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;垂直安装的一体化主机，按常规来说其高度得6～7米以上，但我们在不影响技术指标的前提下作了必要的简化，去除了束流导向和漂移部分，缩短了扫描盒高度，使机架总体高度降低到4.2米，节约了防护体建造成本，也使设备的运输按装更显方便。 </p-->
                      <!--P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 一般的加速器装置的控制还停留在基于PLC的开关机逻辑控制和简单的故障控保。由于PLC的响应速度为ms量级，而加速器的脉冲精度在us量级，所以我们在控制系统中采用了响应速度在百纳秒量级的先进的现场可编程门阵列FPGA作为控制硬件的核心单元，实现对各种可能出现的复杂状况做出现场实时反应，同时对所有的底层逻辑采用多倍冗余设计，并增加信号级别的逻辑投票功能，以保证底层控制逻辑的高度可靠性。</p>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在分布式控制单元中，基于FPGA的专用芯片负责硬件实时信号的响应、本地控制逻辑、以及高速数据采集等。同时单元中的控制软件则利用嵌入式芯片的通用计算能力负责相应的数据运算、前端数据过滤、通讯协议的处理，以及响应基于通讯网络的上层控制逻辑。 </p>
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 相比于传统的PLC及使用梯形图描述的控制逻辑，C语言及高速的通用处理器可以用于处理更为复杂的控制逻辑，同时强大的处理能力也使设备对故障以及各种请求的响应速度提高了几十倍甚至上百倍，并且可以执行更为复杂的连锁保护。</p>
                    <div>
                      <div class="col-md-6" style="padding:0;">
                        <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在控制系统中我们还开发了实时监控与智能故障诊断系统，对束流参数和电真空器件运行参数以及系统中各控制节点的参量进行实时监控和记录，以及对微秒级脉冲波形还原和频谱分析。前端数据采集系统的硬件设计基于高速A/D芯片，采用数字信号处理（DSP）引擎进行前端过滤与筛选，筛选后的数据通过高速数据总线传输至中央处理器CPU进行进一步分析处理。实时数据传输至CPU后将分成两条路径，一是交由服务器保存为设备历史工作记录；另一条路径中数据将交给实时故障分析的专家系统来判断系统的整体工作状况、各易耗部件（如闸流管等电真空部件）的工作点补偿、核心部件的寿命预期等。 </p>
                      </div>
                    </div-->

                    <div class="row">
                      <h4 id="chart4-section4">&nbsp;&nbsp;&nbsp;&nbsp;<strong>智能化控制系统</strong></h4>

                      <div class="col-md-6">
                        <p style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;直线电子加速器采用设备诊断系统实时数据库平台。</p>
                        <ul>
                          <li><p style="color:#bbb"><strong style="color:#FFE100">远程控制</strong>：主要是以B/S结构为主，密文传输。相关工作人员通过浏览器控制设备开关机，并能实时浏览设备数据信息和运行情况。</p></li>
                          <li><p style="color:#bbb"><strong style="color:#FFE100">故障保护</strong>：出故障时自动保护，并提示维护人员故障原因。</p></li>

                          <li><p style="color:#bbb"><strong style="color:#FFE100">数据采集</strong>：依靠传感器等专用检测模块，对加速器运行过程中的电压、电流、温度信号进行采集，并存储到实时数据库。</p></li>
                          <li><p style="color:#bbb"><strong style="color:#FFE100">数据管理</strong>：实时数据库将加速器的瞬时值、统计值、过程报警、操作记录等重要数据长期保存。</p></li>
                          <li><p style="color:#bbb"><strong style="color:#FFE100">数据呈现</strong>：扁平化UI人机交互界面，以数码管形式显示实时数据，以报表、折线图形式显示历史数据。</p></li>
                        </ul>
                      </div>
                      <figure style="text-align:right; padding:0;" class="col-md-6">
                         <img  style="width:400px;height:325px;margin-right:15px;" src="../assets/images/articles/pic5.png" alt="">
                         <br><br>
                         <figcaption>图3 控制系统界面</figcaption>
                      <figure>

                    </div>
                    <div class="row">
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有了智能化的控制系统，用户只需对加速器设备简单操作和维护，无需再配备高端技术人才去侍候它，使其真正成为简单的工业设备。</p>
                    </div>                                       
                    <div>
                      <h4 id="chart4-section5">&nbsp;&nbsp;&nbsp;&nbsp;<strong>专业化技术服务</strong></h4>

                      <div class="col-md-6" style="padding:0;">
                      <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 辐照加速器市场推广的最大障碍之一就是运行技术保障。而专业的以商品化形式推出的设备产品，其优势也是在技术保障服务上。设备运行有远程监控，部件方便互换，专业维护人员和备件可以形成点对面的形式，使技术保障效率大为提高，方便了用户也能为设备生产厂家增加创收。</p>
                      </div>
                                                               
                      <figure style="text-align:right;padding:0;" class="col-md-6">
                         <img  style="width:300px;height:200px;margin-right:15px;" src="../assets/images/articles/pic6.png" alt="">
                         <br><br>
                         <figcaption>图4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;设备系统整体布局模型</figcaption>
                      <figure>
                    </div>                                   

                    <h4 id="chart4-section6">&nbsp;&nbsp;&nbsp;&nbsp;<strong>主要性能指标和特点</strong></h4>
                    <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 该设备产品微波功率源采用进口高功率速调管，输出微波平均功率45KW，脉冲功率5MW, 对电子加速后能输出电子束流功率20KW以上，能量10MeV，这是目前性价比最高的配置；</p>
                    <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 全套自行研制的脉冲调制器由2个全封闭充电模块和2个放电模块组合而成，连控制柜一共5个立柜机架组合，输出脉冲高压平均功率120KW, 整机电源转换效率在85%以上。整套系统耗电约为160KW。</p>
                    <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新研发的扫描窗束流校直装置，使扇状扫描输出的束流成为垂直平行向下的均匀束流。此举有效提升束流利用率20%以上。 </p>
                   
                    <h3 id="chart5"><strong>结束语</h3>

                                                         
                    <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有了物美价廉的射线源设备产品，建一座辐照加工中心将不再是大投入大项目，稍有点规模的企业也能将其集成到生产线上，大幅度降低辐照加工成本；将简单易用的普通工业设备形式的辐照加速器产品推向市场，随着批量生产增加必将大幅度降低成本，这对辐照加工产业将会是一个有力的推动。</P>

                  </div>
                </div>

            </div>
            
        </div>
      </section>
      <!-- /article -->

    </div>
    <!-- /WRAPPER -->

    <?php require('../footer.html');?>
    <?php require('../script.html');?>
    <script type="text/javascript">
            onContentLoaded();
    </script>


    
  </body>
</html>
