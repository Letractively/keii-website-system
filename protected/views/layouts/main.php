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
	<a>English</a>
	<span>|</span>
	<a>登陆</a>
	<span>|</span>
	<a>注册</a>&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
		<!--Banner-->
		<div class="fixed-width-wrapper" id="banner">
			<div style="float: left"><a title="" class="logo"></a></div>
			<div  id="navigation-bar">
			
				<div id="navigation">
		<?php
		$keii_request_url = Yii::app()->request->url;
		
		$itemOptions = array('home' => array('class' =>'l1' ),
				'about' => array('class' =>'l1' ),
				'product' => array('class' =>'l1' ),
				'application' => array('class' =>'l1' ),
				'irtheory' => array('class' =>'l1' ),
				'service' => array('class' =>'l1' ),
				'contactus' => array('class' =>'l1' )
		);
		
		if (preg_match("/site\/index/i",$keii_request_url))
			$itemOptions['home'] = array('class' =>'current' );
		elseif (preg_match("/about/i",$keii_request_url))
			$itemOptions['about'] = array('class' =>'current' );
		elseif (preg_match("/product/i",$keii_request_url))
			$itemOptions['product'] = array('class' =>'current' );
		elseif (preg_match("/application/i",$keii_request_url))
			$itemOptions['application'] = array('class' =>'current' );
		elseif (preg_match("/principle/i",$keii_request_url) ||  
				preg_match("/terms/i",$keii_request_url) ||
				preg_match("/infraredcamera/i",$keii_request_url) ||
				preg_match("/dinfraredcamera/i",$keii_request_url) ||
				preg_match("/choose/i",$keii_request_url)
				)
			$itemOptions['irtheory'] = array('class' =>'current' );
		elseif (preg_match("/service/i",$keii_request_url))
			$itemOptions['service'] = array('class' =>'current' );
		elseif (preg_match("/contact/i",$keii_request_url))
			$itemOptions['contactus'] = array('class' =>'current' );
		else
			$itemOptions['home'] = array('class' =>'current' );
				
	
			 $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('zii', 'Home'), 'url'=>array('/site/index'),'itemOptions'=>$itemOptions['home']),
				array('label'=>Yii::t('zii', 'About Keii'), 'url'=>array('/about'),'itemOptions'=>$itemOptions['about'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'Profile'), 'url'=>array('/about/page1'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'Certificate'), 'url'=>array('/about/page2'),'itemOptions'=>array('class'=>'l2')),
						),
				),
				
				array('label'=>Yii::t('zii', 'Product'), 'url'=>array('/product'), 'itemOptions'=>$itemOptions['product'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'workstation'), 'url'=>array('/product/workstation'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'kc100'), 'url'=>array('/product/kc100'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'kc500'), 'url'=>array('/product/kc500'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'kc700'), 'url'=>array('/product/kc700'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'kc750'), 'url'=>array('/product/kc750'),'itemOptions'=>array('class'=>'l2'), 'visible'=>strstr(Yii::app()->language, 'en')),
								array('label'=>Yii::t('zii', 'kc800'), 'url'=>array('/product/kc800'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'kc850'), 'url'=>array('/product/kc850'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'gl600'), 'url'=>array('/product/gl600'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'carmobile'), 'url'=>array('/product/carmobile'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'substation'), 'url'=>array('/product/substation'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'helicopter'), 'url'=>array('/product/helicopter'),'itemOptions'=>array('class'=>'l2')),
				
							),
				),
	
				array('label'=>Yii::t('zii', 'Cases'), 'url'=>array('/application'),'itemOptions'=>$itemOptions['application'], 
				'items'=>array(
						array('label'=>Yii::t('zii', 'Industry'), 'url'=>array('/application'),'itemOptions'=>array('class'=>'l2'),
								'items'=>array(
										array('label'=>Yii::t('zii', 'Electrical'), 'url'=>array('/application&example=9'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'Petrochemical Industry'), 'url'=>array('/application&example=4'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'Metallurgy and steel'), 'url'=>array('/application&example=3'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'Automation'), 'url'=>array('/application&example=8'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'Building Diagnostics'), 'url'=>array('/application&example=1'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'Cement and Glass'), 'url'=>array('/application&example=2'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'Pulp and Paper Industry'), 'url'=>array('/application&example=6'),'itemOptions'=>array('class'=>'l3')),
								)
							),
						array('label'=>Yii::t('zii', 'Application'), 'url'=>array('/application'),'itemOptions'=>array('class'=>'l2'),
							'items'=>array(
										array('label'=>Yii::t('zii', 'R&D'), 'url'=>array('/application&example=7'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'Predictive Maintenance'), 'url'=>array('/application&example=5'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'Gas Leak Checking'), 'url'=>array('/application&example=10'),'itemOptions'=>array('class'=>'l3')),
								)
							),
					),
				),

				array('label'=>Yii::t('zii', 'IR Theory'), 'url'=>array('/site/principle'),'itemOptions'=>$itemOptions['irtheory'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'Infrared technology'), 'url'=>array('/site/terms'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'Infrared camera'), 'url'=>array('/site/infraredcamera'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'Dynamic infrared camera'), 'url'=>array('/site/dinfraredcamera'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'How to choose?'), 'url'=>array('/site/choose'),'itemOptions'=>array('class'=>'l2')),
					)

				),

				array('label'=>Yii::t('zii', 'Service'), 'url'=>array('/service'),'itemOptions'=>$itemOptions['service'],
					'items'=>array(
							array('label'=>Yii::t('zii', 'Sales Inquiries'), 'url'=>array('/service/presales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'After Sales'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'Technical'), 'url'=>array('/service/training'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'Thermography Inspection'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2')),					),
				),
				//array('label'=>Yii::t('zii', 'Member'), 'url'=>array($member_url),'itemOptions'=>array('class'=>'l1')),
				array('label'=>Yii::t('zii', 'Contact Us'), 'url'=>array('site/contact'),'itemOptions'=>$itemOptions['contactus']),
				array('label'=>Yii::t('zii', 'Logout'), 'url'=>array('site/logout'),'itemOptions'=>array('class'=>'l1'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions'=>array('class'=>'simple-drop-down-menu'),
			)); ?>
			</div>
			
			</div>
			
			
		</div>
		<!--/Banner-->
		
		<div class="color-banner"></div>
		</div>

	<!--/Header-->


<?php echo $content; ?>


<!--one fifth-->

<div class="full-width-wrapper" id="footer-wrapper">
<div class="fixed-width-wrapper" id="footer-content">
<div class="one-fifth first">
<div class="text">关于我们</div>
<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'',
			'htmlOptions'=>array('class'=>'footer-list'),
			'items'=>array(
				array('label'=>Yii::t('zii', 'Profile'), 'url'=>array('/about/page1')),
				array('label'=>Yii::t('zii', 'Certificate'), 'url'=>array('/about/page2'))
			),
			)); 
			?>
<div class="text3">联系我们</div>
<?php
			$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>'联系方式', 'url'=>array('/site/contact')),
							array('label'=>'网上留言', 'url'=>array('/site/contact')),

					),
			));
			?>
</div>
<div class="one-fifth">
<div class="text">KC系列产品</div>
<?php 
				$this->renderPartial('//product/menu5');
			?>
</div>
<div class="one-fifth">
<div class="text">工作站与系统</div>
<?php 
				$this->renderPartial('//product/menu4');
			?>
</div>
<div class="one-fifth">
<div class="text">服务与支持</div>
<?php 
			$this->renderPartial('//service/menu1');
			?>
</div>
<div class="one-fifth">
<div class="text">红外热像原理</div>
<?php
			$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>'红外热像发展历史', 'url'=>array('/site/history')),
							array('label'=>'红外热像基础理论', 'url'=>array('/site/principle')),
							array('label'=>'技术参数', 'url'=>array('/site/parameter')),
							array('label'=>'术语释义', 'url'=>array('/site/terms')),
							array('label'=>'红外热像应用领域', 'url'=>array('/site/Field')),

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
<li>© 2011 - 科易光电技术有限公司</li>
<li><a href="404.html" title="">ICP05093365</a></li>
<li><a href="contact.html" title="">地址：广州市科学城彩频路11号F1101A</a></li>
</ul>
</div>
</div>
</div>
<!--/Footer Extra-->
</body>
</html>
