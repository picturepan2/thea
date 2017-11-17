<?php get_header(); ?>

<main class="thea-body" role="main">
  <div class="container">
    <div class="empty">
      <h4 class="empty-title">:( 404 Error</h4>
      <p class="empty-subtitle">Sorry,  <span class="label"><?php echo $_SERVER["REQUEST_URI"]; ?></span> is not found。</p>
      <div class="empty-action">
        <a href="javascript:window.history.back();" class="btn btn-primary">Back</a>
        <a href="/" class="btn">Go homepage</a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>