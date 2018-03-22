<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('acss/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('acss/bootstrap-responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('acss/style.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('ajs/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('ajs/jquery.sorted.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('ajs/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('ajs/ckform.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('ajs/common.js') }}"></script>

 

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
        .page1 li {
            list-style-type: none;
            margin-left: 20px;
            float: left;
        }


    </style>
</head>
<body>
<form action="/admin/uShanchu" method="post" enctype="multipart/form-data">

<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th style="width: 40px;">删除</th>
        <th style="width: 140px;">用户id</th>
        <th style="width: 400px;">用户名</th>
        <th style="width: 140px;">手机</th>
        <th style="width: 140px;">注册时间</th>
    </tr>
    </thead>
        @if (!empty($arr))
        @foreach ($arr as $v)
         <tr>
            <td><input type="checkbox" name="duoxuan[]" value="{{$v->uid}}" /></td>
            {{ csrf_field() }}
            <td>{{$v->uid}}</td>
            <td>{{$v->username}}</td>
            <td>{{$v->phone}}</td>
            <td>
               {{$v->zctime}}                
            </td>
        </tr>
        @endforeach
        @endif
</table>

<button type="submit"  name="shanchu" value="true"
    style="width:47px;height:23px;
    background-color:#DDDDDD;margin:20px 0px 0px 30px;">
    删除
</button>
<div style="height:30px;font-size:18px;margin:40px 100px 0px 100px;" class="page1">
    
    {!! $arr->links() !!}
</div>
</form>
</body>
</html>
