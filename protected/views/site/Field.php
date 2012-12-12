<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 红外热像应用领域';
$this->breadcrumbs=array(
	'Terms',
);
  
?>
<!--Body content-->
<div class="full-width-wrapper">
<div class="fixed-width-wrapper" id="body-content">
<!--Content-->
<div id="content" class="float-left content-left">
<div class="header-text">
<ul id="breadcrumbs">
<li><a href="index.html" title=""><?php echo Yii::t('zii', 'Home') ?></a></li>
<li class="current"><a href="Field.html" title="">红外热像应用领域</a>
</li>
</ul>
<h1 class="first-word double-color sp">KEII Technology</h1>
</div>
<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>

<p class="B_text_B"><strong>应用领域</strong></p>

<p>描述红外热像仪的用途是没有止境的，红外热像的应用领域包括：</p>

<p><strong>输电设备：</strong>接头、绝缘子、夹板、跳线、高压线、压接套管、瓷瓶引线</p>

<p><strong>变电系统：</strong>互感器、隔离开关、空气断线器、油断路器、少油量断路器、避雷器、电容器、电抗器、变压器、总线、套管、整流器、绝缘子、线夹、阻波器</p>

<p><strong>配电系统：</strong>配电盘、开关箱、变压器、断电器、接触器、保险丝、电缆</p>

<p><strong>发 电 厂：</strong>发电机碳刷绕组装备、发电机、变压器、油枕、发电机馈电线、电压调节器、发电机马达控制中心电盘、UPS</p>

<p><strong>建筑设施：</strong>检查外墙空鼓、剥落、屋面渗漏、管道、热桥、建筑节能研究、竣工验收</p>

<p><strong>公路桥梁：</strong>可用于快速扫描公路裂纹、桥梁开裂、渗漏检查、沥青摊铺等</p>

<p><strong>冶金系统：</strong>用于大型高炉料面测定、热风炉的破损诊断和检修等；高炉、钢材成型</p>

<p><strong>加工和热处理：</strong>焊接、铸件、模具、炼钢炉、转炉、鱼雷车、炉壁、金属热处里（退火、回火、淬火）、冷/热轧钢板、钢卷线材等温度量测监控</p>

<p><strong>石化系统：</strong>可用于保温隔热材料的破损诊断、加热炉管的温度分布测定等</p>

<p><strong>转动机械设备：</strong>马达、马达碳刷、轴承、联轴器、泵浦、汽机叶片、齿轮箱、驱动齿轮、驱动皮带、联轴器、射出成型机、柴油机、空压机</p>

<p><strong>机电系统：</strong>可用于新产品开发试验研究、大型机电设备温度分布监测等；

<p><strong>锅炉反应炉加热炉：</strong>炉壁、炉管、烟囱、热交换器、水泥旋窑</p>

<p><strong>产品流程设备：</strong>安全阀、气体/产品管路（保温、保冷）、热交换器、冷却塔、桶槽、球槽、储存槽、空气干燥机、烘干机、冷冻器</p>

<p><strong>电子产品：</strong>PC板热分析、电子组件热传导测试、壳散热测试、电路设计、环境评估</p>

<p><strong>消防安保系统：</strong>可用于消防科研、火灾救人、安保、走私监控等</p>

<p><strong>自然科学：</strong>采光、温室效应、沙尘暴、植物、采矿等</p>

<p><strong>医疗：</strong>肿瘤、甲状腺、糖尿病、非典、禽流感等</p>

<p><strong>其它：</strong>玻璃、军事、塑料、造纸、纺织、包装、排污、电影、广告策等</p>

</div>

</div>
<!--/Content-->
<!--Sidebar-->
<div id="sidebar" class="float-right">
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Products</h1>
<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'',
			'htmlOptions'=>array('class'=>'list cat'),
			'items'=>array(
				array('label'=>'KC100红外热像仪', 'url'=>array('/product/kc100')),
				array('label'=>'KC500红外热像仪', 'url'=>array('/product/kc500')),
				array('label'=>'KC700红外热像仪', 'url'=>array('/product/kc700')),
				array('label'=>'KC790红外热像仪', 'url'=>array('/product/kc790')),
				array('label'=>'KC800红外热像仪', 'url'=>array('/product/kc800')),
				array('label'=>'SF6气体检漏仪GL600', 'url'=>array('/product/gl600'))
			),
			));
?>
</div>
<!--/box-->
<!--box-->
<div class="box">
<h1 class="first-word double-color sp">Contact Us</h1>
<div class="address">
<p class="B_text_B"><strong>联系信息</strong></p><span class="map-point"></span><p><strong></strong>科易光电技术有限公司<br><br>
    地址：广州市科学城彩频路11号F1101A</p>
<p>电话:  +86 20 3206 8870<br>
  传真: +86 20 3206 8887 </p>
<p> Email: keii@keii.com.cn<br>
  Website:  <a href="www.keii.com.cn" title="">www.keii.com.cn</a></p>
</div>
</div>
<!--/box-->
</div>
<!--/Sidebar-->
</div>
</div>
<!--/Body content-->
<div class='bottom-separator' ></div>