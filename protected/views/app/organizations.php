<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >机构协会</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>/">首页</a>
</header>
<?php
    $ds = DIRECTORY_SEPARATOR;
    $org =  Yii::getPathOfAlias('application.data.organization');
    $org_con =  file_get_contents($org.$ds.'set.set');
    $orgs = explode(';', $org_con);
    
?>

<nav id = "nav" class = "clearfix">
	<a  href = "{$createUrl(app/activities)}"><span>活动</span></a>
	<a href = "{$createUrl(app/apply)}" ><span>可申请</span></a>
	<a class="current"><span>机构协会</span></a>
</nav>

	<ul id = "category-bar" >
            <?php
                foreach($orgs as $key=>$o):
            ?>
		<li>
			<a class = "academy barr" ><?php echo $o;?></a>
			<ul class = "o-list" >
                           <?php
                                $org2 =  Yii::getPathOfAlias('application.data.organization');
                                $org_con2 =  file_get_contents($org.$ds.$key.$ds.'set.set');
                                $orgs2 = explode(';', $org_con2);
                                foreach($orgs2 as $key2=>$o2):
                           ?><li><a href = "{$createUrl(/app/organizations_p?id=)}<?php echo $key.'.'.$key2; ?>" ><?php echo $o2;?></a></li><?php
                                endforeach;
                            ?>         
			</ul>
		</li>
            <?php
                endforeach;
            ?>
	</ul>

	<p style="text-align:center;margin-top:30px;font-size:13px;color:#999;" >需要填注资料的协会机构部门请联系我们<br>联系方式在关于&反馈页面<br>感谢</p>

<script src = "<?php echo yii::app()->request->baseUrl;?>/js/control.js" ></script>
<script>
	organizations();
</script>