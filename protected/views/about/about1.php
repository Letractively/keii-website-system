<?php
/* @var $this AboutController */
$this->breadcrumbs = array (
		Yii::t ( 'zii', 'About Keii' ) => array (
				'/about' 
		),
		Yii::t ( 'zii', 'Profile' ) => array (
				'/about/page1' 
		) 
);

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'Profile' );

?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper" id="body-content">
		<!--Content-->
		<div id="content" class="float-left content-left">
			<div class="header-text">

<?php
// $this->widget('zii.widgets.CBreadcrumbs', array(
// 'links'=>$this->breadcrumbs,
// ));
echo '&nbsp';
?>
<?php $this->renderPartial('//about/about1.content.'.Yii::app()->language); ?>		


		</div>
		<!--/Content-->

	</div>
</div>
<!--/Body content-->