<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
		<style>
			* {
				padding : 0;
				margin : 0;
			}
			
			.fl{
				float : left;
			}
			.fr{
				float : right;
			}
			.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
			.fixj::after {
				display : inline-block;
				width : 100%;
				height : 0;
				overflow : hidden;
				content : "";
			}
			
			#wrapper {
				width : 100%;
				height : 100%;
				position :absolute;
				top : 0;
				left : 0;
			}
			#wrapper li {
				position : absolute;
				width : 100%;
				height : 100%;
				top : 0;
				left : 0;
				
				background-size : 100% 100%;
				-webkit-background-size : 100% 100%;
				-ms-background-size : 100% 100%;
				-moz-background-size : 100% 100%;
				-o-background-size : 100% 100%;
				
				transition: .7s ease-in-out;
				-webkit-transition:  .7s ease-in-out;
				-ms-transition:  .7s ease-in-out;
				-moz-transition:  .7s ease-in-out;
				-o-transition:  .7s ease-in-out;
				opacity : 0;
			}
			#wrapper .show {
				opacity : 1;
			}
			.bgs1 {
				background : url("http://bcs.duapp.com/poceket/images%2F1s.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:YIrDQTWlsGrfT%2FZDW%2FnfWBqw4Us%3D") center no-repeat;
			}
			.bgs2 {
				background : url("http://bcs.duapp.com/poceket/images%2F2s.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:XO2AHxQAbh4U7jPNAZMlbhGjqtY%3D") center no-repeat;
			}
			.bgs3 {
				background : url("http://bcs.duapp.com/poceket/images%2F3s.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:9rkWDakVqBR6ZobubuHFpJW5I0c%3D") center no-repeat;
			}
			.bgs4 {
				background : url("http://bcs.duapp.com/poceket/images%2F4s.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:3RM9k4RLyERPOI%2FatRUiVaNhfbc%3D") center no-repeat;			
			}
			.bg1 {
				background : url("http://bcs.duapp.com/poceket/images%2F1.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:BUH9%2FfI9SlIKlx8oiVGAXxbWwNI%3D") center no-repeat;
			}
			.bg2 {
				background : url("http://bcs.duapp.com/poceket/images%2F2.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:jQefg7JebRSszKv1lHgkvV4eBZo%3D") center no-repeat;
			}
			.bg3 {
				background : url("http://bcs.duapp.com/poceket/images%2F3.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:mZddZDS1zQexyRTJjTBQwu8jxSk%3D") center no-repeat;
			}
			.bg4 {
				background : url("http://bcs.duapp.com/poceket/images%2F4.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:pZRx3GH8FB6Qg%2FhFhpLwyGgS4GM%3D") center no-repeat;
			}
			
			#bgmask {
				background : url("http://bcs.duapp.com/poceket/images%2Fbgmask.png?sign=MBO:7f836d73f4717ff743eee8154ecb1697:de%2BjOifMYk8%2FzNocbW73Of8KlDc%3D");
				width : 100%;
				height :100%;
				position :absolute;
				top : 0;
				left : 0;
				z-index : 10;
			}
			
			#container {
				position : relative;
				z-index : 99;
				width : 1200px;
				margin : 50px auto 0;
				padding : 10px;
			}
			
			#banner {
				b11ackground-color : rgba(0,0,0,.5);
				width : 400px;
			}
			#banner h1,
			#banner p {
				color : #fff;
				font-family : "微软雅黑",arial;
				text-shadow : 2px 1px 1px #555;
			}
			#banner h1{
				letter-spacing : .2em;
			}
			#banner p {
				margin-top : 20px;
				font-size : 14px;
				letter-spacing : 1px;
			}
			#logo {
				width : 90px;
				height : 90px;
				border-radius : 8px;
				margin-right : 15px;
			}
			
			#ewm {
				position:relative;
				z-index : 5;
			}
			#ewm img {
				width : 120px;
				height : 120px;
				position : relative;
				cursor : pointer;
				z-index : 10;
			}
			#ewm p {
				position : absolute;
				padding : 0 10px;
				background-color : #fff;
				top : 15px;
				left : 20px;
				font : 14px/35px "微软雅黑",arial;
				width : 70px;
				
				opacity : 0;
				
				transform:translateX(-20px);
				-webkit-transform:translateX(-20px);
				-ms-transform:translateX(-20px);
				-moz-transform:translateX(-20px);
				-o-transform:translateX(-20px);
				
				transition: opacity 0.5s, transform 0.5s;
				-webkit-transition: opacity 0.5s, -webkit-transform 0.5s;
				-ms-transition: opacity 0.5s, -ms-transform 0.5s;
				-moz-transition: opacity 0.5s, -moz-transform 0.5s;
				-o-transition: opacity 0.5s, -o-transform 0.5s;
			}
			#ewm p::before {
				border : 6px solid transparent;
				border-left-color : #fff;
				content : "";
				width : 0;
				height : 0;
				position : absolute;
				right : -12px;
				top : 10px;
			}
			
			#ewm:hover p {
				opacity : 1;
				transform:translateX(0);
				-webkit-transform:translateX(0);
				-ms-transform:translateX(0);
				-moz-transform:translateX(0);
				-o-transform:translateX(0);
				left : -170px;
				width : auto;
			}
			
			#suggest {
				width : 110px;
				font-size : 12px;
				background-color : #FFF;
				padding : 5px;
				text-align : justify;
				height : 90px;
				overflow : hidden;
				position : absolute;
				
				opacity : 0;
				transform:translateY(-103px);
				-webkit-transform:translateY(-103px);
				-ms-transform:translateY(-104px);
				-moz-transform:translateY(-103px);
				-o-transform:translateY(-103px);
				
				transition: opacity 0.5s, transform 0.5s;
				-webkit-transition: opacity 0.5s, -webkit-transform 0.5s;
				-ms-transition: opacity 0.5s, -ms-transform 0.5s;
				-moz-transition: opacity 0.5s, -moz-transform 0.5s;
				-o-transition: opacity 0.5s, -o-transform 0.5s;
			}
			#ewm:hover #suggest {
				opacity : 1;
				transform:translateY(-3px);
				-webkit-transform:translateY(-3px);
				-ms-transform:translateY(-4px);
				-moz-transform:translateY(-3px);
				-o-transform:translateY(-3px);
			}
			#suggest div {
				line-height : 20px;
			}
			#suggest a {
				display : inline-block;
				width : 25px;
				height : 25px;
				margin : 6px 3px 0;
				background-size : 100% 100%;
				-webkit-background-size : 100% 100%;
				-ms-background-size : 100% 100%;
				-moz-background-size : 100% 100%;
				-o-background-size : 100% 100%;
				background : url("http://bcs.duapp.com/poceket/images%2Fbrowsers.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:WczaG7JV3WpS5TxNjxRZnsinzMw%3D") no-repeat;
			}
			#suggest #uc {
				background-position : 0 0;
			}
			#suggest #bd {
				background-position : -25px 0;
			}
			#suggest #qq {
				background-position : -50px 0;
			}
			#suggest #chrome {
				background-position : -75px 0;
			}
			#suggest #ht {
				background-position : -100px 0;
			}
			#suggest #lb {
				background-position : -125px 0;
			}
			
			#chain {
				border-left : 3px solid rgb(238,238,238);
				width : 0;
				margin-left : 30px;
			}
			#chain a {
				display : block;
				background-color : rgb(196,205,214);
				border-radius : 50%;
				cursor : pointer;
				width : 10px;
				height : 10px;
				border : 3px solid #fff;
				margin : 0 0 110px -9px;
				transition: transform 0.5s linear, background-color .5 linear;
				-webkit-transition: -webkit-transform 0.5s, background-color .5s;
				-ms-transition: -ms-transform 0.5s, background-color .5s;
				-moz-transition: -moz-transform 0.5s, background-color .5s;
				-o-transition: -o-transform 0.5s, background-color .5s;
			}
			#chain a:last-child {
				margin-bottom : 0;
			}
			#chain .actived {
				background-color : #36c;
				width : 12px;
				height : 12px;
				border-width : 2px;
				transform : scale(1.5);
				-webkit-transform : scale(1.5);
				-ms-transform : scale(1.5);
				-moz-transform : scale(1.5);
				-o-transform : scale(1.5);
			}
			
			#content {
				position : absolute;
				margin : 0 auto;
				left : 0;
				right : 0;
				width : 760px;
				height : 100%;
				font-family : "微软雅黑",arial;
			}
			#content div {
				position : absolute;
				left : 0;
				width : 100%;
				background-color : rgba(255,255,255,.65);
				padding : 10px;
				
				opacity:0;
				
				transform:translate(20px);
				-webkit-transform:translateX(20px);
				-ms-transform:translateX(20px);
				-moz-transform:translateX(20px);
				-o-transform:translateX(20px);
				
				transition: 0.5s;
				-webkit-transition:  0.5s;
				-ms-transition:  0.5s;
				-moz-transition:  0.5s;
				-o-transition:  0.5s;
			}
			#content .current{
				opacity:1;
				transform:translateX(0);
				-webkit-transform:translateX(0);
				-ms-transform:translateX(0);
				-moz-transform:translateX(0);
				-o-transform:translateX(0);
			}
			
			.statement,
			.time {
				font-size : 13px;
				text-align : right;
				margin-top : 5px;
				padding-right : 10px;
			}
			.statement {
				color : rgb(55,150,60);
				font-weight : bold;
				font-family : "宋体";
			}
			
			
			#footer{
				position : absolute;
				bottom : 0;
				left : 0;
				background-color : rgba(0,0,0,.8);
				text-align : center;
				color : #fff;
				width : 100%;
				padding : 15px 0;
			}
			
			#fixie{
				display : none;
			}
		</style>
		<!--[if lt IE 9]>
		<link rel = "stylesheet" type = "text/css" href = "/demos/blog/css/fixie.css" />
		<!--<![endif]-->
	</head>
	<body>
		<div id = "bgmask"></div>
		<ul id = "wrapper">
			<li class="bgs1 show"></li>
			<li class="bgs2"></li>
			<li class="bgs3"></li>
			<li class="bgs4"></li>
		</ul>
		<div id = "container">
			
			<div id = "ewm" class = "fr" >
				<img src = "http://bcs.duapp.com/poceket/images%2Fliantu.png?sign=MBO:7f836d73f4717ff743eee8154ecb1697:I70dFlxZsHPAGHvE%2BZP1klhmPvs%3D" />
				<p>请用移动设备扫描！</p>
				<div id = "suggest" class="fixj" >
					<div>浏览器支持:</div>
					<a href="http://as.baidu.com/a/item?docid=4474944&pre=web_am_se" target="_bank" id = "uc" title = "UC9.0+" ></a>
					<a href="http://as.baidu.com/a/item?docid=4240518&pre=web_am_se" target="_bank" id = "bd" title = "百度浏览器4.0+" ></a>
					<a href="http://as.baidu.com/a/item?docid=4383793&pre=web_am_se" target="_bank" id = "qq" title = "QQ浏览器2.3+" ></a>
					<a href="http://as.baidu.com/a/item?docid=4414683&pre=web_am_se" target="_bank" id = "chrome" title = "谷歌浏览器" ></a>
					<a href="http://as.baidu.com/a/item?docid=4541268&pre=web_am_se" target="_bank" id = "ht" title = "海豚浏览器10.0+" ></a>
					<a href="http://as.baidu.com/a/item?docid=4548011&pre=web_am_se" target="_bank" id = "lb" title = "猎豹浏览器2.0+" ></a>
				</div>
			</div>
			
			<div id = "banner" class="clearfix" >
				<img class="fl" id="logo" src="http://bcs.duapp.com/poceket/images%2Floading.gif?sign=MBO:7f836d73f4717ff743eee8154ecb1697:PpwAXdmEbWOf7mXflvMDtE%2FROIo%3D">
				<h1>口袋广油</h1>
				<p>不待长发及腰&nbsp;&nbsp;只想陪你度过广油每个春秋</p>
			</div>
			
			<div style="position:relative;">
				<div id = "content">
					<div class="current" style="bottom:0;">
						<p>“还有10秒！”&nbsp;“时间到了。关灯”&nbsp;“哈哈，挺有趣的嘛。”&nbsp;“当然！” </p>
						<p class="statement" >/*&nbsp;&nbsp;#6.6班委日#&nbsp;最美的爱心&nbsp;&nbsp;*/</p>
						<p class="time" >———&nbsp;&nbsp;2011年6月6日&nbsp;&nbsp;晚上</p>
					</div>
					<div style="bottom:0;">
						<p>“啊，雨停了。”&nbsp;“！！！”&nbsp;“这个角度好极了哦！”&nbsp;“哪里？我看看。” </p>
						<p class="statement" >/*&nbsp;&nbsp;心情不好时，记得这里有双彩虹陪伴着你&nbsp;&nbsp;*/</p>
						<p class="time" >———&nbsp;&nbsp;2013年6月4日&nbsp;&nbsp;傍晚</p>
					</div>
					<div style="bottom:0;">
						<p>“喂喂，看那个月亮！”&nbsp;“哇，超级月亮。”&nbsp;“很漂亮啊！”&nbsp;“哈哈，二区那边起哄了。”</p>
						<p class="statement" >/*&nbsp;&nbsp;月晕，是光受高空卷层云的冰晶折射，使七色复合光被分散为内红外紫的光环或光弧而产生光圈&nbsp;&nbsp;*/</p>
						<p class="time" >———&nbsp;&nbsp;2013年6月24日&nbsp;&nbsp;晚上</p>
					</div>
					<div style="top:0;">
						<p>“呼，总算...来到了。”&nbsp;“嗨，你好。”&nbsp;“我来自...”&nbsp;“嗯，以后我们就一个宿舍了。” </p>
						<p class="statement" >/*&nbsp;&nbsp;感谢，我们相识于此。&nbsp;&nbsp;*/</p>
						<p class="time" >———&nbsp;&nbsp;2010年9月13日</p>
					</div>
				</div>
				
				<div id="chain" >
						<a class = "actived" ></a>
						<a></a>
						<a></a>
						<a></a>
				</div>
			</div>
	
		</div>
		
		<div id = "footer" >Powered by 口袋广油</div>
		
		<div id = "fixie" >
			<p>咳。检测您当前的浏览器内核有点。。。<strong>经典</strong>!</p>
			<p class="lp">建议您使用：<a>chrome</a>，<a>firefox</a>，<a>opera</a>，<a>safari</a>，<a>IE9+</a>浏览本页面。</p>
			<p class="lp" style="margin-bottom:45px;">或者如果您正在使用搜狗，360等双核浏览器,可以切换到高速内核访问:<br><img src = "http://bcs.duapp.com/poceket/images%2Fgaosu.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:SsppV14%2FQgJlUhMeZUi77GEH5%2Fo%3D"></p>
			<div id = "liantu" >
				<p>访问口袋广油app，请用移动设备扫描！</p>
				<img src = "http://bcs.duapp.com/poceket/images%2Fliantu.png?sign=MBO:7f836d73f4717ff743eee8154ecb1697:I70dFlxZsHPAGHvE%2BZP1klhmPvs%3D" />
			</div>
			<p style="position:absolute;bottom:0;left:0;width:100%;">Powered by 口袋广油</p>
		</div>
		
		<script>
			var h = window.innerHeight,
				w = window.innerWidth;
			$( "#wrapper" ).css( "height", h+"px");
			$( "#bgmask" ).css( "height", h+"px");
			
			var contentH =  $( "html" ).height(),
				footerH =  $( "#footer" ).height(),
				space = h - contentH - footerH - 30,  //30px上下padding
				minSpace = 32,
				marginBottom = 110;  //最小空隙
			if ( space > minSpace ) {
				var anchor = $( "#chain a" );
				
					newMarginBottom = marginBottom + (space-minSpace)/(anchor.length-1);
			console.log(space+"-"+anchor.length+"-"+(anchor.length-1));
				anchor.css( "margin-bottom", newMarginBottom+"px" );
				anchor[(anchor.length-1)].removeAttribute( "style" );
			}
			
			window.onload = function() {
				var widgets = [
						$( "#wrapper li" ), //背景
						 $( "#content div" ), //文字
						$( "#chain a" ) //导航轴
					],
					className = [ "show", "current", "actived" ],
					cur = [
						$( "#wrapper ."+className[0] ),
						$( "#content ."+className[1] ),
						$( "#chain ."+className[2] )
					],
					index = 0,
					queue,
					time = 5000,
					src = [
						"http://bcs.duapp.com/poceket/images%2F1.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:BUH9%2FfI9SlIKlx8oiVGAXxbWwNI%3D",
						"http://bcs.duapp.com/poceket/images%2F2.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:jQefg7JebRSszKv1lHgkvV4eBZo%3D",
						"http://bcs.duapp.com/poceket/images%2F3.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:mZddZDS1zQexyRTJjTBQwu8jxSk%3D",
						"http://bcs.duapp.com/poceket/images%2F4.jpg?sign=MBO:7f836d73f4717ff743eee8154ecb1697:pZRx3GH8FB6Qg%2FhFhpLwyGgS4GM%3D"
					];
				
				
				widgets[2].click(
					function(){
						clearTimeout( queue );
						index = widgets[2].index( $( this ) );
						
						turn();
						autoTurn();
					}
				);
				
				function turn(){
					for( var i = 0; i < widgets.length; i++ ){
						cur[i].removeClass( className[i] );
						cur[i] = $( widgets[i][ index ] );
						cur[i].addClass( className[i] );
					}
				}
				
				function autoTurn(){
				//console.log( "哈哈" );
					queue = setTimeout( 
						function(){
							index = (index < widgets[0].length-1) ? index+1 : 0 ;
							turn();
							autoTurn();
						},
						time
					);
				}
				
				//启动
				//autoTurn();
				
				//简易模糊加载
				for( var i = 0; i < src.length; i++ ) {
					(function(j){
						var img = new Image();
						img.src = src[j];
						
						img.onload = function() {
							$( widgets[0][j] ).addClass( "bg"+(j+1) );
						}
					})(i);
				}
				
			}
		</script>
	</body>
</html>