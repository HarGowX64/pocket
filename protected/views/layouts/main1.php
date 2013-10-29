<!DOCTYPE html>
<html manifest = "/pocket/pocket/cache.manifest">
<head>
	<meta charset = "utf-8" >
	<meta name = "viewport" content = "width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" >
	
	<link rel="apple-touch-icon" href="http://bcs.duapp.com/mygyapp/s.png?sign=MBO:7f836d73f4717ff743eee8154ecb1697:vsXhpDrFXsaJV1JVLhd%2FFcW26HY%3D" />
	<link rel="apple-touch-icon-precomposed" href="http://bcs.duapp.com/mygyapp/s.png?sign=MBO:7f836d73f4717ff743eee8154ecb1697:vsXhpDrFXsaJV1JVLhd%2FFcW26HY%3D" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<link rel = "stylesheet" type = "text/css" href = "<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" >
</head>

<body>

<div class="container" id="page">
	<?php echo $content;?>
</div><!-- page -->
</body>

</html>