<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>



<div id="register-form">

<div id="form-banner">
<p><?php echo Yii::t('zii', 'user.register.form.title')?></p>
</div>

<div id="form-border">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
)); ?>
<div class="form-item">
<label for="User_username" class="required"><?php echo Yii::t('zii', 'user.name'); ?></label>
<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>128)); ?>
<?php echo $form->error($model,'username'); ?>
</div>

<div class="form-item-left">
<label for="User_password" class="required"><?php echo Yii::t('zii', 'user.password'); ?></label>
<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>128)); ?>
<?php echo $form->error($model,'password'); ?>
</div>

<div class="form-item-right">
<label for="User_password" class="required"><?php echo Yii::t('zii', 'user.passwordRepeat')?></label>
<?php echo $form->passwordField($model,'password_repeat',array('size'=>21,'maxlength'=>32)); ?>
<?php echo $form->error($model,'password_repeat'); ?>
</div>

<div class="form-item">
<label for="User_corporation" class="required">	<?php echo Yii::t('zii', 'user.corporation'); ?></label>
<?php echo $form->textField($model,'corporation',array('size'=>20,'maxlength'=>128)); ?>
<?php echo $form->error($model,'corporation'); ?>
</div>

<div class="form-item-left">
<label for="User_userjobtitle" class="required">	<?php echo Yii::t('zii', 'user.jobtitle'); ?></label>
<?php echo $form->textField($model,'userjobtitle',array('size'=>20,'maxlength'=>128)); ?>
<?php echo $form->error($model,'userjobtitle'); ?>
</div>

<div class="form-item-right">
<label for="User_contact_name" class="required">	<?php echo Yii::t('zii', 'user.contact_name'); ?></label>
<?php echo $form->textField($model,'contact_name',array('size'=>20,'maxlength'=>128)); ?>
<?php echo $form->error($model,'contact_name'); ?>
</div>

<div class="form-item-left">
<label for="User_contact_number" class="required">	<?php echo Yii::t('zii', 'user.contact_number'); ?></label>
<?php echo $form->textField($model,'contact_number',array('size'=>20,'maxlength'=>128)); ?>
<?php echo $form->error($model,'contact_number'); ?>
</div>

<div class="form-item-right">
<label for="User_email" class="required">	<?php echo Yii::t('zii', 'user.email'); ?></label>
<?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>128)); ?>
<?php echo $form->error($model,'email'); ?>
</div>

<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('zii', 'user.register') : 'Save'); ?>
</div>
	
<br><br>
	

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->