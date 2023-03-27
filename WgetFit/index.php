<?php
include "./common.php";
?>
<!DOCTYPE html>
<!--
 __          __   _____   ______   _______       ______   _____   _______ 
 \ \        / /  / ____| |  ____| |__   __|     |  ____| |_   _| |__   __|
  \ \  /\  / /  | |  __  | |__       | |        | |__      | |      | |   
   \ \/  \/ /   | | |_ | |  __|      | |        |  __|     | |      | |   
    \  /\  /    | |__| | | |____     | |     _  | |       _| |_     | |   
     \/  \/      \_____| |______|    |_|    (_) |_|      |_____|    |_|   
-->
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php echo $title?> </title>
  <meta name="keywords" content="在线扒站,手机扒站,扒站工具,扒站软件,扒网站工具,扒站,仿站,在线仿站,一键扒站,网站下载器">
<meta name="description" content="本工具永久免费使用!只需要一个浏览器,一键将目标网站的前端代码扒下来,自动将指定网页的HTML、CSS、JS、图片等前端资源分类,自动更改资源路径为本地路径,支持一键打包在线下载。">
<meta name="author" content="Wget.Fit">

 <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>

	<link rel="stylesheet" href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.staticfile.org/twitter-bootstrap/4.6.1/css/bootstrap.min.css">

    <link rel='stylesheet' href='./static/css/style.css?v=1002'>
<!-- Pixel Code for https://zz.sangyun.net/ -->
<script defer src="https://zz.sangyun.net/pixel/ZfvYr1njxm5mQ2lv"></script>
<!-- END Pixel Code --></head>
<style>/*css loding*/
#loading {
    position: fixed !important;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 999;
    background: #000;
    opacity: 0.7;
    filter: alpha(opacity=70);
    font-size: 14px;
    line-height: 20px
}

#loading-one {
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: 50px 0 0 -80px;
    padding: 3px 10px
}

.circle {
    background-color: rgba(0,0,0,0);
    border: 5px solid rgba(0,183,229,0.9);
    opacity: .9;
    border-right: 5px solid rgba(0,0,0,0);
    border-left: 5px solid rgba(0,0,0,0);
    border-radius: 50px;
    box-shadow: 0 0 35px #2187e7;
    width: 50px;
    height: 50px;
    margin: -25px;
    -moz-animation: spinPulse 1s infinite ease-in-out;
    -webkit-animation: spinPulse 1s infinite linear;
    position: absolute;
    top: 50%;
    left: 50%
}

.circle1 {
    background-color: rgba(0,0,0,0);
    border: 5px solid rgba(0,183,229,0.9);
    opacity: .9;
    border-left: 5px solid rgba(0,0,0,0);
    border-right: 5px solid rgba(0,0,0,0);
    border-radius: 50px;
    box-shadow: 0 0 15px #2187e7;
    width: 30px;
    height: 30px;
    margin: -15px;
    position: relative;
    top: -50px;
    -moz-animation: spinoffPulse 1s infinite linear;
    -webkit-animation: spinoffPulse 1s infinite linear;
    position: absolute;
    top: 50%;
    left: 50%
}

@-moz-keyframes spinPulse {
    0% {
        -moz-transform: rotate(160deg);
        opacity: 0;
        box-shadow: 0 0 1px #2187e7
    }

    50% {
        -moz-transform: rotate(145deg);
        opacity: 1
    }

    100% {
        -moz-transform: rotate(-320deg);
        opacity: 0
    }
}

@-moz-keyframes spinoffPulse {
    0% {
        -moz-transform: rotate(0deg)
    }

    100% {
        -moz-transform: rotate(360deg)
    }
}

@-webkit-keyframes spinPulse {
    0% {
        -webkit-transform: rotate(160deg);
        opacity: 0;
        box-shadow: 0 0 1px #2187e7
    }

    50% {
        -webkit-transform: rotate(145deg);
        opacity: 1
    }

    100% {
        -webkit-transform: rotate(-320deg);
        opacity: 0
    }
}

@-webkit-keyframes spinoffPulse {
    0% {
        -webkit-transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg)
    }
}
/*css loding*/</style>
<div id="loading"> <p id="loading-one">页面载入中. . .</p > <div class="circle"></div> <div class="circle1"></div> </div>
  <script>
jQuery(function() {
    jQuery('#loading-one').empty().append('页 面 载 入 中 . . .').parent().fadeOut('slow');
    jQuery('#loading').click(function() {
        jQuery('#loading').fadeOut('slow');
    });
});
</script>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border-bottom" id="navbar">
	<div class="container big-nav">
		<a class="navbar-brand" href="./">
		<img src="/logo.png" width="180" height="40" class="d-inline-block align-top mr-2" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
				<a class="nav-link" href="/">首页</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="/down">数据</a>
				</li>
					<li class="nav-item">
				<a class="nav-link" href="/speedtest">测速</a>
				</li>
					<li class="nav-item">
				<a class="nav-link" href="/api">接口</a>
				</li>
						<li class="nav-item">
				<a class="nav-link" href="/soft">软件</a>
				</li>
					<li class="nav-item">
				<a class="nav-link" href="/about">关于</a>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0" action="./down/" method="GET">
				<input type="text" name="c" required lay-verify="required" autocomplete="off" value = "search" style = "display: none;">
				<input name="s" class="form-control mr-sm-2" type="search" placeholder="请输入网址关键字" aria-label="Search" value="">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">	<i class="fa fa-search" aria-hidden="true"></i> 搜索</button>
			</form>
												
		</div>
	</div>
</nav>
    
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 center-block " style="float: none;">
<img src="./assets/simple/img/userbg.jpg" width="100%" >

        <div id="main">
            <br/>
              <input type="text" id="url" name="url" value="" class="form-control" required="required" placeholder="请输入一个有效的网址"/><br/>
              <input type="text" id="email" name="email" value="" class="form-control" required="required" placeholder="请输入一个有效的邮箱"/>
              </div><br/>
            <div class="form-group">
              <input id="submit" type="button" value="提交任务" class="btn btn-primary btn-block"/>
            </div>
            
            
            <div id="running_alert">
            	<div id="running_class" class="alert alert-info alert-dismissable">
				
					当前暂未提交爬取任务！
					
			</div>
            </div>
  
    </div>
  
  </div>
<script src="./assets/js/common.js"></script>
<footer class="footer card-footer mt-3" id="footer">
<span> <?php echo $Copyright?>丨<a href="https://wget.fit/WgetFitCode.zip">Code download</a></span>
</footer>

<script src="//cdn.staticfile.org/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="//cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="//cdn.staticfile.org/layer/3.1.1/layer.js"></script>
<script src="./static/js/clipBoard.min.js"></script>

</body>
</html>