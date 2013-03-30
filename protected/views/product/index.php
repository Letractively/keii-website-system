<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Product');


$this->breadcrumbs=array(
		Yii::t('zii', 'Product')=>array('/product'),
);

?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="fixed-width-wrapper">
<div class="header-text">
<?php 
//$this->widget('zii.widgets.CBreadcrumbs', array(
//	'links'=>$this->breadcrumbs,
//));
echo '&nbsp';
?>
</div>

<?php $this->renderPartial('//product/page/index.'.Yii::app()->language); ?>


</div>
<!--/Content-->
</div>
</div>
<!--/Body content-->
