<?php 
$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.pre-sales_enquiry'), 'url'=>array('/page/open/name/pre-sales-enquiry.html'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.after-sales_service'), 'url'=>array('/page/open/name/after-sales-service.html'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.technical_support'), 'url'=>array('/page/open/name/technical-support.html'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.inspection_service'), 'url'=>array('/page/open/name/inspection-service.html'),'itemOptions'=>array('class'=>'l2')),					
					),
			));
?>