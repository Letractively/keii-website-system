<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'footer-list'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'products.carmobile'), 'url'=>array('/products/open/name/mobile-mounted-inspection-system.html')),
				array('label'=>Yii::t('zii', 'products.substation'), 'url'=>array('/products/open/name/ir-inspection-system-for-substation.html')),
				array('label'=>Yii::t('zii', 'products.helicopter'), 'url'=>array('/products/open/name/helicopter-patrol-inspection-system.html'))
		),
));
?>