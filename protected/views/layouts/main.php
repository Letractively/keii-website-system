<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 <meta name="Keywords" content="<?php echo Yii::t('zii', 'website.keyword')?>" />

	<link rel="stylesheet" type="text/css"	href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />
		<link rel="stylesheet" type="text/css"	href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css" />
		<link rel="stylesheet" type="text/css"	href="<?php echo Yii::app()->request->baseUrl; ?>/css/short-code.css" />
		<link rel="stylesheet" type="text/css"	href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettyPhoto.css" />
		<link rel="stylesheet" type="text/css"	href="<?php echo Yii::app()->request->baseUrl; ?>/css/css3.css" />
		<link rel="stylesheet" type="text/css"	href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css" />
		
    	<script src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/jquery-1.8.2.js"></script>
    	<script src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/jquery-ui-1.9.1.xxz.min.js"></script>
		<script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/jquery.nivo.slider.js"></script>
		<script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/cufon-yui.js"></script>
		<script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/TitilliumText.font.js"></script>
		<script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/cufon-replace.js"></script>
		<script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/scripts.js"></script>
		<script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/custom.js"></script>
		<script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/shortcode.js"></script>
		<script type="text/javascript"	src="<?php echo Yii::app()->request->baseUrl; ?>/javascript/lrtk.js"></script>
		<script>
    $(function() {
        $( "#product_tabs" ).tabs({ fx: { opacity: 'toggle' } }).tabs('rotate', 2000);
    });
    </script>

<title>
<?php  $this->pageTitle = Yii::t('zii', 'company.name'); echo CHtml::encode($this->pageTitle); ?>
 </title>
</head>
<body>
	<!--Header-->
	<div class="full-width-wrapper" id="header">
	<div id="login-panel">
		<ul>
				<li><a><?php $lang = Yii::app()->language;
							if ($lang == 'zh_cn')
					 			echo CHtml::link('English',array('/site/index/lang/en'));
							else 
								echo CHtml::link('中文',array('/site/index/lang/zh_cn'));	?></a></li>
				<li>|</li>
				<li><?php if (Yii::app()->user->isGuest) 
												 echo  CHtml::link(Yii::t('zii', 'system.register'),array('/user/register'));
											else
												echo CHtml::link(Yii::t('zii', 'user.information'),array('/user/info/'));?></li>
				<li>|</li>				
				<li><a><?php if (Yii::app()->user->isGuest) 
												echo CHtml::link(Yii::t('zii', 'system.login'),array('/site/login'));
											else
												echo CHtml::link(Yii::t('zii', 'system.logout'),array('/site/logout'));
								?>
						</a></li>
				
	</ul>
	</div>
		<!--Banner-->
		<div class="fixed-width-wrapper" id="banner">
			<div style="float: left"><a title="" class="logo"></a></div>
				
			<?php $this->renderPartial('//site/index.menu.'.Yii::app()->language); ?>
			
		</div>
		<!--/Banner-->
		
		<div class="color-banner">
		</div>
		</div>

	<!--/Header-->

	

<?php echo $content; ?>


<!--one fifth-->

<div class="full-width-wrapper" id="footer-wrapper">
<div class="fixed-width-wrapper" id="footer-content">
			<?php $this->renderPartial('//site/footer.'.Yii::app()->language); ?>
</div>
</div>

<!--/one fifth-->

<!--Footer Extra-->
<div class="full-width-wrapper" id="footer-extra-wrapper">
<div class="fixed-width-wrapper">
			<?php $this->renderPartial('//site/copyright.'.Yii::app()->language); ?>
</div>
</div>
<!--/Footer Extra-->
</body>
</html>
