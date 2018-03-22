<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>德赐个人博客</title>
<meta name="keywords" content="个人博客,德赐个人博客,个人博客模板,德赐" />
<meta name="description" content="德赐个人博客，是一个站在web前端设计之路的男程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="{{ URL::asset('css/base.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script src="{{ URL::asset('js/scrollReveal.js') }}"></script>

</head>
<body>

<header>
  <div class="logo" data-scroll-reveal="enter right over 1s"><a href="index.php"><img src="public/images/logo.png" /></a></div>
  
  
  {if empty($_SESSION['yonghuleixing'])}
  <div style="position:absolute;top:30px;left:75%;">
  <a href="index.php?m=user&a=register"><span>注册</span></a>&nbsp;&nbsp;
  <a href="index.php?m=user&a=login"><span>登录</span></a>
  </div>
  {else if $_SESSION['yonghuleixing'] == 1}
  <div style="position:absolute;top:30px;left:68%;">
  <div class="huiyuan">
        <div class="huiyuan-2">
            <img src="{$_SESSION['touxiang']}" style="width:52px;height:52px;" />
        </div>
        <div class="huiyuan-1">
            <ul class="huiyuan-1-1">
                <li class="huiyuan-1-1-1">
                    <img src="public/images/rentou1.png">
                </li>
                <li class="huiyuan-1-1-2">
                    <a href="index.php?m=user&a=xiugaitouxiang">{$_SESSION['name']}</a>
                </li>
                
                <li class="huiyuan-1-1-0"></li>
                <li class="huiyuan-1-1-4">
                    <a href="index.php?m=user&a=alogin">管理中心</a>
                </li>
                <li class="huiyuan-1-1-0"></li>
                <li class="huiyuan-1-1-5">
                    <a href="index.php?m=user&a=logout">退出</a>
                </li>
            </ul>
            <ul class="huiyuan-1-2">
                <li class="huiyuan-1-2-1">
                    <a href="index.php?m=user&a=xiugaitouxiang">设置</a>
                </li>
                <li class="huiyuan-1-1-0"></li>
                <li class="huiyuan-1-2-2">
                    用户权限：管理员
                </li>
            </ul>
        </div>
    </div>
    </div>
  {else}
<div style="position:absolute;top:30px;left:72%;">
  <div class="huiyuan">
        <div class="huiyuan-2">
            <img src="{$_SESSION['touxiang']}" style="width:52px;height:52px;" />
        </div>
        <div class="huiyuan-1">
            <ul class="huiyuan-1-1">
                <li class="huiyuan-1-1-1">
                    <img src="public/images/rentou.png">
                </li>
                <li class="huiyuan-1-1-2">
                    <a href="index.php?m=user&a=xiugaitouxiang">{$_SESSION['name']}</a>
                </li>
                
            </ul>
            <ul class="huiyuan-1-2">
                <li class="huiyuan-1-2-1">
                    <a href="index.php?m=user&a=xiugaitouxiang">设置</a>
                </li>
                
                <li class="huiyuan-1-1-0"></li>
                <li class="huiyuan-1-1-5">
                    <a href="index.php?m=user&a=logout">退出</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
  {/if}
  
  
  <nav class="topnav" data-scroll-reveal="enter bottom over 1s after 1s"><a href="index.php"><span>首页</span><span class="en">Home</span></a><a href="index.php?m=index&a=about"><span>关于我</span><span class="en">About</span></a><a href="index.php?m=liuyan&a=liuyan"><span>留言</span><span class="en">Saying</span></a>
  {if !empty($_SESSION['yonghuleixing'])}
  {if $_SESSION['yonghuleixing'] == 1}
  <a href="index.php?m=article&a=send"><span>发表博文</span><span class="en">Saying</span></a>
  {/if}
  {/if}
  </nav>
  <form action="index.php?m=article&a=shousuo" method="post" enctype="multipart/form-data">
  <div style="position:absolute;top:120px;left:70%;"><input type="text" name="neirong" style="width:150px;height:23px;border:2px solid #2D7ECF;" />&nbsp;&nbsp;&nbsp;<input type="submit"  name="huifu" value="搜索" />
</div>
</form>
</header>
<article>
  <div class="container">
    <div class="blog" data-scroll-reveal="enter top" >
      <figure>
        <ul>
          <a href="youxi/buyudaren/index.html" target="_blank"><img src="public/images/t01.jpg"><span>有时候幸福就是一份热腾腾的米饭</span></a>
        </ul>
        <p><a href="youxi/buyudaren/index.html" target="_blank">灯具公司复古风格PSD设计稿</a></p>
        <figcaption>此模板为PSD设计稿，复古风格。首页主要突出产品，以及公司简介。手绘灯作为头部背景图片，这个比较特别。html可以做出灯一闪一闪的效果，或者说旁边有个按钮...</figcaption>
      </figure>
      <figure>
        <ul>
          <a href="youxi/shaiche/index.html" target="_blank"><img src="public/images/t02.jpg"><span>别让最爱你的人伤心</span></a>
        </ul>
        <p><a href="youxi/shaiche/index.html" target="_blank">个人博客模板古典系列之——江南墨..</a></p>
        <figcaption>一共是四个页面，首页，图文列表，图片列表，文字内容。此模板风格为中国古典风格，山水画墨迹成就一幅江南墨卷。页面首页设计较为简单，突出文章重点。图文列表显示...</figcaption>
      </figure>
      <figure>
        <ul>
          <a href="youxi/xiaoxiaole/index.html" target="_blank"><img src="public/images/t03.jpg"><span>现在的努力只为化茧成蝶</span></a>
        </ul>
        <p><a href="youxi/xiaoxiaole/index.html" target="_blank">美丽的茧</a></p>
        <figcaption>让世界拥有它的脚步，让我保有我的茧。当溃烂已极的心灵再不想做一丝一毫的思索时，就让我静静回到我的茧内，以回忆为睡榻，以悲哀为覆被，这是我唯一的美丽。</figcaption>
      </figure>
    </div>
   <ul class="cbp_tmtimeline">
            {if !empty($arr)}
                {foreach $arr as $k => $v}
                    <li>
                        <time class="cbp_tmtime"><span>
                        {if $a=substr(substr($v['time'],0,11),5)}
                        {$a}
                        {/if}
                        </span> <span>
                        {if $a=substr(substr($v['time'],0,11),0,4)}
                        {$a}
                        {/if}
                        </span></time>
                        <div class="cbp_tmicon"></div>
                        <div class="cbp_tmlabel" data-scroll-reveal="enter right over 1s" >
                            <h2>{$v['title']}</h2>
                             <p><span class="blogpic"><a href="/"><img src="{$v['tu']}"></a></span>
                             <div  style="width:440px;height:90px;overflow:hidden;">{$v['content']}</div>
                             </p>
                             <a href="index.php?m=article&a=huitie&id={$v['id']}" class="readmore">阅读全文&gt;&gt;</a>
                        </div>
                    </li>
                {/foreach}  
            {/if}   
    </ul>
    <div class="page">
    <a title="首页" href="{$result['first']}"><b>&lt;&lt;</b> </a>
    <a title="上一页" href="{$result['prev']}"><b>&lt;</b> </a>
    <a href="">第</a>
    <a href="">{$p}</a>
    <a href="">页</a>
    <a title="下一页" href="{$result['next']}">&gt;</a>
    <a title="尾页" href="{$result['end']}">&gt;&gt;</a>
    </div>
  </div>
</article>
<footer>
Design by DanceSmile <a href="/">蜀ICP备11002373号-1</a>
</footer>

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
