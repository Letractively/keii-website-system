<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'unordered-list'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'workstation_s'), 'url'=>array('/product/workstation')),
				array('label'=>Yii::t('zii', 'carmobile_s'), 'url'=>array('/product/carmobile')),
				array('label'=>Yii::t('zii', 'substation_s'), 'url'=>array('/product/substation')),
				array('label'=>Yii::t('zii', 'helicopter_s'), 'url'=>array('/product/helicopter'))
		),
));
?>