<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'Metallurgy and steel')=>array('/application&example=3'),
);

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Metallurgy and steel');
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
冶金及钢铁工业应用 
</th></tr>
</thead>
<tbody>
<tr><td>
经外热像仪可用于从冶炼到轧钢的各个环节，如：连铸板坯温度的测量；出炉板坯温度的测定与控制；热轧辊表面温度的测定；钢锭温度的测定等方面。同时，还可以使用热像仪能检测耐火及绝热材料、各种反应炉的腐蚀、破裂、减薄、堵塞以及泄漏等有关信息，对防止事故发生和减少能耗十分有效。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e3-01a.jpg"  width="494">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e3-02a.jpg"  width="494">
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