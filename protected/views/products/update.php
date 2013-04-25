<?php
/* @var $this ProductsController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'View Product', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">

<h1>修改 <?php echo $model->product_name; ?> 产品页面</h1>

<?php echo $this->renderPartial('update_form', array('model'=>$model)); ?>


</div>
</div>