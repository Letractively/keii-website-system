<?php
/* @var $this ProductsController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->id,
);

?>

<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">

			<div class="two-third first">
			<?php echo $model->product_page_content ?>
			</div>

			<div class="one-third">
				
			</div>
			
			<div class="three-fourth first">
				<div id="product_tabs">
					<ul class="tab_list">
						<li><a href="#tabs-1"><?php echo Yii::t('zii', 'product.introduction')?></a></li>
						<li><a href="#tabs-2"><?php echo Yii::t('zii', 'product.parameter')?></a></li>
						<li><a href="#tabs-3"><?php echo Yii::t('zii', 'product.gallery')?></a></li>
					</ul>
					<div id="tabs-1">
					<?php echo $model->product_introduction; ?>
					</div>
					
					<div id="tabs-2">
					<?php echo $model->product_parameter; ?>
					</div>
					
					<div id="tabs-3">
					<?php echo $model->product_gallery; ?>		
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
