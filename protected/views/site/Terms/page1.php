<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 术语释义';

$this->breadcrumbs=array(
		Yii::t('zii', '术语释义')=>array('/site/terms'),
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

<p class="B_text_B"><strong>Absolute zero绝对零度</strong></p>
<p>指-273.15°C (0 Kelvin = 459.69°F). 绝对零度是一个完全理想的状态，在此温度下，物体原子的运动完全停止，即在这个温度下，物体完全没有任何的能量。</p>

<p class="B_text_B"><strong>Absorption吸收</strong></p>
<p>任一物体对红外波长或多或少都具有吸收能力，而吸收红外光后的物体最直接的反映则是温度升高。通常温度相对较高的物体所辐射的能量多于温度较低的物体，而对于物体本身来说，吸收的红外能量会被转换为自已能量而对外辐射，因此，物体的发射率与物体的吸收率有关。</p>

<p class="B_text_B"><strong>Accuracy精度</strong></p>
<p>是指观测结果、计算值或估计值与参比值之间的接近程度。如：实际表面温度100 ° C，测量精度为± 2 ° C，则测得值与实际测量结果相差不超过2℃。</p>

<p class="B_text_B"><strong>Atmospheric windows大气窗口</strong></p>
<p>太阳辐射通过大气层时，未被反射、吸收和散射的那些透射率高的光辐射波段范围称之为“大气窗口”。在红外波长段也存在大气窗口，在8~14µm范围的红外波段有稳定的大气透射率,因此，在此波段使用红外技术测量的效果也尤为明显。</p>

<p class="B_text_B"><strong>Black body radiator黑体辐射物</strong></p>
<p>黑体辐射是指将入射的电磁波全部吸收，并全部转化为自身能量向外辐射的物体，在此过程中即没有发生反射，也无透射。黑体辐射物的发射率ε= 1，在现实自然界中不存在这种绝对的黑体，黑体辐射物被认为是一种理想物体，通常用作热辐射研究的标准物体。而大部分黑体在标定或校准的使用中其发射率也设置为＜ 1的状态，通常设定为ε> 0.95。</p>

<p class="B_text_B"><strong>Calibration标定</strong></p>
<p>标定是指对仪器的实际测量值与标准器的示值进行比对的过程，其检测结果表示仪器的测量精度在允许的限度范围内。标定的意义在于记录仪器示值偏差，而非对其测量结果进行修正。</p>

<p class="B_text_B"><strong>Celsius摄氏度 [℃]</strong></p>
<p>摄氏度是目前世界使用比较广泛的一种温标。在1标准大气压下，定义水的沸点为100 ℃，水的凝固点定为0 ℃，其间分成100等分，1等分为1 ℃。 ℃= (℉-32)/1.8 或 ℃= K–273.15</p>

<p class="B_text_B"><strong>Coeffiient of Convective Heat Transfer对流传热系数</strong></p>
<p>其大小反映了对流换热的强弱，其定义是：当流体与固体表面的温度差为1K时，1㎡表面面积在每秒所能传递的热量，以 h表示。</p>

<p class="B_text_B"><strong>Colour palette调色板</strong></p>
<p>调色板设置图片的颜色显示。根据不同的测量任务设置图像显示颜色的对比度。</p>

<p class="B_text_B"><strong>Coldspot and Hotspot冷点与热点</strong></p>
<p>在热像仪中温度最低的点称为“冷点”，温度最高的点称热点。</p>

<p class="B_text_B"><strong>Coloured body radiator有色辐射物</strong></p>
<p>有色辐射物是发射率随波长及温度不同的而变化材料．意味着同一物体有不同的发射率．大多数金属为有色辐射物，如：铝在加热后发射率会升高。</p>

<p class="B_text_B"><strong>Condensation冷凝</strong></p>
<p>是指由气态转化为液态的过程。当物体的表面温度低于空气环境温度时，空气中的湿气会在物体表面凝结为水珠，在某一温度下，空气里原来所含的未饱和水蒸汽变成饱和状态，这个温度点也称之为露点。</p>

<p class="B_text_B"><strong>Conduction传导</strong></p>
<p>热量总是从温度高的物体传到温度低的物体，这个过程叫做热传导。热传导是固体中热传 递的主要方式。</p>

<p class="B_text_B"><strong>Convection对流</strong></p>
<p>依靠流体（液体、气体）本身流动而实现传热的过程称为热对流，简称对流，对流是由于温度不均匀而引起的。</p>

<!--Pagination-->
<div class="page-pagination">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=1" title="" class="current">1</a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/terms&page=2" title="" >2</a>
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