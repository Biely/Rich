@extends('desktop.layout._base')

@section('navitem')
<li class="nav-item"><a href="http://rich-brand.com/" class="active">首页</a></li>
<li class="nav-item"><a href="{{ slug_url('example') }}">案例</a></li>
<li class="nav-item"><a href="{{ slug_url('service') }}">服务</a></li>
<!-- <li class="nav-item"><a href="{{ slug_url('news') }}">动态</a></li> -->
<li class="nav-item"><a href="{{ slug_url('point') }}">观点</a></li>
<li class="nav-item"><a href="{{ slug_url('about') }}">关于</a></li>
<!-- <li class="nav-item"><a href="{{ slug_url('join') }}">加入</a></li> -->
<li class="nav-item"><a href="{{ slug_url('contant') }}">联系</a></li>
@stop

@section('mainContent')
<!-- 滚动框 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->
  <div class="container">
  <div class="menu">
	  <ul>
	  <a href="{{ _route('desktop:showservice.ppzx') }}"><li>品牌咨询</li></a>
	  <a href="{{ _route('desktop:showservice.ppsj') }}"><li>品牌设计</li></a>
	  <a href="{{ _route('desktop:showservice.wlxmt') }}"><li>网络新媒体</li></a>
	  <a href="{{ _route('desktop:showservice.cbtg') }}"><li>传播推广</li></a>
	  <a href="{{ _route('desktop:showservice.yxsp') }}"><li>影像视频</li></a>
	  <a href="{{ _route('desktop:showservice.zdjs') }}"><li>终端建设</li></a>
	  </ul>
  </div>
  </div>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ _asset('assets/richbrand/images/banner1.jpg') }}" alt="" class="" >
    </div>
    <div class="item">
      <img src="{{ _asset('assets/richbrand/images/banner2.jpg') }}" alt="" class="" >
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
<!-- end滚动框 -->

<!-- 动画 -->
<div class="container">
  <div class="main-category">
    <div class="grid">
          <figure class="effect-oscar main-category-item">
              <img src="/assets/richbrand/images/panel1.jpg" alt="新品牌创建" class="img-responsive">
              <figcaption>
                  <h2>新品牌创建</h2>
                  <p>科学建设品牌，创建商业价值<br>
  快销、电商、工业、地产<br>
  四大行业细分设计</p>
                  <a href="{{ _route('desktop:showservice.ppzx') }}" target="_blank">View more</a>
              </figcaption> 
               <div class="fibg" style="opacity: 0;"></div>     
          </figure>
          
          
          <figure class="effect-bubba main-category-item myoscar" style="margin-left:0.5%;">
              <img src="/assets/richbrand/images/panel2.png" alt="老品牌升级" class="img-responsive">
              <figcaption>
                  <h2 style="color: rgb(0, 0, 0);">老品牌升级</h2>
                  <p style="color: rgb(0, 0, 0);">唤醒品牌记忆，激发品牌活力<br>
  老字号，新使命，留住老客户吸引新消费群体</p>
                  <a href="{{ _route('desktop:showservice.ppsj') }}" target="_blank">View more</a>
              </figcaption>
               <div class="fibg" style="opacity: 0;"></div>       
          </figure>
          
          
          <figure class="effect-oscar main-category-item" style="margin-left:0.5%;">
              <img src="/assets/richbrand/images/panel3.jpg" alt="O2O品牌创建" class="img-responsive">
              <figcaption>
                  <h2>O2O品牌创建</h2>
                  <p>颠覆传统思维，助力跨界营销<br>
  用大数据“玩出来”的<br>
  全渠道商业互联</p>
                  <a href="{{ _route('desktop:showservice.ppsj') }}" target="_blank">View more</a>
              </figcaption> 
               <div class="fibg"></div>     
          </figure>
          
          
          <figure class="effect-oscar main-category-item myoscar" style="margin-top:6px;">
              <img src="/assets/richbrand/images/panel4.png" alt="品牌自测系统" class="img-responsive">
              <figcaption>
                  <h2 style="color: rgb(0, 0, 0);">品牌自测系统</h2>
                  <p style="color: rgb(0, 0, 0);">解读企业现状，探索竞争密码<br>
  了解品牌、分析品牌、管理品牌</p>
                  <a href="{{ _route('desktop:showservice.ppsj') }}" target="_blank">View more</a>
              </figcaption>
               <div class="fibg" style="opacity: 0;"></div>       
          </figure>
          
          <figure class="effect-oscar main-category-item" style="margin-left:0.5%; margin-top:6px;">
              <img src="/assets/richbrand/images/panel5.jpg" alt="大单品品牌创建" class="img-responsive">
              <figcaption>
                  <h2>影像视频推广</h2>
                  <p>聚焦品类战略，重新定义单品<br>
  三大核心构建中国式品牌爆发力</p>
                  <a href="{{ _route('desktop:showservice.yxsp') }}" target="_blank">View more</a>
              </figcaption> 
               <div class="fibg" style="opacity: 0;"></div>     
          </figure>
          
                 
      <div class="category-item-other">
            <div class="category-other-content" style="cursor:pointer;" onclick="window.location.href='{{ _route('desktop:showservice.cbtg') }}'">
                <img src="/assets/richbrand/images/panel6.jpg" alt="品牌年度传播" class="img-responsive">
                    <div class="category-other-dec">
                      <h2 style="color:#000000">品牌年度传播</h2>
                      <p style="color:#000000">创新整合<br>新媒体时代整合战略传播首选
  </p>
                      </div>
                       <div class="fibg"></div> 
              </div>
              
              <div class="category-other-content" style="cursor:pointer;" onclick="window.location.href='{{ _route('desktop:showservice.cbtg') }}'">
                <img src="/assets/richbrand/images/panel7.jpg" alt="单品创建" class="img-responsive">
                    <div class="category-other-dec">
                      <h2 style="color:#FFF;">单品创建</h2>
                      <p style="color:#FFF;">超越感官 <br>刷新品牌新媒体时代的新体验
  </p>
                      </div>
                       <div class="fibg"></div> 
              </div>
          </div>
              
          <figure class="effect-oscar main-category-item myoscar" style="margin-left:0.5%; margin-top:6px; float:left;">
              <img src="/assets/richbrand/images/panel8.jpg" alt="店铺零售环境">
              <figcaption>
                  <h2 style="color:#000;">店铺终端建设</h2>
                  <p style="color:#000;">渲染商业环境<br>
  多维度空间诱发消费冲动</p>
                  <a href="{{ _route('desktop:showservice.zdjs') }}" target="_blank">View more</a>
              </figcaption> 
              <div class="fibg"></div>    
          </figure>              
    </div>
  </div>
  <!-- 中部logo -->
  <div class="middle-logo">
  <img src="/assets/richbrand/images/middle_logo.png" class="img-responsive">
  </div>
  <!-- end中部logo -->
</div>
<div class="fat-hr"></div>      
<!-- end动画 -->

<!-- inculede -->
 @include('desktop.content',$articles)
<!-- endinculede -->



@endsection