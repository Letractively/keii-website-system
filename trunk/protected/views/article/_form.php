<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id'); ?>
		<?php echo $form->error($model,'author_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modify_time'); ?>
		<?php echo $form->textField($model,'modify_time'); ?>
		<?php echo $form->error($model,'modify_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_title'); ?>
		<?php echo $form->textField($model,'article_title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'article_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_description'); ?>
		<?php echo $form->textField($model,'article_description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'article_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_content'); ?>
		<?php echo $form->textArea($model,'article_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'article_content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->