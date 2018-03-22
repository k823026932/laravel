<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>回帖</title>
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ URL::asset('css/base.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/about.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/m.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/base.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<style type="text/css">
  .page1 {
    margin:0 auto;
  }
  .page1 ul li{
    float: left;
    margin:10px;
  }
</style>
<script src="{{ URL::asset('js/scrollReveal.js') }}"></script>
</head>
<body>
@if(Session::has('message'))
 <div class="alert alert-info"> {{Session::get('message')}} 
 </div> 
 @endif
<header>
  <div class="logo" data-scroll-reveal="enter right over 1s"><a href="{{url ('/')}}"><img src="{{ URL::asset('images/logo.png') }}" /></a></div>
  
  
  @if (empty(Session::get('yonghuleixing')))
  <div style="position:absolute;top:30px;left:75%;">
  <a href="{{url ('home/register')}}"><span>注册</span></a>&nbsp;&nbsp;
  <a href="{{url ('home/login')}}"><span>登录</span></a>
  </div>
  @elseif (Session::get('yonghuleixing') == 1)
  <div style="position:absolute;top:30px;left:68%;">
  <div class="huiyuan">
    <div class="huiyuan-2">
      <img src="{{Session::get('touxiang')}}" style="width:52px;height:52px;" />
    </div>
    <div class="huiyuan-1">
      <ul class="huiyuan-1-1">
        <li class="huiyuan-1-1-1">
          <img src="{{ URL::asset('images/rentou1.png') }}">
        </li>
        <li class="huiyuan-1-1-2">
          <a href="{{url ('home/xiugaitouxiang')}}">{{Session::get('username')}}</a>
        </li>
        
        <li class="huiyuan-1-1-0"></li>
        <li class="huiyuan-1-1-4">
          <a href="{{url ('admin/alogin')}}">管理中心</a>
        </li>
        <li class="huiyuan-1-1-0"></li>
        <li class="huiyuan-1-1-5">
          <a href="{{url ('home/logout')}}">退出</a>
        </li>
      </ul>
      <ul class="huiyuan-1-2">
        <li class="huiyuan-1-2-1">
          <a href="{{url ('home/xiugaitouxiang')}}">设置</a>
        </li>
        <li class="huiyuan-1-1-0"></li>
        <li class="huiyuan-1-2-2">
          用户权限：管理员
        </li>
      </ul>
    </div>
  </div>
  </div>
  @else
<div style="position:absolute;top:30px;left:72%;">
  <div class="huiyuan">
    <div class="huiyuan-2">
      <img src="{{Session::get('touxiang')}}" style="width:52px;height:52px;" />
    </div>
    <div class="huiyuan-1">
      <ul class="huiyuan-1-1">
        <li class="huiyuan-1-1-1">
          <img src="{{ URL::asset('images/rentou1.png') }}">
        </li>
        <li class="huiyuan-1-1-2">
          <a href="{{url ('home/xiugaitouxiang')}}">{{Session::get('username')}}</a>
        </li>
        
      </ul>
      <ul class="huiyuan-1-2">
        <li class="huiyuan-1-2-1">
          <a href="{{url ('home/xiugaitouxiang')}}">设置</a>
        </li>
        
        <li class="huiyuan-1-1-0"></li>
        <li class="huiyuan-1-1-5">
          <a href="{{url ('home/logout')}}">退出</a>
        </li>
      </ul>
    </div>
  </div>
  </div>
  @endif
  
  
  <nav class="topnav" data-scroll-reveal="enter bottom over 1s after 1s"><a href="/"><span>首页</span><span class="en">Home</span></a><a href="/home/about"><span>关于我</span><span class="en">About</span></a>
  @if (!empty(Session::get('yonghuleixing')))
  @if (Session::get('yonghuleixing') == 1)
  <a href="/home/send"><span>发表博文</span><span class="en">Saying</span></a>
  @endif  
  @endif
  </nav>
  <form action="/home/shousuo" method="post" enctype="multipart/form-data">
  <div style="position:absolute;top:120px;left:70%;"><input type="text" name="neirong" style="width:150px;height:23px;border:2px solid #2D7ECF;" />&nbsp;&nbsp;&nbsp;<input type="submit"  name="huifu" value="搜索" />{{ csrf_field() }}
</div>
</form>
</header>
<article>
  <div class="container">
   
    <div class="about left">

    <ul>
<h4 class="atitle"><span>
{{$result[0]->time}}
</span>{{$result[0]->title}}
</h4>
<p class="newsnav">您现在的位置是:<a href="/">首页</a>&nbsp;>&nbsp;<a href="">{{$result[0]->title}}</a></p>
	<div style="width:600px;margin:0 auto;padding:50px;background-color:#6CBFEE;">{{$result[0]->content}}</div>
	<h4 class="atitle" style="margin-top:30px;">回复内容：</h4>
	
	
	<ul class="cbp_tmtimeline">
			@if (!empty($arr))
        		@foreach ($arr as $v)
					<li>
						<time class="cbp_tmtime"><span>
						{{$v->time}}
						</span> <span>
						
						</span></time>
						<div class="cbp_tmicon"></div>
						<div class="cbp_tmlabel" data-scroll-reveal="enter right over 1s" >
							@foreach ($uname as  $uv)
							@if ($uv->uid == $v->authorid)
							{{$uv->username}}
							回复:
							@endif
							@endforeach
							 <p><div style="width:600px;height:120px;overflow: auto;">{{$v->content}}</div>
							 
							 </p>
                             
						</div>
					</li>
				@endforeach
			@endif		
	</ul>
	<div style="height: 30px;">
	<div class="page1">
	
	{!! $arr->links() !!}
    </div>
	</div>
	@if (!empty(Session::get('uid')))
	<div class="huitie-6-2" style="width:830px;height:400px;padding:20px 0px 40px 0px;" >
	<form action="/home/doHuitie/{{$id}}" method="post" enctype="multipart/form-data">
	@else
	<form action="/home/login" method="post" enctype="multipart/form-data">
	@endif
		<div class="huitie-6-2-1">
			<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
			<textarea id="ckeditor" name="content" class="ckeditor"></textarea>
		</div>
		<div class="huitie-6-2-2" style="width:80px;height:33px;border:1px solid #235994;margin:20px 0px 0px 0px;">
			{{ csrf_field() }}
			<input type="submit"  name="huifu" value="发表回复"
				style="width:80px;height:33px;line-height:33px;font-size:12px;color:#fff;background-color:#2D7ECF;border:1px solid #e0e0e0;" />
		</div>
	</form>
	</div>

<div class="gbko">
<!--高速版-->
<div id="SOHUCS" sid="790" ></div>

</div>
</div>

</div>
  </div>
  </aside>
</article>
<footer> Design by DanceSmile <a href="/">蜀ICP备11002373号-1</a> </footer>
<script>
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		(function(){
			window.scrollReveal = new scrollReveal({reset: true});
		})();
	};
</script>

<!-- 雪花 -->
<script src="public/js/jquery.min.js" type="text/javascript"></script>
<script src="public/js/winternetizer.min.js" type="text/javascript"></script>

</body>
</html>
