<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'Predictive Maintenance')=>array('/application&example=5'),
);
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Predictive Maintenance');

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
预防性检测应用 
</th></tr>
</thead>
<tbody>
<tr><td>
几乎所有的机电设备在发生故障以前都会不规刚地发热，根据这一特点，红外热像仪在制造业车间环境检测方面成为了尤其高效的诊断工具。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e5-01a.jpg" width="120" height="108">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e5-02a.jpg"  width="120" height="108">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e5-03a.jpg"  width="120" height="108">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e5-04a.jpg"  width="120" height="108">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e5-05a.jpg"  width="120" height="108">
</td>
</tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e5-06a.jpg"  width="180" height="120">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e5-07a.jpg"  width="180" height="120">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e5-08a.jpg"  width="180" height="120">

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