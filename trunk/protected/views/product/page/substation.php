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
$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'substation' );
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
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/products/Substation_bg.jpg"
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
						<table>
							<tr>
								<td>
								<div class="product-info-box">
																							<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-01b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-01a.jpg" alt="">
								</a>	
																<p>高度集成模块化，安装快捷，施工方便。专业的工程施工队可在一天内完成所有设备安装工作。</p>
									
								</div>
								</td>

								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a	href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-02b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-02a.jpg" alt="">
								</a>
																<p>能对变电设备（主变、高压触点、刀闸等）进行多个红外热像及可见光视频同时监控，可自动测量温度与分析温度等功能。</p>
								
										
								</div>
								</td>
							</tr>
							
							<tr>
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-03b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-03a.jpg" alt="">
								</a>	
																<p><strong>测量精准，不错失每一个细节：</strong>可实现高清晰度视频图像传输，实现远程浏览视频图像信息，集中管理，集中图像存储，具有远程控制、报警联动功能。</p>
								
									
								</div>
								</td>
								
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-04b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-04a.jpg" alt=""></a>
																<p>对海量数据快速检索指定设备温度变化趋势，通过观测设备的温度变化趋势，发现一般手持红外热像仪难以发现的电压致热故障。</p>
								
								</div>
								</td>
							 </tr>

							 <tr>
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-05b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-05a.jpg" alt=""></a>
																<p>可在同一时刻实现16位红外温度图像数据的实时传输、实时记录和实时分析的功能。</p>
								
								</div>	
								</td>
								
								<td>
								<div class="product-info-box">
																															<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-06b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-06a.jpg" alt=""></a>
																<p>强大红外图像分析软件进行二次分析并可自动生成红外检测报告</p>
									
								</div>
								</td>
							 </tr>
						</table>
					</div>
					<div id="tabs-2">
						<table>
							<tr>
								<td><table class="m-table">

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
									</table></td>
							</tr>
						</table>
					</div>
					
					<div id="tabs-3">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-01b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-01a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-02b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-02a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-03b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-03a.jpg"
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
<?php
$this->renderPartial ( '//product/menu1' );
?>
</dd>
					<dt>产品应用</dt>
					<dd>
<?php
$this->renderPartial ( '//application/menu1' );
?>	
</dd>
					<dt>服务支持</dt>
					<dd>
						<ul class="unordered-list">
							<li>相关软件</li>
							<li><a href="Support.html" title="">售前咨询</a></li>
							<li>培训课程</li>
							<li>售后服务</li>
						</ul>
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