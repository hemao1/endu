<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"> 
	<title>联系我们</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.css">
	<link rel="stylesheet" href="css/element-ui.css">
	<script src="js/vue.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/element-ui.js"></script>
	<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.10&key=006ba3d51a7e5526faa9b49ff7ce6410"></script>
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
<div class="content-container" id="ContactUs">
	<div class="nav-container width1200">
		<ul class="nav">
			<li><a href="index.html">网站首页</a></li>
			<li><a href="About.html">关于我们</a></li>
			<li><a href="information.html">美食资讯</a></li>
			<li>
				<a href="javascript:void(0)" class="logo-box">
					<img src="./img/logo.jpg" alt="温鲜私家厨房LOGO">
				</a>
			</li>
			<li><a href="menu.html">菜单中心</a></li>
			<li><a href="activities.html">重要活动</a></li>
			<li><a href="javascript:void(0)">联系我们</a></li>
		</ul>
	</div>
	<div class="about-content-container width1200">
		<el-breadcrumb separator-class="el-icon-arrow-right">
			<el-breadcrumb-item>您的位置：</el-breadcrumb-item>
			<el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
			<el-breadcrumb-item :to="{ path: '/information' }">联系我们</el-breadcrumb-item>
		</el-breadcrumb>
	</div>
	<div class="information-title-box">
		<img src="img/contactUs.png">
	</div>
	<div class="contact-us-content width1200">
		<div id="map-container"></div>
		<ul>
			<li>地址：北京市朝阳区高碑店镇西店通惠河南街1066号</li>
			<li>电话：010-65288743</li>
			<li>邮箱：bjhmgroup@163.com</li>
			<li>邮编：100124</li>
		</ul>
	</div>
</div>
<footer>
	<div class="footer-container width1200">
		<div>
			<img src="img/1_44.png">
		</div>
		<div>1999-2018 合茂集团股份有限公司 浙ICP备14024595号</div>
		<div>联系我们</div>
		<div>
			<img src="img/QR.jpg">
		</div>
	</div>
</footer>
<script>
new Vue({
	el: '#ContactUs',
	data() {
		return {

		}
	}
})
var map = new AMap.Map('map-container', {
    zoom:11,//级别
    center: [116.507428,39.905831],//中心点坐标
    viewMode:'3D'//使用3D视图
})
// 创建一个 Marker 实例：
var marker = new AMap.Marker({
    position: new AMap.LngLat(116.507428,39.905831),   // 经纬度对象，也可以是经纬度构成的一维数组[116.39, 39.9]
    title: '北京'
});

// 将创建的点标记添加到已有的地图实例：
map.add(marker);

// 同时引入工具条插件，比例尺插件和鹰眼插件
AMap.plugin([
    'AMap.ToolBar',
    'AMap.Scale'
], function(){
    // 在图面添加工具条控件，工具条控件集成了缩放、平移、定位等功能按钮在内的组合控件
    map.addControl(new AMap.ToolBar());

    // 在图面添加比例尺控件，展示地图在当前层级和纬度下的比例尺
    map.addControl(new AMap.Scale());
});
</script>
</body>
</html>