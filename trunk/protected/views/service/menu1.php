<?php 
$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'unordered-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'Sales Inquiries'), 'url'=>array('/service/presales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'After Sales'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'Technical'), 'url'=>array('/service/training'),'itemOptions'=>array('class'=>'l2')),
							array('label'=>Yii::t('zii', 'Thermography Inspection'), 'url'=>array('/service/aftersales'),'itemOptions'=>array('class'=>'l2'))
					),
			));
?>