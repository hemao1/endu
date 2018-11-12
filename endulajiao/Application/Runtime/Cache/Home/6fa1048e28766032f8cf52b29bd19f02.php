<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"> 
	<title>美食资讯</title>
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
<div class="content-container" id="Information">
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
	<div class="about-content-container width1200">
		<el-breadcrumb separator-class="el-icon-arrow-right">
			<el-breadcrumb-item>您的位置：</el-breadcrumb-item>
			<el-breadcrumb-item :to="{ path: '/' }"><a href="index">首页</a></el-breadcrumb-item>
			<el-breadcrumb-item :to="{ path: '/information' }">美食资讯</el-breadcrumb-item>
		</el-breadcrumb>
	</div>
	<div class="information-title-box">
		<img src="/wenxian2/Public/img/information-title.png">
	</div>
	<div class="information-list-container width1200">
		<information-list-comp v-for="(informationItem,index) in informationItems" v-if='index < 6' :infor="informationItem" :key="index"></information-list-comp>
	</div>
	<!-- 分页 -->
	<div class="block">
		<el-pagination
		prev-text="上一页"
		next-text="下一页"
		@size-change="handleSizeChange"
		@current-change="currentChange"
		@prev-click="prevClick"
		@next-click="nextClick"
		:page-size="6"
		layout="prev, pager, next"
		:total="totalCount">
		</el-pagination>
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
Vue.component('information-list-comp',{
	props: [
		'infor'
	],
	template:   `<div class="information-list-box">
					<div class="imgs">
						<img :src="infor.imgs">
					</div>
					<div class="contents">
						<h4>{{ infor.tit }}</h4>
						<p class="content-text">{{ infor.text }}</p>
						<p class="information-date">{{ infor.date }}</p>
						<div class="more-btn-box information-detail-btn width1200">
							<a :href="infor.href">查看详情</a>
						</div>
					</div>
				</div>`
})
new Vue({
	el: '#Information',
	data() {
		return {
			informationItems:[
				{
					imgs : '/wenxian2/Public/img/information-img-1.jpg',
					tit : '红烧螃蟹',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'javascript:void(0)'
				},{
					imgs : '/wenxian2/Public/img/information-img-2.jpg',
					tit : '红烧螃蟹',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'javascript:void(0)'
				},{
					imgs : '/wenxian2/Public/img/information-img-3.jpg',
					tit : '红烧螃蟹',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'javascript:void(0)'
				},{
					imgs : '/wenxian2/Public/img/information-img-4.jpg',
					tit : '红烧螃蟹',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'javascript:void(0)'
				},{
					imgs : '/wenxian2/Public/img/information-img-5.jpg',
					tit : '红烧螃蟹',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'javascript:void(0)'
				},{
					imgs : '/wenxian2/Public/img/information-img-6.jpg',
					tit : '红烧螃蟹',
					text: '红烧螃蟹是喜爱吃螃蟹的中国的一中著名菜肴，菜系上属于泸菜。其味道香鲜可口，色香味俱全，做法较容易。',
					date: '2018.10.17',
					href: 'javascript:void(0)'
				}
			],
			//默认数据总数
            totalCount: 1000,
            // 定义一个空数组，请求的数据都是存放这里
            userList: [

            ]
		}
	},
	methods: {
		handleSizeChange(val) {
			this.pagesize = val;
		},
		currentChange(current) {
			this.pagesize = current;
			console.log(current)
		},
		prevClick(prev) {
			// console.log(prev)
		},
		nextClick(next) {
			// console.log(next)
		}
	}
})
</script>
</body>
</html>