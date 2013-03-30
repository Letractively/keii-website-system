<dt><?php echo Yii::t('zii', 'product.application')?></dt>
<dd>
<?php 
$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'list cat'),
					'items'=>array(
								array('label'=>Yii::t('zii', 'menu.index.application_gallery.electrical'), 'url'=>array('/application&example=9')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.petrochemical'), 'url'=>array('/application&example=4')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.metallurgy&steel'), 'url'=>array('/application&example=3')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.automation'), 'url'=>array('/application&example=8')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.building_diagnostics'), 'url'=>array('/application&example=1')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.cement&glass'), 'url'=>array('/application&example=2')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.pulp&paper'), 'url'=>array('/application&example=6')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.R&D'), 'url'=>array('/application&example=7')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.predictive_maintenance'), 'url'=>array('/application&example=5')),
										array('label'=>Yii::t('zii', 'menu.index.application_gallery.gas_leak_checking'), 'url'=>array('/application&example=10')),
					),
			));

?>
</dd>