<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
	<?php echo CHtml::encode($data->author_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modify_time')); ?>:</b>
	<?php echo CHtml::encode($data->modify_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_title')); ?>:</b>
	<?php echo CHtml::encode($data->article_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_description')); ?>:</b>
	<?php echo CHtml::encode($data->article_description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('article_content')); ?>:</b>
	<?php echo CHtml::encode($data->article_content); ?>
	<br />

	*/ ?>

</div>