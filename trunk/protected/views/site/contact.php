<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Contact Us');
$this->breadcrumbs=array(
		Yii::t('zii', 'Contact Us')=>array('/site/contact'),
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
<div class="post entry-content" style="margin:0 auto; width: 560px">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;广州科易光电技术有限公司成立于2003年并成为工业和科研领域中红外热成像单机和系统的生产供应商， <strong>在2008年被认证为高新技术企业。</strong></p>
<p>我们的目标是成为红外热成像系统制造领域中仪器、系统以及相关软件的领先供应商。 </p>
<div class="first one-half address">
<p class="B_text_B"><strong>联系信息</strong></p><span class="map-point"></span><p><strong></strong>科易光电技术有限公司<br>
            地址：广州市科学城彩频路11号F1101A</p>
<p> 电话: +86 20 3206 8870<br>
  传真: +86 20 3206 8887</p>
<p> Email:keii@keii.com.cn<br>
  Website:  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index" title="">www.keii.com.cn</a></p>
</div>
<div class="clear"></div>

</div>
</div>
<!--/Content-->
<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">More Links</h1>
<ul class="list cat">
<li><a href="#" title="">友情链接1</a></li>
<li><a href="#" title="">友情链接2</a></li>
<li><a href="#" title="">友情链接3</a></li>
<li><a href="#" title="">友情链接4</a></li>
<li><a href="#" title="">友情链接5</a></li>
</ul>
</div>
<!--/box-->
<!--box-->
<div class="box">
<p class="B_text_B"><strong>公司地址地图</strong></p>
<div class="img-border preloading-light"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/locateus.jpg" alt="">
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->


