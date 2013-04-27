<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>

<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">
<h2><?php echo Yii::t('zii', 'system.comment')?></h2>

<?php echo $this->renderPartial('comment_create_form', array('model'=>$model)); ?>
</div>
</div>