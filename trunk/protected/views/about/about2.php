<?php
/* @var $this AboutController */

$this->breadcrumbs=array(
	Yii::t('zii', 'About Keii')=>array('/about'),
	Yii::t('zii', 'Certificate')=>array('/about/page2'),
);


$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Certificate');

?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="header-text">
<?php 
//$this->widget('zii.widgets.CBreadcrumbs', array(
//	'links'=>$this->breadcrumbs,
//));
echo '&nbsp';
?>
<div style="width: 75px; height: 40px; left: -1px;">&nbsp;</div>
</div>
<div class="post entry-content">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;广州科易光电技术有限公司成立于2003年并成为工业和科研领域中红外热成像单机和系统的生产供应商，在2008年被认证为高新技术企业。</p>

<div class="about_img">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/about/companyprofile08.jpg" class=" align-left img-border">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/about/companyprofile03.jpg" class=" align-right img-border">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/about/companyprofile04.jpg" class=" align-left img-border">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/about/companyprofile05.jpg" class=" align-right img-border">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/about/companyprofile06.jpg" class=" align-left img-border">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_cn/about/companyprofile07.jpg" class=" align-right img-border">

</div>

<p></p><p></p><p></p><p></p>
<div class="clear"></div>

</div>
</div>
<!--/Content-->

</div>
</div>
<!--/Body content-->