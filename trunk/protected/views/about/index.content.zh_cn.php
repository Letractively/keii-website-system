
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
				style="line-height: 24px; letter-spacing: 1.5px; margin-top: -5px;">
				广州科易光电技术有限公司成立于2003年，是一家专业从事各种光电探测产品，光电稳定平台及高端系统集成的高新技术企业。</p>
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
				style="line-height: 24px; letter-spacing: 1.5px; margin-top: -5px;">我们的目标是成为红外热成像系统制造领域中仪器、系统以及相关软件的领先供应商。</p>
			<p style="height: 42px"></p>
			<div class="sp"></div>
		</div>


	</div>
	<!--/Porfolio Content-->
</div>
