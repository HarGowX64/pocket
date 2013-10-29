<!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >小U机器人</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>

<div id = "chat" >
	<section class = "dialog-r fadeInLeft" >
		<img class = "portrait" src = "#" >
		<p>你好，有什么可以跟小U聊聊吗？</p>
	</section>
	
</div>

<div id="chat-loading">
	<img src = "<?php echo Yii::app()->request->baseUrl; ?>/images/loading.gif" />
</div>

<div id = "chat-input" >
	<div><input type = "textarea" id="text" /></div>
	<a onclick="javascript:chat();" id="btn" >发送</a>
</div>

<script type="text/javascript">

	function replacep(str)
	{
		str = str.replace(/\+/g,"%2b");
		str = str.replace(/([\da-zA-Z]+)([\u4E00-\u9FA3])/,"$1"+"%20"+"$2");
		return str;
	}
	
	
	var box = document.getElementById("chat"),
		text = document.getElementById("text"),
		loading = document.getElementById("chat-loading"),
		btn = document.getElementById("btn");
	
	function chat()
	{
		var reg = (/[\u4e00-\u9fa5]/);
		var val = text.value;
		
		if ( val.length == 0 ) return false;
		
		var s = document.createElement( "section" ),
			img = document.createElement( "img" ),
			p = document.createElement( "p" );
		p.appendChild(document.createTextNode( val ));
		s.appendChild(img);
		s.appendChild(p);
		s.className = "dialog-u";
		box.appendChild(s);
		setTimeout( function(){
			s.className += " fadeInLeft";
		},100);
		box.scrollTop = box.scrollHeight ;	
		
		
		var url = "<?php echo Yii::app()->request->baseUrl; ?>/test/web.php?para=" + val;
		
		var mark = setTimeout(
			function(){
				loading.setAttribute("style", "display:block;");
			},
			1000
		);
		$.ajax({
			type : "get",
			url : url,
			success : function (d){
				d.length == 0  ? d = "无力吐槽" : d.replace( /<[^>]+>/, function(){ d = "看，有美女！";} ) ;
				test(d);
				clearTimeout(mark);
				loading.setAttribute("style", "display:none;");
			}
		});
	}
		
	function test(res)
	{
		text.value="";
		box.innerHTML+="<section class = 'dialog-r' ><img class = 'portrait' src = '#' ><p>"+res+"</p></section>";
		var t = document.querySelector( ".dialog-r:last-child" );
		setTimeout( function(){
			t.className += " fadeInLeft";
		},100);
		box.scrollTop = box.scrollHeight ;	
				
		btn.disabled=false;
		
		text.focus();
			
	};
	
	
	box.setAttribute( "style", "height:" + ( window.innerHeight-document.getElementById("page").scrollHeight+box.offsetHeight-10 ) + "px;overflow-y:scroll;" );
	
	//开启聊天功能
	$.ajax({
		type : "get",
		url : "<?php echo Yii::app()->request->baseUrl; ?>/test/web.php?para=说话"
	});
	
</script>