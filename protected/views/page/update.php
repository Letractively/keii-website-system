<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'View Page', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">
<h1>修改 - <?php echo $model->page_name; ?></h1>

<?php echo $this->renderPartial('update_form', array('model'=>$model)); ?>

</div>
</div>