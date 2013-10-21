<dt><?php echo Yii::t('zii', 'product.product_list')?></dt>
<dd>
<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'list cat'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'products.kc.100'), 'url'=>array('/products/open/name/kc100.html')),
								array('label'=>Yii::t('zii', 'products.kc.500'), 'url'=>array('/products/open/name/kc500.html')),
								array('label'=>Yii::t('zii', 'products.kc.700'), 'url'=>array('/products/open/name/kc700.html')),
								array('label'=>Yii::t('zii', 'products.kc.800'), 'url'=>array('/products/open/name/kc800.html')),
								array('label'=>Yii::t('zii', 'products.kc.850'), 'url'=>array('/products/open/name/kc850.html')),
								array('label'=>Yii::t('zii', 'products.gl.600'), 'url'=>array('/products/open/name/gl600.html')),
								array('label'=>Yii::t('zii', 'products.gl.800'), 'url'=>array('/products/open/name/gl800.html')),
								array('label'=>Yii::t('zii', 'products.powbot6k'), 'url'=>array('/products/open/name/powbot6k.html')),								
								array('label'=>Yii::t('zii', 'products.carmobile'), 'url'=>array('/products/open/name/mobile-mounted-inspection-system.html')),
								array('label'=>Yii::t('zii', 'products.substation'), 'url'=>array('/products/open/name/ir-inspection-system-for-substation.html')),
								array('label'=>Yii::t('zii', 'products.helicopter'), 'url'=>array('/products/open/name/helicopter-patrol-inspection-system.html')),
		),
));
?>
</dd>
