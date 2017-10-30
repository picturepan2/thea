<?php get_header(); ?>
<div id="content" class="auto clear">
	<div class="wrapper">
		<div id="single" class="left">
			<div class="post"><div class="keyword post-heading">
				<?php if (is_category()) { ?><?php single_cat_title(); ?> 分类
				<?php } elseif (is_day()) { ?><?php the_time('Y 年 n 月 j 日'); ?> 存档
				<?php } elseif (is_month()) { ?><?php the_time('Y 年 n 月'); ?> 存档
				<?php } elseif (is_year()) { ?><?php the_time('Y 年'); ?> 存档
				<?php } elseif (is_tag()) { ?><?php single_tag_title(); ?> 标签
				<?php } ?></div>
				<?php if (is_tag()&&tag_description()) { ?>
				<span class="abs"><?php echo tag_description(); ?></span>
				<?php } elseif (is_category()&&category_description()) { ?>
				<span class="abs"><?php echo category_description(); ?></span>
				<?php } ?>
			</div>
			<?php rewind_posts() ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry-head clear pr">
					<div class="post-cmt block pa right"><?php comments_popup_link('0','1','%'); ?><span class="corner pa"></span></div>
					<h2 class="left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="entry">
					<span class="post-meta"><?php the_time('Y 年 n 月 j 日,  g:i A'); ?> - <?php the_author(); ?> <?php edit_post_link('编辑', ' - ', ''); ?></span>
					<?php the_content("阅读全文"); ?>
				</div>
			</div>
			<?php endwhile; ?>
			<div class="navigation"><?php pagenavi(); ?></div>
			<?php include (TEMPLATEPATH . '/ads/post-ads.php'); ?>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>