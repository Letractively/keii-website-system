<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'Electrical')=>array('/application&example=9'),
);

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Electrical');

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
电力行业
</th></tr>
</thead>
<tbody>
<tr><td>
作为直接有效的诊断预防工具，在电力系统维修检查中红外线热像仪可以从一个安全距离测量出物体的表面温度。在红外图像中，输变电线路的不良接触点会产生高温热点。热像仪能够迅速定位高温异常点，避免了断电和重大故障发生。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e9-01a.jpg" width="150" height="100">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e9-02a.jpg"  width="150" height="100">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e9-03a.jpg" width="150" height="100">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e9-04a.jpg"  width="150" height="100">
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
  Website:  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->