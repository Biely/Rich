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

<div class="news">
	<div class="container">
	  <div class="news-content">
	    <div class="news-h1">
	      <h1>最新动态</h1>
	      <div class="example-hr"><p class="left"></p><p class="right"></p></div>
	    </div>
	    <div class="row">
		    <!-- <div class="news-block col-sm-6">
			    <div class="news-item row">
			      <div class="news-word col-sm-8">
			      <h4>无人货架来袭，你的身材扛得住吗？</h4>
                  <p>时间:2017/11/10 17:50:23 当大家还沉浸在马云的无人超市的新奇中时， 紧接着京东CEO刘强东也正式宣布：要在全国开设50万家京东便利店、以及大量京东无人超市</p>
                  <img src="http://www.soundsplan.com/images/news-read.gif" class="img-responsive">
			      </div>
			      <div class="news-img col-sm-4">
			      <img src="http://www.soundsplan.com/js/kindeditor/attached/image/20171110/20171110175375077507.jpg" class="pull-right img-responsive">
			      </div>
			    </div>
		    </div>
		    <div class="news-block col-sm-6">
			    <div class="news-item row">
			      <div class="news-word col-sm-8">
			      <h4>无人货架来袭，你的身材扛得住吗？</h4>
                  <p>时间:2017/11/10 17:50:23 当大家还沉浸在马云的无人超市的新奇中时， 紧接着京东C</p>
                  <img src="http://www.soundsplan.com/images/news-read.gif" class="img-responsive">
			      </div>
			      <div class="news-img col-sm-4">
			      <img src="http://www.soundsplan.com/js/kindeditor/attached/image/20171110/20171110175375077507.jpg" class="pull-right img-responsive">
			      </div>
			    </div>
		    </div> -->
		     @foreach($articles as $art)
	           <div class="news-block col-sm-6">
			    <div class="news-item row">
			    <a href="{{ slug_url($art->category->slug, $art->slug) }}">
			      <div class="news-word col-sm-8">
			      <h4>{{ $art->title }}</h4>
                  <p>{{ $art->description }}</p>
                   <img src="http://www.soundsplan.com/images/news-read.gif" class="img-responsive">
			      </div>
			      <div class="news-img col-sm-4">
			      <img src="{{ !empty($art->thumb) ?$art->thumb :'http://www.soundsplan.com/js/kindeditor/attached/image/20171110/20171110175375077507.jpg' }}" class="pull-right img-responsive">
			      </div>
			     </a>
			    </div>
		    </div>
	         @endforeach
	         
		     </div>
		     <div class="row">
			{!! $articles->render() !!}
			</div>
	    </div>
	  </div>
	</div>
</div>
@endsection