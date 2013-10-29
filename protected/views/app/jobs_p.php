<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >职位详情</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>

<section>
	<!-- myschool, otherschool, social -->
	<h1 class = "social">中国石油化工有限公司招聘</h1>
	<a id = "author" class = "rarr" >中国石油化工有限公司</a>
	
	<ul id = "content" >
		<li>
			<div class="span1"><span>时间：</span>2013/10/13</div>
			<div class="span1"><span>性质：</span>国营企业</div>
		</li>
		<li>
			<div class="span1"><span>需求：</span>50人</div>
			<div class="span1"><span>学历：</span>应届毕业生</div>
		</li>
		<li>
			<div><span>地点：</span></div></li>
		<li>
			<div class = "clearfix">
				<span style = "float:left;">标签：</span>
				<i>四级</i>
				<i>安卓</i>
				<i>计算机</i>
				<i>C++</i>
				<i>前端</i>
				<i>分公司</i>
			</div>
		</li>
		<li>
			<div>
				<span>招聘描述：</span>
				<div class = "detail">招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘</div>
			</div>
		</li>
		<li>
			<div>
				<span>联系方式：</span>
				<div class = "detail">招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘</div>
			</div>
		</li>
		<li>
			<div>
				<span>备注：</span>
				<div class = "detail">招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘</div>
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
