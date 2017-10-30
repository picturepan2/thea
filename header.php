<!doctype html>
<html>
<head>
	<title><?php if(is_single() || is_page() || is_archive() || is_404() || is_search()) { ?><?php wp_title('|',true,'right'); ?><?php } ?>LiveSino 中文版<?php if(is_home()) { ?> - 微软资讯、观点、技巧博客<?php } ?><?php if( $paged == "" ) $pagenum = "";else echo $pagenum = " - 第 ".$paged." 页"; ?></title>
	<link rel="shortcut icon" type="image/ico" href="/fav.ico"/>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://livesino.net/feed"/>
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/thea/style.css"/>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script language="javascript">
	var is_mobile = false;
	if( /Android|webOS|iPhone|IEMobile|iPod|BlackBerry/i.test(navigator.userAgent) || document.documentElement.clientWidth <= 480 ) {
		is_mobile = true;
	}
	if (!is_mobile) {
		document.write("<script type='text/javascript' src='//cdn.staticfile.org/jquery/1.4.4/jquery.min.js'><\/script>");
		document.write("<script type='text/javascript' src='/wp-content/themes/thea/core/app.js'><\/script>");
	}
	</script>
	<?php wp_head(); ?>
</head>
<!-- TradeDoubler site verification 2825512 -->
<body>
<div id="top" class="bing-bg"></div>
<div id="header" class="auto clear">
	<div class="wrapper">
		<div class="logo left">
			<a href="/"><img src="/wp-content/themes/thea/images/livesino-logo.png" alt="权威微软(Microsoft)博客"/></a>
		</div>
		<div id="header-nav" class="right">
			<ul class="nav left n320">
				<li><a href="/category/news" class="block" title="微软产品和技术的资讯、新闻、更新信息介绍">资讯</a></li>
				<li><a href="/category/download" class="block" title="微软产品相关下载">下载</a></li>
				<li class="n640"><a href="#" id="translatorbtn" class="controls ti block" style="background-position:14px 8px;" title="translate this page">Translator</a></li>
				<li class="n640">
					<form method="get" class="form-search search-expand" name="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<input type="text" class="search-input search-expand left" size="24" value="<?php the_search_query(); ?>" name="s"/>
						<input type="submit" class="search-submit right fn-ti controls" value=""/>
					</form>
				</li>
				<li class="n640" style="background-color:#F56933;"><a href="http://livesino.net/feed" target="_blank" class="nav-btn block">订阅</a></li>
				<li class="n640" style="background-color:#E63B3F;"><a href="http://weibo.com/livesino" target="_blank" class="nav-btn block">微博</a></li>
				<li class="n640" style="background-color:#E63B3F;"><a href="mailto:picturepan2@hotmail.com" class="nav-btn block" title="爆料、合作或任何问题">联系</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="featured" class="auto clear">
	<div class="header-ads pr">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- 404_728_90 -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:728px;height:90px"
		     data-ad-client="ca-pub-2225124559530218"
		     data-ad-slot="9894180784"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>
<!--<div id="build2015" class="auto clear">
	<div class="wrapper pr">
		<a href="https://www.microsoftstore.com.cn/?tduid=(a8516fe6ee3735bd8469a823fca99050)(235166)(2825512)()()" title="微软中国官方商城" style="color:#fff;font-size:16px;">微软中国官方商城</a>
	</div>
</div>-->
