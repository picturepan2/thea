<?php get_header(); ?>

<main class="thea-body" role="main">
  <div class="container">
    <div class="empty">
      <h2 class="empty-title">:( 无法找到该页</h2>
      <p class="empty-subtitle">很抱歉，您试图访问的 <span class="label"><?php echo $_SERVER["REQUEST_URI"]; ?></span> 不存在，请确认您访问的地址。</p>
      <div class="empty-action">
        <a href="javascript:window.history.back();" class="btn btn-primary">后退</a>
        <a href="/" class="btn">返回首页</a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>