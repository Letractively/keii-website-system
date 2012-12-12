<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 基础原理';
$this->breadcrumbs=array(
		Yii::t('zii', '红外理论')=>array('/site/principle'),
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

<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="650" height="500">
  <param name="movie" value="swf/04.swf">
  <param name="quality" value="high">
  <param name="wmode" value="opaque">
  <param name="swfversion" value="6.0.65.0">
  <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
  <param name="expressinstall" value="Scripts/expressInstall.swf">
  <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="swf/01.swf" width="650" height="500">
    <!--<![endif]-->
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="swfversion" value="6.0.65.0">
    <param name="expressinstall" value="Scripts/expressInstall.swf">
    <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
    <div>
      <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<!--Pagination-->
<div class="page-pagination">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/principle&page=1" title="">热</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/principle&page=2" title="">热传递</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/principle&page=3" title="">热对流</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/principle&page=4" title="" class="current">电磁波谱与红外线</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/principle&page=5" title="">红外热像仪的分类</a>
</div>
<!--/Pagination-->


</div>

</div>
<!--/Content-->
<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Products</h1>
<?php $this->renderPartial('//product/menu2'); ?>
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
  Website:  <a href="www.keii.com.cn" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->
<div class='bottom-separator' ></div>