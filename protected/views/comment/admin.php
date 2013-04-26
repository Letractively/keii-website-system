<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Create Comment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="full-width-wrapper" >
<div style="margin: 0 auto;width:940px;">

<h1>留言管理</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
			array(
					'header'=>'留言日期',
					'name'=>'commit_date',
					'value'=>'date("Y-m-d H:i:s",$data->commit_date)',
					'htmlOptions'=>array('width'=>'110'),
			),
			array(
					'header'=>'留言用户',
					'name'=>'contact_info',
					'value'=>$model->contact_info,
					'htmlOptions'=>array('width'=>'110'),
			),
		'comment_content',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
</div>
