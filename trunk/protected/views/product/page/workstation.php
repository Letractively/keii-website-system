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
$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'workstation' );
?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">
			
			<div class="two-third first">
				<img
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/index_cn.jpg"
					class="align-left img-border">
			</div>

			<div class="one-third">
				
			</div>


			<div class="three-fourth first">

				<div id="product_tabs">
					<ul class="tab_list">
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
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/01b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/01a.jpg" alt="">
						</a>
						<p>
							384 × 288像素
						</p>						
					</div>
					</td>
					
					
					<td>
					<div class="product-info-box">
							<div class="product-info-box-span"></div>
					
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/02b.jpg"
								title="" rel="prettyPhoto"
								class="img-border preloading-light align-right project-thumbnail image-preview"><img
								src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/02a.jpg"
								alt=""></a>
										<p>
											金属外壳数，机身IP67，适合于任何恶劣的工作环境。
										</p>
					
					
					</div>	
					</td>
					</tr>
					
					<tr>
					<td>
					<div class="product-info-box">
							<div class="product-info-box-span"></div>					
					<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/03b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/03a.jpg"
											alt=""></a>
										<p>
											超长时间的红外视频录像功能
										</p>
					
					</div>	
					</td>
					
					
					<td>
					<div class="product-info-box">
							<div class="product-info-box-span"></div>					
				<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/04b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/04a.jpg"
											alt=""></a>
										<p>
											全面、专业的红外分析功能
										</p>			
					</div>
					</td>
					</tr>
					
					<tr>
					<td>
					<div class="product-info-box">
							<div class="product-info-box-span"></div>					
					<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/08b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/08a.jpg"
											alt=""></a>
										<p>
											强大的数据传输功能
										</p>
					
					</div>	
					</td>
					
					
					<td>
					<div class="product-info-box">
							<div class="product-info-box-span"></div>					
											<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/09b.jpg" title=""	rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/09a.jpg"
											alt=""></a>
										<p>
											可以同时、实时远程控制多台红外热像仪
										</p>
					</div>
					</td>
					</tr> 
					<tr>
								<td colspan="2">
									<blockquote>
										<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/06b.jpg" title=""	rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview">
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/06a.jpg"	alt=""></a>
									<p>
											加装防护外壳组成移动工作站
										</p>
									
									</blockquote>
								</td>
							</tr>
					
					
					</table>
					



					</div>
					<div id="tabs-2">
						<table class="m-table">
							<thead>
								<tr>
									<th colspan="2" >红外热像性能参数</th>
								</tr>
							</thead>

							<tbody>
								<tr>
								<td colspan="2"  class="m-table-title">性能参数</td>								
								</tr>
								<tr>
									<td width="35%">
									视场角
									</td>
									<td width="65%">
									24°×18°
									</td>
								</tr>
								<tr>
									<td>
									最小成像距离
									</td>
									<td >
									0.3m
									</td>
								</tr>
								<tr>
									<td>
									空间分辨率
									</td>
									<td>
									1.09 mrad
									</td>
								</tr>
								<tr>
									<td>
									光学系统对焦									
									</td>
									<td >
									手动 / 自动									
									</td>
								</tr>
								
								<tr>
									<td>
									数字变焦
									</td>
									<td>
									1×~8×									
									</td>
								</tr>
								<tr>
									
									<td>
									温度分辨率
									</td>
									<td>
									0.05℃ ( 在30℃时 )									
									</td>
								</tr>
								<tr>
									<td>
									探测灵敏度									
									</td>
									<td>
									
									</td>
								</tr>
								<tr>									
									<td>
									热像仪数据帧频									
									</td>
									<td>
									50 / 60Hz									
									</td>
								</tr>
								<tr>
									<td>
									探测器									
									</td>
									<td >
									非制冷焦平面，像素数 384×288 / 640×480									
									</td>
								</tr>
								<tr>
									<td>
									数码相机									
									</td>
									<td ></td>
								</tr>
								<tr>
									<td>
									工作波段
									</td>
									<td >
									7~14µm
									</td>
								</tr>
								
								
								<tr>
								<td colspan="2"  class="m-table-title">图像显示性能</td>								
								</tr>
								
								<tr>
									<td>
									视频输出
									</td>
									<td >
									RS170 EIA / NTSC 或 CCIR / PAL复合视频
									</td>
								</tr>
								<tr>
									<td>
									外部液晶显示器
									</td>
									<td>
									</td>
								</tr>
								<tr>
									<td>
									寻像器
									</td>
									<td>
									</td>
								</tr>
								<tr>
									<td>
									独立伪彩
									</td>
									<td>
									有
									</td>
								</tr>
								<tr>
									<td>
									调色板
									</td>
									<td>
									铁红 / 彩虹 / 黑白等12种色板									
									</td>
								</tr>
								<tr>
									<td>
									画中画
									</td>
									<td>
									无
									</td>
								</tr>
								<tr>
									<td>
									融合
									</td>
									<td >
									红外 / 可见光融合显示									
									</td>
								</tr>
								
								
									
								<tr>
								<td colspan="2"  class="m-table-title">温度测量功能</td>								
								</tr>
								
								<tr>
									<td>
									测温范围									
									</td>
									<td >
									 -20℃~+500℃，（选配：可以扩展到 2000℃）									
									</td>
								</tr>
								<tr>
									<td>
									测温精度									
									</td>
									<td>
									±2℃或者±2%									
									</td>
								</tr>
								<tr>
									<td>
									点									
									</td>
									<td>
									多点									
									</td>
								</tr>
								<tr>
									<td>
									线									
									</td>
									<td>
									多斜线									
									</td>
								</tr>
								<tr>
									<td>
									区域									
									</td>
									<td>
									多区域进行分析																
									</td>
								</tr>
								<tr>
									<td>
									自动追踪									
									</td>
									<td>
									最高温度 / 最低温度/ 平均温度，同时显示位置与温度值									
									</td>
								</tr>
								<tr>
									<td>
									等温分析									
									</td>
									<td >
									有																
									</td>
								</tr>
								<tr>
									<td>
									温差																
									</td>
									<td >
									自动计算温差																									
									</td>
								</tr>
								<tr>
									<td>
									温度报警																								
									</td>
									<td >
									颜色 / 声音报警																																	
									</td>
								</tr>
								<tr>
									<td>
									辐射率校正																																	
									</td>
									<td >
									0.01~1.0可调，或从预设菜单中选择																																										
									</td>
								</tr>
								<tr>
									<td>
									外部光学																																	
									</td>
									<td >
																																										
									</td>
								</tr>	
								<tr>
									<td>
									窗口校正																																
									</td>
									<td >
																																										
									</td>
								</tr>			
		
							<tr>
								<td colspan="2"  class="m-table-title">录像</td>								
								</tr>
								
								<tr>
									<td>
									类型																		
									</td>
									<td >
									录制包含全部温度数据的16位全动态红外视频流，并存储至SD卡																		
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">使用环境参数</td>								
								</tr>
								
								<tr>
									<td>
									工作温度范围																		
									</td>
									<td >
									  -15°C ~ 50°C																		
									</td>
								</tr>
								<tr>
									<td>
									存储温度范围																	
									</td>
									<td>
									 -40°C ~ 70°C																		
									</td>
								</tr>
								<tr>
									<td>
									工作 / 存储相对湿度范围																
									</td>
									<td>
									10% ~ 95%，非冷凝																		
									</td>
								</tr>
								<tr>
									<td>
									防护等级																		
									</td>
									<td>
									IP67，IEC 529，全金属外壳封装																	
									</td>
								</tr>
								<tr>
									<td>
									抗冲击等级																	
									</td>
									<td>
									25G，IEC 68-2-29																								
									</td>
								</tr>
								<tr>
									<td>
									抗振动等级																		
									</td>
									<td>
									2.5G，IEC 68-2-6																	
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">图像存贮</td>								
								</tr>
								<tr>
									<td>
									话音记录																		
									</td>
									<td >
																									
									</td>
								</tr>
								<tr>
									<td>
									文本注释																		
									</td>
									<td >
																									
									</td>
								</tr>
								<tr>
									<td>
									内存记忆体													
									</td>
									<td >
																								
									</td>
								</tr>
								<tr>
									<td>
									可移动 SD卡																		
									</td>
									<td >
																									
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">激光指示器</td>								
								</tr>
								<tr>
									<td>
									激光																		
									</td>
									<td >
																									
									</td>
								</tr>
								<tr>
									<td>
									激光点位置与温度							
									</td>
									<td >
																									
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">传输界面</td>								
								</tr>
								<tr>
									<td>
									RJ45																		
									</td>
									<td >
									实时传输包含全部温度数据的16位全动态红外视频流至电脑																							
									</td>
								</tr>
								
								<tr>
									<td>
									USB  2.0																		
									</td>
									<td >
									下载图像（红外与可见光），语音记录与文本注释																									
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">物理参数</td>								
								</tr>
								<tr>
									<td>
									重量																		
									</td>
									<td >
									≤4kg																									
									</td>
								</tr>
								<tr>
									<td>
									尺寸 ( L×W×H )																		
									</td>
									<td >
									350×170×190 (mm)																									
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">电源系统</td>								
								</tr>
								<tr>
									<td>
									电池										
									</td>
									<td >
																									
									</td>
								</tr>
								<tr>
									<td>
									工作时间																		
									</td>
									<td >
																									
									</td>
								</tr>
								<tr>
									<td>
									智能外部供电																		
									</td>
									<td >
																									
									</td>
								</tr>
								<tr>
									<td>
									AC交流电 																		
									</td>
									<td >
									110 / 230V AC 50 / 60Hz																								
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">可选镜头参数 ( 选配 )</td>								
								</tr>
								<tr>
									<td>
									视场角																		
									</td>
									<td >
									8°×6°，12°×9°，48°×36°，微距镜头：25µm，100µm																								
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">可探测以下气体</td>								
								</tr>
								<tr>
									<td>
									气体类型																		
									</td>
									<td >
																									
									</td>
								</tr>
								
								<tr>
								<td colspan="2"  class="m-table-title">软件</td>								
								</tr>
								<tr>
									<td>
									标准分析软件								
									</td>
									<td >
									免费升级																									
									</td>
								</tr>							
							</tbody>
						</table>
					</div>


					<div id="tabs-3">
						<table>
							<tr>
								<td>
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/05b.jpg" title="" rel="prettyPhoto"	class="img-border preloading-light align-left project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/05a.jpg" alt="">
								</a> 
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/06b.jpg" title="" rel="prettyPhoto"	class="img-border preloading-light align-left project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/06a.jpg" alt="">
								</a>
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/07b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-left project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/workstation/07a.jpg" alt="">
								</a>
								</td>
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