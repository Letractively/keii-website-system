<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'Building Diagnostics')=>array('/application&example=1'),
);

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Building Diagnostics');

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
建筑行业
</th></tr>
</thead>
<tbody>
<tr><td>
诊断建筑物温度分布，定位建筑绝热性、管道堵塞、湿气凝结、电气设备等问题，提供可视红外图像和温度数据。不仅节约日常能源消耗，同时也排除安全隐患。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e1-01a.jpg" width="190" height="140">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e1-02a.jpg"  width="190" height="140">
</td>
</tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e1-03a.jpg"  width="190" height="140">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e1-04a.jpg"  width="190" height="140">
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