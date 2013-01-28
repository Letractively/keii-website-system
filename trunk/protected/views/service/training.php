<?php
/* @var $this ServiceController */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', '培训课程');

$this->breadcrumbs=array(
		Yii::t('zii', '培训课程')=>array('/service/training'),
);
?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>

<div style="margin:0 auto; width: 560px">

<p class="B_text_B"><strong>培训课程</strong></p>

<p>培训课程向科易进行培训课程咨询：<p>

<p>免费电话咨询热线：  +86 20 3206 8707</p>

<p>邀请科易销售工程师上门免费演示</p>

<p>到科易广州办公室参观咨询：广州市科学城彩频路11号F1101A</p>

<p>科易专业工程师将根据您的需求，提供最合适的产品和应用方案。</p>

<p>如果您对科易接洽人员的服务不甚满意，请致电投诉热线：  +86 20 3206 8870</p>

</div>
</div>

</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//service/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->