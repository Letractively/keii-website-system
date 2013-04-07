<?php
/* @var $this AboutController */
$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'About Keii' );

$this->breadcrumbs = array (
		Yii::t ( 'zii', 'About Keii' ) => array (
				'/about' 
		) 
);

?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper" id="body-content">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">
			<div class="header-text">
<?php
// $this->widget('zii.widgets.CBreadcrumbs', array(
// 'links'=>$this->breadcrumbs,
// ));
echo '&nbsp';
?>
			</div>
			
<?php $this->renderPartial('//about/index.content.'.Yii::app()->language); ?>		
			
		</div>
		<!--/Content-->
	</div>
</div>
<!--/Body content-->