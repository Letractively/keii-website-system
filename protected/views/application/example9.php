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
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e9-01a.jpg" width="200">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e9-02a.jpg" width="200">
<br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e9-03a.jpg" width="200">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e9-04a.jpg" width="200">
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