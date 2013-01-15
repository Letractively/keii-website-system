<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Infrared camera');
$this->breadcrumbs=array(
	Yii::t('zii', 'Infrared camera')=>array('/site/infraredcamera'),
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

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中文名称：热像仪英文名称：thermovision定义：利用热成像技术，以可见热图显示被测目标温度及其分布的装置。</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;应用学科：机械工程（一级学科）；工业自动化仪表与系统（二级学科）；温度测量仪表-温度测量仪表名称（二级学科）</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;任何有温度的物体都会发出红外线，热像仪就是接收物体发出的红外线，通过有颜色的图片来显示被测量物表面的温度分布，根据温度的微小差异来找出温度的异常点，从而起到与维护的作用。一般也称作红外热像仪。</p>
<p><strong>工作原理</strong></p>

　　<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;红外热像仪是利用红外探测器和光学成像物镜接受被测目标的红外辐射能量分布图形反映到红外探测器的光敏元件上，从而获得红外热像图，这种热像图与物体表面的热分布场相对应。通俗地讲红外热像仪就是将物体发出的不可见红外能量转变为可见的热图像。热图像的上面的不同颜色代表被测物体的不同温度。</p>

<p><strong>仪器应用</strong></p>

　　<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;热像仪的应用非常广泛，只要有温度差异的地方都有应用。比如：在建筑领域，检查空鼓、缺陷、瓷砖脱落、受潮、热桥等；在消防领域可以查找火源，判定事故的起因，查找烟雾中的受伤者；公安系统可以找夜间藏匿的人；汽车生产领域可以检测轮胎的行走性能、空调发热丝、发动机、排气喉等性能；医学可以检测针灸效果、早期发现鼻咽癌、乳腺癌等疾病；电力检查电线、连接处、快关闸、变电柜等。</p>
　　<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电力设备的故障有多种多样，但大多数都伴有发热的现象。从红  热像仪外诊断的角度看，通常分为外部故障和内部故障。众所周知，电力系统运行中，载流导体会因为电流效应产生电阻损耗，而在电能输送的整个回路上存在数量繁多的连接件、接头或触头。在理想情况下，输电回路中的各种连接件、接头或触头接触电阻低于相连导体部分的电阻，那么，连接部位的损耗发热不会高于相邻载流导体的发热，然而一旦某些连接件、接头或触头因连接不良，造成接触电阻增大，该部位就会有更多的电阻损耗和更高的温升，从而造成局部过热。此类通常属外部故障。</p>

</div>

<div class="clear"></div>

</div>
</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//site/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->