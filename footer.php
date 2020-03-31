  <?php get_template_part( 'template-parts/part-ad'); ?>

  <footer class="thea-footer">
    <div class="container text-center">
      <nav class="footer-nav">
        <a href="/about">关于</a>
        <span class="divider-dot">·</span>
        <a href="/about">联系</a>
        <span class="divider-dot">·</span>
        <a href="/about">投稿</a>
        <span class="divider-dot">·</span>
        <a href="/about">广告合作</a>
        <span class="divider-dot">·</span>
        <a href="/links">友链</a>
        <span class="divider-dot">·</span>
        <a href="https://rework.tools" target="_blank">Rework.tools 导航</a>
      </nav>
      <nav class="footer-nav">
        <select class="form-select select-sm select-inline" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
        </select>
      </nav>
      <section class="copyright">&copy; 2007 - 2020 <?php bloginfo( 'name' ); ?> 保留一切权利</section>
      <section class="copyright">Proudly published with <a href="https://wordpress.org/" target="_blank">WordPress</a>. Theme <a href="https://github.com/picturepan2/thea" target="_blank">Thea</a> made with <span class="text-error">&hearts;</span>. </section>
      <?php if ( is_user_logged_in() ) {?><section class="copyright"><?php echo get_num_queries(); ?> Queries, <?php timer_stop(1); ?> Seconds</section><?php } ?>
    </div>
  </footer>
</div>

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
