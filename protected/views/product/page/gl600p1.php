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

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'gl600' );

?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper" id="body-content">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">
			<div class="header-text">


			<?php
			$this->widget ( 'zii.widgets.CBreadcrumbs', array (
					'links' => $this->breadcrumbs 
			) );
			?>
<div style="width: 75px; height: 20px; left: -1px;">&nbsp;</div>
						</div>
			<div class="two-third first">
				<img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600.jpg"
					class="align-left img-border">
				<h3>
					<strong>科易 GL600 红外热像仪</strong>
				</h3>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;广州科易公司精心打造的国内首屈一指的非制冷式红外气体检漏仪GL600的推出，填补了我国气体检漏领域的一项空白，打破了一直以来只有国外进口产品的垄断局面，颠覆了传统的气体检漏模式。GL600的出现，必将引起气体检漏领域的一项革命。</p>
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
										<p>
											<span class="drop-cap circle">1</span><strong>独特的非制冷双波段探测器（384
												X 288）：</strong>GL600采用了独特的非制冷双波段探测器，是全球收款采用该项技术的产品，由于采用了非制冷探测器，GL600超过30000个工作小时的使用寿命远远超过制冷型机器几千小时的工作时间。
										</p>
									</blockquote>

									<blockquote>
										<p>
											<span class="drop-cap circle">2</span><strong>检漏测温双用途</strong>GL600实现了在检测气体泄漏的同时实现检测设备的精确温度检测。
										</p>
										<br></br>
									</blockquote>

									<blockquote>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600-01b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600-01a.jpg"
											alt=""></a>
										<p>
											<span class="drop-cap circle">3</span><strong>电气设备可带电检测：</strong>GL600可以实现非接触式远距离检测，设备在正常运行中即可完成气体泄漏检测工作。
										</p>
									</blockquote>

									<blockquote>
										<p>
											<span class="drop-cap circle">4</span><strong>全新机芯设计，启动时间小于1分钟：</strong>相比以往制冷型的机器启动时间需要5到10分钟，GL600的启动时间不到1分钟，极大地体现了技术先进性。
										</p>
									</blockquote>

									<blockquote>
										<p>
											<span class="drop-cap circle">5</span><strong>不需要辅助光源，不需要反射背景：</strong>GL600在现场检测是不需要另外提供辅助光源，也不需要提供反射背景，可以直接对检测设备拍摄红外视频。
										</p>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600-02b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600-02a.jpg"
											alt=""></a>
									</blockquote> <!--Pagination-->
									<div class="page-pagination">
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=product/gl600"
											title="" class="current">1</a> <a
											href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=product/gl600&page=2"
											title="">2</a>
									</div> <!--/Pagination-->
								</td>
							</tr>
						</table>
					</div>
					<div id="tabs-2">

						<table class="m-table">
							<thead>

								<tr>
									<th colspan="2">GL600 红外热像仪 技术参数表</th>
								</tr>

							</thead>

							<tbody>

								<tr>
									<td colspan="2"><strong>红外热像性能参数</strong></td>
								</tr>

								<tr>
									<td width="26%">视场角 / 最小成像距离/空间分辨率</td>
									<td width="74%">24°×18°/ 0.3m/1.09 mrad</td>
								</tr>

								<tr>
									<td>光学系统对焦</td>
									<td>自动/电动</td>
								</tr>

								<tr>
									<td>温度分辨率/热像仪数据帧频</td>
									<td>0.05℃(在30℃时)//50/60Hz</td>
								</tr>

								<tr>
									<td>数字变焦</td>
									<td>1X-8X</td>
								</tr>
								<tr>
									<td>探测器</td>
									<td>非制冷焦平面 UFPA 384 x 288</td>
								</tr>
								<tr>
									<td colspan="2"><strong>可见光摄像机性能</strong></td>
								</tr>
								<tr>
									<td>调色板</td>
									<td>铁红/彩虹/黑白等12种色板</td>
								</tr>
								<tr>
									<td>融合</td>
									<td>红外/可见光融合显示</td>
								</tr>
								<tr>
									<td colspan="2"><strong>图像显示性能</strong></td>
								</tr>
								<tr>
									<td>外部液晶显示器</td>
									<td>16:9，4.3寸高清可旋转触摸液晶显示屏</td>
								</tr>
								<tr>
									<td>寻像器</td>
									<td>高清晰度</td>
								</tr>
								<tr>
									<td>独立伪彩</td>
									<td>可在区域内设置独立伪彩</td>
								</tr>
								<tr>
									<td colspan="2"><strong>温度测量功能</strong></td>
								</tr>
								<tr>
									<td>测温范围</td>
									<td>-20℃～500℃，可以扩展到 2000℃（选配）</td>
								</tr>
								<tr>
									<td>测温精度</td>
									<td>±2℃或±2%</td>
								</tr>
								<tr>
									<td>点分析</td>
									<td>数量无限制</td>
								</tr>
								<tr>
									<td>自动追踪</td>
									<td>最高/最低</td>
								</tr>
								<tr>
									<td>线分析</td>
									<td>数量无限制，水平/垂直线/斜线</td>
								</tr>
								<tr>
									<td>区域分析</td>
									<td>共6个</td>
								</tr>
								<tr>
									<td>自动追踪</td>
									<td>最高/最低，同时显示位置与温度值</td>
								</tr>
								<tr>
									<td>等温分析</td>
									<td>2个</td>
								</tr>
								<tr>
									<td>温度报警</td>
									<td>颜色/声音报警</td>
								</tr>
								<tr>
									<td colspan="2"><strong>图像存贮</strong></td>
								</tr>
								<tr>
									<td>话音记录/文本注释</td>
									<td>60秒，与图像同时存储</td>
								</tr>
								<tr>
									<td>内置存储记忆体</td>
									<td>1G，可存储2000幅以上图像</td>
								</tr>
								<tr>
									<td>可移动 SD卡</td>
									<td>4G ；可扩展至16G（选配）</td>
								</tr>
								<tr>
									<td colspan="2"><strong>电源系统</strong></td>
								</tr>
								<tr>
									<td>电池/工作时间</td>
									<td>智能锂离子电池/ ≥3 小时</td>
								</tr>
								<tr>
									<td>智能外部供电</td>

									<td>供电的同时为热像仪电池充电</td>
								</tr>
								<tr>
									<td colspan="2"><strong>物理参数</strong></td>
								</tr>
								<tr>
									<td>重量 (含电池)/ 尺寸(L×W×H)</td>
									<td>≤ 1.5 kg/200 x 132 x 120mm</td>
								</tr>
								<tr>
									<td colspan="2"><strong>使用环境参数</strong></td>
								</tr>
								<tr>
									<td>工作温度范围/存储温度范围</td>
									<td>-15°C to +50°C/-40°C to +70°C</td>
								</tr>
								<tr>
									<td>工作/存储相对湿度范围</td>
									<td>10% to 95%, 非冷凝</td>
								</tr>
								<tr>
									<td>防护等级/抗冲击等级/抗振动等级</td>
									<td>IP 54 IEC 529/25G, IEC 68-2-29/2.5 G, IEC 68-2-6</td>
								</tr>
								<tr>
									<td colspan="2"><strong>激光指示器</strong></td>
								</tr>
								<tr>
									<td>激光</td>
									<td>二级，红色</td>

								</tr>
								<tr>
									<td>激光点位置与温度</td>
									<td>激光点位置直接显示于红外图像上，并同时显示温度</td>
								</tr>
								<tr>
									<td colspan="2"><strong>录像（选配）</strong></td>
								</tr>
								<tr>
									<td>类型</td>
									<td>录制包含16位温度数据的全动态红外视频流，存储至SD卡</td>
								</tr>
								<tr>
									<td colspan="2"><strong>传输界面</strong></td>
								</tr>
								<tr>
									<td>RJ45（选配）</td>
									<td>实时传输包16位部温度数据的全动态红外视频流至电脑</td>
								</tr>
								<tr>
									<td>USB 2.0</td>
									<td>下载图像（红外与可见光），语音记录与文本注释</td>
								</tr>
							</tbody>
						</table>
					</div>

	

					<div id="tabs-3">
						<table>
							<tr>
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600-p01b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600-p01a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600-01b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/GL600-01a.jpg"
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