<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" >公交7路</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>
<?php
      $stops = explode(';', $model['stop']);
      $count = count($stops);
?>
<div id = "bus-post" >
	<ul id = "bus-info" >
		<li>间隔：<?php echo $model['interval'];?>min</li>
		<li>首班：<?php echo $model['start'];?></li>
		<li>末班：<?php echo $model['end'];?></li>
		<li>
			<span id = "state-hot" >热点站</span>
			<span id = "state-BAE" >始末站</span><br>
			<span style = "margin-right:10px;" >共计站数：<?php echo $count;?></span>
			<span>更新时间：<?php echo $model['created'];?></span>
		</li>
	</ul>
    
	<ul id = "stations">
            <?php
                $h_stops = json_decode($model['h_stop']);
                $class = '';
//                var_dump($h_stops);
                foreach($stops as $i=>$s):
                    if($i==0||$i==$count-1){
                        
            ?>
		<li class = "station-BAE"><?php echo $s;?></li>
            <?php
                    }else{
                        if($i!=$h_stops[$i])
                            $class = "station-hot";
                        else $class = "";
            ?>
                <li class="<?php echo $class;?>"><?php echo $s;?></li>
             <?php
                        
                    }
                 endforeach;
            ?>    
	</ul>
</div>