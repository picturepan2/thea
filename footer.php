  <?php get_template_part( 'template-parts/part-ad'); ?>

  <footer class="thea-footer">
    <div class="container text-center">
      <nav class="footer-nav">
        <select class="form-select select-sm select-inline" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
        </select>
      </nav>
      <section class="copyright">&copy; 2007 - 2017 <?php bloginfo( 'name' ); ?> All rights reserved.</section>
      <section class="copyright">Proudly published with <a href="https://wordpress.org/" target="_blank">WordPress</a>. Theme <a href="https://github.com/picturepan2/thea" target="_blank">Thea</a> made with <span class="text-error">&hearts;</span>. </section>
      <?php if ( is_user_logged_in() ) {?><section class="copyright"><?php echo get_num_queries(); ?> Queries, <?php timer_stop(1); ?> Seconds</section><?php } ?>
    </div>
  </footer>
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2702768-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-2702768-10');
</script>

<?php wp_footer(); ?>
</body>
</html>
