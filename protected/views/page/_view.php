<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_name')); ?>:</b>
	<?php echo CHtml::encode($data->page_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_alias')); ?>:</b>
	<?php echo CHtml::encode($data->page_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_language')); ?>:</b>
	<?php echo CHtml::encode($data->page_language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_content')); ?>:</b>
	<?php echo CHtml::encode($data->page_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_category')); ?>:</b>
	<?php echo CHtml::encode($data->page_category); ?>
	<br />


</div>