<?php
$this->breadcrumbs = array (
		'Products' 
);

$this->breadcrumbs=array(
		Yii::t('zii', 'Product')=>array('/product'),
		Yii::t('zii', $this->actionId )=>array($this->controllerId . '/' . $this->actionId ),
);

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'carmobile' );

?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">

			<div class="two-third first">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/index_cn.jpg" class="align-left">				
			</div>

			<div class="one-third">

			</div>

			<div class="three-fourth first">
				<div id="product_tabs">
					<ul class="tab_list">
						<li><a href="#tabs-1">产品介绍</a></li>
						<li><a href="#tabs-2">产品图库</a></li>

					</ul>
					<div id="tabs-1">
					<table >
						<tr>
						
						<td>
						
						<div class="product-info-box">
												
						
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/01b.jpg"	title="" rel="prettyPhoto"	class="img-border preloading-light align-right project-thumbnail image-preview">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/01a.jpg" alt="">
						</a>
						
						<p>
						配件齐全
						</p>
						
						</div>
						</td>
						
						<td>
						<div class="product-info-box">
						<a	href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/02b.jpg" title="" rel="prettyPhoto"	class="img-border preloading-light align-right project-thumbnail image-preview">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/02a.jpg" alt="">
						</a>
						<p>
						车载移动式红外热像系统的安装和拆卸都非常简便，而且便于携带。系统配置了磁性吸盘底座和橡胶底座，专为颠簸路面而设计的橡胶底座可以保证车辆行驶在120Km时速下，热像仪不移动，不掉落，正常工作。
						</p>
						
						</div>
						</td>
						
						</tr>
					
					
						<tr>
						<td>
						<div class="product-info-box">
						
							<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/03b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/03a.jpg"
								alt=""></a>
						<p><strong>测量精准，不错失每一个细节：</strong>配备大口径电动调焦镜头，可观测1km远的高压和超高压线缆以及线缆接头。系统还采用云台控制方式，通过手柄上的“云台控制”按键可以控制热像仪的转向角度(水平360°，上下60°)。</p>
						
						</div>
					
						</td>
						
						
						<td>
						
						<div class="product-info-box">
						
						<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/04b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/04a.jpg"
								alt=""></a>
						<p>
						<strong>性能稳定，操作简单：</strong>装配最新的焦平面红外探测器，能将物体的红外特征图以图像的方式显示在LCD显示器上。通过用户菜单可进行个性化设置，包括电子放大，黑/白热，镜像，色标等功能。
						</p>
						
						</div>
						</td>
						</tr>
					
						<tr>
						<td colspan="2" >
						<blockquote>
							<a
								href="<?php echo Yii::app()->request->baseUrl;?>/images/zh_CN/products/carmobile/05b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/05a.jpg"
								alt=""></a>
							<p>
								<strong>功能强大的分析及报告制作软件：</strong>除了可以在LCD显示器上显示，还可与电脑连接，使用后端软件进行实时显示。同时借助本公司自主研发的后台软件的强大功能可实现：测温、温度报警、在线分析、生成报表以及保存红外视频录像等功能。
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
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/01b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/01a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/02b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/02a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/03b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/carmobile/03a.jpg"
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
