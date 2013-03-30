<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'footer-list'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'products.carmobile'), 'url'=>array('/product/carmobile')),
				array('label'=>Yii::t('zii', 'products.substation'), 'url'=>array('/product/substation')),
				array('label'=>Yii::t('zii', 'products.helicopter'), 'url'=>array('/product/helicopter'))
		),
));
?>