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
<ul id="breadcrumbs">
<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index" title=""><?php echo Yii::t('zii', 'Home') ?></a></li>
<li class="current"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=user/register" title="">用户注册</a>
</li>
</ul>
<h1 class="first-word double-color sp">Register</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<br>

</div>
<!--/Content-->

<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Contact Us</h1>
<div class="address">
<p class="B_text_B"><strong>联系信息</strong></p><span class="map-point"></span><p><strong></strong>科易光电技术有限公司<br><br>
地址：广州市科学城彩频路11号F1101A</p>
<p>电话:  +86 20 3206 8870<br>
传真: +86 20 3206 8887 </p>
<p> Email: keii@keii.com.cn<br>
  Website:  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->





