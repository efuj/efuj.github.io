<?php
$id = $_REQUEST['id'];
$ids = array("南充综合"=>"7","南充公共"=>"8","南充科教"=>"9",);
$url='https://file.ncntv.com.cn/vms/videos/nmip-media/channellive/channel'.$ids[$id].'/playlist.m3u8';
header('location:'.urldecode($url));
?>