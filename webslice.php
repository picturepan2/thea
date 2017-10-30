<?php
/*
Template Name: Web Slice
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>LiveSino Web Slice</title>
<style type="text/css">
body,div,p,ul,form,.search-input{font:12px/160% \5FAE\8F6F\96C5\9ED1,\5B8B\4F53,Helvetica,Tahoma,Arial;margin:0;padding:0;}
body{color:#333;background:#FFF url(http://livesino.net/wp-content/themes/h/images/webslices.jpg) repeat-x center top;overflow:auto;}
a,a:visited{color:#4B72A9;text-decoration:none;}
a:hover{color:#4B72A9;text-decoration:underline;}
ul{margin:10px 0;}
ul li{padding:5px 0;list-style:disc inside;color:#4B72A9;}
.h{padding:5px 10px;}
.title{color:#4B72A9;font-size:14px;}
.logo{padding:5px 0;float:right;}
.search .search-input{width:255px;padding:1px 5px 2px 5px;}
.search .search-submit{width:24px;height:24px;border:0;cursor:pointer;background:url(http://livesino.net/wp-content/themes/h/images/img.png) no-repeat 6px -34px;}
</style>
<base target="_blank"/>
</head>
<body>
<div class="h" id="livesino">
<div class="logo"><a href="http://livesino.net"><img src="http://livesino.net/wp-content/themes/h/images/webslice-logo.png" alt="访问 LiveSino 阅读更多文章" border="0"/><img src="http://livesino.net/wp-content/themes/h/images/external.png" alt="访问 LiveSino 阅读更多文章" border="0"/></a></div>
<div class="title">最新文章</div>
<ul>
<?php wp_get_archives('type=postbypost&limit=4'); ?>
</ul>
</div>
</body>
</html>