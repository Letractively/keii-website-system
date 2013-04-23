<?php
/* @var $this ProductController */
/* @var $model product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_name'); ?>
		<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'product_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_alias'); ?>
		<?php echo $form->textField($model,'product_alias',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'product_alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_language'); ?>
		<?php echo CHtml::dropDownList( 'Product[page_language]','product_page_language',array('zh_cn' => '中文', 'en' => 'English'));?>
		<?php echo $form->error($model,'page_language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_summary'); ?>
		<?php echo $form->textField($model,'page_summary',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'page_summary'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'页面内容'); ?>
		<?php $this->widget('application.extensions.TheCKEditor.theCKEditorWidget',array(
					    'model'=>$model,                # Data-Model (form model)
					    'attribute'=>'product_page_content',         # Attribute in the Data-Model
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

	<div class="row">
			<?php echo $form->labelEx($model,'产品介绍'); ?>
		<?php $this->widget('application.extensions.TheCKEditor.theCKEditorWidget',array(
					    'model'=>$model,                # Data-Model (form model)
					    'attribute'=>'product_introduction',         # Attribute in the Data-Model
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
	
	<div class="row">
			<?php echo $form->labelEx($model,'产品参数'); ?>
		<?php $this->widget('application.extensions.TheCKEditor.theCKEditorWidget',array(
					    'model'=>$model,                # Data-Model (form model)
					    'attribute'=>'product_parameter',         # Attribute in the Data-Model
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
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'产品图库'); ?>
		<?php $this->widget('application.extensions.TheCKEditor.theCKEditorWidget',array(
					    'model'=>$model,                # Data-Model (form model)
					    'attribute'=>'product_gallery',         # Attribute in the Data-Model
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
	


	<div class="row">
		<?php echo $form->labelEx($model,'product_series'); ?>
		<?php echo CHtml::dropDownList( 'Product[product_series]','Product_product_series',array('384x288' => '384x288', '640x480' => '640x480', 'product.system' => '系统', 'product.service' => '服务'));?>
		<?php echo $form->error($model,'product_series'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->