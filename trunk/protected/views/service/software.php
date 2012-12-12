<?php
/* @var $this ServiceController */

$this->breadcrumbs=array(
	'Service',
);
?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="header-text">
<ul id="breadcrumbs">
<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index" title=""><?php echo Yii::t('zii', 'Home') ?></a></li>
<li class="current"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=service/software" title="">相关软件</a>
</li>
</ul>
<div style="width: 75px; height: 40px; left: -1px;">&nbsp;</div>
</div>
<div class="post entry-content">
<p class="B_text_B"><strong>相关软件</strong></p>
<dl>
<dd>
<div class="titel">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/upload/Client.zip" title="点击下载" class="align-right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/icon-11.png" alt="点击下载"></a>
<p><span class="drop-cap circle">1</span>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/upload/Client.zip" title=""><strong>PC客户端下载</strong></a>版本1.1（最后更新2012.7.1），更新内容：
</p>
<br></br>
<ol class="ordered-list">
<li><strong>型号：</strong>KC100</li>
<li><strong>分辨率：</strong>384x288</li>
<li><strong>类型：</strong>非致冷探测器</li>
<li><strong>特性：</strong>实时传输/记录/分析</li>
</ol>
</div>
<div class="hr clear sp"></div>
<div class="titel">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/upload/Client.zip" title="点击下载" class="align-right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/icon-11.png" alt="点击下载"></a>
<p><span class="drop-cap circle">2</span>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/upload/Client.zip" title=""><strong>PC客户端下载</strong></a>版本1.1（最后更新2012.7.1），更新内容：
</p>
<br></br>
<ol class="ordered-list">
<li><strong>型号：</strong>KC100</li>
<li><strong>分辨率：</strong>384x288</li>
<li><strong>类型：</strong>非致冷探测器</li>
<li><strong>特性：</strong>实时传输/记录/分析</li>
</ol>
</div>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-01b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-left project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-01a.jpg" alt=""></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-02b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-02a.jpg" alt=""></a>
</dd>
</dl>
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
  Website:  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->