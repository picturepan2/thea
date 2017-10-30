<?php get_header(); ?>
<div id="content" class="auto clear">
	<div class="wrapper">
		<div class="page" id="post-error">
			<h2><span class="large">:(</span> 无法找到该页</h2>
			<div class="entry">
				<p>很抱歉，您试图访问的 <em class="highlight"><?php echo $_SERVER["REQUEST_URI"]; ?></em> 不存在，请确认您访问的地址。</p>
				<p>或者，您可以:</p>
				<ol>
					<li><a href="javascript:window.history.back();">后退</a></li>
					<li><a href="/">返回首页</a></li>	
					<li><a href="#search" class="btn-slide search-focus">搜索</a></li>
				</ol>
			</div>
		</div>
		<?php include (TEMPLATEPATH . '/ads/page-ads.php'); ?>
	</div>
</div>
<?php get_footer(); ?>