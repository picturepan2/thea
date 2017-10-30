<?php
header('Content-type: text/html;charset=UTF-8');
if (isset($_GET['s'])) {
	$go = $_GET['s'];
	$to = get_settings('home');
	if ($go != '') {
		if ($go == '~' | $go == '~home') {
			wp_redirect($to);
			die();
		}
		if ($go == '~random' | $go == '~r') {
			$query = "SELECT ID FROM $wpdb->posts WHERE post_type = 'post' AND post_password = '' AND 	post_status = 'publish' ORDER BY RAND() LIMIT 1";
			$to = get_permalink($wpdb->get_var($query));
			wp_redirect($to);
			die();
		}
	}
}
?>
<?php get_header(); ?>
<div id="content" class="auto clear">
	<div class="wrapper">
		<div id="single" class="left">
			<div class="post"><div class="keyword post-heading"><?php the_search_query() ?> 搜索结果</div><span class="abs"><a href="#search" class="btn-slide search-focus">更换关键词搜索</a></span></div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry-head clear pr">
					<div class="post-cmt block pa right"><?php comments_popup_link('0','1','%'); ?><span class="corner pa"></span></div>
					<h2 class="left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="entry">
					<span class="post-meta"><?php the_time('Y 年 n 月 j 日,  g:i A'); ?> - <?php the_author(); ?> <?php edit_post_link('编辑', ' - ', ''); ?></span>
					<?php the_excerpt("阅读全文"); ?>
				</div>
			</div>
			<?php endwhile; ?>
			<div class="navigation"><?php pagenavi(); ?></div>
			<?php else : ?>
			<div class="post" id="post-error">
				<p>抱歉，没有找到任何内容。</p>
			</div>
			<?php endif; ?>
			<?php include (TEMPLATEPATH . '/ads/post-ads.php'); ?>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>