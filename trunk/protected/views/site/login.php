<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">

<h1><?php echo Yii::t('zii', 'system.login')?></h1>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


	<div class="row">
	<table>
	<tr>
		<td>
		<?php  echo Yii::t('zii', 'user.name'); ?>		
		</td>
		<td>
		&nbsp;<?php echo $form->textField($model,'username',array('size'=>19,'maxlength'=>128)); ?>
		</td>
	</tr>
	<tr><td colspan="2"><?php echo $form->error($model,'username'); ?></td></tr>
	
	<tr>
		<td>
		<?php echo Yii::t('zii', 'user.password'); ?>
		</td>
		<td>
		&nbsp;<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>128)); ?>
		</td>
	</tr>
	<tr><td colspan="2"><?php echo $form->error($model,'password'); ?></td></tr>
	</table>		
	</div>
<br>
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('zii', 'system.login')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

</div>
</div>
