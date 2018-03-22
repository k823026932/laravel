<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>孔德赐个人博客 - 一个站在web前端设计之路的男技术员个人博客网站</title>
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="{{ URL::asset('css/base.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/about.css') }}" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
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
    <div class="banner">
      <p data-scroll-reveal="enter top over 2s">我们不停的翻弄着回忆，却再也找不回那时的自己</p>
      <p data-scroll-reveal="enter left over 2s after 1s">人生，是一场盛大的遇见。若你懂得，就请珍惜。</p>
      <p data-scroll-reveal="enter bottom over 2s after 2s">无论下多久的雨，最后都会有彩虹；无论你多么悲伤，要相信幸福在前方等候.</p>
    </div>
    <div class="memorial_day">
      <div class="time_axis"></div>
      <ul>
        <li class="n1"><a href="/">前端入行</a>
          <div class="dateview">2009</div>
        </li>
        <li class="n2"><a href="/">创建个人博客</a>
          <div class="dateview">2011-01-12</div>
        </li>
        <li class="n3"><a href="/">分享第一个博客模板</a>
          <div class="dateview">2013-06-08</div>
        </li>
        <li class="n4"><a href="/">制作第一个html5模板</a>
          <div class="dateview">2013-08-08</div>
        </li>
        <li class="n5"><a href="/">模板更换为时间轴</a>
          <div class="dateview">2017-09-08</div>
        </li>
      </ul>
    </div>
    <div class="about left">
  <h2>Just about me</h2>
    <ul> 
     <p>小赐，男，一个90后草根站长！09年入行。</p>
<p>
人生就是一个得与失的过程，而我却是一个幸运者，得到的永远比失去的多。生活的压力迫使我放弃了轻松的前台接待，放弃了体面的编辑，换来虽有些蓬头垢面的工作，但是我仍然很享受那些熬得只剩下黑眼圈的日子，因为我在学习使用Photoshop、Flash、Dreamweaver、ASP、PHP、JSP...中激发了兴趣，然后越走越远....</p>
<p>在这条路上，我要感谢三个人，第一个是我从事编辑的老板，是他给了我充分学习研究div的时间，第二个人是我的老师，如果不是街上的一次偶遇，如果不是因为我正缺钱，我不会去强迫自己做不会的事情，但是金钱的诱惑实在是抵挡不了，于是我选择了“接招”，东拼西凑的把一个网站做好了，当时还堪称佳作的网站至今已尘归尘土归土了。第三个人，我总说他是我的伯乐，因为我当初应聘技术员的时候，我说我什么都不会，但是他却给了我机会，而我就牢牢的把握了那次机会，直到现在如果不是我主动把域名和空间转出来，我会一直霸占着公司资源，免费下去（可我就偏偏不是喜欢爱占便宜的人，总感觉欠了就得还）...</p>
<p>
还要特别感谢一个人，是度娘。他是我的百科，我不会的，他会，最后我还是不会。博客能做到今天这样，一半都有他的功劳。他不仅仅支持我的事业作为我有力的经济后盾，还毫无怨言的包容我所有工作、生活当中有理无理的坏脾气，曾经我是多么有自己原则的一个人，但是遇到他，打破了我自己毕生坚持的原则，喜欢一句话“冥冥中该来则来，无处可逃”。
</p>
    </ul>
<div class="gbko">
<!--高速版-->
<div id="SOHUCS" sid="790" ></div>

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
