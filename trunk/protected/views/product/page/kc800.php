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

$this->pageTitle = Yii::app ()->name . ' - ' . Yii::t ( 'zii', 'kc800' );
?>
<!--Body content-->
<div class="full-width-wrapper">
	<div class="fixed-width-wrapper">
		<!--Content-->
		<div id="content" class="fixed-width-wrapper">


			<div class="two-third first">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/index_cn.jpg" class="align-left">
			</div>
			
			<div class="one-third"></div>
			
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
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/01b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/01a.jpg" alt="">								
								</a>
								<p>
											<strong>使用640X 480像素数</strong>
										</p>
								</div>
								</td>

								<td>
								<div class="product-info-box">
								<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/02b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/02a.jpg" alt="">
								</a>
									<p><strong>5.6寸高清高亮触摸液晶屏</strong></p>
									
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<div class="product-info-box">
								<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/04b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/04a.jpg" alt="">
								</a>
									<p><strong>配置高清晰寻像器</strong>
									</p>
									
								</div>
								</td>
								<td>
								<div class="product-info-box">
								<div class="product-info-box-span"></div>					
								
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/05b.jpg" title="" rel="prettyPhoto" class="img-border preloading-light align-right project-thumbnail image-preview">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/05a.jpg" alt="">								
								</a>
								<p>
								<strong>人机工程学设计，</strong>提高了操作者的使用舒适度
								</p>
								</div>
								
								</td>

								
								</tr>
																						
								
								
								

								<tr>
								
								
								<td colspan="2">
									<blockquote>
										<a
											href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/07b.jpg"
											title="" rel="prettyPhoto"
											class="img-border preloading-light align-right project-thumbnail image-preview"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/07a.jpg"
											alt=""></a>
										
											<strong>快捷的红外视频录制功能</strong>
									
									</blockquote>
								</td>
							</tr>
						</table>
					
					</div>
					
					<div id="tabs-2">
						<table class="m-table">					

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
									0.65 mrad																		
									</td>
								</tr>
								<tr>
									<td>
									光学系统对焦									
									</td>
									<td >
									手动 								
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
									0.03℃ ( 在30℃时）										
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
									非制冷焦平面，像素数 640×480																											
									</td>
								</tr>
								<tr>
									<td>
									数码相机									
									</td>
									<td >
									内置高分辨率可见光数码相机 / 内置照明灯									
									</td>
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
									复合视频
									</td>
								</tr>
								<tr>
									<td>
									外部液晶显示器
									</td>
									<td>
									16:9，4.3寸高亮度TFT触摸屏 LCD，全部功能可通过触摸屏操作实现,									
									</td>
								</tr>
								<tr>
									<td>
									寻像器
									</td>
									<td>
									高分辨率TFT LCD寻像器									
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
									有
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
									自动，根据输入的光学																																								
									</td>
								</tr>	
								<tr>
									<td>
									窗口校正																																
									</td>
									<td >
									窗口穿透率和温度进行校正																																									
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
									IP54，IEC 529，全金属外壳封装
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
									60秒，与图像同时存储 ( 选配：无线蓝牙耳机 )																								
									</td>
								</tr>
								<tr>
									<td>
									文本注释																		
									</td>
									<td >
									与图像同时存储																								
									</td>
								</tr>
								<tr>
									<td>
									内存记忆体													
									</td>
									<td >
									1G，可存储2000幅以上图像																								
									</td>
								</tr>
								<tr>
									<td>
									可移动 SD卡																		
									</td>
									<td >
									4G，( 选配：可扩展至16G )																									
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
									二级，红色																									
									</td>
								</tr>
								<tr>
									<td>
									激光点位置与温度							
									</td>
									<td >
									激光点位置直接显示于红外图像上，并同时显示激光点温度																																	
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
									实时传输包含全部温度数据的16位全动态红外视频流至电脑(选配)																															
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
									≤1.8kg(含电池)																																																											
									</td>
								</tr>
								<tr>
									<td>
									尺寸 ( L×W×H )																		
									</td>
									<td >
									213×144×136 (mm)																																																										
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
									智能锂离子电池																									
									</td>
								</tr>
								<tr>
									<td>
									工作时间																		
									</td>
									<td >
									≥3小时																									
									</td>
								</tr>
								<tr>
									<td>
									智能外部供电																		
									</td>
									<td >
									供电的同时可为热像仪电池充电																									
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
									8°×6°，12°×9°，48°×36°,微距镜头: 25µm，100µm																																																	
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
								<td><a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/08b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/08a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/09b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/09a.jpg"
										alt=""></a> <a
									href="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/10b.jpg"
									title="" rel="prettyPhoto"
									class="img-border preloading-light align-left project-thumbnail image-preview"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/zh_CN/products/kc800/10a.jpg"
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