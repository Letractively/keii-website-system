<?php
/* @var $this ProductsController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'product_name',
		'product_alias',
		'page_language',
		'page_summary',
		'product_page_content',
		/*
		'product_introduction',
		'product_parameter',
		'product_gallery',
		'product_series',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
</div>