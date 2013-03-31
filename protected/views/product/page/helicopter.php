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
				<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.Yii::app()->language.'/products/helicopter/index.jpg',('Helicopter Patrol & Inspection System'),array('class'=>'align-left'));?>
			</div>

			<div class="one-third"></div>

			<div class="three-fourth first">

				<div id="product_tabs">
					<ul class="tab_list">
						<li><a href="#tabs-1"><?php echo Yii::t('zii', 'product.introduction')?></a></li>
						<li><a href="#tabs-2"><?php echo Yii::t('zii', 'product.gallery')?></a></li>
					</ul>
					<div id="tabs-1">
						<?php $this->renderPartial('//product/page/helicopter.introduction.'.Yii::app()->language); ?>		
					</div>

					<div id="tabs-2">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/helicopter/09b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/helicopter/09a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/helicopter/10b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/helicopter/10a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/helicopter/11b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/helicopter/11a.jpg"
										alt=""></a></td>
							</tr>
						</table>
					</div>

				</div>
			</div>

			<div class="one-fourth">
				<?php $this->renderPartial('//site/sidebar.'.Yii::app()->language); ?>				
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