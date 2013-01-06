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

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'kc500' );
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
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/products/KC500-bg.jpg"
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
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-08b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-08a.jpg"
											alt=""></a>
									<p><strong>4.3寸高清高亮触摸液晶屏：</strong>触摸式操控直观快捷，可在屏幕上直接添加多点、多斜线、多区域进行检测分析。</p>	
									</div>

									<td>
									<div class="product-info-box">
									<div class="product-info-box-span"></div>
									
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-09b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-09a.jpg"
											alt=""></a>
											<p><strong>独特的左右手切换操作设计：</strong>机身两侧各有两个按键，为客户自定义键；独特的左右手切换操作，满足了不同用户的使用习惯，提高了工作效率。</p>
									</div>
									</td>

									<tr>
									<td>									
									<div class="product-info-box">
									<div class="product-info-box-span"></div>
			
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-10b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-10a.jpg"
											alt=""></a>
									<p><strong>丰富镜头群：</strong>8°×6°，16°×12°，24°×18°，48°×36°，全区域获得清晰的成像质量。	</p>
										
									</div>
									</td>
									

									<td>									
									<div class="product-info-box">
									<div class="product-info-box-span"></div>
										<a	href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-11b.jpg"	title="" rel="prettyPhoto"	class="img-border preloading-light align-right project-thumbnail image-preview">
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-11a.jpg"	alt="">
										</a>
									<p><strong>丰富的机身接口：</strong>储卡槽，USB接口，视频接口等一应齐全。</p>	
									</div>
									</td>
									</tr>

									<tr>
									<td>									
									<div class="product-info-box">
									<div class="product-info-box-span"></div>									
									<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-12b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-12a.jpg"	alt="">
									</a>
									<p>	<strong>SD卡存储图像：</strong>取用高记忆容量、快速数据传输率以及方便携带的SD卡作为存储界质，保证了数据存储快速安全。最大储存可扩展至16GB。</p>	
									</div>
									</td>
									
									
									<td>									
									<div class="product-info-box">
									<div class="product-info-box-span"></div>
									<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-13b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-13a.jpg" alt="">
									</a>
									<p><strong>照射灯 / 激光点定位：</strong>照射灯在昏暗环境下照亮检测现场。激光点温度直接显示于液晶显示屏上，便于现场操作人员更加直观地寻找和观测到故障点。</p>
									</div>
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
												<th colspan="2">红外热像性能参数</th>
											</tr>

										</thead>

										<tbody>

											

											<tr>
												<td width="45%">视场角 / 最小成像距离/空间分辨率</td>
												<td width="55%">32°×24°/ 0.1m/1.45 mrad</td>
											</tr>

											<tr>
												<td>光学系统对焦</td>
												<td>手动</td>
											</tr>

											<tr>
												<td>温度分辨率/热像仪数据帧频</td>
												<td>0.05℃(在30℃时)/50/60Hz</td>
											</tr>

											<tr>
												<td>数字变焦</td>
												<td>2X 4X 8X</td>
											</tr>
											<tr>
												<td>探测器</td>
												<td>非制冷焦平面 UFPA 384 ×288</td>
											</tr>
											<tr>
												<td>可见光摄像机性能参数</td>
												<td>130万像素</td>
											</tr>
											<tr>
												<td>调色板</td>
												<td>铁红/彩虹/黑白等6种色板，可反转</td>
											</tr>
											<tr>
												<td>融合</td>
												<td>红外/可见光融合显示</td>
											</tr>
											
											<tr>
												<td>外部液晶显示器</td>
												<td>16:9，4.3寸高亮可旋转触摸显示屏</td>
											</tr>
											<tr>
												<td>独立伪彩</td>
												<td>可在区域内设置独立伪彩</td>
											</tr>
											
											<tr>
												<td>测温范围</td>
												<td>-20℃～350℃，可以扩展到 1500℃（选配）</td>
											</tr>
											<tr>
												<td>测温精度</td>
												<td>±2℃，±2%</td>
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
												<td>电池/工作时间</td>
												<td>兼容标准电池/ ≥3 小时</td>
											</tr>
											<tr>
												<td>智能外部供电</td>
												
												<td>供电的同时为热像仪电池充电</td>
											</tr>
											
											<tr>
												<td>重量 (含电池)/ 尺寸(L×W×H)</td>
												<td>≤ 1.2kg/190 mmx 142 mmx 212.5mm</td>
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
												<td>IP 54 IEC 529/30G, IEC 68-2-29/3.0 G, IEC 68-2-6</td>
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
												<td>类型</td>
												<td>录制包含16位温度数据的全动态红外视频流，存储至SD卡</td>
											</tr>
											
											<tr>
												<td>RJ45（选配）</td>
												<td>实时传输包含16位温度数据的全动态红外视频流至电脑</td>
											</tr>
											<tr>
												<td>USB 2.0</td>
												<td>下载图像（红外与可见光），语音记录与文本注释</td>
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
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-p04b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-p04a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-10b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-right project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-10a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-11b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/KC500-11a.jpg"
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
$this->renderPartial('//product/menu1');
?>
</dd>
					<dt>产品应用</dt>
					<dd>
<?php 
$this->renderPartial('//application/menu1');
?>	
</dd>
					<dt>服务支持</dt>
					<dd>
<?php 
$this->renderPartial('//service/menu1');
?>
</dd>
				</dl>
			</div>


			<!--/Porfolio Content-->
		</div>
	</div>
	<!--/Content-->
</div>
</div>
<!--/Body content-->
<div class='bottom-separator'></div>