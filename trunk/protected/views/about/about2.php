<?php
/* @var $this AboutController */

$this->breadcrumbs=array(
	Yii::t('zii', 'About Keii')=>array('/about'),
	Yii::t('zii', 'Certificate')=>array('/about/page2'),
);


$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Certificate');

?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="header-text">
<?php 
//$this->widget('zii.widgets.CBreadcrumbs', array(
//	'links'=>$this->breadcrumbs,
//));
echo '&nbsp';
?>
<?php $this->renderPartial('//about/about2.content.'.Yii::app()->language); ?>		

</div>
<!--/Content-->

</div>
</div>
<!--/Body content-->