<?php
$id=$_SERVER["QUERY_STRING"];
$url="http://www.cditv.cn/show-192-".$id."-1.html";
$info=file_get_contents($url);
preg_match('/poster="view.png" src="(.*?)"/i',$info,$m);
header('location:'.urldecode($m[1]));
?>
