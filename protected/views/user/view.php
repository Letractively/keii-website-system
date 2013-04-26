<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);
?>

<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">

<h1><?php echo Yii::t('zii', 'user.information')?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
		'label'=>Yii::t('zii', 'user.name'),
		'type'=>'raw',
		'value'=>$model->username,		
		),
		array(
		'label'=>Yii::t('zii', 'user.email'),
		'type'=>'raw',
		'value'=>$model->email,		
		),
		array(
		'label'=>Yii::t('zii', 'user.corporation'),
		'type'=>'raw',
		'value'=>$model->corporation,		
		),
		array(
		'label'=>Yii::t('zii', 'user.contact_number'),
		'type'=>'raw',
		'value'=>$model->contact_number,		
		),
		array(
		'label'=>Yii::t('zii', 'user.jobtitle'),
		'type'=>'raw',
		'value'=>$model->userjobtitle,		
		),
	),
)); ?>

</div>
</div>