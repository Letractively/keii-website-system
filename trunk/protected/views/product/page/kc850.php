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
$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'kc850' );
?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">

			<div class="two-third first">
				<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.Yii::app()->language.'/products/kc850/index.jpg',('KC850'),array('class'=>'align-left'));?>
			</div>

			<div class="one-third"></div>

			<div class="three-fourth first">
				<div id="product_tabs">
					<ul class="tab_list">
						<li><a href="#tabs-1"><?php echo Yii::t('zii', 'product.introduction')?></a></li>
						<li><a href="#tabs-2"><?php echo Yii::t('zii', 'product.parameter')?></a></li>
						<li><a href="#tabs-3"><?php echo Yii::t('zii', 'product.gallery')?></a></li>
					</ul>
					<div id="tabs-1">
						<?php $this->renderPartial('//product/page/kc850.introduction.'.Yii::app()->language); ?>
					</div>
					<div id="tabs-2">
						<?php $this->renderPartial('//product/page/kc850.parameter.'.Yii::app()->language); ?>
					</div>
					
					<div id="tabs-3">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/kc850/04b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/kc850/04a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/kc850/05b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/kc850/05a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/kc850/06b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/products/kc850/06a.jpg"
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