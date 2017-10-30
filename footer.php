	<div class="clear"></div>
	<div id="ntbox-ori" class="block">
		<div id="ie6" class="metrobox pr hide">
			<div class="left">
			<p>您正在使用 IE 6 浏览器访问本博客。简单几步，您就可以升级：<a href="http://windows.microsoft.com/zh-cn/internet-explorer/downloads/ie" target="_blank" rel="nofollow" style="color:#666;">Internet Explorer</a></p>
			</div>
			<a href="#" class="btn-close pa block right close">X</a>
		</div>
		<div id="MicrosoftTranslatorWidget" class="hide" style="border-color:#362F2A;background-color:#362F2A;"></div>
	</div>
</div>
</div>
<div id="footer" class="auto clear">
	<div class="legal wrapper">
		<div class="left">
		<p><a href="/about">关于</a> <span class="sep">|</span> <a href="/about" title="爆料、合作或任何问题">联系</a> <span class="sep">|</span> <a href="/dev/resize.html">Resize</a> <span class="sep">|</span> <a href="/about" title="Theme Codename Thea" style="color:#d13b00;">Thea</a> <span class="sep">|</span> <a href="http://www.wordpress.org/" title="Powered by WordPress" style="color:#d13b00;" target="_blank">WordPress</a> <span class="sep">|</span> <a href="http://www.linode.com/?r=7cc63de94db4122770dd534665dc7bab347db167" title="Hosted by Linode" style="color:#d13b00;" target="_blank">Linode</a></p>
		<p>&copy; 2007 - 2016 LiveSino 保留一切权利 <span style="font-family:'Segoe UI Symbol';">&#128151;</span></p>
		<?php if ( is_user_logged_in() ) {?><p><?php echo get_num_queries(); ?> Queries, <?php timer_stop(1); ?> Seconds </p><?php } ?>
		</div>
		<div class="right"><p><?php wp_register('', ' <span class="sep">|</span> '); ?><?php wp_loginout(); ?> </p></div>
	</div>
</div>
<!--/livesino -->
<script language="javascript">
	if (!is_mobile) {
	document.write("<script type='text/javascript' src='/wp-content/themes/thea/core/jquery.colorbox.js'><\/script>");
	}
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2702768-6']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php wp_footer(); ?>
</body>
</html>
