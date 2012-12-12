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
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation.jpg"
					class="align-left img-border">
				<h3>
					<strong>变电站红外监测系统</strong>
				</h3>
				<p>广州科易光电技术有限公司推出的变电站红外监测系统，除了简单的安防监控及设备高温报警外，更能够根据设备当前的负荷进行温度趋势预测，自动生成设备温度变化曲线，自动采集报警数据并生成检测报告，真正实现了变电站红外监测的智能化管理。</p>
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
								<td><blockquote>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-01b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-01a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">1</span>高度集成模块化，安装快捷，施工方便。专业的工程施工队可在一天内完成所有设备安装工作。
										</p>
									</blockquote>

									<blockquote>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-02b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-02a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">2</span>能对变电设备（主变、高压触点、刀闸等）进行多个红外热像及可见光视频同时监控，可自动测量温度与分析温度等功能。
										</p>
									</blockquote>

									<blockquote>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-03b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-03a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">3</span><strong>测量精准，不错失每一个细节：</strong>可实现高清晰度视频图像传输，实现远程浏览视频图像信息，集中管理，集中图像存储，具有远程控制、报警联动功能。
										</p>
									</blockquote>

									<blockquote>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-04b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-04a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">4</span>对海量数据快速检索指定设备温度变化趋势，通过观测设备的温度变化趋势，发现一般手持红外热像仪难以发现的电压致热故障。
										</p>
									</blockquote>

									<blockquote>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-05b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-05a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">5</span>可在同一时刻实现16
											位红外温度图像数据的实时传输、实时记录和实时分析的功能。
										</p>
									</blockquote>
									<blockquote>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-06b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/Substation-06a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">6</span>强大红外图像分析软件进行二次分析并可自动生成红外检测报告
										</p>
									</blockquote></td>
							</tr>
						</table>
					</div>
					<div id="tabs-2">
						<table>
							<tr>
								<td><table class="m-table">

										<thead>
											<tr>
												<th width="16%">项目</th>
												<th width="27%">内容</th>
												<th colspan="2">技术指标</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td rowspan="5"><p>&nbsp;</p>
													<p>探测器</p></td>
												<td height="24">探测器类型</td>
												<td colspan="2">非致冷焦平面列阵</td>
											</tr>
											<tr>
												<td>工作波段</td>
												<td colspan="2">7.5～14μm</td>
											</tr>
											<tr>
												<td>像素数</td>
												<td colspan="2">384×288</td>
											</tr>
											<tr>
												<td>温度分辨率</td>
												<td colspan="2">＜ 0.08 ℃在30℃时</td>
											</tr>
											<tr>
												<td>帧频</td>
												<td colspan="2">50 （60）帧/秒</td>
											</tr>
											<tr>
												<td rowspan="2">镜头</td>
												<td>标准镜头</td>
												<td colspan="2">24° x 18° 电动镜头</td>
											</tr>
											<tr>
												<td>最小成像距离</td>
												<td colspan="2">0.3m</td>
											</tr>
											<tr>
												<td rowspan="2">电源系统</td>
												<td>电源</td>
												<td colspan="2">12 V DC</td>
											</tr>
											<tr>
												<td>功率</td>
												<td colspan="2">＜20 W</td>
											</tr>
											<tr>
												<td rowspan="2">测量功能</td>
												<td>测温范围</td>
												<td colspan="2">-20℃~500℃(可扩展到2000℃)</td>
											</tr>
											<tr>
												<td>测温精度</td>
												<td colspan="2"><u>+</u>2 ℃ 或 <u>+</u>2%</td>
											</tr>
											<tr>
												<td rowspan="8"><p>&nbsp;</p>
													<p>&nbsp;</p>
													<p>物理结构和使用环境要求</p></td>
												<td>外型尺寸</td>
												<td colspan="2">220mm×85mm×85mm (长×宽×高)</td>
											</tr>
											<tr>
												<td>重量</td>
												<td colspan="2">1.4 Kg</td>
											</tr>
											<tr>
												<td>防护等级</td>
												<td colspan="2">IP67</td>
											</tr>
											<tr>
												<td>抗振动等级</td>
												<td colspan="2">3g</td>
											</tr>
											<tr>
												<td>抗冲击等级</td>
												<td colspan="2">30g</td>
											</tr>
											<tr>
												<td>工作环境温度</td>
												<td colspan="2">-15℃～50℃</td>
											</tr>
											<tr>
												<td>工作环境湿度</td>
												<td colspan="2">≤95%</td>
											</tr>
											<tr>
												<td>存贮环境温度</td>
												<td colspan="2">-40℃～70℃</td>
											</tr>
											<tr>
												<td rowspan="4"><p>&nbsp;</p>
													<p>界面</p></td>
												<td rowspan="4"><p>&nbsp;</p></td>
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