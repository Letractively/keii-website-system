<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="form-row">
		<?php echo $form->labelEx($model,'username', array('class'=>'form-row-label')); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-row">
		<?php echo $form->labelEx($model,'password', array('class'=>'form-row-label')); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="form-row">
		<?php echo $form->labelEx($model,'email', array('class'=>'form-row-label')); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-row">
		<?php echo $form->labelEx($model,'corporation', array('class'=>'form-row-label')); ?>
		<?php echo $form->textField($model,'corporation',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'corporation'); ?>
	</div>

	<div class="form-row">
		<?php echo $form->labelEx($model,'contact_address', array('class'=>'form-row-label')); ?>
		<?php echo $form->textField($model,'contact_address',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'contact_address'); ?>
	</div>

	<div class="form-row">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('zii','User Register') : Yii::t('zii','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->