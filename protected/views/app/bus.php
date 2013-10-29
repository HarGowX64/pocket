<header id="top" >
	<a id = "back" href="javascript:history.go(-1);" >返回</a>
	<div id = "title"  class = "span1" >常见公交</div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>" >首页</a>
</header>

<div class = "bus-li" >
        <?php
            $data =  $model->getData();
            $stops = array();
            foreach($data as $d):
                $stops = explode(';', $d['stop']);
                       
        ?>

	<a class = "rarr" href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/appd/bus_p/id/<?php echo $d['id'];?>" >
		<span class = "number" ><strong ><?php echo $d['road'];?>路</strong></span>
		<span class = "info span1" >
                        <span><?php echo $stops[0];?>&rarr;<?php echo $stops[count($stops)-1];?></span>
                       间隔：<?php echo $d['interval'];?>min</span>

	<?php
            endforeach;
        ?>
	</a>
</div>