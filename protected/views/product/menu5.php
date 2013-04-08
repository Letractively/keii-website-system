<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'footer-list'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'products.kc.100.abbr'), 'url'=>array('/product/kc100')),
				array('label'=>Yii::t('zii', 'products.kc.500.abbr'), 'url'=>array('/product/kc500')),
				array('label'=>Yii::t('zii', 'products.kc.700.abbr'), 'url'=>array('/product/kc700')),
				#array('label'=>Yii::t('zii', 'products.kc.750.abbr'), 'url'=>array('/product/kc750'), 'visible'=>strstr(Yii::app()->language, 'en')),
				array('label'=>Yii::t('zii', 'products.kc.800.abbr'), 'url'=>array('/product/kc800')),
				array('label'=>Yii::t('zii', 'products.kc.850.abbr'), 'url'=>array('/product/kc850')),
				array('label'=>Yii::t('zii', 'products.gl.600.abbr'), 'url'=>array('/product/gl600')),
		),
));
?>