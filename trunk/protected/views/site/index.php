<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'Home');
?>


<!--Slider-->
<div class="clear" id="slider-bg">
<div class="full-width-wrapper" id="slider-frame">
<div class="fixed-width-wrapper maxx-theme" id="slider-wrapper">
<div id="slider" class="nivoSlider">
<?php echo CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/slider/slider01.jpg" alt="" title="">',array('/product/kc100')); ?>
<?php echo CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/slider/slider02.jpg" alt="" title="">',array('/product/kc500')); ?>
<?php echo CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/slider/slider03.jpg" alt="" title="">',array('/product/kc800')); ?>
<?php echo CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/slider/slider04.jpg" alt="" title="">',array('/product/substation')); ?>
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
				<?php echo CHtml::link(
								CHtml::image(Yii::app()->request->baseUrl.'/images/'.Yii::app()->language.'/index/website1.jpg'),
								array('/site/infraredcamera'),
								array('class'=>'img-border clear')
								);
				?>
				<br></br><br></br><br></br>
				</div>

			<div class="one-fourth">
				<div class="text1">
					<p class="B_text_B">
					<?php echo CHtml::link(Yii::t('zii', 'content.index.application'),array('/application')); ?>
					
					</p>
				</div>
				<?php echo CHtml::link(
								CHtml::image(Yii::app()->request->baseUrl.'/images/'.Yii::app()->language.'/index/website2.jpg'),
								array('/site/infraredcamera'),
								array('class'=>'img-border clear')
								);
				?>
				<br></br> <br></br> <br></br>

				<p style="padding-top:48px;letter-spacing: 0.5px;"><?php echo Yii::t('zii', 'content.index.application.content')?></p>
			</div>

			<div class="one-fourth">
				<div class="text1">
					<p class="B_text_B">
					<?php echo CHtml::link(Yii::t('zii', 'content.index.gallery'),array('/product')); ?>
					
					</p>
				</div>
				<?php echo CHtml::link(
								CHtml::image(Yii::app()->request->baseUrl.'/images/'.Yii::app()->language.'/index/website3.jpg'),
								array('/site/infraredcamera'),
								array('class'=>'img-border clear')
								);
				?>
				<br></br> <br></br> <br></br>

				<p style="padding-top:48px;letter-spacing: 0.5px;"><?php echo Yii::t('zii', 'content.index.gallery.content')?></p>
			</div>

			<div class="one-fourth">
				<div class="text1">
					<p class="B_text_B">
					<?php echo CHtml::link(Yii::t('zii', 'content.index.certificates'),array('/about/page2')); ?>
					
					</p>
				</div>
				<?php echo CHtml::link(
								CHtml::image(Yii::app()->request->baseUrl.'/images/'.Yii::app()->language.'/index/website4.jpg'),
								array('/site/infraredcamera'),
								array('class'=>'img-border clear')
								);
				?>
				<br></br> <br></br> <br></br>

				<p style="padding-top:48px;letter-spacing: 0.5px;"><?php echo Yii::t('zii', 'content.index.certificates.content')?></p>

			</div>

		</div>
	</div>
	<!--/one four-->
	