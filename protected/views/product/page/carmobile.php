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
	<div class="fixed-width-wrapper" id="body-content">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">
			<div class="header-text">

			
<?php 
$this->widget('zii.widgets.CBreadcrumbs', array(
	'links'=>$this->breadcrumbs,
));
?>
<div style="width: 75px; height: 20px; left: -1px;">&nbsp;</div>
			</div>

			<div class="two-third first">
				<img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/products/Car_mobile_bg.jpg"
					class="align-left img-border">
				
			</div>

			<div class="one-third">

			</div>

			<div class="hr clear sp"></div>

			<div class="three-fourth first">
				<div id="product_tabs">
					<ul>
						<li><a href="#tabs-1">产品介绍</a></li>
						<li><a href="#tabs-2">技术参数</a></li>
						<li><a href="#tabs-3">产品图库</a></li>

					</ul>
					<div id="tabs-1">
					<table >
						<tr>
						
						<td>
						
						<div class="product-info-box">
												
						
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-01b.jpg"	title="" rel="prettyPhoto"	class="img-border preloading-light align-right project-thumbnail image-preview">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-01a.jpg" alt="">
						</a>
						
						<p>
						配件齐全
						</p>
						
						</div>
						</td>
						
						<td>
						<div class="product-info-box">
						<a	href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-02b.jpg" title="" rel="prettyPhoto"	class="img-border preloading-light align-right project-thumbnail image-preview">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-02a.jpg" alt="">
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
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-03b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-03a.jpg"
								alt=""></a>
						<p><strong>测量精准，不错失每一个细节：</strong>配备大口径电动调焦镜头，可观测1km远的高压和超高压线缆以及线缆接头。系统还采用云台控制方式，通过手柄上的“云台控制”按键可以控制热像仪的转向角度(水平360°，上下60°)。</p>
						
						</div>
					
						</td>
						
						
						<td>
						
						<div class="product-info-box">
						
						<a
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-04b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-04a.jpg"
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
								href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-05b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-05a.jpg"
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
						<table  class="m-table">

							<thead>
							<tr>
																					<th colspan="2" >红外热像性能参数</th>
											
											</tr>
							</thead>

							<tbody>
								<tr>									
									<td height="24">探测器类型</td>
									<td >非致冷焦平面列阵</td>
								</tr>
								<tr>
									<td>工作波段</td>
									<td >7.5～14μm</td>
								</tr>
								<tr>
									<td>像素数</td>
									<td >384×288</td>
								</tr>
								<tr>
									<td>温度分辨率</td>
									<td >＜ 0.08 ℃在30℃时</td>
								</tr>
								<tr>
									<td>帧频</td>
									<td >50 （60）帧/秒</td>
								</tr>
								<tr>

									<td>标准镜头</td>
									<td >24° x 18° 电动镜头</td>
								</tr>
								<tr>
									<td>最小成像距离</td>
									<td >0.3m</td>
								</tr>
								<tr>

									<td>电源</td>
									<td >12 V DC</td>
								</tr>
								<tr>
									<td>功率</td>
									<td >＜20 W</td>
								</tr>
								<tr>

									<td>测温范围</td>
									<td >-20℃~500℃(可扩展到2000℃)</td>
								</tr>
								<tr>
									<td>测温精度</td>
									<td ><u>+</u>2 ℃ 或 <u>+</u>2%</td>
								</tr>
								<tr>

									<td>外型尺寸</td>
									<td >220mm×85mm×85mm (长×宽×高)</td>
								</tr>
								<tr>
									<td>重量</td>
									<td >1.4 Kg</td>
								</tr>
								<tr>
									<td>防护等级</td>
									<td >IP67</td>
								</tr>
								<tr>
									<td>抗振动等级</td>
									<td >3g</td>
								</tr>
								<tr>
									<td>抗冲击等级</td>
									<td >30g</td>
								</tr>
								<tr>
									<td>工作环境温度</td>
									<td >-15℃～50℃</td>
								</tr>
								<tr>
									<td>工作环境湿度</td>
									<td >≤95%</td>
								</tr>
								<tr>
									<td>存贮环境温度</td>
									<td >-40℃～70℃</td>
								</tr>
								<tr>
									<td width="19%" height="23">RJ45 Ethernet</td>
									<td width="38%">16 位实时数字温度图像信号与控制信号</td>
								</tr>
								<tr>
									<td>USB/HOST</td>
									<td>接键盘 / 鼠标等</td>
								</tr>
								<tr>
									<td>AV视频输出</td>
									<td>PAL或NTSL</td>
								</tr>
								<tr>
									<td>电源输入接口</td>
									<td>12V DC ,2A</td>
								</tr>
							</tbody>
						</table>
					</div>
				
					<div id="tabs-3">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-01b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-01a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-02b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-02a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-03b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Car mobile-03a.jpg"
										alt=""></a></td>
							</tr>
						</table>
					</div>

		
				</div>
			</div>

			<div class="one-fourth">
				<br></br>
				<dl class="m-simple-toggle">
					<dt>产品列表</dt>
					<dd>
						<?php $this->renderPartial('//product/menu1'); ?>
					</dd>
					<dt>产品应用</dt>
					<dd>
						<?php $this->renderPartial('//application/menu1');?>
					</dd>
					<dt>服务支持</dt>
					<dd>
						<?php $this->renderPartial('//service/menu1'); ?>
					</dd>
				</dl>
			</div>


			<!--/Porfolio Content-->
		</div>
	</div>
	<!--/Content-->
</div>
<!--/Body content-->
<div class='bottom-separator'></div>