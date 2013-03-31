<div  id="navigation-bar">
			
				<div id="navigation">
		<?php
		$keii_request_url = Yii::app()->request->url;
		
		$itemOptions = array('home' => array('class' =>'l1 language-en' ),
				'about' => array('class' =>'l1 language-en' ),
				'product' => array('class' =>'l1 language-en' ),
				'application' => array('class' =>'l1 language-en' ),
				'irtheory' => array('class' =>'l1 language-en' ),
				'service' => array('class' =>'l1 language-en' ),
				'contactus' => array('class' =>'l1 language-en' )
		);
				
	
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
							array('label'=>Yii::t('zii', 'menu.index.inspection_service'), 'url'=>array('/service/inspection'),'itemOptions'=>array('class'=>'l2')),					),
				),
				//array('label'=>Yii::t('zii', 'Member'), 'url'=>array($member_url),'itemOptions'=>array('class'=>'l1')),
				array('label'=>Yii::t('zii', 'menu.index.contact'), 'url'=>array('site/contact'),'itemOptions'=>$itemOptions['contactus']),
				array('label'=>Yii::t('zii', 'system.logout'), 'url'=>array('site/logout'),'itemOptions'=>array('class'=>'l1'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions'=>array('class'=>'simple-drop-down-menu'),
			)); ?>
			</div>
			
			</div>