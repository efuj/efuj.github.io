<?php
$id=$_GET["id"];
$url=file_get_contents("http://www.cditv.cn/api.php?op=live&type=live&catid=192&id=$id");
header('location:'.urldecode($url));
?>