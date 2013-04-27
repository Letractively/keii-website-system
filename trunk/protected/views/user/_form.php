<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
)); ?>


	<?php echo $form->errorSummary($model); ?>
<br>
	<table>
	<tr>
		<td>
			<?php echo Yii::t('zii', 'user.name'); ?>:
		</td>
		<td>
			<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>128)); ?>
		</td>
	</tr>
		
	<tr><td>
		<?php echo Yii::t('zii', 'user.password'); ?>:
		</td>
		<td>
		<?php echo $form->passwordField($model,'password',array('size'=>21,'maxlength'=>128)); ?>
	</td></tr>
	
	<tr>
		<td>
		<?php echo Yii::t('zii', 'user.passwordRepeat')?>:
		</td>
		<td>
        <?php echo $form->passwordField($model,'password_repeat',array('size'=>21,'maxlength'=>32)); ?>
        </td>
	</tr>	
	
	<tr><td>
		<?php echo Yii::t('zii', 'user.corporation'); ?>:
		</td>
		<td>
		<?php echo $form->textField($model,'corporation',array('size'=>20,'maxlength'=>128)); ?>
	</td></tr>
	
		<tr><td>
		<?php echo Yii::t('zii', 'user.jobtitle'); ?>:
		</td>
		<td>
		<?php echo $form->textField($model,'userjobtitle',array('size'=>20,'maxlength'=>200)); ?>
	</td></tr>
	
	<tr><td>
		<?php echo Yii::t('zii', 'user.contact_name'); ?>:
		</td>
		<td>
		<?php echo $form->textField($model,'contact_name',array('size'=>20,'maxlength'=>128)); ?>
	</td></tr>
	
	
	<tr><td>
		<?php echo Yii::t('zii', 'user.contact_number'); ?>:
		</td>
		<td>
		<?php echo $form->textField($model,'contact_number',array('size'=>20,'maxlength'=>200)); ?>
	</td></tr>
		
	<tr><td>
		<?php echo Yii::t('zii', 'user.email'); ?>:
		</td>
		<td>
		<?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>128)); ?>
	</td></tr>
	
	<tr><td>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('zii', 'user.register') : 'Save'); ?>
	</div>
	</td></tr>
	</table>
	


	

<?php $this->endWidget(); ?>

</div><!-- form -->