@extends('desktop.layout._base')

@section('navitem')
@include('desktop.layout._nav')
@stop

@section('mainContent')
<div id="carousel-example-generic" class="carousel slide1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/assets/richbrand/images/1.gif" alt="" class="" >
    </div>
    <div class="item">
      <img src="http://www.soundsplan.com/images/banner/2.gif" alt="" class="" >
    </div>
    <!-- <div class="item">
      <img src="http://www.soundsplan.com/images/banner/3.gif" alt="" class="" >
    </div> -->
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
<div class="example">
	<div class="container">
		<div class="example-content">
			<div class="example-h1">
			  <h1>经典案例</h1>
			  <div class="example-hr"><p class="left"></p><p class="right"></p></div>
			</div>
			  <div class="row">
		     @foreach($articles as $art)
	           <div class="col-sm-6">
	           <a href="{{ slug_url($art->category->slug, $art->slug) }}" target="_blank">
	             <div class="example-content-item">
				   <img src="{{ !empty($art->thumb) ?$art->thumb :'/uploads/kindeditor/attached/image/20170718/20170718172531473147.jpg'}}">
				   <p>{{ $art->description }}</p>
		            <h2>{{ $art->title }}</h2>
		            <span>{{ !empty($art->keyword) ? $art->keyword :'品牌设计、LOGO设计、VI设计'}}</span>
		            <div class="content-hr"></div>
				  </div> 
			   </a>
	           </div>
	         @endforeach
	         
		     </div>
		     <div class="row">
			{!! $articles->render() !!}
			</div>
			
		</div>
	</div>
</div>
@endsection