<?php get_header(); ?>
<div id="content" class="auto clear">
	<div class="wrapper">
		<div id="page">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry-head clear pr">
					<div class="post-cmt block pa right"><?php comments_popup_link('0','1','%'); ?><span class="corner pa"></span></div>
					<h2 class="left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="entry">
					<span class="post-meta"><?php the_time('Y 年 n 月 j 日,  g:i A'); ?> - <?php the_author(); ?> <?php edit_post_link('编辑', ' - ', ''); ?></span>
					<?php the_content(); ?>
					<?php include (TEMPLATEPATH . '/ads/page-ads.php'); ?>
				</div>
				<!-- Baidu Button BEGIN -->
				<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
					<a class="bds_tsina"></a>
					<a class="bds_qzone"></a>
					<a class="bds_tqq"></a>
					<a class="bds_renren"></a>
					<span class="bds_more">更多</span>
						<a class="shareCount"></a>
					</div>
				<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=702471" ></script>
				<script type="text/javascript" id="bdshell_js"></script>
				<script type="text/javascript">
					document.getElementById("bdshell_js").src = "http://share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
				</script>
				<!-- Baidu Button END -->
			</div>
			<?php comments_template(); ?>
			<?php endwhile; else: ?>
			<div class="post" id="post-error">
				<p>抱歉，没有找到任何内容。</p>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
