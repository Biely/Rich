@extends('desktop.layout._base')
@section('navitem')
@include('desktop.layout._nav')
<!-- <li class="nav-item"><a href="{{ slug_url('contant') }}" @if ($category->slug=='contant') class="active" @endif >联系</a></li> -->
@stop

@section('mainContent')
<div id="carousel-example-generic" class="carousel slide1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.soundsplan.com/images/banner/d1.gif" alt="" class="" >
    </div>
    <!-- <div class="item">
      <img src="http://www.soundsplan.com/images/banner/d2.gif" alt="" class="" >
    </div> -->
    <div class="item">
      <img src="http://www.soundsplan.com/images/banner/d3.gif" alt="" class="" >
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
<div class="about">
  <div class="container">
    <div class="news-h1">
        <h1>锐旗简介</h1>
        <div class="example-hr"><p class="left"></p><p class="right"></p></div>
      </div>
    <div class="row about-content">
      <div class="col-sm-12 about-title">
        <h2>锐旗是谁</h2>
      </div>
      <div class="about-tiem row">
      <div class="col-sm-4 about-stitle">
      <div class="about-scontent">
        <h2>理想的战略伙伴</h2>
<p>为企业战略提供精准的品牌表达，为推动企业战略实施进程提供全方位的品牌服务</p>
      </div>
      </div>
      <div class="col-sm-8 about-img">
        <img src="/assets/richbrand/images/team.jpg" class="block img-responsive" data-move-y="600px" data-move-x="600px">
      </div>
      </div>

      <div class="about-tiem row">
      <div class="col-sm-4 about-stitle">
      <div class="about-scontent">
        <h2>优秀的品牌专家</h2>
<p>倾听需求，以科学的理论工具和实战经验，为企业发展难题提供实效定制解决方案</p>
      </div>
      </div>
      <div class="col-sm-8 about-img">
        <img src="http://www.soundsplan.com/images/about2.jpg" class="block img-responsive" data-move-y="600px" data-move-x="600px">
      </div>
      </div>

      <div class="about-tiem row">
      <div class="col-sm-4 about-stitle">
      <div class="about-scontent">
        <h2>贴心的市场朋友</h2>
<p>从品牌创建到营销推广，时刻关注客户需求，建言建策，协助客户攻城略地</p>
      </div>
      </div>
      <div class="col-sm-8 about-img">
        <img src="http://www.soundsplan.com/images/about3.jpg" class="block img-responsive" data-move-y="600px" data-move-x="600px">
      </div>
      </div>

      <div class="about-tiem row">
      <div class="col-sm-4 about-stitle">
      <div class="about-scontent">
        <h2>创意的视觉达人</h2>
<p>从品牌标识到营销物料设计，保持客户再市场形象的唯一性与差异性，有力支撑市场竞争</p>
      </div>
      </div>
      <div class="col-sm-8 about-img">
        <img src="http://www.soundsplan.com/images/about4.jpg" class="block img-responsive" data-move-y="600px" data-move-x="600px">
      </div>
      </div>

      <div class="about-tiem row">
      <div class="col-sm-4 about-stitle">
      <div class="about-scontent">
        <h2>专业的执行推手</h2>
<p>从品牌方案策划到后期执行监督，全程跟踪服务，确保方案与创意切实落地</p>
      </div>
      </div>
      <div class="col-sm-8 about-img">
        <img src="http://www.soundsplan.com/images/about5.jpg" class="block img-responsive" data-move-y="600px" data-move-x="600px">
      </div>
      </div>

      <div class="col-sm-12 about-title">
        <h2>锐旗为谁服务</h2>
      </div>
      <div class="col-sm-3 about-for-black block" data-move-y="600px" data-move-x="600px">OEM转型自主<br />
        品牌创建者</div> <div class="col-sm-3 about-for-white block" data-move-y="600px" data-move-x="600px">细分市场<br />
        品牌创建者</div> <div class="col-sm-3 about-for-black block" data-move-y="600px" data-move-x="600px">竞争形象缺少<br />
        或不完善者</div> <div class="col-sm-3 about-for-white block" data-move-y="600px" data-move-x="600px">企业发展遭遇<br />
        品牌瓶颈者</div> <div class="col-sm-3 about-for-white block" data-move-y="600px" data-move-x="600px">企业发展需求<br />
        品牌合作者</div> <div class="col-sm-3 about-for-black block" data-move-y="600px" data-move-x="600px">本土品牌开拓<br />
        区域市场者</div> <div class="col-sm-3 about-for-white block" data-move-y="600px" data-move-x="600px">国际品牌开拓<br />
        国内市场者</div> <div class="col-sm-3 about-for-black block" data-move-y="600px" data-move-x="600px">创业者<br /><br /></div> 
         <div class="col-sm-12 about-title">
        <h2>锐旗能做什么</h2>
        </div>
        <div class="about-tiem row">
      <div class="col-sm-4 about-sitem">
      <div class="about-sitem-content">
        <h2>品牌创立型企业</h2>
<p>基于市场机会分析提供品牌差异化定位策略及品牌形象设计，并对后期市场营销提供可行性知道建议与策略支持</p>
      </div>
      </div>
      <div class="col-sm-4 about-sitem">
      <div class="about-sitem-content">
        <h2>品牌成长型企业</h2>
<p>基于市场机会分析提供品牌差异化定位策略及品牌形象设计，并对后期市场营销提供可行性知道建议与策略支持</p>
      </div>
      </div>
      <div class="col-sm-4 about-sitem">
      <div class="about-sitem-content">
        <h2>品牌成熟型企业</h2>
<p>配合企业战略提供品牌核心延展与品牌形象工具设计服务，为复合型集团企业提供品牌战略咨询与长期方案执行与形象设计服务。</p>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ _asset('assets/richbrand/js/jquery.smoove.js') }}"></script>
<script>$('.block').smoove({offset:'30%'});</script>
@stop