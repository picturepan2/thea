<?php get_header(); ?>
<?php get_template_part( 'template-parts/part-ad'); ?>

<main class="thea-body" role="main">
  <div class="container">
    <?php if (have_posts()) : ?>
      <div class="columns">
        <?php while (have_posts()) : the_post(); ?>
          <div class="column col-4 col-md-6 col-sm-12">
            <?php get_template_part( 'template-parts/part-card'); ?>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="columns">
        <div class="column">
          <?php pagenavi(); ?>
        </div>
      </div>
    <?php else: ?>
      <?php get_template_part( 'template-parts/part-empty'); ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>