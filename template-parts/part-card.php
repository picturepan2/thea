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
    <time class="post-card-date"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></time>
    <?php if (get_comments_number() != 0) : ?>
      <div class="post-card-comment float-right">
        <?php comments_popup_link( '', '1', '%', 'label label-secondary' ); ?>
      </div>
    <?php endif; ?>
  </footer>
</article>