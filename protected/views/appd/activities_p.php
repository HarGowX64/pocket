<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >活动详情</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>


<section>
	<h1 class = "type1">广东石油化工首届编程技术交流分享会</h1>
	<a id = "author" class = "rarr" >口袋广油开发团队</a>
	
	<ul id = "content" >
		<li>
			<div class="span1"><span>时间：</span>2013/10/14</div>
			<div class="span1"><span>性质：</span>校级活动</div>
		</li>
		<li>
			<div class="span1"><span>对象：</span>全体学生</div>
			<div class="span1"><span>学分：</span>0.5（学术科技类）</div>
		</li>
		<li>
			<div><span>地点：</span>2B-301</div></li>
		<li>
			<div class = "clearfix">
				<span style = "float:left;">标签：</span>
				<i>Java</i>
				<i>网站</i>
				<i>安卓</i>
				<i>计算机</i>
				<i>C++</i>
				<i>学术科技与专业技能</i>
			</div>
		</li>
		<li>
			<div>
				<span>活动描述：</span>
				<div class = "detail">广东石油化工首届编程交流会，最新的技术交流，独特的思维碰撞。只要你热爱编程，富有创造力，不怕仰视大牛，不嫌弃各路菜鸟，欢迎你的参与。</div>
			</div>
		</li>
		<li>
			<div>
				<span>联系方式：</span>
				<div class = "detail">暂无</div>
			</div>
		</li>
		<li>
			<div>
				<span>备注：</span>
				<div class = "detail">暂无</div>
			</div>
		</li>
	</ul>
</section>

<script>
	(function(){
		var tags = document.getElementsByTagName("i"),
			color = [
				"#99CCFF",
				[ "#FFFF66", "#000" ],
				"#666666",
				"#999999",
				"#99CC33",
				"#FF9900",
				[ "#CCFF66", "#000" ],
				"#990033",
				"#CC99CC",
				"#CC3399",
				"#000000",
				"#CC0033",
				"#003399"
			];
		
		for( var i = 0; i < tags.length; i++ ) {
			var random = Math.floor( color.length * Math.random() ),
				style = "";
			
			style = ( typeof color[ random ] === "string" )? "background-color:" +color[ random ]: "background-color:" +color[ random ][0] +";color:" +color[ random ][1];
			
			tags[i].setAttribute( "style", style );
			console.log( random );
		}
		
	})();
</script>
