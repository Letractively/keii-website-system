<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 登陆';
$this->breadcrumbs=array(
	'responsibility',
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
<li class="current"><a href="Responsibility.html" title="">社会责任</a>
</li>
</ul>
<h1 class="first-word double-color sp">KEII Technology</h1>
</div>
<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>

<p class="B_text_B"><strong>社会责任</strong></p>

<p>科易致力于应用革命性的红外热像技术，助力新产品的研发、改善产品的质量，降低设备故障率、防范火灾的发生和增进生活的安全性。</p>

<p>我们坚信制造出稳定可靠的产品和集成最适合现场应用的系统，就是我们作为企业公民履行社会责任最重要的任务。</p>

<p>如果您有更好的应用红外热像的想法用以改善我们工作和生活的环境，欢迎随时与科易联系，我们将全力配合，将您的想法变为现实。</p>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<div id="get-in-touch" class="fixed-width-wrapper">
</div>

</div>

</div>
<!--/Content-->
<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Products</h1>
<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'',
			'htmlOptions'=>array('class'=>'list cat'),
			'items'=>array(
				array('label'=>'KC100红外热像仪', 'url'=>array('/product/kc100')),
				array('label'=>'KC500红外热像仪', 'url'=>array('/product/kc500')),
				array('label'=>'KC700红外热像仪', 'url'=>array('/product/kc700')),
				array('label'=>'KC790红外热像仪', 'url'=>array('/product/kc790')),
				array('label'=>'KC800红外热像仪', 'url'=>array('/product/kc800')),
				array('label'=>'SF6气体检漏仪GL600', 'url'=>array('/product/gl600'))
			),
			));
?>
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
  Website:  <a href="/index.php" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->