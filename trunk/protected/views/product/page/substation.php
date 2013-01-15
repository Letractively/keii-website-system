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
$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'substation' );
?>

<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">		
			<div class="two-third first">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/index_cn.jpg" class="align-left">				
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
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/01b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/01a.jpg" alt="">
								</a>	
																<p>高度集成模块化，安装快捷，施工方便。专业的工程施工队可在一天内完成所有设备安装工作。</p>
									
								</div>
								</td>

								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a	href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/02b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/02a.jpg" alt="">
								</a>
																<p>能对变电设备（主变、高压触点、刀闸等）进行多个红外热像及可见光视频同时监控，可自动测量温度与分析温度等功能。</p>
								
										
								</div>
								</td>
							</tr>
							
							<tr>
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/03b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/03a.jpg" alt="">
								</a>	
																<p><strong>测量精准，不错失每一个细节：</strong>可实现高清晰度视频图像传输，实现远程浏览视频图像信息，集中管理，集中图像存储，具有远程控制、报警联动功能。</p>
								
									
								</div>
								</td>
								
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/04b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/04a.jpg" alt=""></a>
																<p>对海量数据快速检索指定设备温度变化趋势，通过观测设备的温度变化趋势，发现一般手持红外热像仪难以发现的电压致热故障。</p>
								
								</div>
								</td>
							 </tr>

							 <tr>
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/05b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/05a.jpg" alt=""></a>
																<p>可在同一时刻实现16位红外温度图像数据的实时传输、实时记录和实时分析的功能。</p>
								
								</div>	
								</td>
								
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/06b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/06a.jpg" alt=""></a>
																<p>强大红外图像分析软件进行二次分析并可自动生成红外检测报告</p>
									
								</div>
								</td>
							 </tr>
						</table>
					</div>
					
					<div id="tabs-2">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/01b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/01a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/02b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/02a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/03b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/03a.jpg"
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
