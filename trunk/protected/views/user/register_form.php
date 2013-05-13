<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<div id="registerform">
<div id="formwrapper">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
)); ?>
<?php echo $form->errorSummary($model); ?>

<h3>用户注册</h3>
    <fieldset>
        <legend>用户基本资料</legend>
        <div>
            <label for="User_username" class="required"><?php echo Yii::t('zii', 'user.name'); ?></label>
			<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>128)); ?>
        </div>
        <div>
           <label for="User_password" class="required"><?php echo Yii::t('zii', 'user.password'); ?></label>
			<?php echo $form->passwordField($model,'password',array('size'=>15,'maxlength'=>128)); ?>
        </div>
        <div>
        <label for="User_password" class="required"><?php echo Yii::t('zii', 'user.passwordRepeat')?></label>
		<?php echo $form->passwordField($model,'password_repeat',array('size'=>15,'maxlength'=>32)); ?>
        </div>

    </fieldset>
    <br />
    <h3>未注册创建帐户</h3>
    <fieldset>
        <legend>用户公司资料</legend>
        <p><strong>您的电子邮箱不会被公布出去,但是必须填写.</strong></p>
        <div>
        <label for="User_corporation" class="required">	<?php echo Yii::t('zii', 'user.corporation'); ?></label>
		<?php echo $form->textField($model,'corporation',array('size'=>20,'maxlength'=>128)); ?>
        <br />    
    </div>
    <div>
    <label for="User_userjobtitle" class="required">	<?php echo Yii::t('zii', 'user.jobtitle'); ?></label>
	<?php echo $form->textField($model,'userjobtitle',array('size'=>20,'maxlength'=>128)); ?>
    </div>
        <div>
        <label for="User_contact_name" class="required">	<?php echo Yii::t('zii', 'user.contact_name'); ?></label>
<?php echo $form->textField($model,'contact_name',array('size'=>20,'maxlength'=>128)); ?>
    </div>    
        <div>
        <label for="User_contact_number" class="required">	<?php echo Yii::t('zii', 'user.contact_number'); ?></label>
<?php echo $form->textField($model,'contact_number',array('size'=>20,'maxlength'=>128)); ?>
  
    </div>
        <div>
        <label for="User_email" class="required">	<?php echo Yii::t('zii', 'user.email'); ?></label>
		<?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>128)); ?>
        *<br />

    </div>
        <div class="enter">
        		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('zii', 'user.register') : 'Save'); ?>        
    </div>

        <p><strong>* 在提交您的注册信息时, 我们认为您已经同意了我们的服务条款.<br /> 
        * 这些条款可能在未经您同意的时候进行修改.</strong></p>    
    </fieldset>
    <?php $this->endWidget(); ?>
    
</div>
</div>