<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'unordered-list'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'workstation_s'), 'url'=>array('/product/workstation')),
				array('label'=>Yii::t('zii', 'kc100_s'), 'url'=>array('/product/kc100')),
				array('label'=>Yii::t('zii', 'kc500_s'), 'url'=>array('/product/kc500')),
				array('label'=>Yii::t('zii', 'kc700_s'), 'url'=>array('/product/kc700')),
				array('label'=>Yii::t('zii', 'kc750_s'), 'url'=>array('/product/kc750'), 'visible'=>strstr(Yii::app()->language, 'en')),
				array('label'=>Yii::t('zii', 'kc800_s'), 'url'=>array('/product/kc800')),
				array('label'=>Yii::t('zii', 'kc850_s'), 'url'=>array('/product/kc850')),
				array('label'=>Yii::t('zii', 'gl600_s'), 'url'=>array('/product/gl600')),
				array('label'=>Yii::t('zii', 'carmobile_s'), 'url'=>array('/product/carmobile')),
				array('label'=>Yii::t('zii', 'substation_s'), 'url'=>array('/product/substation')),
				array('label'=>Yii::t('zii', 'helicopter_s'), 'url'=>array('/product/helicopter'))
		),
));
?>