<?php
/* @var $this ProductsController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</b>
	<?php echo CHtml::encode($data->product_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_alias')); ?>:</b>
	<?php echo CHtml::encode($data->product_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_language')); ?>:</b>
	<?php echo CHtml::encode($data->page_language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_summary')); ?>:</b>
	<?php echo CHtml::encode($data->page_summary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_page_content')); ?>:</b>
	<?php echo CHtml::encode($data->product_page_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_introduction')); ?>:</b>
	<?php echo CHtml::encode($data->product_introduction); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('product_parameter')); ?>:</b>
	<?php echo CHtml::encode($data->product_parameter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_gallery')); ?>:</b>
	<?php echo CHtml::encode($data->product_gallery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_series')); ?>:</b>
	<?php echo CHtml::encode($data->product_series); ?>
	<br />

	*/ ?>

</div>