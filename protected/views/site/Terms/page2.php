<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 术语释义';

$this->breadcrumbs=array(
		Yii::t('zii', '术语释义')=>array('/site/terms&page=2'),
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

<p class="B_text_B"><strong>术语解释</strong></p>

<p class="B_text_B"><strong>Detector探测器</strong></p>
<p>红外热像仪的传感器，探测到物体的红外辐射能并将其转换为电信号。探测器的最小单元为像素。</p>

<p class="B_text_B"><strong>Dewpoint露点</strong></p>
<p>露点是露点温度的简称，露点温度是指在大气压力不变的情况下，由于冷却作用，空气里原来所含的未饱和水蒸汽变成100%饱和时的温度，称为露点温度。</p>

<p class="B_text_B"><strong>Emissivity 发射率 (ε):</strong></p>
<p>物体散发红外辐射的能力。ε值与被测物体的材质属性，被测对象表面特性以及被测物体的温度有关</p>

<p class="B_text_B"><strong>Fahrenheit华氏温度</strong></p>
<p>是在北美使用比较广泛的一种温标。℉ = (℃ x 1.8) + 32。</p>

<p class="B_text_B"><strong>Field of view 视场角(FOV)</strong></p>
<p>FOV是指物体在热像仪中完整成像的水平角度和垂直角度。</p>

<p class="B_text_B"><strong>Focal Plane array焦平面红外探测器(FPA)</strong></p>
<p>FPA探测器早期为制冷型探测器，并且体积较大，用于近红外波段测量；现在的FPA探测器已发展为非制冷型，用于远红外波段进行高精度测量。探测器接收到物体辐射能后导致传感器温度升高从而改变传感器的阻值，并以电信号将其阻值改变表现出来。</p>

<p class="B_text_B"><strong>Grey body radiator (real body)灰色辐射物</strong></p>
<p>自然界的绝大多数物体都是 “灰色辐射体”。与黑体不同的是，灰体无法吸收所有的入射光波，通常反射或传导都会同时存在。灰色辐射体的发射率均小于1。</p>

<p class="B_text_B"><strong>Thermal Imager 红外热像仪</strong></p>
<p>红外热像仪是指能够检测电磁波光谱在红外波段的辐射，并能将不可见的红外辐射变成可视图片的检测设备。热像仪目前最主要的功能是测温和成像。</p>

<p class="B_text_B"><strong>Infrared radiation 红外辐射</strong></p>
<p>是电磁辐射的一种。只要是绝对零度以上的物体均发射红外辐射。</p>

<p class="B_text_B"><strong>Isotherms等温线</strong></p>
可设置温度范围，并用相同的颜色将在此范围内的所有相同温度点标注出来。</p>

<p class="B_text_B"><strong>Kelvin（开尔文）</strong></p>
<p>国际通用的温标之一。0 K 相当于绝对零度zero (-273.15°C)。 请见以下转换公式：273.15 K = 0℃= 32℉。K = ℃+ 273.15。</p>

<p class="B_text_B"><strong>Kirchhoff’s radiation law 基尔霍夫辐射定律</strong></p>
<p>是著名的热学定律，描述了一定波长的物体发射率与吸收比之间的关系：在热平衡条件下，物体对热辐射的吸收比恒等于同温度下的发射率。</p>



<!--Pagination-->
<div class="page-pagination">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=1" title="">1</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=2" title="" class="current">2</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=3" title="" >3</a>
</div>
<!--/Pagination-->
</div>
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