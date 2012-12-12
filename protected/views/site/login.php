<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Login');
$this->breadcrumbs=array(
	'Login',
);
  

?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">

<h1>Login</h1>

<p>请输入您的用户名与密码进行登陆:</p>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">带<span class="required">*</span>为必填.</p>
	
	
			<?php echo $form->errorSummary($model); ?>
	
		
			<?php echo $form->error($model, 'username'); ?>
			<?php echo $form->error($model,'password'); ?>
						
	<div class="form-row">
		<?php echo $form->labelEx($model,  Yii::t('zii', 'Username'), array('class'=>'form-row-label')); ?>
		<?php echo $form->textField($model,'username'); ?>
	</div>

	<div class="form-row">
		<?php echo $form->labelEx($model, Yii::t('zii', 'Password'), array('class'=>'form-row-label')); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<p class="hint">
			请注意帐户安全
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="form-row">
		<?php echo CHtml::submitButton(Yii::t('zii', 'Login'),array('class'=>'black border-radius-3px bold submit')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<br>

</div>
<!--/Content-->

<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Contact Us</h1>
<div class="address">
<p class="B_text_B"><strong>联系信息</strong></p><span class="map-point"></span><p><strong></strong>科易光电技术有限公司<br><br>
地址：广州市科学城彩频路11号F1101A</p>
<p>电话:  +86 20 3206 8870<br>
传真: +86 20 3206 8887 </p>
<p> Email: keii@keii.com.cn<br>
  Website:  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->





