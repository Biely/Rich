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
<div class="contant">
  <div class="container">
      <div class="contant-content">
        <img src="http://www.soundsplan.com/images/contact.gif" class="center-block img-responsive">
        <h3 class="text-center"></h3>
        <p class="text-center">在中国，锐旗正凭借丰富的经验与强大的表现力，协同客户一起开展品牌工作。我们通过战略研究帮助客户洞察市场机会，确立品牌承诺，并以其为导向，塑造品牌驱动客户业务发展，对我们的客户而言，这种策略产生了深远的影响。我们提供的服务是一个系统化的菜单，而不是一个固化的模式。不同的企业起点也不同，这取决于他们的业务。您希望我们从哪些方面帮助您创新或提升品牌呢？
</p>
      </div>
      <div class="contant-map row">
      <div class="col-sm-6 contant-img">
       <iframe id="mapframe588" class="J_mapframe" name="mapframe" frameborder="0" scrolling="no" height="300" width="100%" src="/assets/richbrand/map.html?id=588&amp;w=990&amp;ran=0.21268605884535075"></iframe>
      </div>
      <div class="col-sm-6 contant-adress">
        <p>地址：广州市增城区荔城街府佑路108号3幢1621房<br>
        邮编：511300<br>
        <!-- 手机号码：陈先生<br> -->
        电话：(020) 82920366 / 13265341448<br>
        <!-- 节假日电话：13761211997 刘先生<br>
        传真：(86) 21 54892611<br> -->
        <!-- 邮箱：info@soundsplan.com<br> -->
        邮箱：Service@mail.rich-brand.com<br>
        网址：www.rich-brand.com</p>

      </div>
      </div>
  </div>
</div>
@endsection

