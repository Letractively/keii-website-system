<?php 
$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.pre-sales_enquiry'), 'url'=>array('/service/presales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.after-sales_service'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.technical_support'), 'url'=>array('/service/training'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'menu.index.inspection_service'), 'url'=>array('/service/inspection'),'itemOptions'=>array('class'=>'l2')),					
					),
		'htmlOptions'=>array('class'=>'content-list-en'),
			)
		);
?>
