<?php	
/* @var $this CommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comments',
);

?>



<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="post entry-content" style="margin:0 auto; width: 560px">


<?php
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'summaryText'=>' ',
	'pager' => array(
		'header' => '',
		'firstPageLabel' => '&lt;&lt;',
		'lastPageLabel' => '&gt;&gt;',
		'prevPageLabel' => '&lt; 前进',
		'nextPageLabel' => '后退 &gt;',
	),
)); ?>


<div class="clear"></div>
</div>
</div>
<!--/Content-->
<!--Sidebar-->

<div id="sidebar" class="float-right">
<div class="box">
<?php $this->renderPartial('//site/contact.content.'.Yii::app()->language); ?>

</div>
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->
