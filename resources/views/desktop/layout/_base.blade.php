<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>锐旗品牌管理</title>
    <meta name="keywords" content="{{ cache('website_keywords') }}" />
    <meta name="description" content="@section('description') {{ isset($description) ? $description : '锐旗主要为中小企业提供品牌设计,品牌策划,品牌建设,网站建设,logo设计,包装设计,平面设计,网站设计、企业形象设计、品牌形象设计等,立志成为珠三角地区最值得信赖的品牌策划与设计公司。!' }} @show{{-- meta描述 --}}" />
    <meta name="author" content="{{ cache('system_author_website', 'http://douyasi.com') }}" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ _asset('assets/bootstrap3/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ _asset('assets/richbrand/css/global.css') }}" />
    <link rel="stylesheet" href="{{ _asset('assets/richbrand/css/component.css') }}" />
    <!-- <link rel="stylesheet" href="{{ _asset('assets/css/markdown_style.css') }}" /> -->
     @yield('markdown_style')
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ _asset('assets/bootstrap3/js/bootstrap.min.js') }}"></script>
    <script>
var _mtac = {};
(function() {
    var mta = document.createElement("script");
    mta.src = "http://pingjs.qq.com/h5/stats.js?v2.0.2";
    mta.setAttribute("name", "MTAH5");
    mta.setAttribute("sid", "500557546");
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(mta, s);
})();
</script>

    @section('htmlHead')
    @show{{-- head区域 --}}
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://rich-brand.com/">
        <img alt="Brand" src="{{ _asset('assets/richbrand/images/logo.png') }}" class="brand img-responsive">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      @yield('navitem')
        <!-- <li class="nav-item"><a href="http://rc.hscxsh.cn" class="active">首页</a></li>
	        <li class="nav-item"><a href="{{ slug_url('example') }}">案例</a></li>
	        <li class="nav-item"><a href="#">服务</a></li>
	        <li class="nav-item"><a href="#">动态</a></li>
	        <li class="nav-item"><a href="#">观点</a></li>
	        <li class="nav-item"><a href="#">关于</a></li>
	        <li class="nav-item"><a href="#">加入</a></li>
	        <li class="nav-item"><a href="#">联系</a></li> -->
      </ul>
      <a id="top"></a>
    </div>
  </div>
</nav>


 @section('mainContent')
 @show{{-- 主体内容 --}}

<div class="scrolltop">
	<div class="container-fluid">
        <a id="back-top" class="pull-right"><img src="{{ _asset('assets/richbrand/images/top-share2.png') }}" class="img-responsive"></a>
	</div>
</div>
<div class="index-footer">
    <nav class="navbar navbar-color">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="glyphicon glyphicon-menu-hamburger glyphicon-white"></span>
	      </button>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		    <div class="col-md-10 col-md-offset-2">
		      <ul class="nav navbar-nav">
		        <li class="footer-nav-item"><a href="{{ _route('desktop:showservice.ppzx') }}">品牌咨询</a></li>
	            <li class="footer-nav-item"><a href="{{ _route('desktop:showservice.ppsj') }}">品牌设计</a></li>
	            <li class="footer-nav-item"><a href="{{ _route('desktop:showservice.cbtg') }}">传播推广</a></li>
	            <li class="footer-nav-item"><a href="{{ _route('desktop:showservice.yxsp') }}">影视视频</a></li>
	            <li class="footer-nav-item"><a href="{{ _route('desktop:showservice.wlxmt') }}">网络新媒体</a></li>
	            <li class="footer-nav-item"><a href="{{ _route('desktop:showservice.zdjs') }}">终端建设</a></li>
		      </ul>
		    </div>
	    </div>
	  </div>
	</nav>
	<div class="location">
	   <div class="container">
		  <!-- <div class="row">
		    <ul>
		    <li class="col-sm-4"><img alt="show" src="{{ _asset('assets/richbrand/images/nj.jpg') }}" class="img-responsive"></li>
		    <li class="col-sm-4"><img alt="show" src="{{ _asset('assets/richbrand/images/ah.jpg') }}" class="img-responsive"></li>
		    <li class="col-sm-4"><img alt="show" src="{{ _asset('assets/richbrand/images/sh.jpg') }}" class="img-responsive"></li>
		    </ul>
		  </div>
	    <div class="hr"></div> -->
	  </div>
	</div>
	<div class="links">
	   <div class="container">
		  <div class="row">
		   <a href="">
		    <ul class="col-xs-2">
		    <li><strong>品牌咨询</strong></li>
		    <li>品牌战略</li>
			<li>品牌咨询</li>
			<li>品牌调研</li>
			<li>品牌定位</li>
			<li>品牌架构</li>
			<li>定位规划</li>
			<li>品牌通调</li>
			<li>文化导入</li>
			<li>品牌标语</li>
			<li>产品架构</li>
		    </ul>
		    </a>
		    <a href="{{ _route('desktop:showservice.ppsj') }}">
		    <ul class="col-xs-2">
		    <li><strong>品牌设计</strong></li>
        	<li>视觉识别策略</li>
            <li>标志设计</li>
            <li>VI系统</li>
            <li>吉祥物设计</li>
            <li>VI导入培训</li>
            <li>产品包装</li>
            <li>广告海报</li>
            <li>画册设计</li>
		    </ul>
		    </a>
		    <a href="{{ _route('desktop:showservice.cbtg') }}">
		    <ul class="col-xs-2">
		    <li><strong>传播推广</strong></li>
            <li>O2O战略</li>
            <li>品牌官网</li>
            <li>微营销</li>
            <li>搜索排名</li>
            <li>社会化传播</li>
            <li>SCRM管理</li>
            <li>O2O店铺创新</li>
            <li>环境系统</li>
            <li>品牌公关活动</li>
            <li>O2O体验</li>
            <li>商家促销</li>
		    </ul>
		    </a>
		    <a href="{{ _route('desktop:showservice.yxsp') }}">
		    <ul class="col-xs-2">
		    <li><strong>影像影视</strong></li>
			<li>企业宣传片</li>
            <li>广告片</li>
            <li>MTV</li>
            <li>微电影</li>
            <li>建筑三维动画</li>
            <li>城市形象片</li>
		    </ul>
		    </a>
		    <a href="{{ _route('desktop:showservice.wlxmt') }}">
		    <ul class="col-xs-2">
		    <li><strong>网络新媒体</strong></li>
        	<li>高端网站定制</li>
            <li>H5创意设计</li>
            <li>微营销</li>
            <li>微网站</li>
            <li>微商城</li>
            <li>LOGO演绎</li>
            <li>电商运维</li>
            <li>APP开发</li>
		    </ul>
		    </a>
		    <a href="{{ _route('desktop:showservice.zdjs') }}">
		    <ul class="col-xs-2">
		    <li><strong>终端建设</strong></li>
			<li>专卖店设计</li>
            <li>SI设计</li>
            <li>展会设计</li>
            <li>展厅设计</li>
		    </ul>
		    </a>
		  </div>
		  <div class="hr"></div>
	  </div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-logo">
			    <img src="{{ _asset('assets/richbrand/images/footer_logo.png') }}" class="center-block img-responsive">
			</div>
			<div class="footer-content">
			    <p>锐旗品牌管理（广州）有限公司 Copyright © 2017 <a href="http://www.miitbeian.gov.cn" target="_blank" style="color:#FFF">{{ cache('website_icp', '粤ICP备17152845号-1') }}</a> 联系我们：(020) 82920366 <a href="#">访问统计</a></p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ _asset('assets/richbrand/js/global.js?id=').time() }}"></script>
@section('afterFooter')
@show{{-- 页脚区域 --}}
@yield('js')
</body>
</html>
