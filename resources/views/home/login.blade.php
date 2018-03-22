<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0"> 
	<title>登录</title>
    <link href="{{ URL::asset('css/default.css') }}" rel="stylesheet" type="text/css" />
	<!--必要样式-->
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/demo.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/loaders.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
	@if(Session::has('message'))
 <div class="alert alert-info"> {{Session::get('message')}} 
 </div> 
 @endif
	<div class='login'>
	  <div class='login_title'>
	    <span>登录</span>
	  </div>
	  <div class='login_fields'>
	  <form action="/home/doLogin" method="post">
	    <div class='login_fields__user'>
	      <div class='icon'>
	        <img alt="" src="{{ URL::asset('img/user_icon_copy.png') }}">
	      </div>
	      <input name="username" placeholder='用户名' maxlength="16" type='text' autocomplete="off" value="admin"/>
	      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
	        <div class='validation'>
	          <img alt="" src="{{ URL::asset('img/tick.png') }}">
	        </div>
	    </div>
	    <div class='login_fields__password'>
	      <div class='icon'>
	        <img alt="" src="{{ URL::asset('img/lock_icon_copy.png') }}">
	      </div>
	      <input name="password" placeholder='密码' maxlength="16" type='text' autocomplete="off">
	      <div class='validation'>
	        <img alt="" src="{{ URL::asset('img/tick.png') }}">
	      </div>
	    </div>
	    <div class='login_fields__password'>
	      <div class='icon'>
	        <img alt="" src="{{ URL::asset('img/key.png') }}">
	      </div>
	      <input name="yzm" placeholder='验证码' maxlength="6" type='text' name="ValidateNum" autocomplete="off">
	      <div class='validation' style="opacity: 1; right: -55px;top: -3px;">
          <img src="{{ URL('index/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
	      </div>
	       
	    </div>
	    <div class='login_fields__submit'>
	      <input type='submit' value='登录'>
	    </div>
	  </form>
	  </div>
	  
	  <div class='success'>
	  </div>
	  <div class='disclaimer'>
	    <p>欢迎登录后台管理系统  返回首页请点击：<a href="/">首页</a></p>
	  </div>
	</div>
	
	<div id="particles-js"></div>
	<script src="{{ URL::asset('js/particles.js') }}"></script>
	<script src="{{ URL::asset('js/app.js') }}"></script>
	
</body>
</html>
