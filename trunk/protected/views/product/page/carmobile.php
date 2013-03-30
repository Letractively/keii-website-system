<?php
$this->breadcrumbs = array (
		'Products' 
);

$this->breadcrumbs=array(
		Yii::t('zii', 'Product')=>array('/product'),
		Yii::t('zii', $this->actionId )=>array($this->controllerId . '/' . $this->actionId ),
);

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'carmobile' );

?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">

			<div class="two-third first">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/index.jpg" class="align-left">				
			</div>

			<div class="one-third">

			</div>

			<div class="three-fourth first">
				<div id="product_tabs">
					<ul class="tab_list">
						<li><a href="#tabs-1">产品介绍</a></li>
						<li><a href="#tabs-2">产品图库</a></li>

					</ul>
					<div id="tabs-1">
					<table >
						<tr>
						
						<td>
						
						<div class="product-info-box">
												
						
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/01b.jpg"	title="" rel="prettyPhoto"	class="img-border preloading-light align-right project-thumbnail image-preview">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/01a.jpg" alt="">
						</a>
						
						<p>
						配件齐全
						</p>
						
						</div>
						</td>
						
						<td>
						<div class="product-info-box">
						<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/03b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/03a.jpg"
								alt=""></a>
						<p><strong>配置高精度云台系统，实现全方位快速定位。</strong></p>
						</div>
						</td>
						
						</tr>
					
					
						<tr>
						<td>
						<div class="product-info-box">
						<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/04b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/04a.jpg"
								alt=""></a>
						<p>
						<strong>一体化操控平台，快捷实现车载系统控制</strong>
						</p>
							
						</div>
					
						</td>
						
						
						<td>
						
						<div class="product-info-box">
						<a
								href="<?php echo Yii::app()->request->baseUrl;?>/images/zh_cn/products/carmobile/05b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/05a.jpg"
								alt=""></a>
							<p>
								<strong>功能强大的分析及报告制作软件</strong></p>
						
						
						</div>
						</td>
						</tr>
					
					
					</table>						
					</div>			
				
					<div id="tabs-2">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/01b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/01a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/02b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/02a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/09b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/carmobile/09a.jpg"
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
