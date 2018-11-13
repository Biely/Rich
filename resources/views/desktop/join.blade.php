@extends('desktop.layout._base')
@section('navitem')
@include('desktop.layout._nav')
@stop

@section('mainContent')
<div id="carousel-example-generic" class="carousel slide1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.soundsplan.com/images/banner/d1.gif" alt="" class="" >
    </div>
    <div class="item">
      <img src="http://www.soundsplan.com/images/banner/d2.gif" alt="" class="" >
    </div>
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
        <h1>加入锐旗</h1>
        <div class="example-hr"><p class="left"></p><p class="right"></p></div>
      </div>
    <div class="row about-content">
      <div class="about-tiem row">
      <div class="col-sm-4 about-stitle">
      <div class="about-scontent">
        <h2>加入锐旗，
成为我们当中的一员</h2>
<p>在锐旗工作，你将接触这里特有的追求卓越崇尚创造的公司氛围, 获得专业培训,团队协作和 个人发展的机会。加入锐旗，成为我们当 中的一员协助客户透过设计解决问题，创造价值。</p>
      </div>
      </div>
      <div class="col-sm-8 about-img">
        <img src="http://www.soundsplan.com/images/about1.jpg" class="block img-responsive" data-move-y="600px" data-move-x="600px">
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