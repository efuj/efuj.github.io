<?php
$t=date('YmdHi');
$id=$_GET['id'];
$url="http://sjlivecdn9.cbg.cn/".$t."/app_2/_definst_/ls_".$id.".stream/chunklist.m3u8";
header('location:'.urldecode($url));
?>