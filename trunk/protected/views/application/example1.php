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
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e1-01a.jpg" width="200">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e1-02a.jpg" width="200">
<div style="height: 10px"></div>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e1-03a.jpg" width="200">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e1-04a.jpg" width="200">
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!--/Content-->

<!--Sidebar-->
<?php $this->renderPartial('//application/sidebar'); ?>
<!--/Sidebar-->

</div>
</div>
<!--/Body content-->