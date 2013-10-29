<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >选择学院阵营</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>
<?php
    $ds = DIRECTORY_SEPARATOR;
    $exclePath =  Yii::getPathOfAlias('application.data.timetable.excel');
    $department = file_get_contents($exclePath.$ds."department.txt");
    $departments = explode(';', $department);
    
?>
<div id = "selection" >
	<p>请告诉小U，你是蛋黄派，还是草莓派？</p>
	<ul>
            <?php foreach($departments as $key=>$d): ?><li><?php echo $d;?><input type="radio" name="colleges" value="<?php echo $key;?>" style="display:none;"></li><?php
                endforeach;
            ?>
	</ul>
</div>
<div><a id = "next-btn" href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/sel2/department" >下一步</a></div>


<script src = "<?php echo yii::app()->request->baseUrl;?>/js/control.js" ></script>
<script>
	sel1();
</script>
