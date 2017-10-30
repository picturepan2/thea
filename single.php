<?php get_header(); ?>
<div id="content" class="auto clear">
	<div class="wrapper">
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
					<?php the_content(); ?>
					<span class="post-tags"><?php the_tags('', ' ', ''); ?></span>
					<?php include (TEMPLATEPATH . '/ads/post-ads.php'); ?>
				</div>
				<!-- Baidu Button BEGIN -->
				<div id="bdshare" class="bdsharebuttonbox">
					<a title="分享到新浪微博" class="bds_tsina" href="#" data-cmd="tsina"></a><a title="分享到QQ空间" class="bds_qzone" href="#" data-cmd="qzone"></a><a title="分享到腾讯微博" class="bds_tqq" href="#" data-cmd="tqq"></a><a title="分享到人人网" class="bds_renren" href="#" data-cmd="renren"></a><a title="分享到微信" class="bds_weixin" href="#" data-cmd="weixin"></a>
					<a class="bds_more" href="#" data-cmd="more"></a>
				</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
				<!-- Baidu Button END -->
			</div>
			<div id="comments">
				<?php comments_template(); ?>
			</div>
			<?php endwhile; else: ?>
			<div class="post" id="post-error">
				<p>抱歉，没有找到任何内容。</p>
			</div>
			<?php endif; ?>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
