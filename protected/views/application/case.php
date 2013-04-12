<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
);
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Cases');

?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<?php $this->renderPartial('//application/case.content.'.Yii::app()->language); ?>		
</div>
</div>
<!--/Body content-->