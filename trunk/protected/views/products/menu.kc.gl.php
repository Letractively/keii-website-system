<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'footer-list'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'products.kc.100.abbr'), 'url'=>array('/products/open/name/kc100.html')),
				array('label'=>Yii::t('zii', 'products.kc.500.abbr'), 'url'=>array('/products/open/name/kc500.html')),
				array('label'=>Yii::t('zii', 'products.kc.700.abbr'), 'url'=>array('/products/open/name/kc700.html')),
				#array('label'=>Yii::t('zii', 'products.kc.750.abbr'), 'url'=>array('/product/kc750'), 'visible'=>strstr(Yii::app()->language, 'en')),
				array('label'=>Yii::t('zii', 'products.kc.800.abbr'), 'url'=>array('/products/open/name/kc800.html')),
				array('label'=>Yii::t('zii', 'products.kc.850.abbr'), 'url'=>array('/products/open/name/kc850.html')),
				array('label'=>Yii::t('zii', 'products.gl.600.abbr'), 'url'=>array('/products/open/name/gl600.html')),
				array('label'=>Yii::t('zii', 'products.gl.800.abbr'), 'url'=>array('/products/open/name/gl800.html')),
		),
));
?>