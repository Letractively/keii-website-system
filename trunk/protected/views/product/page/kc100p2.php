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

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'kc100' );
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
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/kc100.jpg"
					class="align-left img-border">
				<h3>
					<strong>科易 KC100 红外热像仪</strong>
				</h3>
				<ol class="ordered-list">
					<li><strong>型号：</strong>KC100</li>
					<li><strong>分辨率：</strong>384x288</li>
					<li><strong>类型：</strong>非致冷探测器</li>
					<li><strong>特性：</strong>实时传输/记录/分析</li>
				</ol>
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
									<blockquote>
										<a href="core/images/pix/KC100-04b.jpg" title=""
											rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-04a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">6</span><strong>区域独立伪彩分析功能:</strong>在各分析区域内独立设置该区域的伪彩，使该区域内的热点和潜在故障表露无遗，便于更好地发现设备的隐蔽缺陷。
										</p>
									</blockquote>

									<blockquote>
										<a href="core/images/pix/KC100-05b.jpg" title=""
											rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-05a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">7</span><strong>强大的数据传输功能:</strong>利用RJ45网络接口实时传输包含全部温度数据的16位全动态红外视频流至电脑。
										</p>
									</blockquote>

									<blockquote>
										<a href="core/images/pix/KC100-06b.jpg" title=""
											rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-06a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">8</span><strong>仅用一台电脑，</strong>
											仅用一台电脑，就可以同时、实时远程控制多台红外热像仪（多至12台）
										</p>
									</blockquote> <!--Pagination-->
									<div class="page-pagination">
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=product/kc100&page=1"
											title="">1</a> <a
											href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=product/kc100&page=2"
											title="" class="current">2</a>
									</div> <!--/Pagination-->
								</td>
							</tr>
						</table>
					</div>
					<div id="tabs-2">
						<table>
							<tr>
								<td><table  class="m-table">

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
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-p01b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-p01a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-p02b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-p02a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-p03b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC100-p03a.jpg"
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
<?php
$this->renderPartial ( '//service/menu1' );
?>
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