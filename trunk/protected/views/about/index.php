<?php
/* @var $this AboutController */
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('zii', 'About Keii');

$this->breadcrumbs=array(
		Yii::t('zii', 'About Keii')=>array('/about'),
);

?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper" id="body-content">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">
			<div class="header-text">
<?php 
//$this->widget('zii.widgets.CBreadcrumbs', array(
//	'links'=>$this->breadcrumbs,
//));
echo '&nbsp';
?>
			</div>
			<div class="portfolio">
				
				<!--Porfolio Content-->
				<div class="portfolio-content three-column clear">
					<div data-id="post-1" data-type="new" class="block">
						<a
							href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/about/about-01b.jpg"
							title="" rel="prettyPhoto"
							class="img-border preloading-light align-none project-thumbnail image-preview"><img
							src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/about/about-01a.jpg" alt=""></a>
						<p class="B_text_B">
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=about/page1" title="了解更多"><strong><?php echo Yii::t('zii', 'Profile') ?></strong></a>
						</p>
						<p style="line-height: 24px;letter-spacing: 1.5px;margin-top:-5px;">
							广州科易光电技术有限公司成立于2003年并成为工业和科研领域中红外热成像单机和系统的生产供应商，在2008年被认证为高新技术企业。
						</p>
						<p></p>
						<div class="sp"></div>
					</div>
					<div data-id="post-1" data-type="old" class="block">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/about/about-02b.jpg" title="" rel="prettyPhoto"
							class="img-border preloading-light align-none project-thumbnail image-preview"><img
							src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/about/about-02a.jpg" alt=""></a>
						<p class="B_text_B">
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=about/page2" title="了解更多"><strong>科易荣誉</strong></a>
						</p>
						<p style="line-height: 24px;letter-spacing: 1.5px;margin-top:-5px;">我们的目标是成为红外热成像系统制造领域中仪器、系统以及相关软件的领先供应商。</p>
						<p style="height:42px"></p>
						<div class="sp"></div>
					</div>


				</div>
				<!--/Porfolio Content-->
			</div>
		</div>
		<!--/Content-->
	</div>
</div>
<!--/Body content-->