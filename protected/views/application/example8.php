<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'Automation')=>array('/application&example=8'),
);

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Automation');

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
自动化行业
</th></tr>
</thead>
<tbody>
<tr><td>
热像仪能够通过产品表面温度分布检测质量，使您提前发现异常状况，同时也可以监测生产设备，将热分布可视化，监控生产过程从而避免财产损失。
<br>
比如汽车生产流程中焊接，预热，铸模等。
</td></tr>

<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e8-01a.jpg" width="200">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e8-02a.jpg"  width="200">
&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e8-03a.jpg"  width="200">
&nbsp;
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