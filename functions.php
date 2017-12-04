<?php
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove Jetpack CSS
add_filter('jetpack_implode_frontend_css', '__return_false');

function remove_all_jp_css() {
  wp_deregister_style('AtD_style'); // After the Deadline
  wp_deregister_style('jetpack_likes'); // Likes
  wp_deregister_style('jetpack_related-posts'); //Related Posts
  wp_deregister_style('jetpack-carousel'); // Carousel
  wp_deregister_style('grunion.css'); // Grunion contact form
  wp_deregister_style('the-neverending-homepage'); // Infinite Scroll
  wp_deregister_style('infinity-twentyten'); // Infinite Scroll - Twentyten Theme
  wp_deregister_style('infinity-twentyeleven'); // Infinite Scroll - Twentyeleven Theme
  wp_deregister_style('infinity-twentytwelve'); // Infinite Scroll - Twentytwelve Theme
  wp_deregister_style('noticons'); // Notes
  wp_deregister_style('post-by-email'); // Post by Email
  wp_deregister_style('publicize'); // Publicize
  wp_deregister_style('sharedaddy'); // Sharedaddy
  wp_deregister_style('sharing'); // Sharedaddy Sharing
  wp_deregister_style('stats_reports_css'); // Stats
  wp_deregister_style('jetpack-widgets'); // Widgets
  wp_deregister_style('jetpack-slideshow'); // Slideshows
  wp_deregister_style('presentations'); // Presentation shortcode
  wp_deregister_style('jetpack-subscriptions'); // Subscriptions
  wp_deregister_style('tiled-gallery'); // Tiled Galleries
  wp_deregister_style('widget-conditions'); // Widget Visibility
  wp_deregister_style('jetpack_display_posts_widget'); // Display Posts Widget
  wp_deregister_style('gravatar-profile-widget'); // Gravatar Widget
  wp_deregister_style('widget-grid-and-list'); // Top Posts widget
  wp_deregister_style('jetpack-widgets'); // Widgets
}
add_action('wp_print_styles', 'remove_all_jp_css' );

// Remove Comment RSS
function remove_comments_rss( $for_comments ) {
	return;
}
add_filter('post_comments_feed_link', 'remove_comments_rss');

function livesino_excerpt_length($length) {
	return 90;
}
add_filter('excerpt_length', 'livesino_excerpt_length');

// No self ping
function no_self_ping( &$links ) {
	$home = get_option( 'home' );
	foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, $home ) )
			unset($links[$l]);
}
add_action('pre_ping', 'no_self_ping' );

// Disable autosave
function disable_autosave() {
  wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'disable_autosave' );

function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function utf8_trim($str) {
	$len = strlen($str);
	for ($i=strlen($str)-1; $i>=0; $i-=1){
		$hex .= ' '.ord($str[$i]);
		$ch = ord($str[$i]);
		if (($ch & 128)==0) return(substr($str,0,$i));
		if (($ch & 192)==192) return(substr($str,0,$i));
	}
	return($str.$hex);
}

function annotation($content){
  global $post;
  if ( has_post_thumbnail( $post->ID ) ){
    $content = '<p>' . get_the_post_thumbnail( $post->ID ) . '</p>' . $content;
  }
  $content .= '<p></p>';
  $content .= '<p>&copy;2017 <a href="http://livesino.net">LiveSino.net</a> | <a href="'.get_permalink().'" title="'.get_the_title().'">阅读原文</a> | <a href="'.get_permalink().'#comments" title="'.get_the_title().' 的评论">添加评论</a></p>';
	return $content;
}
add_filter('the_content_feed', 'annotation');

// Pagination
function pagenavi(){
	global $wp_query;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$total = $wp_query->max_num_pages;
	$links = '<ul class="pagination">';
	if ($total == 1) return;
	if ($current > 1)	$links .= '<li class="page-item">' . pagenavi_link($current - 1, '<') . '</li>';
	if ($current >= 5) $links .= '<li class="page-item">' . pagenavi_link(1, '1') . '</li>';
	if ($current > 5) $links .= '<li class="page-item"><span>...</span></li>';
	for($i = $current - 3; $i <= $current + 3; $i++) {
		if ($i > 0 && $i <= $total) $i == $current ? $links .= '<li class="page-item active">'. pagenavi_link($i, $i) .'</li>' : $links .= '<li class="page-item">' . pagenavi_link($i, $i) . '</li>';
	}
	if ($current < $total - 4) $links .= '<li class="page-item"><span>...</span></li>';
	if ($current <= $total - 4) $links .= '<li class="page-item">' . pagenavi_link($total, $total) . '</li>';
	if ($current < $total) $links .= '<li class="page-item">' . pagenavi_link($current + 1, '>') . '</li>';
	$links .= '</ul>';
	echo $links;
}
function pagenavi_link($page, $n) {
	return '<a href="' . esc_url(get_pagenum_link($page)) . '">'.$n.'</a>';
}

// Thumbnails
function prefix_remove_default_images( $sizes ) {
  unset( $sizes['medium']); 
  unset( $sizes['large']);
}
add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );

// Add thumbnail support
add_theme_support( 'post-thumbnails' );

// Remove paragraph tag
remove_filter( 'term_description', 'wpautop' );

?>
