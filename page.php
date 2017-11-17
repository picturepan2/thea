<?php get_header(); ?>
<main class="thea-post" role="main">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="post post-full">
      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-meta">
          <time class="post-meta-date"><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></time>
          <span class="divider-dot">·</span>
          <span class="post-meta-author"><?php the_author(); ?></span>
          <?php edit_post_link('Edit', ' · ', ''); ?>
        </div>
      </header>

      <div class="post-image">
        <?php echo get_the_post_thumbnail(); ?>
      </div>

      <div class="post-content">
        <?php the_content(); ?>
      </div>

      <div id="comments" class="post-comments">
        <?php comments_template(); ?>
      </div>
    </article>

    <?php endwhile; else: ?>

    <article class="post" id="post-error">
      <p>Nothing.</p>
    </article>

    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
