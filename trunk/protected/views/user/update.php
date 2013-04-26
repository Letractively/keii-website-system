<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">

<h1>更新用户 " <?php echo $model->username; ?>" 资料</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
</div>