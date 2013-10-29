<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >选择专业班级</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>
<?php
    $ds = DIRECTORY_SEPARATOR;
    $exclePath =  Yii::getPathOfAlias('application.data.timetable.excel');
    $department = file_get_contents($exclePath.$ds."department.txt");
    $departments = explode(';', $department);
    $majorPath =  Yii::getPathOfAlias("application.data.timetable.excel.{$_GET['department']}.2013-2014");
    $major = file_get_contents($majorPath.$ds."major.txt");
    $majors = explode(';', $major);
?>
<form id = "selection" >
	<p>请选择专业班级</p>
	
	<select>
		<option value="" >心无杂念</option>
             <?php
                foreach($majors as $key=>$m):
             ?>
		<option value = "<?php echo $key;?>"><?php echo $m;?></option>
             <?php
                endforeach;
             ?>
             ?>
	</select>
	
	<div id = "sel-result">
		<p>你选择的结果:</p>
		<div><?php echo $departments[$_GET['department']];?>&nbsp;&nbsp;<span></span></div>
	</div>
</form>
<div><a id = "next-btn" href = "<?php echo Yii::app()->request->baseUrl . '/appd/timetable_p/id'; ?>" >决定</a></div>

<script src = "<?php echo yii::app()->request->baseUrl;?>/js/control.js" ></script>
<script>
	sel2( "<?php echo $_GET['department'];?>" );
</script>