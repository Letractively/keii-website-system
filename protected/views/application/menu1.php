<dt><?php echo Yii::t('zii', 'product.application')?></dt>
<dd>
<?php 
$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'list cat'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.electrical'), 'url'=>array('/page/open/name/electrical.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.petrochemical'), 'url'=>array('/page/open/name/petrochemical.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.metallurgy&steel'), 'url'=>array('/page/open/name/metallurgy-steel.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.automation'), 'url'=>array('/page/open/name/automation.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.building_diagnostics'), 'url'=>array('/page/open/name/building-diagnostics.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.cement&glass'), 'url'=>array('/page/open/name/cement-glass.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.pulp&paper'), 'url'=>array('/page/open/name/pulp-paper.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.R&D'), 'url'=>array('/page/open/name/r&d.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.predictive_maintenance'), 'url'=>array('/page/open/name/predictive-maintenance.html')),
							array('label'=>Yii::t('zii', 'menu.index.application_gallery.gas_leak_checking'), 'url'=>array('/page/open/name/gas-leak-checking.html')),					
					),
			));

?>
</dd>