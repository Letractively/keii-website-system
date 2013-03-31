<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
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

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>

	<!--Header-->
	<div class="full-width-wrapper" id="header">
	<div class="login-panel">
	<a><?php 
				$lang = Yii::app()->language;
				if ($lang == 'zh_cn')
		 			echo CHtml::link('English',array('&lang=en'));
				else 
					echo CHtml::link('中文',array('&lang=zh_cn'));
				?></a>
	<span>|</span>
	<a><?php echo Yii::t('zii', 'system.login')?></a>
	<span>|</span>
	<a><?php echo Yii::t('zii', 'system.register')?></a>&nbsp;&nbsp;&nbsp;&nbsp;
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
<div class="footer-list-1">
<div class="text"><?php echo Yii::t('zii', 'menu.index.about_us')?></div>
<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'',
			'htmlOptions'=>array('class'=>'footer-list'),
			'items'=>array(
				array('label'=>Yii::t('zii', 'menu.index.company.about_keii'), 'url'=>array('/about/page1')),
				array('label'=>Yii::t('zii', 'menu.index.company.certificates'), 'url'=>array('/about/page2'))
			),
			)); 
			?>
</div>
<div class="footer-list-2">
<div class="text"><?php echo Yii::t('zii', 'menu.index.thermography_theory')?></div>
<?php
			$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.IR_camera_history'), 'url'=>array('/site/history')),
							array('label'=>Yii::t('zii', 'menu.index.parameter'), 'url'=>array('/site/parameter')),
							array('label'=>Yii::t('zii', 'menu.index.technical.terms'), 'url'=>array('/site/terms')),
							array('label'=>Yii::t('zii', 'menu.index.field'), 'url'=>array('/site/Field')),

					),
			));
			?>
</div>


<div class="footer-list-3">
<div class="text"><?php echo Yii::t('zii', 'menu.index.product.kc&gl')?></div>
<?php 
				$this->renderPartial('//product/menu5');
			?>
</div>
<div class="footer-list-4">
<div class="text"><?php echo Yii::t('zii', 'menu.index.product.system')?></div>
<?php 
				$this->renderPartial('//product/menu4');
			?>
</div>
<div class="footer-list-5">
<div class="text"><?php echo Yii::t('zii', 'menu.index.service&support')?></div>
<?php 
			$this->renderPartial('//service/menu1');
			?>
</div>
<div class="footer-list-6">
<div class="text"><?php echo Yii::t('zii', 'menu.index.contact')?></div>
<?php
			$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.address'), 'url'=>array('/site/contact')),
							array('label'=>Yii::t('zii', 'menu.index.guestbook'), 'url'=>array('/site/contact')),

					),
			));
			?>
</div>

</div>
</div>

<!--/one fifth-->

<!--Footer Extra-->
<div class="full-width-wrapper" id="footer-extra-wrapper">
<div class="fixed-width-wrapper">
<div id="copyright">
<ul>
<li>© 2011 - 广州科易光电技术有限公司</li>
<li><a class="icp-number" href="404.html" title="">ICP05093365</a></li>
</ul>
</div>
</div>
</div>
<!--/Footer Extra-->
</body>
</html>
