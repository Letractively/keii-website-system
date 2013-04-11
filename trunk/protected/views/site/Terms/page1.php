<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 术语释义';

$this->breadcrumbs=array(
		Yii::t('zii', '术语释义')=>array('/site/terms'),
);

?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>
<div style="margin:0 auto; width: 560px">

<?php $this->renderPartial('//site/Terms/page1.content.'.Yii::app()->language); ?>		


<!--Pagination-->
<div class="page-pagination">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=1" title="" class="current">1</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=2" title="" >2</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=3" title="" >3</a>
</div>
<!--/Pagination-->
</div>
</div>

</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//site/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->