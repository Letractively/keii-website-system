<div class="footer-list-1">
<div class="text-en"><?php echo Yii::t('zii', 'menu.index.about_us')?></div>
<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'',
			'htmlOptions'=>array('class'=>'footer-list'),
			'items'=>array(
				array('label'=>Yii::t('zii', 'menu.index.company.about_keii'), 'url'=>array('/about/page1')),
				array('label'=>Yii::t('zii', 'menu.index.company.certificates'), 'url'=>array('/about/page2'))
			),
			)); 
			?>
</div>
<div class="footer-list-2">
<div class="text-en"><?php echo Yii::t('zii', 'menu.index.thermography_theory')?></div>
<?php
			$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.IR_camera_history'), 'url'=>array('/site/history')),
							array('label'=>Yii::t('zii', 'menu.index.parameter'), 'url'=>array('/site/parameter')),
							array('label'=>Yii::t('zii', 'menu.index.technical.terms'), 'url'=>array('/site/terms')),
							array('label'=>Yii::t('zii', 'menu.index.field'), 'url'=>array('/site/Field')),

					),
			));
			?>
</div>


<div class="footer-list-3">
<div class="text-en"><?php echo Yii::t('zii', 'menu.index.product.kc&gl')?></div>
<?php 
				$this->renderPartial('//product/menu5');
			?>
</div>
<div class="footer-list-4">
<div class="text-en"><?php echo Yii::t('zii', 'menu.index.product.system')?></div>
<?php 
				$this->renderPartial('//product/menu4');
			?>
</div>
<div class="footer-list-5">
<div class="text-en"><?php echo Yii::t('zii', 'menu.index.service&support')?></div>
<?php 
			$this->renderPartial('//service/menu1');
			?>
</div>
<div class="footer-list-6">
<div class="text-en"><?php echo Yii::t('zii', 'menu.index.contact')?></div>
<?php
			$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.address'), 'url'=>array('/site/contact')),
							array('label'=>Yii::t('zii', 'menu.index.guestbook'), 'url'=>array('/site/contact')),

					),
			));
			?>
</div>