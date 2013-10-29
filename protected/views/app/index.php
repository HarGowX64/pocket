<header id="top" >
	<a id = "back" href="#">返回</a>
	<div id = "title"  class = "span1" >口袋广油</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>

<section id = "metro" >
	<div id = "notice-bar">
		<ul>
			<li>嗨，我是口袋广油APP，请叫我小U ^_^</li>
			<li>外卖？社团机构？公交？小U告诉你 >_<</li>
			<li>小U还是菜鸟，希望大家多点反馈建议给我。</li>
			<li>小U：“教官来一个~ 我说唱你就唱~ 扭扭捏捏不像样 ~”</li>
			<li>嗨，我是口袋广油APP，请叫我小U ^_^</li>
		</ul>
	</div>
	
	
	<div class="flexbox" style = "clear:both;">
		<a class = "span2 ts bts ts-mr icon-users" href="<?php echo Yii::app()->request->baseUrl; ?>/appd/jobs" style="background:rgb(163,0,170)"><span>招聘</span></a>
		<div class = "span1">
			<a class = "ts lts icon-chat" href="<?php echo Yii::app()->request->baseUrl; ?>/appd/robot" style="background:rgb(0,162,0);"><span>小U</span></a>
			<a class = "ts lts icon-food ts-mt" href="<?php echo Yii::app()->request->baseUrl; ?>/appd/take_out" style="background:#6666CC;" ><span>外卖</span></a>
		</div>
	</div>
	
	<div class="flexbox" style = "clear:both;margin-top:8px;">
		<a class = "span1 ts ts-mr icon-bus" href="<?php echo Yii::app()->request->baseUrl; ?>/appd/bus" style="background:rgb(190,30,74);" ><span>公交</span></a>
		<a class = "span2 ts icon-table" href="<?php echo Yii::app()->request->baseUrl; ?>/appd/sel1"  style="background:rgb(218,84,45);"><span>课表</span></a>
	</div>
	
	<div class="flexbox" style = "clear:both;margin-top:8px;">
		<a class = "span2 ts ts-mr icon-sitemap" href="<?php echo Yii::app()->request->baseUrl; ?>/appd/activities" style="background:#80d100" ><span>素拓</span></a>
		<a class = "span1 ts" id = "rotate-tiles" href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/about" >
			<div class = "ts j_tiles" href="#"  style="background:rgb(100,110,130);-webkit-transform : rotate3d(0,1,0,0deg);z-index:999;"><span>关于</span></div>
			<div class = "ts j_tiles" href="#"  style="background:rgb(0,154,172);-webkit-transform : rotate3d(0,1,0,-180deg);"><span>反馈</span></div>
		</a>
	</div>
	
</section>

<!--<p style="text-align:center;font: 13px/25px '微软雅黑',arial;margin-top:30px;">Copyright&copy;2013 口袋广油开发团队</p>-->

<script src = "<?php echo yii::app()->request->baseUrl;?>/js/control.js" ></script>
<script>
	slider();
	rotater();
	
	if ( window.localStorage ){
		var s = window.localStorage,
			o = s.getItem( "ud" );
		if ( o ){
			o = JSON.parse(o);
			if ( o.course ){
				var a = document.querySelectorAll( "#metro a[href$=sel1]" );
				a[0].setAttribute( "href", o.course );
			}
		}
	}
</script>