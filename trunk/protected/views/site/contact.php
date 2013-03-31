<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'menu.index.contact');
?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="post entry-content" style="margin:0 auto; width: 560px">
<?php $this->renderPartial('//site/contact.content.'.Yii::app()->language); ?>
<div class="clear"></div>
</div>
</div>
<!--/Content-->
<!--Sidebar-->
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->


