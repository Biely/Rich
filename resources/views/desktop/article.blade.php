@extends('desktop.layout._base')

@section('markdown_style')
<link rel="stylesheet" href="{{ _asset('assets/css/markdown_style.css') }}" />
@stop

@section('navitem')
@include('desktop.layout._nav')
@stop

@section('mainContent')
<div id="carousel-example-generic" class="carousel slide1" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.soundsplan.com/images/banner/g1.gif" alt="" class="" >
    </div>
    <div class="item">
      <img src="http://www.soundsplan.com/images/banner/g2.gif" alt="" class="" >
    </div>
    <div class="item">
      <img src="http://www.soundsplan.com/images/banner/g3.gif" alt="" class="" >
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
	      <h1>{{ $article->category->name }}</h1>
	      <div class="example-hr"><p class="left"></p><p class="right"></p></div>
	    </div>
	    <div class="row">
	           <div class="col-sm-9">
	             <h3 class="article-title text-center text-danger">{{ $article->title }}</h3>
	             <p class="text-center text-primary">{{ $article->created_at }}</p>
			    <div class="article-content">{!! mark2html($article->content) !!}</div>
		       </div>
	           <div class="col-sm-3 side-info">
	            <p class="side-title">联系我们</p>
	            <p>地址：广州市增城区荔城街府佑路108号3幢1621房<br>
				邮编：511300<br>
				电话：(020) 82920366 / 13265341448<br>
				网址：www.rich-brand.com</p>
				<hr/>
	            <p class="side-title">最新内容</p>
	             @foreach($article->newly as $art)
                 <div class="side-content row">
                 <img src="{{ !empty($art->thumb) ? $art->thumb :'http://www.soundsplan.com/js/kindeditor/attached/image/20171117/20171117173374357435.jpg'}}" class="img-responsive col-xs-6" >
                 <a href="{{ slug_url(cid_category($art->cid)->slug, $art->slug) }}"><p class="col-xs-6">{{ $art->title }}</p></a>
                 </div>
	             @endforeach
		       </div>
		     </div>
	    </div>
	  </div>
	</div>
</div>
@endsection