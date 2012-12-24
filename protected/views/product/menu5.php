<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'footer-list'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'kc100_s'), 'url'=>array('/product/kc100')),
				array('label'=>Yii::t('zii', 'kc500_s'), 'url'=>array('/product/kc500')),
				array('label'=>Yii::t('zii', 'kc700_s'), 'url'=>array('/product/kc700')),
				array('label'=>Yii::t('zii', 'kc750_s'), 'url'=>array('/product/kc750'), 'visible'=>strstr(Yii::app()->language, 'en')),
				array('label'=>Yii::t('zii', 'kc800_s'), 'url'=>array('/product/kc800')),
				array('label'=>Yii::t('zii', 'kc850_s'), 'url'=>array('/product/kc850')),
				array('label'=>Yii::t('zii', 'gl600_s'), 'url'=>array('/product/gl600')),
		),
));
?>