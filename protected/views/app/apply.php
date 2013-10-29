<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >可申请项目</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>/">首页</a>
</header>
<?php
    $ds = DIRECTORY_SEPARATOR;
    $org =  Yii::getPathOfAlias('application.data.organization');
    $org_con =  file_get_contents($org.$ds.'set.set');
    $orgs = explode(';', $org_con);
    
?>

<section>
	<nav id = "nav" class = "clearfix">
		<a href = "{$createUrl(app/activities)}"><span>活动</span></a>
		<a  class="current" ><span>可申请</span></a>
		<a href = "{$createUrl(app/organizations)}" ><span>机构协会</span></a>
	</nav>
	
	<div class = "flexbox" style="margin:0 10px 10px;" >
		<div class="sort span1 flexbox" >
			<a class="span1 selected">全部</a>
			<a class="span1">学术科技</a>
			<a class="span1">文化体育</a>
			<a class="span1">社会实践</a>
		</div>
		<div class="search flexbox" >
			<p class="span1" ><input type="text" /></p>
			<a class="icon-search"></a>
		</div>
	</div>

	<div id = "apply-header" class = "clearfix" >
		<span>名称</span>
		<span class="order down">申请截止<b><i class="icon-down-big" ></i><i class="icon-up-big"></i></b></span>
		<span>类型</span>
	</div>
</section>

<div id = "apply" >
	<ul>
		<li class = "clearfix" >
			<span>参军</span>
			<span>无限制</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
		<li class = "clearfix" >
			<span>2012-2013学年第二学期社会实践活动（参与无偿献血）</span>
			<span>2013/11/25</span>
			<span>社会实践类</span>
		</li>
	</ul>
</div>

<script>
	
</script>