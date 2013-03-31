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
	<a><?php echo Yii::t('zii', 'system.login')?></a>
	<span>|</span>
	<a><?php echo Yii::t('zii', 'system.register')?></a>&nbsp;&nbsp;&nbsp;&nbsp;
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
				array('label'=>Yii::t('zii', 'system.home'), 'url'=>array('/site/index'),'itemOptions'=>$itemOptions['home']),
				array('label'=>Yii::t('zii', 'menu.index.company'), 'url'=>array('/about'),'itemOptions'=>$itemOptions['about'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'menu.index.company.about_keii'), 'url'=>array('/about/page1'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.company.certificates'), 'url'=>array('/about/page2'),'itemOptions'=>array('class'=>'l2')),
						),
				),
				
				array('label'=>Yii::t('zii', 'menu.index.product'), 'url'=>array('/product'), 'itemOptions'=>$itemOptions['product'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'products.kc.100'), 'url'=>array('/product/kc100'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.kc.500'), 'url'=>array('/product/kc500'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.kc.700'), 'url'=>array('/product/kc700'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.kc.800'), 'url'=>array('/product/kc800'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.kc.850'), 'url'=>array('/product/kc850'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.gl.600'), 'url'=>array('/product/gl600'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.carmobile'), 'url'=>array('/product/carmobile'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.substation'), 'url'=>array('/product/substation'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.helicopter'), 'url'=>array('/product/helicopter'),'itemOptions'=>array('class'=>'l2')),
				
							),
				),
	
				array('label'=>Yii::t('zii', 'menu.index.application_gallery'), 'url'=>array('/application'),'itemOptions'=>$itemOptions['application'], 
				'items'=>array(
						array('label'=>Yii::t('zii', 'menu.index.application_gallery.industries').'»', 'url'=>array('/application'),'itemOptions'=>array('class'=>'l2'),
								'items'=>array(
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.electrical'), 'url'=>array('/application&example=9'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.petrochemical'), 'url'=>array('/application&example=4'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.metallurgy&steel'), 'url'=>array('/application&example=3'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.automation'), 'url'=>array('/application&example=8'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.building_diagnostics'), 'url'=>array('/application&example=1'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.cement&glass'), 'url'=>array('/application&example=2'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.pulp&paper'), 'url'=>array('/application&example=6'),'itemOptions'=>array('class'=>'l3')),
								)
							),
						array('label'=>Yii::t('zii', 'menu.index.application_gallery.applications').'»', 'url'=>array('/application'),'itemOptions'=>array('class'=>'l2'),
							'items'=>array(
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.R&D'), 'url'=>array('/application&example=7'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.predictive_maintenance'), 'url'=>array('/application&example=5'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.gas_leak_checking'), 'url'=>array('/application&example=10'),'itemOptions'=>array('class'=>'l3')),
								)
							),
					),
				),

				array('label'=>Yii::t('zii', 'menu.index.thermography_theory.abbr'), 'url'=>array('/site/principle'),'itemOptions'=>$itemOptions['irtheory'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'menu.index.technical.terms'), 'url'=>array('/site/terms'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.IR_camera?'), 'url'=>array('/site/infraredcamera'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.dynamic_IR?'), 'url'=>array('/site/dinfraredcamera'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.choose?'), 'url'=>array('/site/choose'),'itemOptions'=>array('class'=>'l2')),
					)

				),

				array('label'=>Yii::t('zii', 'menu.index.service&support.abbr'), 'url'=>array('/service'),'itemOptions'=>$itemOptions['service'],
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.pre-sales_enquiry'), 'url'=>array('/service/presales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.after-sales_service'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.technical_support'), 'url'=>array('/service/training'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.inspection_service'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2')),					),
				),
				//array('label'=>Yii::t('zii', 'Member'), 'url'=>array($member_url),'itemOptions'=>array('class'=>'l1')),
				array('label'=>Yii::t('zii', 'menu.index.contact'), 'url'=>array('site/contact'),'itemOptions'=>$itemOptions['contactus']),
				array('label'=>Yii::t('zii', 'system.logout'), 'url'=>array('site/logout'),'itemOptions'=>array('class'=>'l1'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions'=>array('class'=>'simple-drop-down-menu'),
			)); ?>
			</div>
			
			</div>
			
			
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
