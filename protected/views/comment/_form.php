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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_info'); ?>
		<?php echo $form->textArea($model,'contact_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'contact_info'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'comment_content'); ?>
		<?php echo $form->textArea($model,'comment_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment_content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->