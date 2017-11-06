<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php if(is_single() || is_page() || is_archive() || is_404() || is_search()) { ?><?php wp_title('|',true,'right'); ?><?php } ?>LiveSino 中文版 - 微软信仰中心<?php if( $paged == "" ) $pagenum = "";else echo $pagenum = " - 第 ".$paged." 页"; ?></title>
	<link rel="shortcut icon" type="image/ico" href="/fav.ico"/>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"/>
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/spectre.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/thea.min.css">
	<?php wp_head(); ?>
</head>
<!-- TradeDoubler site verification 2825512 -->
<body>
<div class="thea">
  <div class="thea-header">
    <div class="container">
      <div class="navbar">
        <div class="navbar-section">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" alt="<?php bloginfo( 'name' ); ?>" rel="home">LiveSino</a>
        </div>
        <div class="navbar-center hide-sm">
          <ul class="nav">
            <li class="nav-item"><a href="/">资讯</a></li>
            <li class="nav-item "><a href="/tag/hardware/">设备</a></li>
            <li class="nav-item"><a href="/tag/xbox/">Xbox</a></li>
            <li class="nav-item"><a href="/tag/deals/">值得买</a></li>
          </ul>
        </div>
        <div class="navbar-section">
          
          <div id="search" class="search<?php echo get_search_query() ?  ' active' : ''; ?>">
            <form method="get" class="search-form" name="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <input type="text" class="search-input form-input" value="<?php the_search_query(); ?>" placeholder="搜索" name="s">
              <input type="submit" class="search-btn btn btn-link" value="">
            </form>
          </div>
          <a class="social-button hide-sm" href="https://weibo.com/livesino" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/weibo.svg">
          </a>
          <a class="rss-button hide-sm" href="<?php bloginfo('rss2_url'); ?>" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/rss.svg">
          </a>
        </div>
      </div>
    </div>
  </div>
