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


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<label for="Product_product_name" class="required">产品名称</label>
		<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'product_name'); ?>
	</div>

		<INPUT TYPE=hidden NAME=Product[product_alias]  VALUE=<?php echo $model->product_alias?>>
		<INPUT TYPE=hidden NAME=Product[page_language]  VALUE=<?php echo $model->page_language?>>
		<INPUT TYPE=hidden NAME=Product[page_summary]  VALUE=<?php echo CHtml::encode($model->page_summary)?>>
		<INPUT TYPE=hidden NAME=Product[product_series]  VALUE=<?php echo CHtml::encode($model->product_series)?>>
		

	<br>
	
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
					<br>
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
						<br>
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
						<br>
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
						<br>
	</div>
	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->