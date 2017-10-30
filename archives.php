<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div id="content" class="auto clear">
	<div class="wrapper">
		<div id="sidebar" class="left">
			<div class="sidebar-widget">
				<div class="sidebar-div">
					<h4 class="sidebar-title">存档</h4>
					<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
					<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
					</select>
				</div>
			</div>
		</div>
		<div id="single" class="right">
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php archives_tiles(); ?>
				</div>
			</div>
			<?php include (TEMPLATEPATH . '/ads/page-ads.php'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>