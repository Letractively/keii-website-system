<?php
/* @var $this ServiceController */
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'menu.index.pre-sales_enquiry');
?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="post entry-content">
<?php $this->renderPartial('//service/aftersales.content.'.Yii::app()->language); ?>		
</div>

</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//service/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->
