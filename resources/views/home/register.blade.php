<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0"> 
	<title>注册</title>
    <link href="{{ URL::asset('css/default.css') }}" rel="stylesheet" type="text/css" />
	<!--必要样式-->
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/demo.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/loaders.css') }}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{ URL::asset('js/jquery-1.8.1.min.js') }}"></script>
</head>
<body>
	@if(Session::has('message'))
 <div class="alert alert-info"> {{Session::get('message')}} 
 </div> 
 @endif
	<div class='login'>
	  <div class='login_title'>
	    <span>注册</span>
	  </div>
	  <div class='login_fields'>
	  <form action="/home/doRegister" method="post">
	    <div class='login_fields__user'>
	      <div class='icon'>
	        <img alt="" src="{{ URL::asset('img/user_icon_copy.png') }}">
	      </div>
	      <input name="username" placeholder='用户名' maxlength="16" type='text' autocomplete="off" value=""/>
	      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
	        <div class='validation'>
	          <img alt="" src="{{ URL::asset('img/tick.png') }}">
	        </div>
	    </div>
	    <div class='login_fields__password'>
	      <div class='icon'>
	        <img alt="" src="{{ URL::asset('img/lock_icon_copy.png') }}">
	      </div>
	      <input name="pwd" placeholder='密码' maxlength="16" type='password' autocomplete="off">
	      <div class='validation'>
	        <img alt="" src="{{ URL::asset('img/tick.png') }}">
	      </div>
	    </div>
		<div class='login_fields__password'>
	      <div class='icon'>
	        <img alt="" src="{{ URL::asset('img/lock_icon_copy.png') }}">
	      </div>
	      <input name="repwd" placeholder='确认密码' maxlength="16" type='password' autocomplete="off">
	      <div class='validation'>
	        <img alt="" src="{{ URL::asset('img/tick.png') }}">
	      </div>
	    </div>
		<div class='login_fields__user'>
	      <div class='icon'>
	        <img alt="" src="{{ URL::asset('img/user_icon_copy.png') }}">
	      </div>
	      <input name="phone" id="phone" placeholder='手机号' maxlength="16" type='text' autocomplete="off"/>
	        <div style="width:140px;height:24px;position:absolute;top:8px;left:180px;">
	         <span onclick="getCode()">获取验证码</span>
			  <!-- <img src="index.php?m=user&a=verify"> -->
	        </div>
	    </div>
	    <div class='login_fields__password'>
	      <div class='icon'>
	        <img alt="" src="{{ URL::asset('img/key.png') }}">
	      </div>
	      <input name="yzm" placeholder='验证码    ' maxlength="5" type='text' name="ValidateNum" autocomplete="off">
	      <div style="width:140px;height:24px;position:absolute;top:8px;left:180px;">
	         <!--  <a href='javascript:;'  class="btn btn-info" id='getcode' onclick='getcode()'>获取验证码</a> -->
			  
	        </div>
	    </div>
	    <div class='login_fields__submit'>
	      <input type='submit' value='注册'>
	    </div>
	  </form>
	  </div>
	  
	  <div class='success'>
	  </div>
	  
	</div>
	
	<div id="particles-js"></div>
	<script src="{{ URL::asset('js/particles.js') }}"></script>
	<script src="{{ URL::asset('js/app.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-1.8.1.min.js') }}"></script>
	<script>
	  function getCode()
  {
    
    var number = document.getElementById('phone').value;
    if(number==''){
      alert('手机号不能为空');
      return false;
    }
    //alert(number);
       $.ajax({
          method:'post',
          url:'/home/code',
          async:true,
          data:{number:number},
          success:success,
        });


      function success(data)
      {
          //console.log(data);
          var obj = JSON.parse(data);
          if (obj.state == 1) {
            alert('获取验证码成功');


        }else if(obj.state == 0){
          alert('用户名手机号输入不匹配');
          return false;
        }


      }
  }
</script>
</body>

</html>