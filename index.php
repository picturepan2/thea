<?php get_header(); ?>
<div id="content" class="auto clear">
	<div class="wrapper mode">
		<div id="single" class="left">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry-head clear pr">
					<div class="post-cmt block pa right"><?php comments_popup_link('0','1','%'); ?><span class="corner pa"></span></div>
					<h2 class="left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="entry clear">
					<span class="post-meta"><?php the_time('Y 年 n 月 j 日,  g:i A'); ?> - <?php the_author(); ?> <?php edit_post_link('编辑', ' - ', ''); ?></span>
					<?php the_content("阅读全文"); ?>
				</div>
			</div>
			<?php endwhile; ?>
			<div class="navigation"><?php pagenavi(); ?></div>
			<?php else : ?>
			<div class="fuss nova">内容不存在。</div>
			<?php endif; ?>
			<?php include (TEMPLATEPATH . '/ads/post-ads.php'); ?>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>