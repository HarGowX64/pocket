<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >棋牌协会</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>
<?php
    $ds = DIRECTORY_SEPARATOR;
    $brief =  Yii::getPathOfAlias('application.data.organization.'.$_GET['id']);
    $contents =  file_get_contents($brief.$ds.'0.html');
    $content_l = explode('$$', $contents);
?>
	<section id = "o-post" >
                <dl class = "o-info" >
			<dt>公告</dt>
			<dd><?php echo $content_l[0];?></dd>
		</dl>
		<ul class = "o-info" >
			<li>微博：<?php echo $content_l[1];?></li>
			<li>邮箱：<a href = "mailTo:89472924@qq.com" ><?php echo $content_l[2];?></a></li>
			<li>现任会长：<?php echo $content_l[3];?></li>
			<li>主要活动：<?php echo $content_l[4];?></li>
			<li>标签：<?php echo $content_l[5];?></li>
		</ul>
			
		<dl class = "o-info" >
			<dt>简介</dt>
			<dd><?php echo $content_l[6];?></dd>
		</dl>
		
		<dl class = "o-info" >
			<dt>部门构成</dt>
			<dd><?php echo $content_l[7];?></dd>
		</dl>
		
		
	</section>
