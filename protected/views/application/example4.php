<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'Petrochemical Industry')=>array('/application&example=4'),
);


$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Petrochemical Industry');

?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="header-text">
<?php 
$this->widget('zii.widgets.CBreadcrumbs', array(
	'links'=>$this->breadcrumbs,
));
?>
<div style="width: 75px; height: 40px; left: -1px;">&nbsp;</div>
</div>

<div class="application-entry-content">
<table>
<thead>
<tr><th>
石化工业
</th></tr>
</thead>
<tbody>
<tr><td>
石油化工生产中的许多重要设备是在高温压状况下工作的，潜伏差易燃、易爆危险，要求对生产过程进行严格的在线监测，以及时消除隐患。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e4-01a.jpg" width="120" height="100">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e4-02a.jpg"  width="120" height="100">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e4-03a.jpg"  width="120" height="100">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e4-04a.jpg"  width="120" height="100">
</td>
</tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e4-05a.jpg"  width="180" height="120">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e4-06a.jpg"  width="180" height="120">
</td>
</tr>
</tbody>
</table>
<div class="clear"></div>
</div>
</div>
<!--/Content-->
<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Products</h1>
<?php
$this->renderPartial('//product/menu2');
?>
</div>
<!--/box-->
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Contact Us</h1>
<div class="address">
<p class="B_text_B"><strong>联系信息</strong></p><span class="map-point"></span><p><strong></strong>科易光电技术有限公司<br><br>
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