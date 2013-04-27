<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textArea($model,'comment_content',array('rows'=>12, 'cols'=>160)); ?>
		<?php echo $form->error($model,'comment_content'); ?>
	</div>
	<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('zii', 'system.tip.ok') : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->