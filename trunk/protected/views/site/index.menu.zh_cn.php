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
				
	
			 $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('zii', 'system.home'), 'url'=>array('/site/index'),'itemOptions'=>$itemOptions['home']),
				array('label'=>Yii::t('zii', 'menu.index.company'), 'url'=>array('/page/open/name/about-keii.html'),'itemOptions'=>$itemOptions['about'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'menu.index.company.about_keii'), 'url'=>array('/page/open/name/company-intro.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.company.certificates'), 'url'=>array('/page/open/name/certificates.html'),'itemOptions'=>array('class'=>'l2')),
						),
				),
				
				array('label'=>Yii::t('zii', 'menu.index.product'), 'url'=>array('/products'), 'itemOptions'=>$itemOptions['product'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'products.kc.100'), 'url'=>array('/products/open/name/kc100.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.kc.500'), 'url'=>array('/products/open/name/kc500.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.kc.700'), 'url'=>array('/products/open/name/kc700.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.kc.800'), 'url'=>array('/products/open/name/kc800.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.kc.850'), 'url'=>array('/products/open/name/kc850.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.gl.600'), 'url'=>array('/products/open/name/gl600.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.carmobile'), 'url'=>array('/products/open/name/mobile-mounted-inspection-system.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.substation'), 'url'=>array('/products/open/name/ir-inspection-system-for-substation.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'products.helicopter'), 'url'=>array('/products/open/name/helicopter-patrol-inspection-system.html'),'itemOptions'=>array('class'=>'l2')),
				
							),
				),
	
				array('label'=>Yii::t('zii', 'menu.index.application_gallery'), 'url'=>array('/page/open/name/gallery.html'),'itemOptions'=>$itemOptions['application'], 
				'items'=>array(
						array('label'=>Yii::t('zii', 'menu.index.application_gallery.industries').'»', 'url'=>array('/page/open/name/industries.html'),'itemOptions'=>array('class'=>'l2'),
								'items'=>array(
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.electrical'), 'url'=>array('/page/open/name/electrical.html'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.petrochemical'), 'url'=>array('/page/open/name/petrochemical.html'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.metallurgy&steel'), 'url'=>array('/page/open/name/metallurgy-steel.html'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.automation'), 'url'=>array('/page/open/name/automation.html'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.building_diagnostics'), 'url'=>array('/page/open/name/building-diagnostics.html'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.cement&glass'), 'url'=>array('/page/open/name/cement-glass.html'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.pulp&paper'), 'url'=>array('/page/open/name/pulp-paper.html'),'itemOptions'=>array('class'=>'l3')),
								)
							),
						array('label'=>Yii::t('zii', 'menu.index.application_gallery.applications').'»', 'url'=>array('/page/open/name/case.html'),'itemOptions'=>array('class'=>'l2'),
							'items'=>array(
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.R&D'), 'url'=>array('/page/open/name/r&d.html'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.predictive_maintenance'), 'url'=>array('/page/open/name/predictive-maintenance.html'),'itemOptions'=>array('class'=>'l3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.gas_leak_checking'), 'url'=>array('/page/open/name/gas-leak-checking.html'),'itemOptions'=>array('class'=>'l3')),
								)
							),
					),
				),

				array('label'=>Yii::t('zii', 'menu.index.thermography_theory.abbr'), 'url'=>array('/page/open/name/thermography-theory.html'),'itemOptions'=>$itemOptions['irtheory'],
						'items'=>array(
								array('label'=>Yii::t('zii', 'menu.index.technical.terms'), 'url'=>array('/page/open/name/technical-terms1.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.IR_camera?'), 'url'=>array('/page/open/name/ir-camera.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.dynamic_IR?'), 'url'=>array('/page/open/name/dynamic-ir.html'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.choose?'), 'url'=>array('/page/open/name/choose.html'),'itemOptions'=>array('class'=>'l2')),
					)

				),

				array('label'=>Yii::t('zii', 'menu.index.service&support.abbr'), 'url'=>array('/page/open/name/service.html'),'itemOptions'=>$itemOptions['service'],
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.pre-sales_enquiry'), 'url'=>array('/page/open/name/pre-sales-enquiry.html'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.after-sales_service'), 'url'=>array('/page/open/name/after-sales-service.html'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.technical_support'), 'url'=>array('/page/open/name/technical-support.html'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.inspection_service'), 'url'=>array('/page/open/name/inspection-service.html'),'itemOptions'=>array('class'=>'l2')),					
					),
				),
				//array('label'=>Yii::t('zii', 'Member'), 'url'=>array($member_url),'itemOptions'=>array('class'=>'l1')),
				array('label'=>Yii::t('zii', 'menu.index.contact'), 'url'=>array('/comment'),'itemOptions'=>$itemOptions['contactus']),
				#array('label'=>Yii::t('zii', 'system.logout'), 'url'=>array('site/logout'),'itemOptions'=>array('class'=>'l1'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions'=>array('class'=>'simple-drop-down-menu'),
			)); ?>
			</div>
			
			</div>