<article id="post-<?php the_ID(); ?>" class="card card-post">
  <?php if (has_post_thumbnail()) : ?>
    <div class="card-image">
      <a class="card-link" href="<?php the_permalink() ?>">
        <div class="post-card-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
      </a>
    </div>
  <?php endif; ?>
  <div class="card-header">
    <a class="card-link" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
      <h2 class="post-card-title"><?php the_title(); ?></h2>
    </a>
  </div>
  <footer class="card-footer">
    <time class="post-card-date" datetime="{{date format="YYYY-MM-DD"}}"><?php the_time('Y 年 n 月 j 日,  g:i A'); ?></time>
  </footer>
</article>