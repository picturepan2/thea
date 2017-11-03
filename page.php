<?php get_header(); ?>
<main class="thea-post" role="main">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="post post-full">
      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-meta">
          <time class="post-meta-date"><?php the_time('Y 年 n 月 j 日,  g:i A'); ?></time>
          <span class="divider-dot">·</span>
          <span class="post-meta-author"><?php the_author(); ?></span>
          <?php edit_post_link('编辑', ' · ', ''); ?>
        </div>
      </header>

      <div class="post-image">
        <?php echo get_the_post_thumbnail(); ?>
      </div>

      <div class="post-content">
        <?php the_content(); ?>
      </div>

      <div class="post-comments">
        <?php comments_template(); ?>
      </div>
    </article>

    <?php endwhile; else: ?>

    <article class="post" id="post-error">
      <p>抱歉，没有找到任何内容。</p>
    </article>

    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
