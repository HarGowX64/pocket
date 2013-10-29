<?php 
   foreach($model as $key=>$m):
       if($m=='') $model[$key] = '暂无';
   endforeach;
   $contacts = explode(';', $model['contact']);
   $menu_7 = explode(';', $model['menu_7']);
   $menu_8 = explode(';', $model['menu_8']);
   $menu_9 = explode(';', $model['menu_9']);
   $menu_o = explode(';', $model['menu_o']);
   $snack = explode(';', $model['snack']);
?>
<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" ><?php echo $model['restaurant'] ; ?></div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>

<div id = "bus-post" >
	<ul id = "bus-info" >
		<li>送餐时间：<?php echo $model['meal_time'] ; ?></li>
		<li>速度：
                    <?php  echo $model['support'] ; ?>
               </li>
		<li>简介：
                    <?php 
                        echo $model['brief'] ; 
                    ?>
                </li>
		<li>备注：<?php echo $model['remark'] ; ?></li>
		<li style="margin:10px 0;">
                    送餐拨号(点击拨打):<br>
                    <?php 
                       foreach($contacts as $key=>$c):
                    ?>
					<span style="display:inline-block;width:50%;" ><?php echo $c ; ?></span>
                    <a class = "tel icon-phone" href = "tel:<?php preg_match_all('/[0-9a-zA-Z]+/',$c,$match); echo $match['0']['0']; ?>" >&nbsp;拨号</a>
                    <?php
                      endforeach;
                    ?>
                    <p style="display:inline-block;margin-top:5px;width:100%;"><?php echo $model['ps'] ; ?></p>
		</li>
	</ul>
	
	<div class = "take_out-box">	
		<h2>快餐</h2>

		<div class = "take_out-nav">
			<a class = "span1 ton1" href = "#k-ton1">7元</a>
			<a class = "span1 ton2" href = "#k-ton2">8元</a>
			<a class = "span1 ton3" href = "#k-ton3">9元</a>
			<a class = "span1 ton4" href = "#k-ton4">其他</a>
		</div>
		
		<ul class = "take_out-content j_dto">
			<li class = "ton1">
				<a id = "k-ton1" name = "k-ton1"></a>
				<h3>7元（含7元以下）</h3>
				<ul class = "take_out-menu">
                                    <?php 
                                       foreach($menu_7 as $m):
                                    ?>

                                   <li><?php echo $m?></li>
                                    <?php
                                      endforeach;
                                    ?>
					
				</ul>
			</li>
			
			<li class = "ton2">
				<a id = "k-ton2"  name = "k-ton2"></a>
				<h3>8元</h3>
				<ul class = "take_out-menu">
                                    <?php 
                                       foreach($menu_8 as $m):
                                    ?>

                                   <li><?php echo $m?></li>
                                    <?php
                                      endforeach;
                                    ?>
				</ul>
			</li>
			
			<li class = "ton3">
				<a id = "k-ton3" name = "k-ton3"></a>
				<h3>9元（含9元以上）</h3>
				<ul class = "take_out-menu">
                                    <?php 
                                       foreach($menu_9 as $m):
                                    ?>

                                   <li><?php echo $m?></li>
                                    <?php
                                      endforeach;
                                    ?>
				</ul>
			</li>
			
			<li class = "ton4">
				<a id = "k-ton4" name = "k-ton4"></a>
				<h3>其他</h3>
				<ul class = "take_out-menu">
                                    <?php 
                                       foreach($menu_o as $m):
                                    ?>

                                   <li><?php echo $m?></li>
                                    <?php
                                      endforeach;
                                    ?>
				</ul>
			</li>
		</ul>
	</div>
	
	<div class = "take_out-box">	
		<h2>宵夜</h2>
		
		<ul class = "take_out-content">
			<li class = "ton1">
				<h3>沙煲粉(面、河粉、米粉)</h3>
				<ul class = "take_out-menu">
					<?php 
                                       foreach($snack as $m):
                                    ?>

                                   <li><?php echo $m?></li>
                                    <?php
                                      endforeach;
                                    ?>
				</ul>
			</li>
			
			
		</ul>
	</div>
</div>

<script src = "<?php echo yii::app()->request->baseUrl;?>/js/control.js" ></script>
<script>
	take_out_p();
</script>