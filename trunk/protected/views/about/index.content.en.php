
<div class="portfolio">

	<!--Porfolio Content-->
	<div class="portfolio-content three-column clear">
		<div data-id="post-1" data-type="new" class="block">
				<?php echo CHtml::link(
								CHtml::image(Yii::app()->request->baseUrl.'/images/'.Yii::app()->language.'/about/about-01a.jpg'),
								array('/about/page1'),
								array('class'=>'img-border preloading-light align-none project-thumbnail')
								);
				?>
			<p class="B_text_B">
				<?php echo CHtml::link('<strong>'.Yii::t('zii', 'menu.index.company.about_keii').'</strong>',array('/about/page1'));?>
			</p>
			<p
				style="line-height: 21px; letter-spacing: 1px; margin-top: -5px;">
				Keii Electro Optics Technology Co., Ltd. committed to the maximum
				implementation of infrared imaging technology where the use of such
				technology has proven to be an invaluable tool in detecting and
				predicting failure modes within machinery, production processes, and
				complicated natural processes. </p>
			<p style="height: 19px"></p>
			<p></p>
			<div class="sp"></div>
		</div>
		<div data-id="post-1" data-type="old" class="block">
				<?php echo CHtml::link(
								CHtml::image(Yii::app()->request->baseUrl.'/images/'.Yii::app()->language.'/about/about-02a.jpg'),
								array('/about/page2'),
								array('class'=>'img-border preloading-light align-none project-thumbnail')
								);
				?>
			<p class="B_text_B">
					<?php echo CHtml::link('<strong>'.Yii::t('zii', 'menu.index.company.certificates').'</strong>',array('/about/page2'));?>
			</p>
			<p
				style="line-height: 21px; letter-spacing: 1px; margin-top: -5px;">
				Guangzhou Keii Electro Optics Technology Co.,Ltd, which found in
				2003 and is authorized enterprise of new and cutting-edge technology
				in 2008, is a highly recognized provider of infrared cameras and
				system to the industrial and scientific communities.</p>
			<p style="height: 39px"></p>
			<div class="sp"></div>
		</div>


	</div>
	<!--/Porfolio Content-->
</div>