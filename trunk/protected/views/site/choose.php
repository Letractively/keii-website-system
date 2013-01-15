<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'How to choose?');


$this->breadcrumbs=array(
		Yii::t('zii', 'How to choose?')=>array('/site/choose'),
);
?>

<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>
<ul class="ordered-list" >
<li>
<strong>什么样的像素满足您的要求?</strong>
<p></p>
　　<p>320*240=76,800?</p>
　　<p>在12米处测量的最小尺寸是1*1cm</p>
　　<p>160*120=19,200?</p>
　　<p>在12米处测量的最小尺寸是2*2cm</p></li>
<li><p><strong>是否需要定量检测？</strong></p>
　　<p>红外热像仪有两种用途：</p>
　　<p>1、热成像</p>
　　<p>2、测温</p>
</li>

<li><strong>评价红外测温能力叫做MFOV，主要有2种：一种是MFOV 为1，另外一种MFOV为3*3。</strong>
<p></p>
　　<p>MFOV为1时，目标完全覆盖了热像仪的像素，像素接受的辐射只来自目标，因此能准确测量目标温度。而MFOV为9时，像素接收的辐射不只来自目标，而且吸收目标旁边的和背后的辐射，就不能测得这么小目标的准确温度。</p>
　　<p>然而这只是测量的极限，根据当前的大部分FPA探测器技术，目标在探测器上最少要有 3 x 3 个像素才能确保准确测量，这要求检测时尽量靠近目标或选用望远镜头. 如果目标成像小于3x3个像素，则热像仪显示的温度读数是目标的温度值与也成像在这3x3个像素的目标周围物体（环境）温度的平均值。 3、高空间分辨率的优势</p>
　　<p>高空间分辨率能够得出准确的温度，低空间分辨率读出的温度只是发热点周围的平均温度。在定量化检测时候，温度的正确与否非常重要！</p></li>
<li><p><strong>稳定性重复性对你是否重要？</strong></p>
　　<p>决定红外热像仪的因素主要有3个方面：</p>
　　<p>探测器、光学器件、电气原器件，军事级探测器的主要优势在哪里？</p>
　　<p>a、主要有两种探测器。氧化钒晶体和多晶硅。日本NEC热像仪采用了氧化钒晶体探测器，其自称的主要优势包括：</p>
　　<p>b、此探测器主要的优势是测温视域MFOV（Measurement Field of View）为1,温度测量是精确到1个像素点。　c、温度稳定性好。</p>
　　<p>d、使用寿命长</p>
　　<p>e、适合于远距离测试</p></li>
<li><p><strong>是否在意报告处理的烦琐？</strong></p>
　　<p>如果红外图像和可见光图像组合显示就减少了大量工作，同时报告自动生成也会大大减少操作时间。</p></li>
<li>
  <p><strong>是否需要延长曝光时间？</strong></p>
  延长曝光时间——专业照相的必然选择
　　∑2、∑4、∑8、 ∑16等功能，特别在检测北立面或者阳光照不到的地方很有优势。使用了∑功能，增加了曝光时间，图像更清晰，更容易发现缺陷部位。
  	
  	</li>
</ul>


</div>
</div>
<!--/Content-->
<!--Sidebar-->
<?php $this->renderPartial('//site/sidebar'); ?>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->
