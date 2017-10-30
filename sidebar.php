<div id="sidebar" class="right">
	<!--<div class="sidebar-widget">
		<a href="/tag/build-2016/"><img src="/wp-content/themes/thea/images/tiles/build2016.png" alt="Build 2016 专题"/></a>
	</div>-->
	<div class="sidebar-widget">
		<a href="https://clk.tradedoubler.com/click?p=235166&a=2825512&g=21938930" target="_blank"><img src="https://vht.tradedoubler.com/file/235166/surface_pro_4_05.2016/234x60_Surface_Pro_4.jpg" border="0" width="260"></a>
	</div>

	<div class="sidebar-widget">
		<div class="sidebar-div block">
			<h4 class="sidebar-title">最新文章</h4>
		</div>
		<ul class="sidebar-list">
		<?php wp_get_archives('type=postbypost&limit=16'); ?>
		</ul>
	</div>
	<?php if ( is_home() ) { ?>
	<div class="sidebar-widget">
		<div class="sidebar-div block">
			<h4 class="sidebar-title">最新评论</h4>
		</div>
		<ul class="ds-recent-comments" data-num-items="10" data-show-avatars="1" data-show-time="1" data-show-title="0" data-show-admin="1" data-excerpt-length="70"></ul>
		<script>if (typeof DUOSHUO !== 'undefined')
		DUOSHUO.RecentVisitors('.ds-recent-visitors');</script>
	</div>
	<?php } ?>
	<div class="sidebar-widget">
		<div class="ads sidebar-ads pr">
		<script type="text/javascript">
			if (!is_mobile) {
			<!--
			google_ad_client = "ca-pub-2225124559530218";
			/* Sidebar */
			google_ad_slot = "2931737400";
			google_ad_width = 160;
			google_ad_height = 600;
			//-->
			document.write("<script type='text/javascript' src='http://pagead2.googlesyndication.com/pagead/show_ads.js'><\/script>");
			}
		</script>
		</div>
	</div>
	<div class="sidebar-widget">
		<div class="sidebar-div block">
			<h4 class="sidebar-title">存档</h4>
			<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
			<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
			<option value='/archives'>全部存档</option>
			</select>
		</div>
	</div>
	<?php if ( is_home() ) { ?>
	<div class="sidebar-widget">
		<div class="sidebar-div block">
			<h4 class="sidebar-title">链接</h4>
		</div>
		<ul class="sidebar-list">
		<?php wp_list_bookmarks('title_li=&categorize=0&orderby=id'); ?>
		</ul>
	</div>
	<?php } ?>
	<div class="sidebar-widget">
		<div class="sidebar-div block"><a href="#top" class="btn-scroll"><h4 class="sidebar-title"><strong>&#8743;</strong> 返回顶部</h4></a></div>
	</div>
</div>
