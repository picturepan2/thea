<?php get_header(); ?>

<div class="thea-meta">
  <div class="container">
    <header class="meta-header">
      <h2 class="meta-title">
	  	<?php the_search_query() ?> 搜索结果
      </h2>
    </header>
  </div>
</div>

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
