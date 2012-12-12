<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - 工作机会';
$this->breadcrumbs=array(
	'job',
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
<li class="current"><a href="job.html" title="">聘请英才</a>
</li>
</ul>
<h1 class="first-word double-color sp">KEII Technology</h1>
</div>

<div class="post entry-content">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" class="preloading-light img-border clear" rel="prettyPhoto" title=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pix/about-1.jpg" alt="Lorem ipsum dolor si amet"></a>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;员工是科易光电最为宝贵的财富。我们的管理机制就是创立一种环境，激励员工在取得公司业务目标成功的同时，也能够实现个人的理想。科易光电提供给你一个宽松的空间，它包括：</p> 
<ol class="ordered-list">
<li><strong>互相相信、互相尊重的企业文化</strong></li>
<li><strong>完善的培训与职业发展规划</strong></li>
<li><strong>轻松的工作环境</strong></li>
<li><strong>具有竞争力的薪酬福利</strong></li>
<li><strong>工作与生活平衡的理念</strong></li>
</ol>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;红外热像正在被广泛的被应用于各个领域。过去的十年，中国的红外热像市场已经经历了快速的增长；我们深信，未来的10年，中国的红外热像市场还将继续高速成长，并对社会的各个方面产生深远的影响。</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们诚挚地邀请拥有智慧、渴望成功的你加入科易光电，共创红外艺术新境界，与红外热像技术一起改变世界！</p>
 
<P><strong>最新招聘职位：（更新时间2012-7-1）</strong></P>

<p><strong>技术中心</strong></p>

<p><strong>高级系统工程师</strong></p>

<p>职责：基于现场应用的需求，拟定红外热像监控系统方案并指导现场安装实施。</p>
<p>要求：具备三年以上工控系统安装调试经验，能编制工控程序，并善于方案写作。</p> 

<p><strong>软件开发工程师 (Intern)</strong></p>

<p><strong>职责：</strong>图像智能识别、监控系统功能模块以及智能手机App等领域的软件编程。</p>
<p><strong>要求：</strong>对编程具有强烈的兴趣并具备动手做出稳定软件产品的能力。
在读的研究生或博士，非常优秀的本科生亦可。</p>

<p><strong>市场部</strong></p>

<p><strong>市场拓展专员</strong></p>

<p><strong>职责：</strong>开拓红外热像系统在电站监控、安全防护、防火报警和质量控制等领域的应用。</p>
<p><strong>要求：</strong>对新技术的应用怀有强烈的兴趣，并有工业技术工作经历。</p>

<p>以上职位的工作地点在科易光电广州办公室，有意者请投简历到 admin@keii.com.cn 。</p>


<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如果您对我们公司怀有强烈的兴趣，即使我们暂时没有招聘你期望的职位，我们鼓励您投简历到  admin@keii.com.cn。我们将邀请您到公司参观交流，并在有相应职位开放的时候，优先邀请您的加盟。</p>


<div class="clear"></div>

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