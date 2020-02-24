<?php
header("Content-type:text/html; Charset=utf-8");
$id = $_GET['id'];
//定义需要提交的链接
$host = 'http://mpp.liveapi.mgtv.com/v1/epg/turnplay/getLivePlayUrlMPP?version=PCweb_1.0&platform=4&buss_id=2000001&channel_id='.$id.'&definition=std';
		//定义协议头，下面的2个重要，如果网站没判断的也可以不设置
	    $headers = array(
		  'Host: mpp.liveapi.mgtv.com',
		  'Referer: http://player.hunantv.com/mgtv_v5_live/live.swf',
        );
//通过PHP的curl以GET方式提交请求
$json_response = curl_get($headers, $host);
//提取返回的直播源地址
$flv = getNeedBetween($json_response,'url":"','"},"');
 
 
//然后设置返回头，让网页重转向至直播源地址
header('location:'.$flv);
 
function curl_get($headers, $url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_sEtopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
	$data = curl_exec($ch);
	curl_close($ch);
	//echo $data;
	return $data;
}
function getNeedBetween($input,$start,$end){
$substr = substr($input, strlen($start)+strpos($input, $start),
 (strlen($input) - strpos($input, $end))*(-1));
  return $substr;
}
?>



湖南经视[湖南],http://域名/mangguo.php?id=280
湖南都市[湖南],http://域名/mangguo.php?id=346
湖南公共[湖南],http://域名/mangguo.php?id=261
湖南娱乐[湖南],http://域名/mangguo.php?id=344
湖南电视剧[湖南],http://域名/mangguo.php?id=484
湖南国*[湖南],http://域名/mangguo.php?id=229
金鹰纪实[湖南],http://域名/mangguo.php?id=316
金鹰卡通[湖南],http://域名/mangguo.php?id=287
先锋兵羽[湖南],http://域名/mangguo.php?id=329
快乐垂钓[湖南],http://域名/mangguo.php?id=218
茶频道[湖南],http://域名/mangguo.php?id=578
长沙新闻[湖南],http:///域名/mangguo.php?id=269
长沙政法[湖南],http://域名/mangguo.php?id=254
长沙女性[湖南],http://域名/mangguo.php?id=230
