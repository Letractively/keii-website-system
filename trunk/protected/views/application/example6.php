<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
		Yii::t('zii', 'Industry')=>array('/application'),
		Yii::t('zii', 'Pulp and Paper Industry')=>array('/application&example=6'),
);

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Pulp and Paper Industry');
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
造纸工业
</th></tr>
</thead>
<tbody>
<tr><td>
随着用户对纸制品的品质要求越来越高。作为非常有效的红外检测工具，红外热像仪对在造纸厂的质量控制领域中已经成为一个关键因素，通过控制纸张表面温度来控制湿度，从而最大化提高产量，改善产品质量。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e6-01a.jpg" width="200">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e6-02a.jpg"  width="200">
<br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e6-03a.jpg"  width="200">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/application/e6-04a.jpg"  width="200">
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