<?php
$this->breadcrumbs = array (
		'Products' 
);

$this->breadcrumbs = array (
		Yii::t ( 'zii', 'Product' ) => array (
				'/product' 
		),
		Yii::t ( 'zii', $this->actionId ) => array (
				$this->controllerId . '/' . $this->actionId 
		) 
);

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'helicopter' );

?>

<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">


			<div class="two-third first">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/index_cn.jpg" class="align-left">
			</div>

			<div class="one-third"></div>

			<div class="three-fourth first">

				<div id="product_tabs">
					<ul class="tab_list">
						<li><a href="#tabs-1">产品介绍</a></li>						
						<li><a href="#tabs-2">产品图库</a></li>
					</ul>
					<div id="tabs-1">
					
					<table>
					
					<tr>
								<td colspan="2">
									<blockquote>											
									<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/01b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/01a.jpg" alt="">
									</a>
									<p><strong>提供完善的吊舱系统解决方案：</strong>
									广州科易公司能提供的不仅仅是适用的吊舱、红外热像仪及配套软硬件设备，而是整套完善的系统解决方案，协助客户解决在巡线中遇到的所有技术疑难问题，<br>
									广州科易公司已成功为国网、南网提供成套线路巡检吊舱系统。其中为国家电网公司提供的电力线直升飞机巡检系统已经得到很好的应用，并在2010年1月被中国机电工程学会评为“具有世界一流技术水平”的系统；
									
									</p>
									</blockquote>
								</td>
						</tr>
						
						</table>
					
						
					</div>				
					
					<div id="tabs-2">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/09b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/09a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/10b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/10a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/11b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/helicopter/11a.jpg"
										alt=""></a></td>
							</tr>
						</table>
					</div>
					
				</div>
			</div>

			<div class="one-fourth">
				<?php $this->renderPartial('//site/menu1'); ?>				
				<dl class="m-simple-toggle">				
				<?php $this->renderPartial('//product/menu1'); ?>					
				<?php $this->renderPartial('//application/menu1');?>										
				</dl>
			</div>


			<!--/Porfolio Content-->
		</div>
	</div>
	<!--/Content-->
</div>
<!--/Body content-->