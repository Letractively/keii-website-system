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
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e5-01a.jpg" width="200">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e5-02a.jpg" width="200">
<div style="height: 10px"></div>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e5-03a.jpg" width="200">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e5-04a.jpg" width="200">
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