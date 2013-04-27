<div class="footer-list-1">
<div class="text"><?php echo Yii::t('zii', 'menu.index.about_us')?></div>
<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'',
			'htmlOptions'=>array('class'=>'footer-list'),
			'items'=>array(
				array('label'=>Yii::t('zii', 'menu.index.company.about_keii'), 'url'=>array('/page/open/name/company-intro.html')),
				array('label'=>Yii::t('zii', 'menu.index.company.certificates'), 'url'=>array('/page/open/name/certificates.html'))
			),
			)); 
			?>
</div>
<div class="footer-list-2">
<div class="text"><?php echo Yii::t('zii', 'menu.index.thermography_theory')?></div>
<?php
			$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
						array('label'=>Yii::t('zii', 'menu.index.technical.terms'), 'url'=>array('/page/open/name/technical-terms1.htm')),
						array('label'=>Yii::t('zii', 'menu.index.IR_camera?'), 'url'=>array('/page/open/name/ir-camera.html')),
						array('label'=>Yii::t('zii', 'menu.index.dynamic_IR?'), 'url'=>array('/page/open/name/dynamic-ir.html')),
						array('label'=>Yii::t('zii', 'menu.index.choose?'), 'url'=>array('/page/open/name/choose.html')),
					),
			));
			?>
</div>


<div class="footer-list-3">
<div class="text"><?php echo Yii::t('zii', 'menu.index.product.kc&gl')?></div>
<?php 
				$this->renderPartial('//products/menu.kc.gl');
			?>
</div>
<div class="footer-list-4">
<div class="text"><?php echo Yii::t('zii', 'menu.index.product.system')?></div>
<?php 
				$this->renderPartial('//products/menu.system');
			?>
</div>
<div class="footer-list-5">
<div class="text"><?php echo Yii::t('zii', 'menu.index.service&support')?></div>
<?php 
			$this->renderPartial('//service/menu1');
			?>
</div>
<div class="footer-list-6">
<div class="text"><?php echo Yii::t('zii', 'menu.index.contact')?></div>
<?php
			$this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'footer-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'menu.index.address'), 'url'=>array('/page/open/name/contact-us.html')),
							array('label'=>Yii::t('zii', 'menu.index.guestbook'), 'url'=>array('/user/info/')),

					),
			));
			?>
</div>