<?php
$buy_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=index_info&refresh=1';
$jiazu_button = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=member&refresh=1';
$newmenu = '{
		 "button":[
			{	
			  "type":"view",
			  "name":"大讲堂",
			  "url":"http://djt.wangzhongnet.com/index.php?g=App&m=Bigclass&a=index"
			},
			{
				"name":"我的课程",
				"type":"view",
				"url":"http://djt.wangzhongnet.com/index.php?g=App&m=Index&a=mclass"
		   },
		   {    "name":"个人中心",
		        "type":"view",
			   "url":"http://djt.wangzhongnet.com/index.php?g=App&m=Index&a=member"
			}]
		}';		
/*
   "sub_button":[
				{	
				   "name":"个人中心",
				   "type":"view",
					"url":"http://djt.wangzhongnet.com/index.php?g=App&m=Index&a=member"
				},
				{
				   "type":"view",
				   "name":"我的课程",
				   "key":"http://djt.wangzhongnet.com/index.php?g=App&m=Index&a=mclass"
				},
				{
				   "type":"view",
				   "name":"团队素材",
				   "url":"http://djt.wangzhongnet.com/index.php?g=App&m=Index&a=mscai"
				}]
*/
$message_name = '名族品牌';
$link_config = 'http://mp.weixin.qq.com/s?__biz=MjM5Nzg2MDk4Nw==&mid=204267777&idx=1&sn=c367bbdff95c8d5bc08b5aa089d2d43d#rd';
$config_good_pic = 'http://www.hfxxs.com/a/Public/Plugin/umeditor/php/upload/20150226/14249192757410.png';
$headimgurl = 'http://www.hfxxs.com/a/Public/Plugin/umeditor/php/upload/20150226/14249192757410.png';
?>