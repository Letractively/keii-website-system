<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'How to choose?');


$this->breadcrumbs=array(
		Yii::t('zii', 'How to choose?')=>array('/site/choose'),
);
?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<?php $this->renderPartial('//site/choose.content.'.Yii::app()->language); ?>
</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//site/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->
