<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 术语释义';

$this->breadcrumbs=array(
		Yii::t('zii', '术语释义')=>array('/site/terms&page=3'),
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

<p class="B_text_B"><strong>Lens 镜头</strong></p>
<p>镜头决定了热像仪的可视视野的范围大小。广角镜适用于大视野的温度场分布，而长焦镜适用于远距离进行细节测量。目前常用的镜头材质有锗 (Ge), 硅 (Si) 和硒化锌 (ZnSe), 这些材质的红外透射性较佳，是优良的材质。</p>
<p class="B_text_B"><strong>MFOV测量视场角</strong></p>
<p>MFOV是热像仪探测器可精准测得数据的最小的像素范围。主要有两种：MFOV=1和MFOV=3×3=9。</p>

<p class="B_text_B"><strong>Measuring range测量范围</strong></p>
<p>温度测量范围是指热像仪可测量的温度段，表明仪器可测量和记录的热辐射的大小。通常会规定最大限值及最小限值，用限制当前校准的两个黑体温度值表示。在定义的测量范围外，仪器通常会无法显示或无法保证测得数值的精确度。</p>

<p class="B_text_B"><strong>NETD热灵敏度</strong></p>
<p>NETD即仪器的热灵敏度（也称噪声等效温差），描述的是仪器可探测的最小温差值，直接关系了热像仪测量的清晰度，热灵敏的数值越小，表示其灵敏度越高，图像更清晰。</p>

<p class="B_text_B"><strong>Planck’s radiation law 普朗克辐射定律</strong></p>
<p>普朗克辐射定律提出了黑体所发射的电磁能量的强度取决于波长和频率的观点。在普朗克研究之初，假设了光（即后来的电磁辐射）的发射和吸收不是连续的，而是一份一份地进行的，其计算结果才能和试验结果相符，这样的一份能量叫做量子，每一份量子等于hv，v为辐射电磁波的频率，h为一常量，叫为普朗克常数。</p>

<p class="B_text_B"><strong>Radiation 辐射</strong></p>
<p>自然界中的一切在绝对温度零度以上的物体,都以电磁波的形式时刻不停地向外传送热量,这种传送能量的方式称为辐射.</p>

<p class="B_text_B"><strong>Reflectance 反射系数 (ρ)</strong></p>
<p>是指物本反射红外辐射的能力。ρ的大小取决于材料类型，表面性质及温度。一般来说，光滑，抛光表面的反射系数较大，而表面较粗糙，无光表面的反射系数较小。</p>

<p class="B_text_B"><strong>Refresh rate帧频</strong></p>
<p>以Hertz表示,指热像仪每秒钟更新图像的速率. 如：30Hz 是指热像仪在一秒的时间里可产生30幅完整的图像。</p>

<p class="B_text_B"><strong>Relative humidity相对湿度</strong></p>
某温度时空气的绝对湿度跟同一温度下水的饱和汽压的百分比</p>

<p class="B_text_B"><strong>Resolution分辨率</strong></p>
<p>分辨率是用于度量图像内数据量多少的一个参数，是指单位长度内的点（像素）是多少。</p>

<p class="B_text_B"><strong>RTC (反射温度补偿)</strong></p>
<p>有些物体的反射率相当高，在测量的时候除了注意调整这些被测物体的发射率，最好通过输入影响被测物体的高辐射源的温度值来对测量结果进行修正，以减小测量误差，提高测量结果的准确度。</p>

<p class="B_text_B"><strong>Specular reflection镜面反射</strong></p>
<p>镜面反射通常发生在高反射率的物体表面或低发射率的物体表面。但镜面反射并不代表物体具有高反射率，如：喷涂表面，热像仪可以反映出在喷涂物体表面上其它环境辐射物的镜面反射（如：测量人的影像），而喷涂表面普遍具有较高的发射率（ε≈0.95）。反之如，砂岩墙，其发射率较低（ε≈0.67），但无法形成镜面反射。因此，物体的表面结构是影响镜面反射的重要因素。镜面反射是当入射光线是平行光线时，反射到光滑的镜面，又以平行光线出去的现象 。而其相对的概念为漫反射，是指入射光线是平行光线时，反射到粗糙的物体，反射光线向各个方向出去的现象。如：铝箔，平整的铝箔的表面就很容易产生镜面反射，而把铝箔揉皱再展开，不平整的表面则会产生漫反射，在物体表面各方向上的反射都不一样。</p>

<p class="B_text_B"><strong>Stefan-Boltzmann-law斯蒂芬-玻尔兹曼定律</strong></p>
<p>著名的热力学定律，定律提出：一个黑体表面单位面积在单位时间内辐射出的各种波长电磁波的总能量与黑体本身的热力学温度Ｔ的四次方成正比，公式为Q=  •  • T4，其中σ：斯忒藩-玻耳兹曼常数</p>

<p class="B_text_B"><strong>Thermography热图</strong></p>
<p>使用红外热像仪通过非接触式的测量方法显示表面温度场的分布图，热像仪通过探测物体的辐射能量的大小，并根据辐射能量与温度的关系进行转换，并将拍摄视野内的温度值以不同颜色显示出来，从而形成可视的热分布图像。热像仪的每个像素均代表了被测物体表面的一个温度点。</p>

<p class="B_text_B"><strong>Transmittance 透射系数(τ)</strong></p>
<p>指物质可透过红外辐射的能力。τ取决于材料类型及厚度。</p>


<!--Pagination-->
<div class="page-pagination">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=1" title="" >1</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=2" title="" >2</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=3" title="" class="current">3</a>
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