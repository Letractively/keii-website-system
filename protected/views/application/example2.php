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
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e2-01a.jpg" width="200">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e2-02a.jpg" width="200">
<div style="height: 10px"></div>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e2-03a.jpg" width="200">
&nbsp;&nbsp;
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e2-04a.jpg" width="200">
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