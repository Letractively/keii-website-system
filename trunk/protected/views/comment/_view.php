<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view">


	<b>留言日期:</b>
	<?php echo CHtml::encode( date('Y-m-d H:i:s' , $data->commit_date)); ?>

	<b>留言内容:</b>
	<?php echo CHtml::encode($data->comment_content); ?>


</div>