@extends('desktop.layout._base')

@section('navitem')
@include('desktop.layout._nav')
@stop

@section('mainContent')
<div id="carousel-example-generic" class="carousel slide1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.soundsplan.com/images/banner/4.gif" alt="" class="" >
    </div>
    <div class="item">
      <img src="http://www.soundsplan.com/images/banner/7.gif" alt="" class="" >
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
@if(isset($select))
<div class="showservice">
<div class="container">
    <div class="indexsnav">
      <div>
      <a href="{{ _route('desktop:showservice.ppzx') }}" class="{{ ($select=='ppzx')?'select' : '' }}">品牌咨询</a>
        <a href="{{ _route('desktop:showservice.ppsj') }}" class="{{ ($select=='ppsj')?'select' : '' }}">品牌设计</a>
        <a href="{{ _route('desktop:showservice.cbtg') }}" class="{{ ($select=='cbtg')?'select' : '' }}">传播推广</a>
        <a href="{{ _route('desktop:showservice.yxsp') }}" class="{{ ($select=='yxsp')?'select' : '' }}">影像视频</a>
        <a href="{{ _route('desktop:showservice.wlxmt') }}" class="{{ ($select=='wlxmt')?'select' : '' }}">网络新媒体</a>
        <a href="{{ _route('desktop:showservice.zdjs') }}" class="{{ ($select=='zdjs')?'select' : '' }}">终端建设</a>
      </div>
    </div>
</div>
  @if($select=='ppsj')
      @include('desktop.parts.showservice.ppsj')
  @endif
  @if($select=='ppzx')
      @include('desktop.parts.showservice.ppzx')
  @endif
  @if($select=='cbtg')
      @include('desktop.parts.showservice.cbtg')
  @endif
  @if($select=='yxsp')
      @include('desktop.parts.showservice.yxsp')
  @endif
  @if($select=='wlxmt')
      @include('desktop.parts.showservice.wlxmt')
  @endif
  @if($select=='zdjs')
      @include('desktop.parts.showservice.zdjs')
  @endif
</div>
@endif
@include('desktop.parts.showservice.servicelist')
@endsection
@section('js')
<!-- <script type="text/javascript" src="{{ _asset('assets/richbrand/js/jquery.smoove.js') }}"></script>
<script>$('.block').smoove({offset:'20%'});</script> -->
@stop