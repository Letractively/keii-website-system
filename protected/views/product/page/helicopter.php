<?php
$this->breadcrumbs = array (
		'Products' 
);

$this->breadcrumbs = array (
		Yii::t ( 'zii', 'Product' ) => array (
				'/product' 
		),
		Yii::t ( 'zii', $this->actionId ) => array (
				$this->controllerId . '/' . $this->actionId 
		) 
);

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'helicopter' );

?>

<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">


			<div class="two-third first">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/index_cn.jpg" class="align-left">
			</div>

			<div class="one-third"></div>

			<div class="three-fourth first">

				<div id="product_tabs">
					<ul class="tab_list">
						<li><a href="#tabs-1">产品介绍</a></li>						
						<li><a href="#tabs-2">产品图库</a></li>
					</ul>
					<div id="tabs-1">
					
					<table>
							<tr>
								<td>
								<div class="product-info-box">
								<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/01b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/01a.jpg" alt="">
								</a>	
								<p>
								<strong>完善的系统解决方案：</strong>针对直升机电力巡线的应用，广州科易公司能提供的不仅仅是适用的吊舱、红外热像仪及配套软硬件设备，而是整套完善的系统解决方案，协助客户解决在巡线中遇到的所有技术疑难问题。
							</p>
									
								</div>
								</td>

								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a	href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/02b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/02a.jpg" alt="">
								</a>
													<p>
								<strong>产品自主研发，拥有自主知识产权：</strong>广州科易公司的所有主要产品均属于自主研发，拥有自主知识产权，并拥有所有源代码程序，可根据客户不同的需求进行更改和设计。特别是红外热成像系统，只有掌握了完整的图像源代码，才能实现精确测温和后处理系统的二次开发。
							</p>
										
								</div>
								</td>
							</tr>
							
							<tr>
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/03b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/03a.jpg" alt="">
								</a>	
									<p>
								<strong>产品均符合军标，工作稳定性强：</strong>系统中的主要产品均按照军用标准设计和制造，环境试验满足GJB150-86标准，电子元器件筛选满足GJB1032-90标准；可满足我国军标对于使用环境的严格要求，在各种恶劣的环境下均能正常工作，拍摄到清晰的图像。
							</p>
									
								</div>
								</td>
								
								<td>
								<div class="product-info-box">
								<div class="product-info-box-span"></div>					
								
								<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/04b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/04a.jpg"
								alt=""></a>
							<p>
								<strong>任务规划自动化：</strong>自动规划任务，便于地面控制中心协助飞行员和巡检员模拟飞行线路以及优化巡检路径。
							</p>
								
								</div>
								</td>
							 </tr>

							 <tr>
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/05b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/05a.jpg"
								alt=""></a>
							<p>
								<strong>三维实景巡检导航</strong>
								通过GPS、飞行姿态仪与地图引擎开发技术的相结合，能真实呈现三维巡检场景，并实时计算飞机与线路边界的距离，使巡线数据结果更加准确，大大提高飞行安全。
							</p>
								
								</div>	
								</td>
								
								<td>
								<div class="product-info-box">
								<div class="product-info-box-span"></div>					
							<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/06b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/06a.jpg"
								alt=""></a>
							<p>
								<strong>缺陷管理</strong>具有完善的全动态16位红外数字视频温度分析功能，快速的数据库检索、分析、统计和打印功能，并可通过Intel、SIM短信等方式上报缺陷。
							</p>
									
								</div>
								</td>
							 </tr>
							 
							 
							 
							 <tr>
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/07b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/07a.jpg"
								alt=""></a>
							<p>
								<strong>图像与数据处理系统</strong>按照线路和杆塔，快速导入基础资料和巡检数据到数据库，具有快速检索管理功能。
							</p>
								</div>	
								</td>
								
								<td>
								<div class="product-info-box">
								<div class="product-info-box-span"></div>					
						<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/08b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/08a.jpg"
								alt=""></a>
							<p>
								<strong>视频回放</strong>功能强大的分屏显示功能，可同时在两个显示器上同步播放红外及可见光视频，便于发现缺陷。
							</p>
									
								</div>
								</td>
							 </tr>
						</table>
					
						
					</div>				
					
					<div id="tabs-2">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/09b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/09a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/10b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/10a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/11b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/11a.jpg"
										alt=""></a></td>
							</tr>
						</table>
					</div>
					
				</div>
			</div>

			<div class="one-fourth">
				<?php $this->renderPartial('//site/menu1'); ?>				
				<dl class="m-simple-toggle">				
				<?php $this->renderPartial('//product/menu1'); ?>					
				<?php $this->renderPartial('//application/menu1');?>										
				</dl>
			</div>


			<!--/Porfolio Content-->
		</div>
	</div>
	<!--/Content-->
</div>
<!--/Body content-->