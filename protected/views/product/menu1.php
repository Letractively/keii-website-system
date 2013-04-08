<dt><?php echo Yii::t('zii', 'product.product_list')?></dt>
<dd>
<?php
$this->widget('zii.widgets.CMenu',array(
		'id'=>'',
		'htmlOptions'=>array('class'=>'list cat'),
		'items'=>array(
				array('label'=>Yii::t('zii', 'products.kc.100'), 'url'=>array('/product/kc100')),
				array('label'=>Yii::t('zii', 'products.kc.500'), 'url'=>array('/product/kc500')),
				array('label'=>Yii::t('zii', 'products.kc.700'), 'url'=>array('/product/kc700')),
				#array('label'=>Yii::t('zii', 'products.kc.750'), 'url'=>array('/product/kc750'), 'visible'=>strstr(Yii::app()->language, 'en')),
				array('label'=>Yii::t('zii', 'products.kc.800'), 'url'=>array('/product/kc800')),
				array('label'=>Yii::t('zii', 'products.kc.850'), 'url'=>array('/product/kc850')),
				array('label'=>Yii::t('zii', 'products.gl.600'), 'url'=>array('/product/gl600')),
				array('label'=>Yii::t('zii', 'products.carmobile.abbr'), 'url'=>array('/product/carmobile')),
				array('label'=>Yii::t('zii', 'products.substation.abbr'), 'url'=>array('/product/substation')),
				array('label'=>Yii::t('zii', 'products.helicopter.abbr'), 'url'=>array('/product/helicopter'))
		),
));
?>
</dd>
