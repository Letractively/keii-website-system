<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'R&D')=>array('/application&example=7'),
);
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'R&D');

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
研发领域应用
</th></tr>
</thead>
<tbody>
<tr><td>
1.如今在众多科研领域中，热像仪已成为不可或缺的检测仪器。<br>
在电子领域，它可以用来检测处于设计阶段或生产中的复杂电路板，以免使用中发生故障和产品召回。同样也可用于维修工作，通过热像仪可以迅速找到并排除故障。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e7-01a.jpg" width="400">
</td>
</tr>
<tr><td>
<br>

2.在汽车领域，热像仪提供直观的发动机温度分布，使其迅速发现故障区域。
<br>
现在大多数汽车的常见功能，例如车窗除霜、座椅加热等功能也是在热像仪产品帮助下进行开发测试的。
</td></tr>
<tr>
<td><br>
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/application/e7-02a.jpg"  width="400">
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