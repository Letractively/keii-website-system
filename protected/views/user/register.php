<?php
/* @var $this UserController */
/* @var $model User */
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Login');
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left">


<?php echo $this->renderPartial('register_form', array('model'=>$model)); ?>

<br>

</div>
<!--/Content-->

</div>
</div>
<!--/Body content-->





