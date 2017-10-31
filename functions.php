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
	global $post;
	return '<p><a href="'. get_permalink($post->ID) . '" class="more-link">阅读全文</a></p>';
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
	if(is_feed()) {
		$content .= '<p>广告：<a href="https://www.microsoftstore.com.cn/office/office-365-personal/p/qq2-00009?tduid=(a8516fe6ee3735bd8469a823fca99050)(235166)(2825512)()()">Office 365 个人版 1 年订阅原价 399 元，打折 199 元</a></p>';
		$content .= '<p>&copy;2017 <a href="http://livesino.net">LiveSino.net</a> | <a href="'.get_permalink().'" title="'.get_the_title().'">阅读原文</a> | <a href="'.get_permalink().'#comments" title="'.get_the_title().' 的评论">添加评论</a></p>';
	}
	return $content;
}
add_filter('the_content', 'annotation');

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

add_theme_support( 'post-thumbnails' );

// New post type
function thea_register_my_post_type() {
  $labels = array(
    "name" => __( "News", "" ),
    "singular_name" => __( "News", "" ),
  );

  $args = array(
    "label" => __( "News", "" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "rest_base" => "",
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "post", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "thumbnail", "custom-fields", "comments" ),
    "taxonomies" => array( "post_tag", "category"),
  );
  register_post_type( "news", $args );
}
add_action( 'init', 'thea_register_my_post_type' );

function add_post_types_to_query( $query ) {
	$query->set( 'post_type', array( 'post', 'news' ));
  return $query;
}
add_action( 'pre_get_posts', 'add_post_types_to_query' );

// Remove paragraph tag
remove_filter( 'term_description', 'wpautop' );
?>
