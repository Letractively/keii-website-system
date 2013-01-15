<?php
/* @var $this ApplicationController */

$this->breadcrumbs=array(
	Yii::t('zii', 'Industry')=>array('/application'),
	Yii::t('zii', 'Gas Leak Checking')=>array('/application&example=10'),
);

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Gas Leak Checking');

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
气体泄漏检测
</th></tr>
</thead>
<tbody>
<tr><td>

</td></tr>
<tr>
<td><br>
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