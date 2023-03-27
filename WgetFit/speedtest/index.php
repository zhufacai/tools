<!DOCTYPE html>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>服务器速度测试-Wget.Fit </title>
  <meta name="keywords" content="在线扒站,手机扒站,扒站工具,扒站软件,扒网站工具,扒站,仿站,在线仿站,一键扒站,网站下载器">
<meta name="description" content="本工具永久免费使用!只需要一个浏览器,一键将目标网站的前端代码扒下来,自动将指定网页的HTML、CSS、JS、图片等前端资源分类,自动更改资源路径为本地路径,支持一键打包在线下载。">
<meta name="author" content="Wget.Fit">

 <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>

	<link rel="stylesheet" href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.staticfile.org/twitter-bootstrap/4.6.1/css/bootstrap.min.css">

    <link rel='stylesheet' href='../static/css/style.css?v=1002'>
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

			<form class="form-inline my-2 my-lg-0" action="../down/" method="GET">
				<input type="text" name="c" required lay-verify="required" autocomplete="off" value = "search" style = "display: none;">
				<input name="s" class="form-control mr-sm-2" type="search" placeholder="请输入网址关键字" aria-label="Search" value="">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">	<i class="fa fa-search" aria-hidden="true"></i> 搜索</button>
			</form>
												
		</div>
	</div>
</nav>
<style type="text/css">
	html,body{
		border:none; padding:0; margin:0;
		background:#FFFFFF;
		color:#202020;
	}
	body{
	
		font-family:"Roboto",sans-serif;
	}
	h1{
		color:#404040;
	}
	#startStopBtn{
		display:inline-block;
		margin:0 auto;
		color:#6060AA;
		background-color:rgba(0,0,0,0);
		border:0.15em solid #6060FF;
		border-radius:0.3em;
		transition:all 0.3s;
		box-sizing:border-box;
		width:8em; height:3em;
		line-height:2.7em;
		cursor:pointer;
		box-shadow: 0 0 0 rgba(0,0,0,0.1), inset 0 0 0 rgba(0,0,0,0.1);
	}
	#startStopBtn:hover{
		box-shadow: 0 0 2em rgba(0,0,0,0.1), inset 0 0 1em rgba(0,0,0,0.1);
	}
	#startStopBtn.running{
		background-color:#FF3030;
		border-color:#FF6060;
		color:#FFFFFF;
	}
	#startStopBtn:before{
		content:"开始测试";
	}
	#startStopBtn.running:before{
		content:"终止测试";
	}
	#test{
		margin-top:2em;
		margin-bottom:12em;
	}
	div.testArea{
		display:inline-block;
		width:14em;
		height:9em;
		position:relative;
		box-sizing:border-box;
	}
	div.testName{
		position:absolute;
		top:0.1em; left:0;
		width:100%;
		font-size:1.4em;
		z-index:9;
	}
	div.meterText{
		position:absolute;
		bottom:1.5em; left:0;
		width:100%;
		font-size:2.5em;
		z-index:9;
	}
	#dlText{
		color:#6060AA;
	}
	#ulText{
		color:#309030;
	}
	#pingText,#jitText{
		color:#AA6060;
	}
	div.meterText:empty:before{
		color:#505050 !important;
		content:"0.00";
	}
	div.unit{
		position:absolute;
		bottom:2em; left:0;
		width:100%;
		z-index:9;
	}
	div.testGroup{
		display:inline-block;
	}
	@media all and (max-width:65em){
		body{
			font-size:1.5vw;
		}
	}
	@media all and (max-width:40em){
		body{
			font-size:0.8em;
		}
		div.testGroup{
			display:block;
			margin: 0 auto;
		}
	}
	#progressBar{
		width:90%;
		height:0.3em;
		background-color:#EEEEEE;
		position:relative;
		display:block;
		margin:0 auto;
		margin-bottom:2em;
	}
	#progress{
		position:absolute;
		top:0; left:0;
		height:100%;
		width:0%;
		transition: width 2s;
		background-color:#90BBFF;
	}


</style>
<script type="text/javascript">
function I(id){return document.getElementById(id);}

var w=null; //speedtest worker
function startStop(){
	if(w!=null){
		//speedtest is running, abort
		w.postMessage('abort');
		w=null;
		I("startStopBtn").className="";
		initUI();
	}else{
		//test is not running, begin
		w=new Worker('speedtest_worker.min.js');
		w.postMessage('start'); //Add optional parameters as a JSON object to this command
		I("startStopBtn").className="running";
		w.onmessage=function(e){
			var data=JSON.parse(e.data);
			var status=data.testState;
			if(status>=4){
				//test completed
				I("startStopBtn").className="";
				w=null;
			}
			I("dlText").textContent=(status==1&&data.dlStatus==0)?"...":data.dlStatus;
			I("ulText").textContent=(status==3&&data.ulStatus==0)?"...":data.ulStatus;
			I("pingText").textContent=data.pingStatus;
			I("jitText").textContent=data.jitterStatus;
			var prog=(Number(data.dlProgress)*2+Number(data.ulProgress)*2+Number(data.pingProgress))/5;
			I("progress").style.width=(100*prog)+"%";
		};
	}
}
//poll the status from the worker every 200ms (this will also update the UI)
setInterval(function(){
	if(w) w.postMessage('status');
},200);
//function to (re)initialize UI
function initUI(){
	I("dlText").textContent="";
	I("ulText").textContent="";
	I("pingText").textContent="";
	I("jitText").textContent="";
	I("ip").textContent="";
	I("progress").style.width="";
}

</script>
</head>
<body></br></br></br>
<center><h1>仿站服务器主机测速</h1>
</br>
<div id="startStopBtn" onclick="startStop()"></div>
<div id="test">
	<div id="progressBar"><div id="progress"></div></div>
	<div class="testGroup">
		<div class="testArea">
			<div class="testName">下载</div>
			<div id="dlText" class="meterText"></div>
			<div class="unit">Mbps</div>
		</div>
		<div class="testArea">
			<div class="testName">上传</div>
			<div id="ulText" class="meterText"></div>
			<div class="unit">Mbps</div>
		</div>
	</div>
	<div class="testGroup">
		<div class="testArea">
			<div class="testName">Ping延迟</div>
			<div id="pingText" class="meterText"></div>
			<div class="unit">ms</div>
		</div>
		<div class="testArea">
			<div class="testName">延迟波动</div>
			<div id="jitText" class="meterText"></div>
			<div class="unit">ms</div>
		</div>
	</div></center>

</div>
<footer class="footer card-footer mt-3" id="footer">
<span> Copyright © 2021-2023 WgetFit All Rights Reserved.丨<a href="https://wget.fit/WgetFitCode.zip">Code download</a></span>
</footer>

<script src="//cdn.staticfile.org/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="//cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="//cdn.staticfile.org/layer/3.1.1/layer.js"></script>
<script src="../static/js/clipBoard.min.js"></script>

<script type="text/javascript">initUI();</script>
</body>
</html>