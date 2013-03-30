<?php 
$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.pre-sales_enquiry'), 'url'=>array('/service/presales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.after-sales_service'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.technical_support'), 'url'=>array('/service/training'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.inspection_service'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2'))
					),
			));
?>