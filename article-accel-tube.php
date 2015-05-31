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

		                <h1>新技术</h1>

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

						    <h2><strong>辐照加速器的新技术——带电粒子高梯度加速的研究</strong></h2>
                            <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;大镭核新技术研究部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;王发芽&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆锐锋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;成军&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;杭超</P>
                            <div class="divider half-margins"><!-- divider -->
							    <i class="fa fa-star"></i>
						    </div>
				
						    <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;高梯度加速结构是未来直线加速器的一个重要的发展方向。然而高频真空击穿（rf breakdown）现象严重制约了高梯度加速结构的发展。这是一个极其复杂的物理现象，关于它的研究已经进行几十年了，然而目前学术界对该现象的认识还有很多争议。它不仅和表面电场强度有关，而且和表面磁场、脉冲功率、脉冲长度、pulsed heating、材料特性、表面处理等很多相关的参数有关。隔离这些相关参数对击穿的影响，通常是极为困难的，因为它们之间是相互耦合的。借助于SLAC SLED-II(斯坦福直线加速器中心脉冲压缩系统) 的pre-pulse，可以分离表面电场和pulsed heating对加速器真空击穿的影响，从而证明在特定的条件下pulsed heating是rf breakdown的主导因素。</P>
						    <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;此外，近两年由于ILC工程的相关技术研究，我们还进行了高频气体击穿的相关研究。关于该现象的研究已经有上百年了，学术界已习惯给气体放电定一个阈值，该值通常可以从Parchen曲线计算出来。事实上，我们发现用这个阈值来标定气体击穿很不准确，气体可以在远低于这个阈值的时候击穿。用几率来描述这一物理现象也许更准确。同时，我们设计了一套更为精确试验方案来全面的了解气体击穿。</P>
</br>
                            <div class="col-md-6">
                                    <div align="center" >
						                <figure>
							                    <img class="img-responsive" src="assets/images/articles/tube1.jpg" alt="直线电子加速器辐照加工应用大镭核技术成套设备" />
						                </figure>
                                        <span>图1:新型高梯度加速器</span>
					                 </div>
                             </div>

						    <P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目前，工业用加速器一般的加速电场（或梯度）大约在十兆伏每米左右 (~ 10 MV/m)，即每经过一米加速，电子可获得约十兆伏电压。通常的辐照电子直线加速器，由于注入电子束能量较低（~100，000电子伏特）需要两米甚至更长的加速段来获得所需的能量，这样无疑增加了加速器系统的成本，及相关的维护费用。而科学技术日新月异，借助于上世纪高能物理的飞速发展，加速器技术已经有很大的提升。现在实验上已经可以实现千兆伏每米的加速电场了，即可将常规的辐照加速器的浓缩到集成电路的尺寸了，当然目前的技术还不足以形成可实用的产品。我们在电子加速器上有近十年的研究，深谙其中的关键技术，将目前常规加速电场提高几倍，甚至一个量级在技术上已经基本成熟。图1为一种未来高加速梯度加速器，该加速器长仅20cm，可稳定工作在100 MV/m的加速梯度。若采用这样的加速器，目前的10 MeV左右的辐照中心，只需要10cm长的这种加速器！</P>
                            <div class="col-md-6">
						    		<P style="color:#bbb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当然要获得低成本，小体积的电子辐照加速器，还要取决于微波功率源及加速器制造水平。图2是一种电子源装置，该装置非常适合产生低能（～几个MeV）的X射线，a），b）分别适用于不同的微波频段。目前这两种装置都取得了很好的实验结果。简言之，这种以高加速梯度小型化加速管为核心的电子辐照加速器的成功研制无疑会极大地提升相关行业的技术水平和国际竞争力，推动工业用电子直线加速器的发展，同时也会带来巨大的社会经济效益。</P>

                             		<div align="center" >
						           
						                	<figure>
							                    <img class="img-responsive" src="assets/images/articles/tube2.png" alt="直线电子加速器辐照加工应用大镭核技术成套设备" />
						                	</figure>
                                            <span>图2: 场至发射型高能电子源 a)</span>
                                      </div>
</br>
					       </div>

							<div class="col-md-6">
</br></br>
									<div align="center" >
						           
						                <figure>
							                    <img class="img-responsive" src="assets/images/articles/tube3.png" alt="直线电子加速器辐照加工应用大镭核技术成套设备" />
						                </figure>
                                        <span>图2: 场至发射型高能电子源 b)</span>
					                 </div>
							</div>
						    <div class="row bs-callout" style="background-color:#05173b; margin-bottom:0px"><!-- divider -->
						    	<div class="text-center">
							    <h4><i class="fa fa-hand-o-right" style="color:#36a0da"></i>声明：仅供学习和交流使用，引用请注明出处</h4>
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


