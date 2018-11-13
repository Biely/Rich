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
      <img src="/assets/richbrand/images/7.gif" alt="" class="" >
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
<div class="service">
	<div class="container">
		<div class="service-content">
			<div class="service-h1">
			  <h1>产品服务</h1>
			  <div class="service-hr"><p class="left"></p><p class="right"></p></div>
			</div>
			<h4>品牌综合服务</h4>
		  <div class="row">
	          <div class="col-sm-4">
	            <div class="service-item block">
                  <img src="http://www.soundsplan.com/images/service1.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>品牌咨询</h2>
                    <p>任何一个具有远大志向的品牌，都会有高瞻远瞩战略指导先行。品牌的战略规划为品牌的发展提供了方向与思路，让决策者能够在最大程度上减少决策的所带来的成本损耗，降低决策风险，让品牌在市场道路上不迷失。——好战略，走更远。</p>
                    <p>品牌咨询、品牌调研、品牌定位、品牌架构、定位规划、品牌通调、文化导入、品牌标语、产品架构</p>
                  </div>
	            </div>
	          </div>
	          <div class="col-sm-4">
	            <div class="service-item block">
                  <img src="http://www.soundsplan.com/images/service2.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>品牌设计</h2>
                    <p>视觉识别作为品牌识别的重要部分，是品牌对外营销的重要工具，设计不仅要有观赏性，更要具有执行性——足够表达品牌内涵的创意表现力，切实传递品牌体验的实效沟通力。——好设计，会营销。</p><p>
                    视觉识别策略、标志设计、VI系统、吉祥物设计、VI导入培训、产品包装、广告海报、画册设计</p>
                  </div>
	            </div>
	          </div>
	          <div class="col-sm-4">
	            <div class="service-item block">
                  <img src="http://www.soundsplan.com/images/service3.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>品牌传播</h2>
                    <p>分析品牌&消费者需求，结合媒介工具提供最专业化的解决方案，并进行最大化媒介 
					资源利用，优化使用平台，严格KPI指标管控评估，利益最大化</p>
					<p>多种模式 灵活构建、洞察先机、精准定位、覆盖体验 引爆品牌、资源联动 激活商机</p>
                  </div>
	            </div>
	          </div>
	          <div class="col-sm-4">
	            <div class="service-item1 block" data-rotate-x="180deg" data-rotate-y="45deg" data-move-z="-500px">
                  <img src="http://www.soundsplan.com/images/service4.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>影像影视</h2>
                    <p>集合声、影、色为一体的广告影视是品牌与消费者沟通的重要桥梁。好的广告影视作品，兼具艺术与商业的双重特质，在艺术中传递品牌丰富内涵，在商业中颠覆艺术体验创意，绘声绘色地植入消费生活。——好广告，大电影。</p>
					<p>我们从品牌的深刻内涵中发掘闪光点，将品牌的思想通过受众的语言翻译成出色的影视作品，以多样的形式，不同的艺术表现，使品牌深刻占领受众心智。</p>
					<p>企业宣传片、广告片、MTV、微电影、建筑三维动画、城市形象片、微电影</p>
                  </div>
	            </div>
	          </div>
	          <div class="col-sm-4">
	            <div class="service-item1 block" data-rotate-x="180deg" data-rotate-y="45deg" data-move-z="-500px">
                  <img src="http://www.soundsplan.com/images/service5.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>网络新媒体</h2>
                    <p>互联网的诞生对品牌传播具有着划时代的意义，它为品牌占领顾客心智提供了新的平台，并将成为左右未来消费的导向标。——好网站，心沟通。</p><p>
                    我们已经成功为众多具有前瞻性的企业提供新媒体设计服务，包括营销型网站设计、互动性网站设计等，除了可见性的利润收益，更为品牌与顾客搭建了更为便捷高效的沟通平台。</p><p>
                    高端网站定制、H5创意设计、微营销、微网站、微商城、LOGO演绎、电商运维、APP开发</p>
                  </div>
	            </div>
	          </div>
	          <div class="col-sm-4">
	            <div class="service-item1 block" data-rotate-x="180deg" data-rotate-y="45deg" data-move-z="-500px">
                  <img src="http://www.soundsplan.com/images/service6.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>零售环境</h2>
                    <p>品牌的最终价值源自于顾客的体验，作为品牌与顾客沟通的直接渠道，品牌终端环境系统直接影响着品牌的发展与未来。——好店铺，聚人气。</p>
					<p>我们从顾客的真实体验出发，将品牌价值主张通过最直观的方式传达给顾客，塑造品牌五感六觉的立体体验，让顾客在每一处细节中感受品牌的思维植入，让品牌决胜于终端。</p>
					<p>专卖店设计、SI设计、展会设计、展厅设计</p>
                  </div>
	            </div>
	          </div>
	     </div>
	     <!-- <h4>四大行业</h4>
	     <div class="row">
	       <div class="col-sm-3">
	         <div class="service-item2 block" data-move-y="200px" data-move-x="-200px" data-rotate="45deg">
                  <img src="http://www.soundsplan.com/images/category8.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>电商大品牌</h2>
                    <p>供应·运营·物流<br>营销·平台</p>
                  </div>
	            </div>
	       </div>
	       <div class="col-sm-3">
	       <div class="service-item2 block" data-move-y="200px" data-move-x="-200px" data-rotate="45deg">
                  <img src="http://www.soundsplan.com/images/category9.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>工业大品牌</h2>
                    <p>建材物流·机械机电·电子<br>
                    电工·汽车配件·交通运输</p>
                  </div>
	            </div>
	       </div>
	       <div class="col-sm-3">
	       <div class="service-item2 block" data-move-y="200px" data-move-x="-200px" data-rotate="45deg">
                  <img src="http://www.soundsplan.com/images/category10.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>餐饮连锁大品牌</h2>
                    <p>连锁·食品·饮料·餐厅<br>
                    会所·茶楼·酒店</p>
                  </div>
	            </div>
	       </div>
	       <div class="col-sm-3">
	       <div class="service-item2 block" data-move-y="200px" data-move-x="-200px" data-rotate="45deg">
                  <img src="http://www.soundsplan.com/images/category11.jpg" class="img-responsive">
                  <div class="service-word">
                    <h2>快消品·大健康</h2>
                    <p>行业解决方案<br></p>
                  </div>
	            </div>
	       </div> -->
	       <div class="col-sm-12">
	            <div class="service-item3o">
	              <div class="service-word2">
	                <h2 class="block-title">定制化品牌建设流程</h2>
                  </div>
                  <img src="http://www.soundsplan.com/images/service7.jpg" class="img-responsive center-block block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px">
                  
	            </div>
	       </div>
	       <div class="col-sm-12">
	            <div class="service-item3 ">
	              <div class="service-word2">
	                <h2 class="block-title">系统化的品牌解决方案</h2>
                  </div>
                  <img src="http://www.soundsplan.com/images/service8.jpg" class="img-responsive center-block block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px">
                  
	            </div>
	       </div>
	       <div class="col-sm-12">
	            <div class="service-item3 ">
	              <div class="service-word2">
	                <h2 class="block-title">科学化的品牌理论模型</h2>
                  </div>
                  <p>【锐旗品牌彩虹模型】</p>
                  <img src="http://www.soundsplan.com/images/service9.jpg" class="img-responsive center-block block" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px">
                  
	            </div>
	       </div>
	     </div>
		</div>
	</div>
</div>

@endsection
@section('js')
<script type="text/javascript" src="{{ _asset('assets/richbrand/js/jquery.smoove.js') }}"></script>
<script>$('.block').smoove({offset:'20%'});</script>
@stop