<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Dynamic infrared camera');
$this->breadcrumbs=array(
	Yii::t('zii', 'Dynamic infrared camera')=>array('/site/dinfraredcamera'),
);
?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<?php $this->renderPartial('//site/dinfraredcamera.content.'.Yii::app()->language); ?>
</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//site/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->