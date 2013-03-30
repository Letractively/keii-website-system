<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 红外热像发展历史';
$this->breadcrumbs=array(
	'job',
);
  
?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="header-text">
<ul id="breadcrumbs">
<li><a href="index.html" title=""><?php echo Yii::t('zii', 'Home') ?></a></li>
<li class="current"><a href="History.html" title="">红外热像发展历史</a>
</li>
</ul>
<h1 class="first-word double-color sp">KEII Technology</h1>
</div>

<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
红外线是在1800年由英国皇家天文学家（弗里德里希•威廉•赫歇尔）在寻找新的光学介质的时候发现的。</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;红外线是自然界中存在的最为广泛的一种电磁辐射，它的电磁波谱是介于可见光的红光之外与微波之间的区域，因此我们的肉眼无法直接查看到。</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;那么对于不可见的红外辐射能量我们该如何进行测试呢？</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;早在1840年，威廉.赫歇尔爵士的儿子约翰.赫歇尔在一张薄油膜上生成了世界上第一张所谓的“热像图”，使得人们对于热辐射的测试成为可能。另一个重大突破是在1880年，由美国人Samuel Pierpont Langley取得的，他发明了测辐射热仪。据说该仪器可以测到400米之外。</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;现代意义上的首批红外热探测系统是由1914-1918年的第一场世界大战期间开始研制的，在1935—1945年第二次世界大战中，德国人用红外变像管作为光电转换器件，研制出了主动式夜视仪和红外通信设备，为红外技术的发展奠定了基础。</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;二战后，由美国德克萨兰仪器公司经过近一年的探索，开发研制的第一代用于军事领域的被动式红外成像装置，称为红外寻视系统（FLIR）。期间，由于军事保密规则完全防止了红外热像发展状况的泄露。这种保密技术直到二十世纪五十年代才被公开，后来随着五十年代锑化铟和锗掺汞光子探测器的发展，才开始出现高速扫描及实时显示目标热图像的系统。</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;六十年代早期，瑞典AGA公司研制成功第二代液氮制冷红外成像装置，它是在红外寻视系统的基础上增加了测温的功能，称之为红外热像仪。这个阶段的热像仪非常不方便而且笨重。</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;直到1986年研制的红外热像仪已无需液氮或高压气，而以热电方式致冷，可用电池供电；1988年推出的全功能热像仪，将温度的测量、修改、分析、图像采集、存储合于一体，重量小于7公斤，仪器的功能、精度和可靠性都得到了显著的提高。直到90年代中期，第三代焦平面微热量凝视成像热像仪开始由军用转为民用，并且均带有测温功能。</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;现在，我们可以看到越来越多的高灵敏，高分辨率的便携式热像仪应用在各种领域。从科学家到设备维修员，各种人士都在使用热像仪。芯片的研究员用来测试芯片的热分布状况，光伏组件的质量工程师用来测试光伏组件的热斑以及组件的质量监控，设备工程师用来针对设备进行预防性检测等。</p>


<div class="clear"></div>

</div>
</div>
<!--/Content-->
<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Products</h1>
<?php $this->renderPartial('//product/menu1'); ?>
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