<?php
$yourdb = "xianshannan";//在这里注册账号http://wx.xiaojo.com
$yourpw = "pocket123456";
if(trim($_GET['para'])!="")
{
 $chat = $_GET['para'];
 $reply = xiaojo($chat);
	
echo $reply;
//echo 'test(' . json_encode($reply) . ')';
}

function xiaojo($chat) { //小九接口函数，该函数可通用于其他程序

	global $yourdb,$yourpw;
	$chat = get_utf8_string($chat);
	$chat=urlencode($chat);
	$yourdb=urlencode($yourdb);
	
	// $from=urlencode($from);
	// $to=urlencode($to);
	$doc = new DOMDocument();
	$doc->load("http://www.xiaojo.com/api3.php?chat=".$chat."&db=".$yourdb."&pw=".$yourpw); //读取xml文件
	$youdaos = $doc->getElementsByTagName( "weixen" ); //取得humans标签的对象数组
	foreach( $youdaos as $youdao )
	{
		$paragraphs = $youdao->getElementsByTagName( "responce" ); //取得name的标签的对象数组
		$paragraph = $paragraphs->item(0)->nodeValue; //取得node中的值，如<name> </name>
		$paragraph=get_utf8_string($paragraph);
	}
   $reply = urldecode($paragraph);//
   
   return $reply;
}
function get_utf8_string($content) 
{    
	//  将一些字符转化成utf8格式   
	$encoding = mb_detect_encoding($content, array('ASCII','UTF-8','GB2312','GBK','BIG5'));  
	return  mb_convert_encoding($content, 'utf-8', $encoding);
}
?>
