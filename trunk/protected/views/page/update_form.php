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

	<INPUT TYPE=hidden NAME=Page[page_category]  VALUE=<?php echo $model->page_category?>>
	<INPUT TYPE=hidden NAME=Page[page_language]  VALUE=<?php echo $model->page_language?>>

	
	
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