<!DOCTYPE html>
<html>
<head>
<title>您访问的页面不存在</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-type">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="robots" content="noindex,nofollow,noarchive" />
<style>
p{
 margin-top: 100px;text-align: center;font-weight: bold;font:22px 黑体;
}
p small{
 font-size:18px;color:#aaa;font-weight:normal;display:block;
}
#footer{
  width:70px;text-align: center;position: absolute;bottom:20px;left:50%;margin-left:-35px;
  border:1px solid #0088cc;height:30px;line-height:30px;
}
#footer a{color:#0088cc;text-decoration: none;font: 14px arial;}
#footer span,#footer span:after{
  position: absolute;left:-14px;top:8px;
  border-style: solid;border-width: 7px;
  border-color: transparent #0088cc transparent transparent;
}
#footer span:after{
  border-right-color:#fff;
  content:" ";
  left:-6px;
  top:-7px;
}
</style>
</head>
<body>
<?php if(!empty($title) && !empty($msg)):?>
<p>【<?php echo $title?>】<?php echo $msg?></p>
<?php else:?>
<p><small>您访问的页面不存在或已经被删除</small>住在中国 电话:4001840015</p>
<?php endif?>
<div></div>
<div id="footer"><a href="http://www.enozoom.com">&copy;&nbsp;ES3.0</a><span></span></div>
</body>
</html>