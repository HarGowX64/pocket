<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >课表</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>/">首页</a>
</header>
<?php
    $ds = DIRECTORY_SEPARATOR;
    $exclePath =  Yii::getPathOfAlias('application.data.timetable.excel.'.$_GET['id']);
   
?>
<?php
    
    $knob = array(
        array(
            '周一 1、2节'=>0,'周一 3、4节'=>1,'周一 5、6节'=>2,'周一 7、8节'=>3,'周一 9、10节'=>4,
        ),
        array(
            '周二 1、2节'=>0,'周二 3、4节'=>1,'周二 5、6节'=>2,'周二 7、8节'=>3,'周二 9、10节'=>4,
        ),
        array(
            '周三 1、2节'=>0,'周三 3、4节'=>1,'周三 5、6节'=>2,'周三 7、8节'=>3,'周三 9、10节'=>4,
        ),
        array(
            '周四 1、2节'=>0,'周四 3、4节'=>1,'周四 5、6节'=>2,'周四 7、8节'=>3,'周四 9、10节'=>4,
        ),
        array(
            '周五 1、2节'=>0,'周五 3、4节'=>1,'周五 5、6节'=>2,'周五 7、8节'=>3,'周五 9、10节'=>4,
        ),
    );
    $ds = DIRECTORY_SEPARATOR;
    Yii::registerAutoloader(array('YiiExcel', 'autoload'), true);
    $path = Yii::getPathOfAlias('application.data');
    $objPHPExcel = PHPExcel_IOFactory::load($exclePath . ".xlsx");
    $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
    $schedule = array();
    foreach($sheetData as $key=>$s){
        if($key>1){
            foreach($knob as $key2=>$k){
                if(array_key_exists($s['B'],$k)){
//                   echo $k[$s['B']];        
                   $schedule[$key2][$k[$s['B']]]['lesson'] = $s['A'];
                   $schedule[$key2][$k[$s['B']]]['site'] = $s['C'];
                   $schedule[$key2][$k[$s['B']]]['teacher'] = $s['D'];
                }
            }
        }
    }
    
?>

<div id = "reset" ><a href = "<?php echo Yii::app()->request->baseUrl; ?>/appd/sel1" >重新选择课表</a></div>
<table id = "timetable">
	<thead>
		<tr>
			<th></th>
			<th>一</th>
			<th>二</th>
			<th>三</th>
			<th>四</th>
			<th>五</th>
		</tr>
	</thead>
	
	<tbody>
            <?php
                $j = 5;
                $l_j = array(
                    '1~2','3~4','5~6','7~8','9~10',
                );
                for($i=0;$i<$j;$i++):
            ?>
                <tr>
                    <th><?php echo $l_j[$i];?></th>
            <?php
                    for($k=0;$k<$j;$k++):
                        $lesson = '';
                        $site = '';
                        $teacher = '';
                        if(!empty($schedule[$k][$i]['lesson'])){
                            $lesson = preg_replace('/（[^^]+）|\(.*\)/', '', $schedule[$k][$i]['lesson']);
                            $site = $schedule[$k][$i]['site'];
                            $teacher = $schedule[$k][$i]['teacher'];
                        }
            ?>
		
			
                            <td><?php echo $lesson.'<br>'.$site.'<br>'.$teacher;?></td>
			
		
           <?php
                    endfor;
           ?>
                 </tr>       
           <?php            
                endfor;
           ?>     
		
	</tbody>
</table>
<p style="text-align:center;font:bold 12px/16px 'arail';" >说明：带“*”标记为单周课程，带“**”为双周课程</p>


<script src = "<?php echo yii::app()->request->baseUrl;?>/js/control.js" ></script>
<script>
	mark();
	
	if ( window.localStorage ){
		var s = window.localStorage,
			o = s.getItem( "ud" );
		if ( o ){
			o = JSON.parse(o);
			if ( o.collegeName ){
				var e = document.getElementById( "reset" );
				e.innerHTML += o.majorName;
			}
		};
	}
</script>