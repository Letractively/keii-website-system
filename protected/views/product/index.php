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
<div class="portfolio">
<ul class="portfolio-main filter">
<li class="active all-projects"><a href="" title="">所有产品</a></li>
<li class="cat-item 384"><a href="" title="">384x288</a></li>
<li class="cat-item 640"><a href="" title="">640x480</a></li>
<li class="cat-item 641"><a href="" title="">系统</a></li>
<li class="cat-item 642"><a href="" title="">工作站</a></li>
<li class="cat-item 643"><a href="" title="">服务</a></li>
</ul>
<!--Porfolio Content-->
<div class="portfolio-content three-column clear">
<div data-id="post-1" data-type="384" class="block">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc100/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc100/kc100.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">KC100</p>',array('product/kc100')); ?>
<p class="product-page-index-text-info"> 
使用384 × 288像素数、高温度分辨率的原装进口非致冷焦平面红外探测器。
</p>

<div class="sp">
</div>
</div>
<div data-id="post-2" data-type="384" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc500/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc500/kc500.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">KC500</p>',array('product/kc500')); ?>
<p class="product-page-index-text-info">
384x288非致冷探测器，4.3寸液晶触摸屏，人体工程力学设计，人性化操作界面。
<p></p>
<p></p>
<div class="sp">
</div>
</div>
<div data-id="post-3" data-type="384" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc700/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc700/kc700.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">KC700</p>',array('product/kc700')); ?>
<p class="product-page-index-text-info">
384x288非致冷探测器，设计紧凑精密，操作实用便利，实时传输记录分析。</p>
<div class="sp">
</div>
</div>
<div data-id="post-4" data-type="640" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/kc800.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">KC800</p>',array('product/kc800')); ?>
<p class="product-page-index-text-info">
640x480非致冷探测器，可旋转6“高亮度TFT触摸屏，人体工程力学设计，高速16位全辐射红外录像功能。</p>
<div class="sp">
</div>
</div>
<div data-id="post-5" data-type="640" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc790/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc790/kc790.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">KC790</p>',array('product/kc790')); ?>
<p class="product-page-index-text-info">
640x480非致冷探测器，可旋转6“高亮度TFT触摸屏，人体工程力学设计，高速16位全辐射红外录像功能。</p>
<div class="sp">
</div>
</div>
<div data-id="post-6" data-type="384" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/gl600/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/gl600/gl600.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">GL600</p>',array('product/gl600')); ?>
<p class="product-page-index-text-info">
广州科易公司精心打造的非制冷式红外气体检漏仪GL600，是国内首屈一指的可以使用于气体检漏的产品供应商。</p>
<div class="sp">
</div>
</div>
<div data-id="post-7" data-type="640" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc850/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc850/kc850.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">KC850</p>',array('product/kc850')); ?>
<p class="product-page-index-text-info">
广州科易公司精心打造的国内首屈640×480 非制冷焦平面探测器KC850.</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="sp">
</div>
</div>
<div data-id="post-8" data-type="642" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/carmobile.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">车载移动检测系统</p>',array('product/carmobile')); ?>
<p class="product-page-index-text-info">
自主研发了线路车载检测系统，解决了电网线路及城市配网检测中使用人工徒步检测所存在问题。</p>
<div class="sp">
</div>
</div>
<div data-id="post-9" data-type="641" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/substation/substation.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">变电站红外监测系统</p>',array('product/substation')); ?>
<p class="product-page-index-text-info">
广州科易光电技术有限公司推出的变电站红外监测系统，真正实现了变电站红外监测的智能化管理。</p>
<div class="sp">
</div>
</div>
<div data-id="post-10" data-type="641" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/index_cn.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/helicopter.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">直升机巡检系统</p>',array('product/helicopter')); ?>
<p class="product-page-index-text-info">
广州科易公司的所有主要产品均属于自主研发，拥有自主知识产权，并拥有所有源代码程序。</p>
<div class="sp">
</div>
</div>
<div data-id="post-12" data-type="642" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/preventive/preventive.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/preventive/preventive.jpg" alt=""></a>
<?php echo CHtml::link('<p class="product-page-index-text-title">外热成像预知性检测服务</p>',array('service/aftersales')); ?>
<p class="product-page-index-text-info">
广州科易公司退出红外热成像预知性检测服务，专业红外工程师检测...</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="sp">
</div>
</div>

</div>
<!--/Porfolio Content-->
</div>
</div>
<!--/Content-->
</div>
</div>
<!--/Body content-->
