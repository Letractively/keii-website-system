<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'Cement and Glass')=>array('/application&example=2'),
);

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Cement and Glass');
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
水泥和玻璃工业
</th></tr>
</thead>
<tbody>
<tr><td>
对于水泥或其它拥有回转窑的生产企业来说，使用的红外热成像系统，可以长期不间断地实时监控回转窑窑体表面温度，间接掌握窑内结皮各结图情况，从而使生产厂家可以及时采取必要措施防止窑衬和窑体的损坏，提高窑的动转率，实现回转窑的经济运行，以延长窑体的安全运转周期。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e2-01a.jpg" width="190" height="120">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e2-02a.jpg"  width="190" height="120">
</td>
</tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e2-03a.jpg"  width="140" height="100">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e2-04a.jpg"  width="140" height="100">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e2-05a.jpg"  width="140" height="100">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/application/e2-06a.jpg"  width="140" height="100">
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