<?php
/*
Template Name: Theme
*/
get_header(); 
?>
<div id="content" class="auto clear">
	<div class="wrapper">
		<div id="sidebar" class="left">
			<div class="sidebar-widget">
				<div class="sidebar-div" style="background:#333;">
					<a href="http://livesino.net/get/zh-cn/" onclick="pageTracker._trackEvent('Theme', 'Download');"><h2 class="sidebar-title" style="color:#FFF;text-decoration:none;">下 载<h2></a>
				</div>
			</div>
			<div class="sidebar-widget">
				<div class="sidebar-div">
					<h2 class="sidebar-title">导航</h2>
				</div>
				<ul class="sidebar-list">
					<li><a href="#introduction" class="btn-scroll">介绍 Introduction</a></li>
					<li><a href="#features" class="btn-scroll">功能 Features</a></li>
					<li><a href="#mobile" class="btn-scroll">移动版 Mobile</a></li>
					<li><a href="#download" class="btn-scroll">下载 Download</a></li>
					<li><a href="#installation" class="btn-scroll">安装 Installation</a></li>
					<li><a href="#feedback" class="btn-scroll">反馈 Feedback</a></li>
				</ul>
			</div>
		</div>
		<div id="single" class="right">
			<div class="post" id="introduction">
				<div class="entry">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/theme/theme_codename_h_preview.png" alt="Theme Codename H"/>
					<h2>灵感于 Windows Live 的 WordPress 主题</h2>
					<p>Theme Codename H 是一款免费的 WordPress 博客主题，主要特性包括：</p>
				</div>
			</div>
			<div class="post" id="features">
				<div class="entry clear">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/theme/theme_codename_h_comments.png" class="left" style="padding-right:15px;" alt="Theme Codename H - 增强的评论体验"/>
				<strong>增强的评论体验</strong>
				<p>支持 WordPress 原生评论嵌套、@ 回复评论、Gravatar 头像、Trackback 精简格式。<a href="http://livesino.net/archives/2497.live" title="WordPress 主题 Theme Codename H 之评论模版设计">了解更多 &raquo;</a></p>
				</div>
				<div class="entry clear">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/theme/theme_codename_h_colorbox.png" class="right" style="padding-left:15px;" alt="Theme Codename H - 图片浏览特效"/>
				<strong>图片浏览特效</strong>
				<p>基于 ColorBox（轻量级 jQuery 插件）的图片特效，无需打开新页即可浏览原图，并支持键盘操作。<a href="http://colorpowered.com/colorbox/" title="ColorBox">关于 ColorBox &raquo;</a></p>
				</div>
				<div class="entry clear">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/theme/theme_codename_h_pagenavi.png" class="left" style="padding-right:15px;" alt="Theme Codename H - 网页快讯特性"/>
				<strong>内置页码导航支持</strong>
				<p>就像 WP-PageNavi 那样，内置的页码导航将自动为首页、存档页、或者搜索页加上页码，但无需安装任何插件。</p>
				</div>
				<div class="entry clear">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/theme/theme_codename_h_browsers.png" class="right" style="padding-left:15px;" alt="Theme Codename H - 兼容现代浏览器"/>
				<strong>现代浏览器</strong>
				<p>支持主流现代浏览器，包括 IE8、Firefox、Safari、Google Chrome、Opera 等。</p>
				</div>
				<div class="entry clear">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/theme/theme_codename_h_webslice.png" class="left" style="padding-right:15px;" alt="Theme Codename H - 网页快讯特性"/>
				<strong>IE8 网页快讯</strong>
				<p>订阅博客的新方式，单击之后，即可第一时间在 IE8 收藏栏知晓博客的更新。<a href="http://livesino.net/archives/2499.live" title="WordPress 主题 Theme Codename H 之 Web Slice 模版设计">了解更多 &raquo;</a></p>
				</div>
			</div>
			<div class="post" id="mobile">
				<div class="entry">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/theme/theme_codename_h_mobile.png" class="right" style="padding-left:25px;" alt="Theme Codename H 移动版"/>
					<h2>移动版 Mobile</h2>
					<p>Theme Codename H 移动版是专为现代智能手持设备设计的主题模版。</p>
					<p>支持浏览最新文章和评论、评论 Gravatar 头像，移动版也继承了桌面版的文章样式。<a href="http://livesino.net/archives/2527.live" title="WordPress 主题 Theme Codename H 之移动版设计">了解更多 &raquo;</a></p>
					<p>注意：评论添加功能仍在计划之中。</p>
				</div>
			</div>
			<div class="post" id="download">
				<div class="entry">
					<h2>下载 Download</h2>
					<p><span class="kudos-meta">文件名：</span>theme-codename-h.zip
					<br/><span class="kudos-meta">发布日期：</span>2009 年 2 月 14 日
					<br/><span class="kudos-meta">包括组件：</span>完整版 / 移动版 /表情包
					<br/><span class="kudos-meta">语言：</span>简体中文</p>
					<p><a href="http://livesino.net/get/zh-cn/" onclick="pageTracker._trackEvent('Theme', 'Download');">点击下载按钮即可开始下载</a></p>
				</div>
			</div>
			<div class="post" id="installation">
				<div class="entry">
					<h2>安装 Installation</h2>
					<p>安装 Theme Codename H：</p>
					<ul class="kodus-ul">
					<li><span class="rev-num">第一步</span> 下载 Theme Codename H</li>
					<li><span class="rev-num">第二步</span> 将 <strong>h 文件夹</strong>上传至 /wp-content/themes/ 目录</li>
					<li><span class="rev-num">第三步</span> 登录 WordPress 后台，在<strong>主题</strong>页面启用 Theme Codename H</li>
					</ul>
					<p>安装 Theme Codename H 移动版：</p>
					<ul class="kodus-ul">
					<li><span class="rev-num">第一步</span> 下载 Theme Codename H</li>
					<li><span class="rev-num">第二步</span> 将 <strong>m 文件夹</strong>上传至 WordPress / 根目录</li>
					<li><span class="rev-num">第三步</span> 修改 m-functions.php 文件 第 2 行，将 http://m.livesino.net 改为自己的移动版域名</li>
					</ul>
					<p>安装 Windows Live Wave 4 for WordPress 表情：</p>
					<ul class="kodus-ul">
					<li><span class="rev-num">第一步</span> 下载 Theme Codename H</li>
					<li><span class="rev-num">第二步</span> 将 <strong>smilies 文件夹</strong>替换 /wp-includes/images/smilies 目录</li>
					</ul>
				</div>
			</div>
			<div class="post" id="feedback">
				<div class="entry">
				<h2>反馈 Feedback</h2>
				<ul class="kodus-ul">
				<li><span class="rev-num">邮件</span> picturepan2(at)hotmail.com</li>
				<li><span class="rev-num">Twitter</span> <a href="http://twitter.com/picturepan2">@picturepan2</a></li>
				<li><span class="rev-num">新浪微博</span> <a href="http://weibo.com/picturepan2">@picturepan2</a></li>
				</ul>
				<p>您可以自由使用该主题，但不可出售。您也可以根据自己需要修改该主题，但请保留 Theme Codename H 的链接。谢谢。</p>
				</div>
			</div>
			<?php include (TEMPLATEPATH . '/ads/page-ads.php'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>