<div class="content">
@if(!empty($articles['example']))
	<div class="example">
	  <div class="container">
		<div class="example-content">
		     <div class="row">
		     @foreach($articles['example'] as $row)
	           <div class="col-sm-6">
	           <a href="{{ slug_url('example', $row->slug) }}" target="_blank">
	             <div class="example-content-item">
				   <img src="{{ !empty($row->thumb) ? $row->thumb :'/uploads/kindeditor/attached/image/20170718/20170718172531473147.jpg'}}">
				   <p>{{$row->description}}</p>
		            <h2>{{$row->title}}</h2>
		            <span>{{ !empty($row->keyword) ? $row->keyword :'品牌设计、LOGO设计、VI设计'}}</span>
		            <div class="content-hr"></div>
				  </div>
	           </div>
	           </a>
	         @endforeach
		     </div>
			
		</div>
		<div class="block-logo">
		  <img src="/assets/richbrand/images/block_logo.png" class="center-block img-responsive">
		</div>
	   </div>
	</div>
@endif
<div class="container">
	<div class="block-tittle">
	  <div class="row">
	     <div class="col-sm-6">
           <div class="tittle-left">
           <h1>品牌整合创建</h1>
           </div>
	     </div>
	     <div class="col-sm-6">
	       <div class="tittle-right">
	       <h1>品牌专项定制</h1>
           </div>
	     </div>
	  </div>
	</div>
	<div class="block-list">
		<div class="row">
		  <div class="col-sm-2">
		    <a href="" >
			<div class=list-item>
             <h4>品牌咨询</h4>
            <span>战略制导的品牌综合服务</span><br>
            <p>品牌评估<br>
			   品牌调研<br>
			   品牌战略规划<br>
			   品牌架构梳理<br>
			   品牌定位<br>
			   文化体系制定<br>
			   品牌产品规划<br>
			   品牌推广全案<br>
			   品牌年度服务
             </p>
			</div>
			</a>
	      </div>
	      <div class="col-sm-2">
	      <a href="#" >
	      <div class=list-item>
             <h4>品牌设计</h4>
            <span>创造市场超级符号</span><br>
            <p>视觉识别策略<br>
			   标志设计<br>
			   VI系统<br>
			   超级IP设计<br>
			   VI导入培训<br>
			   包装设计<br>
			   广告海报<br>
			   品牌物料设计
             </p>
			</div>
			</a>
	      </div>
	      <div class="col-sm-2">
	      <a href="" >
	      <div class=list-item>
            <h4>品牌传播</h4>
            <span>传播触动心灵的品牌</span><br>
            <p>年度传播战略规划<br>
			   年度推广传播策划<br>
			   年度传播主题设定<br>
			   传播渠道规划<br>
			   推广预算费用规划<br>
			   DSP传播策略
             </p>
			</div>
			</a>
	      </div>
	      <div class="col-sm-2">
	      <a href="">
	      <div class=list-item>
             <h4>影像视频</h4>
            <span>用声色打动心灵</span><br>
            <p>企业宣传片<br>
			   广告片<br>
			   MTV<br>
			   微电影<br>
			   建筑三维动画<br>
			   城市形象片<br>
			   病毒视频
             </p>
			</div>
			</a>
	      </div>
	      <div class="col-sm-2">
	      <a href="" >
	      <div class=list-item>
            <h4>网络新媒体</h4>
            <span>创造互联网数字影响力</span><br>
            <p>PC高端网站定制<br>
			   移动端官网定制<br>
			   H5创意设计<br>
			   新媒体阵地建设<br>
			   新媒体创意营销<br>
			   新媒体精准投放<br>
			   口碑营销策略<br>
			   搜索营销策略
             </p>
			</div>
			</a>
	      </div>
	      <div class="col-sm-2">
	      <a href="">
	      <div class=list-item>
            <h4>零售环境</h4>
            <span>品牌零距离体验构建</span><br>
            <p>专卖店设计<br>
				SI空间设计<br>
				展厅设计
             </p>
			</div>
			</a>
	      </div>
		</div>
	</div>
	<!-- <div class="news">
	  <div class="row">
	    <div class="col-sm-3">
		    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	    <div class="col-sm-3">
	    <div class="news-item">
			    <span>观点</span>
		        <h3>五感体验如何打造真正的品牌？</h3>
		        <p>我们常常遇到这样一个问题：为什么消费者选择了我的竞争对手，而不是我？&nbsp;...</p>
	        </div>
	    </div>
	  </div>
	</div> -->
	<!-- @if(!empty($articles['hot'])&&(count($articles['hot'])=='8'||count($articles['hot'])=='12'))
	<div class="hot">
	  <div class="row">
	  @for($i=0 ;$i < count($articles['hot']);$i++)
		  @if($i==0||$i==2||$i==5||$i==7||$i==8||$i==10)
		  <div class="{{ 'count'.$i }} col-sm-3">
		  <a href="{{ slug_url(cid_category($articles['hot'][$i]->cid)->slug,$articles['hot'][$i]->slug) }}">
		    <div class="hot-item">
				    <span class="span">{{ cid_category($articles['hot'][$i]->cid)->name }}</span>
			        <h3 class="h3">{{ $articles['hot'][$i]->title }}</h3>
			        <p class="p">{{ $articles['hot'][$i]->description }}</p>
		        </div>
		    
		    </a>
		    </div>
		  @else
		  <div class="count col-sm-3">
		  <a href="{{ slug_url(cid_category($articles['hot'][$i]->cid)->slug,$articles['hot'][$i]->slug) }}">
		    <div class="hot-item">
				    <span>{{ cid_category($articles['hot'][$i]->cid)->name }}</span>
			        <h3>{{ $articles['hot'][$i]->title }}</h3>
			        <p>{{ $articles['hot'][$i]->description }}</p>
		        </div>
		    
		    </a></div>
		  @endif
	  @endfor
	  </div>
	</div>
	@endif -->
</div>
	
</div>
