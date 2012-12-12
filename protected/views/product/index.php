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
$this->widget('zii.widgets.CBreadcrumbs', array(
	'links'=>$this->breadcrumbs,
));
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
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/100.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/kc100.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">KC100</h3>',array('product/kc100')); ?>
<p> 使用384 × 288像素数、高温度分辨率的原装进口非致冷焦平面红外探测器。</p>

<div class="sp">
</div>
</div>
<div data-id="post-2" data-type="384" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/500.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/kc500.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">KC500</h3>',array('product/kc500')); ?>
<p>384x288非致冷探测器，4.3寸液晶触摸屏，人体工程力学设计，人性化操作界面。
<p></p>
<p></p>
<div class="sp">
</div>
</div>
<div data-id="post-3" data-type="384" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/700.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/kc700.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">KC700</h3>',array('product/kc700')); ?>
<p>384x288非致冷探测器，设计紧凑精密，操作实用便利，实时传输记录分析。</p>
<div class="sp">
</div>
</div>
<div data-id="post-4" data-type="640" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/800.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/kc800.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">KC800</h3>',array('product/kc800')); ?>
<p>640x480非致冷探测器，可旋转6“高亮度TFT触摸屏，人体工程力学设计，高速16位全辐射红外录像功能。</p>
<div class="sp">
</div>
</div>
<div data-id="post-5" data-type="640" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/790.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/kc790.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">KC790</h3>',array('product/kc790')); ?>
<p>640x480非致冷探测器，可旋转6“高亮度TFT触摸屏，人体工程力学设计，高速16位全辐射红外录像功能。</p>
<div class="sp">
</div>
</div>
<div data-id="post-6" data-type="384" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/600.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">GL600</h3>',array('product/gl600')); ?>
<p>广州科易公司精心打造的非制冷式红外气体检漏仪GL600，是国内首屈一指的可以使用于气体检漏的产品供应商。</p>
<div class="sp">
</div>
</div>
<div data-id="post-7" data-type="640" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/kc850.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/kc850.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">KC850</h3>',array('product/kc850')); ?>
<div style='padding-bottom: 20px;'></div>
<p>广州科易公司精心打造的国内首屈640×480 非制冷焦平面探测器KC850.</p>
<div class="sp">
</div>
</div>
<div data-id="post-8" data-type="642" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">Mobile Mounted Inspection System</h3>',array('product/carmobile')); ?>
<p>自主研发了线路车载检测系统，解决了电网线路及城市配网检测中使用人工徒步检测所存在问题。</p>
<div class="sp">
</div>
</div>
<div data-id="post-9" data-type="641" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">Substation infrared monitoring system</h3>',array('product/substation')); ?>
<p>广州科易光电技术有限公司推出的变电站红外监测系统，真正实现了变电站红外监测的智能化管理。</p>
<div class="sp">
</div>
</div>
<div data-id="post-10" data-type="641" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Helicopter.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Helicopter.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">Helicopter Power inspection system</h3>',array('product/helicopter')); ?>
<p>广州科易公司的所有主要产品均属于自主研发，拥有自主知识产权，并拥有所有源代码程序。</p>
<div class="sp">
</div>
</div>
<div data-id="post-11" data-type="642" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/workstation.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/workstation.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">Mobile infrared workstation</h3>',array('product/workstation')); ?>
<div style='padding-bottom: 20px;'></div>
<p>384×288像素高温度分辨率原装进口非制冷焦平面红外探测器。</p>
<div class="sp">
</div>
</div>
<div data-id="post-12" data-type="643" class="block" >
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Preventive.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-none project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Preventive.jpg" alt=""></a>
<?php echo CHtml::link('<h3 class="first-word">Preventive inspection applications</h3>',array('service/aftersales')); ?>
<p>广州科易公司退出红外热成像预知性检测服务，专业红外工程师检测...</p>
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
