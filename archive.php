<?php get_header(); ?>

<div class="thea-meta">
  <div class="container">
    <header class="meta-header">
      <h2 class="meta-title">
        <?php if (is_category()) { ?><?php single_cat_title(); ?>
        <?php } elseif (is_day()) { ?><?php the_time('Y 年 n 月 j 日'); ?> 存档
        <?php } elseif (is_month()) { ?><?php the_time('Y 年 n 月'); ?> 存档
        <?php } elseif (is_year()) { ?><?php the_time('Y 年'); ?> 存档
        <?php } elseif (is_tag()) { ?><?php single_tag_title(); ?>
        <?php } ?>
      </h2>
      <h3 class="meta-description">
        <?php if (is_tag() && tag_description()) { ?>
				<?php echo tag_description(); ?>
				<?php } elseif (is_category() && category_description()) { ?>
				<?php echo category_description(); ?>
				<?php } ?>
      </h3>
    </header>
  </div>
</div>

<?php get_template_part( 'template-parts/part-ad'); ?>

<main class="thea-body" role="main">
  <div class="container">
    <?php if (have_posts()) : ?>
      <div class="columns">
        <?php while (have_posts()) : the_post(); ?>
          <div class="column col-3 col-lg-4 col-md-6 col-sm-12">
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
