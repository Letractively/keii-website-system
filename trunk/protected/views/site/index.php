<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Home');


?>


<!--Slider-->
<div class="clear" id="slider-bg">
<div class="full-width-wrapper" id="slider-frame">
<div class="fixed-width-wrapper maxx-theme" id="slider-wrapper">
<div id="slider" class="nivoSlider">
<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/pix100.jpg" alt="" title=""></a>
<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/pix500.jpg" alt="" title=""></a>
<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/pix700.jpg" alt="" title=""></a>
<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/pix790.jpg" alt="" title=""></a>
</div>
</div>
</div>
</div>
<!--/Slider-->



<!--one four-->
	<div class="full-width-wrapper" style="padding-top: 10px;">
		<div class="fixed-width-wrapper" id="body-content">
			<!--One Fourth-->
			<div class="one-frist-news">
				<div class="text1_news">
					<p class="B_text_news">
					<?php echo CHtml::link('News',array('/site/infraredcamera')); ?>
					
					</p>							
				</div>
				<a class="img-border clear"><img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/website1.jpg"
					alt=""></a> <br></br> <br></br> <br></br>
				</div>

			<div class="one-fourth">
				<div class="text1">
					<p class="B_text_B">
					<?php echo CHtml::link('应用',array('/application')); ?>
					
					</p>
				</div>
				<a  class="img-border clear"><img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/website2.jpg"
					alt=""></a> <br></br> <br></br> <br></br>

				<p style="letter-spacing: 1px;">基于现场应用，提供电站，防火，安防，研发等领域领先的解决方案</p>
			</div>

			<div class="one-fourth">
				<div class="text1">
					<p class="B_text_B">
					<?php echo CHtml::link('图库',array('/product')); ?>
					
					</p>
				</div>
				<a  class="img-border clear"><img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/website3.jpg"
					alt=""></a> <br></br> <br></br> <br></br>

				<p style="letter-spacing: 1px;">KEII自主品牌红外热像仪，基于现场应用开发，性能卓越，您的明智首选!</p>
			</div>

			<div class="one-fourth">
				<div class="text1">
					<p class="B_text_B">
					<?php echo CHtml::link('证书',array('/about/page2')); ?>
					
					</p>
				</div>
				<a  class="img-border clear"><img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/website4.jpg"
					alt=""></a> <br></br> <br></br> <br></br>

				<p style="letter-spacing: 0.5px;">广州科易公司掌握多项行业专利技术，并通过ISO9001认证，保证产品质量</p>

			</div>

		</div>
	</div>
	<!--/one four-->
	