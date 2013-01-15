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
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e4-01a.jpg" width="200">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e4-02a.jpg"  width="200">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e4-03a.jpg"  width="200">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e4-04a.jpg"  width="200">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e4-05a.jpg"  width="200">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e4-06a.jpg"  width="200">
</td>
</tr>
</tbody>
</table>
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