
<!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ URL::asset('assets/css/dpl-min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/bui-min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/main-min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">

    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">{{Session::get('username')}}</span><a href="{{url ('home/logout')}}" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>

        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.8.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bui-min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/common/main-min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/config-min.js') }}"></script>
<script>
    BUI.use('common/main',function(){
        var config = [{id:'1',menu:[{text:'系统管理',items:[{id:'12',text:'帖子管理',href:'/admin/aindex'},{id:'3',text:'回复管理',href:'/admin/hindex'},{id:'4',text:'用户管理',href:'/admin/uindex'}]}]}];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>

</body>
</html>