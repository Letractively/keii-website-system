<?php
/* @var $this UserController */
/* @var $model User */
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Login');
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="header-text">
<br><br>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<br>

</div>
<!--/Content-->

<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<div class="address">
<br>
<p class="B_text_B"><strong>联系信息</strong></p>
<p><strong></strong>科易光电技术有限公司<br>
地址：广州市科学城彩频路11号F1101A</p>
<p>电话:  +86 20 3206 8870<br>
传真: +86 20 3206 8887 </p>
<p> Email: keii@keii.com.cn<br>
  Website:  <a href="www.keii.com.cn" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->





