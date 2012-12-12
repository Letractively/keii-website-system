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
<div class="header-text">
<?php 
$this->widget('zii.widgets.CBreadcrumbs', array(
	'links'=>$this->breadcrumbs,
));
?>
<div style="width: 75px; height: 40px; left: -1px;">&nbsp;</div>
</div>
<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>

<div style="margin:0 auto; width: 560px">

<p class="B_text_B"><strong>培训课程</strong></p>

<p>培训课程向科易进行培训课程咨询：<p>

<p>免费电话咨询热线：  +86 20 3206 8870</p>

<p>邀请科易销售工程师上门免费演示</p>

<p>到科易广州办公室参观咨询：广州市科学城彩频路11号F1101A</p>

<p>科易专业工程师将根据您的需求，提供最合适的产品和应用方案。</p>

<p>如果您对科易接洽人员的服务不甚满意，请致电投诉热线：  +86 20 3206 8870</p>

</div>
</div>

</div>
<!--/Content-->
<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Products</h1>
<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'',
			'htmlOptions'=>array('class'=>'list cat'),
			'items'=>array(
				array('label'=>'KC100红外热像仪', 'url'=>array('/product/kc100')),
				array('label'=>'KC500红外热像仪', 'url'=>array('/product/kc500')),
				array('label'=>'KC700红外热像仪', 'url'=>array('/product/kc700')),
				array('label'=>'KC790红外热像仪', 'url'=>array('/product/kc790')),
				array('label'=>'KC800红外热像仪', 'url'=>array('/product/kc800')),
				array('label'=>'SF6气体检漏仪GL600', 'url'=>array('/product/gl600'))
			),
			));
?>
</div>
<!--/box-->
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Contact Us</h1>
<div class="address">
<p class="B_text_B"><strong>联系信息</strong></p><span class="map-point"></span><p><strong></strong>科易光电技术有限公司<br><br>
地址：广州市科学城彩频路11号F1101A</p>
<p>电话:  +86 20 3206 8870<br>
传真: +86 20 3206 8887 </p>
<p> Email: keii@keii.com.cn<br>
  Website:  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->