<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">
<h1>Create Page</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
</div>