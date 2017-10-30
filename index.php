<?php get_header(); ?>

<main class="phantom-body" role="main">
  <div class="container">
    <?php if (have_posts()) : ?>
      <div class="columns">
        <?php while (have_posts()) : the_post(); ?>
          <div class="column col-3 col-lg-4 col-md-6 col-sm-12">
            <?php get_template_part( 'template-parts/post-card'); ?>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="columns">
        <div class="column">
          <?php pagenavi(); ?>
        </div>
      </div>
    <?php else : ?>
      <div class="fuss nova">内容不存在。</div>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>