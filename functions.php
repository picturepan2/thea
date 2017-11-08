<?php
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

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
  $content .= '<p>广告：<a href="https://c.duomai.com/track.php?site_id=230507&lid=366627&aid=61&euid=RSS&t=http%3A%2F%2Fwww.jd.com%2F">京东 1111 双十一折扣促销</a></p>';
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
