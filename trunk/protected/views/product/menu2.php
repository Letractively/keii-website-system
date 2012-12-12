<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'list cat'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'workstation'), 'url'=>array('/product/workstation')),
				array('label'=>Yii::t('zii', 'kc100'), 'url'=>array('/product/kc100')),
				array('label'=>Yii::t('zii', 'kc500'), 'url'=>array('/product/kc500')),
				array('label'=>Yii::t('zii', 'kc700'), 'url'=>array('/product/kc700')),
				array('label'=>Yii::t('zii', 'kc750'), 'url'=>array('/product/kc750'), 'visible'=>strstr(Yii::app()->language, 'en')),
				array('label'=>Yii::t('zii', 'kc800'), 'url'=>array('/product/kc800')),
				array('label'=>Yii::t('zii', 'kc850'), 'url'=>array('/product/kc850')),
				array('label'=>Yii::t('zii', 'gl600'), 'url'=>array('/product/gl600')),
				array('label'=>Yii::t('zii', 'carmobile'), 'url'=>array('/product/carmobile')),
				array('label'=>Yii::t('zii', 'substation'), 'url'=>array('/product/substation')),
				array('label'=>Yii::t('zii', 'helicopter'), 'url'=>array('/product/helicopter'))
		),
));
?>