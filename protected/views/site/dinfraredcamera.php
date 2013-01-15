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
<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>

<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/dinfraredcamera.jpg" width="640" height="400">


<div class="clear"></div>

</div>
</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//site/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->