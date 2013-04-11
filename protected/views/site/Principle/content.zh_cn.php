<?php 
$this->widget('zii.widgets.CMenu',array(
		'items'=>array(
								array('label'=>Yii::t('zii', 'menu.index.technical.terms'), 'url'=>array('/site/terms'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.IR_camera?'), 'url'=>array('/site/infraredcamera'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.dynamic_IR?'), 'url'=>array('/site/dinfraredcamera'),'itemOptions'=>array('class'=>'l2')),
								array('label'=>Yii::t('zii', 'menu.index.choose?'), 'url'=>array('/site/choose'),'itemOptions'=>array('class'=>'l2')),
						),
		'htmlOptions'=>array('class'=>'content-list'),
			)
		);
?>
