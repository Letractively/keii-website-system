<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'page_name'); ?>
		<?php echo $form->textField($model,'page_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'page_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_alias'); ?>
		<?php echo $form->textField($model,'page_alias',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'page_alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_category'); ?>
		<?php echo CHtml::dropDownList( 'Page[page_category]','Page_page_category',array('0' => 'index', '1' => 'company', '2' => 'product', '3' => 'gallery', '4' => 'thermography theory', '5' => 'service'));?>
		<?php echo $form->error($model,'page_category'); ?>		
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'page_language'); ?>
		<?php echo CHtml::dropDownList( 'Page[page_language]','Page_page_language',array('zh_cn' => '中文', 'en' => 'English'));?>
		<?php echo $form->error($model,'page_language'); ?>
	</div>
	
	
	<div class="row">
		<?php $this->widget('application.extensions.TheCKEditor.theCKEditorWidget',array(
					    'model'=>$model,                # Data-Model (form model)
					    'attribute'=>'page_content',         # Attribute in the Data-Model
					    'height'=>'400px',
					    'width'=>'100%',
					    'toolbarSet'=>'Full',          # EXISTING(!) Toolbar (see: ckeditor.js)
					    'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
					                                    # Path to ckeditor.php
					    'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
					                                    # Relative Path to the Editor (from Web-Root)
					    'css' => Yii::app()->baseUrl.'/css/index.css',
					                                    # Additional Parameters
					) ); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->