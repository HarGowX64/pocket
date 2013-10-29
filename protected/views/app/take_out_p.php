
<header id="top" >
	<a id = "back" href="javascript:history.go(-1);">返回</a>
	<div id = "title"  class = "span1" ></div>
	<a id = "home" href="<?php echo Yii::app()->request->baseUrl; ?>">首页</a>
</header>

<div id = "bus-post" >
	<ul id = "bus-info" >
		<li>送餐时间：</li>
		<li>速度：
                    
               </li>
		<li>简介：
                    
                </li>
		<li>备注：</li>
		<li style="margin:10px 0;">
                    送餐拨号(点击拨打):<br>
                   
                    <span style="display:inline-block;width:50%;" ></span>
                    <a class = "tel icon-phone" href = "tel:" >&nbsp;拨号</a>
                   
                    <p style="display:inline-block;margin-top:5px;width:100%;">
                        
                    </p>
		</li>
	</ul>
	
	<div class = "take_out-box">	
		<h2>快餐</h2>

		
		
		<ul class = "take_out-content j_dto">
			<li class = "ton1">
				<a id = "k-ton1" name = "k-ton1"></a>
				<h3>7元（含7元以下）</h3>
				<ul class = "take_out-menu">
                                  

                                   <li>叉烧</li>
                                   
					
				</ul>
			</li>
			
			
		</ul>
	</div>
	
	
</div>


<script>
	take_out_p();
</script>