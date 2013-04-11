<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 术语释义';

$this->breadcrumbs=array(
		Yii::t('zii', '术语释义')=>array('/site/terms&page=3'),
);
?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">

<div class="post entry-content">
<div style="margin:0 auto; width: 560px">

<?php $this->renderPartial('//site/Terms/page3.content.'.Yii::app()->language); ?>		



<!--Pagination-->
<div class="page-pagination">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=1" title="" >1</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=2" title="" >2</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=3" title="" class="current">3</a>
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