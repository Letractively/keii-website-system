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
		'username',
		'email',
		'corporation',
		'contact_number',
		'contact_address',
	),
)); ?>

</div>
</div>