<li class="nav-item"><a href="http://rich-brand.com/">首页</a></li>
<li class="nav-item"><a href="{{ slug_url('example') }}" @if ($category->slug=='example') class="active" @endif>案例</a></li>
<li class="nav-item"><a href="{{ slug_url('service') }}" @if ($category->slug=='service') class="active" @endif>服务</a></li>
<!-- <li class="nav-item"><a href="{{ slug_url('news') }}" @if ($category->slug=='news') class="active" @endif>动态</a></li> -->
<li class="nav-item"><a href="{{ slug_url('point') }}" @if ($category->slug=='point') class="active" @endif>观点</a></li>
<li class="nav-item"><a href="{{ slug_url('about') }}" @if ($category->slug=='about') class="active" @endif >关于</a></li>
<!-- <li class="nav-item"><a href="{{ slug_url('join') }}" @if ($category->slug=='join') class="active" @endif >加入</a></li> -->
<li class="nav-item"><a href="{{ slug_url('contant') }}" @if ($category->slug=='contant') class="active" @endif >联系</a></li>