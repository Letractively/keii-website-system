<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Product');


$this->breadcrumbs=array(
		Yii::t('zii', 'Product')=>array('/product'),
);

?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="fixed-width-wrapper">
<div class="header-text">
<?php 
//$this->widget('zii.widgets.CBreadcrumbs', array(
//	'links'=>$this->breadcrumbs,
//));
echo '&nbsp';
?>
</div>

<?php $page =Page::model()->find(array('condition'=>'page_alias=:page_alias and page_language=:page_language','params'=>array(':page_alias'=>'products.html',':page_language'=> Yii::app()->language )));
		#$model=Page::model()->findAllByAttributes(array('page_alias'=>$alias , 'page_language' => Yii::app()->language ));
		if($page===null)
			throw new CHttpException(404,'The requested page does not exist.');
		echo $page->page_content;
?>

</div>
<!--/Content-->
</div>
</div>
<!--/Body content-->
