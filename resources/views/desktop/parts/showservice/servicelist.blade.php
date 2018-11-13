<div class="example">
	<div class="container">
		<div class="example-content">
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