<?php
$this->pageTitle=Yii::app()->name . ' - '.$this->example_name;
?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="application-entry-content">
<?php $this->renderPartial('//application/example'.$this->example_no.'.content.'.Yii::app()->language); ?>		
<div class="clear"></div>

</div>
</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//application/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->