<?php 
$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'unordered-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'Building Diagnostics'), 'url'=>array('/application&example=1')),
							array('label'=>Yii::t('zii', 'Cement and Glass'), 'url'=>array('/application&example=2')),
							array('label'=>Yii::t('zii', 'Metallurgy and steel'), 'url'=>array('/application&example=3')),
							array('label'=>Yii::t('zii', 'Petrochemical Industry'), 'url'=>array('/application&example=4')),
							array('label'=>Yii::t('zii', 'Predictive Maintenance'), 'url'=>array('/application&example=5')),
							array('label'=>Yii::t('zii', 'Pulp and Paper Industry'), 'url'=>array('/application&example=6')),
							array('label'=>Yii::t('zii', 'R&D'), 'url'=>array('/application&example=7')),
					),
			));

?>