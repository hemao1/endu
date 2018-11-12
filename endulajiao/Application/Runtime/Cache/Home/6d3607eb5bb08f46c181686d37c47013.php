<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meat name="viewport" content="width=device-width,initial-scale=2,maximum-scale=3,user-scalable=no">
	<title>温鲜私家厨房</title>
	<link rel="stylesheet" href="/wenxian2/Public/css/style.css">
	<link rel="stylesheet" type="text/css" href="/wenxian2/Public/css/swiper.css">
	<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
	<script src="/wenxian2/Public/js/swiper.min.js"></script>
	<script src="https://unpkg.com/element-ui/lib/index.js"></script>
</head>
<body>
<header>
	<div class="header-container width1200">
		<p>欢迎来到温鲜私家厨房</p>
		<p>
			预订热线：<a class="tel" href="javascript:void(0)">010-65288743</a>
		</p>
	</div>
</header>
<div class="content-container" id="About">
	<div class="nav-container width1200">
		<ul class="nav">
			<li><a href="/wenxian2/index.php/Home/Index/index">网站首页</a></li>
			<li><a href="/wenxian2/index.php/Home/Index/About">关于我们</a></li>
			<li><a href="/wenxian2/index.php/Home/Index/Information">美食资讯</a></li>
			<li>
				<a href="javascript:void(0)" class="logo-box">
					<img src="/wenxian2/Public/img/logo.png" alt="温鲜私家厨房LOGO">
				</a>
			</li>
			<li><a href="javascript:void(0)">菜单中心</a></li>
			<li><a href="javascript:void(0)">重要活动</a></li>
			<li><a href="javascript:void(0)">联系我们</a></li>
		</ul>
	</div>
	<div class="content-first-banner">
		<img draggable="false" src="/wenxian2/Public/img/aboutUs-banner_01.jpg">
		<img draggable="false" src="/wenxian2/Public/img/aboutUs-banner_02.jpg">
	</div>
	<div class="about-content-container width1200">
		<el-breadcrumb separator-class="el-icon-arrow-right">
			<el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
			<el-breadcrumb-item :to="{ path: '/about' }">关于我们</el-breadcrumb-item>
		</el-breadcrumb>
		<div class="restaurant-story">
			<ul>
				<li>
					<img src="/wenxian2/Public/img/restaurant-story.jpg">
				</li>
				<li>
					<h3>餐厅简介</h3>
					<h5>Restaurant Story</h5>
					<p>
						温鲜-私人厨房，隶属于合茂集团，位于朝阳区高碑店镇通惠河南街1066号。餐厅可以同时容纳100多人用餐，其定位于“品味、高端、文化、尊贵”，抒发着浓厚的家乡情怀，散发着低调大气的文化品味。其与室内VIP接待室、古典茶室、红酒雪茄吧融为一体，又独具一格。作为高端会所的重要组成部分，“温鲜-私人厨房”为尊贵的客人提供室内静谧高雅、世外垂柳依依、荷塘月色的用餐空间，打造品尝温州美味、鉴赏尊贵品质、沉醉视觉盛宴、感受精彩无限的专属您的私人厨房。
					</p>
					<p>
						“温鲜-私人厨房”的菜式广泛汲取多元化的烹调手法，融合不同的表现形式，在品色香味形兼顾的同时，更加注重香和味的调和，使您的味蕾神经得到释放。“温鲜-私人厨房”依托技术娴熟的厨师烹饪手法、优雅的就餐环境、创意融合而又饱腹乡情的温州菜式和其高端的海鲜定位吸引众多高端人士，同时这里也是商务宴请的更佳场所。“温鲜-私人厨房”将会带给您一份悠闲和惬意，让你享受这个品味、高端、文化、尊贵高品质独立的餐厅。
					</p>
					<p>
						温鲜，留得住的家乡味，记得住的温乡情，给予你生鲜、海鲜和最新鲜的味觉盛宴；私人厨房为你找寻家的感觉，定制专属您的私人品味。
					</p>
				</li>
			</ul>
		</div>
		<div class="brand-story">
			<h3>品牌故事</h3>
			<h5>Brand Story</h5>
			<ul>
				<li>
					<div>
						<img src="/wenxian2/Public/img/brand-story-1.jpg">
					</div>
					<div class="sanjiaoxing"></div>
					<div class="story-box">
						<p class="tit">品牌 . 愿景</p>
						<p class="content">让游子回味乡愁，唤起儿时的记忆，<br/>让食客品尝美味，激发味蕾的嗅觉</p>
					</div>
				</li>
				<li>
					<div class="story-box">
						<p class="tit">品牌 . 愿景</p>
						<p class="content">让游子回味乡愁，唤起儿时的记忆，<br/>让食客品尝美味，激发味蕾的嗅觉</p>
					</div>
					<div>
						<img src="/wenxian2/Public/img/brand-story-2.jpg">
					</div>
				</li>
				<li>
					<div>
						<img src="/wenxian2/Public/img/brand-story-3.jpg">
					</div>
					<div class="story-box">
						<p class="tit">品牌 . 愿景</p>
						<p class="content">让游子回味乡愁，唤起儿时的记忆，<br/>让食客品尝美味，激发味蕾的嗅觉</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="bottom-jt-box">
			<img src="/wenxian2/Public/img/bottom-jt.jpg">
		</div>
	</div>
	<div class="local-custom-box">
		<div class="local-custom">
			<div class="sign-container">
				<div class="vertical-line"></div>
				<div class="first-sign">
					<div></div>
				</div>
				<div class="garden second-sign"></div>
				<div class="garden third-sign"></div>
				<div class="garden fourth-sign"></div>
				<div class="garden fifth-sign"></div>
			</div>
			<div class="text-container">
				<ul>
					<li>
						<h4>温州地方习俗</h4>
					</li>
					<li>
						<p>拦街福<br/>
						温州城内每年农历二月初一从康乐坊开始，至三月十五日五马街止，主要街道依次举行祈福活动，称“拦街福”，为地方性传统节日。</p>
					</li>
					<li>
						<p>芥菜饭<br/>农历二月初二，温州素有吃芥菜饭的习俗，谓可以防止生疥疮。《瑞安县志》记载：“取芥菜煮饭食之，云能明目，盖取清精之义”。</p>
					</li>
					<li>
						<p>吃巧食<br/>每逢七夕吃“巧食”习俗。“巧食”是米粉拌红糖、蘸芝麻制成，有舌形、指形等。夜把“巧食”抛在瓦背上，酬谢喜鹊搭桥之功，并望多给人间报喜。</p>
					</li>
					<li>
						<p>三旦树<br/>文成山区，农家在孩子出生第三日，请亲邻好友同吃“三旦酒”，喜植“三旦树”。植树须在春季进行，若“三旦’与植树时令不合，可先吃喜酒，季节到时再植。以植树作为新生婴儿的洗礼，育木荫人，树大人长；富有象征意义。</p>
					</li>
				</ul>
			</div>
			<div class="img-container">
				<img src="/wenxian2/Public/img/local-sign-img.jpg">
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="footer-container width1200">
		<div>
			<img src="/wenxian2/Public/img/1_44.png">
		</div>
		<div>1999-2018 合茂集团股份有限公司 浙ICP备14024595号</div>
		<div>联系我们</div>
		<div>
			<img src="/wenxian2/Public/img/QR.jpg">
		</div>
	</div>
</footer>
<script>
new Vue({
  	el: '#About',
  	data() {
    	return {

    	}
  	}
})
</script>
</body>
</html>