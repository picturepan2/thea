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

      <div id="comments" class="post-comments">
        <?php comments_template(); ?>
      </div>

      <div class="container">
        <div class="ads post-ads post-ads-sidebar">
          <div class="adsense">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- github-vertical-sm -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:120px;height:240px"
                data-ad-client="ca-pub-2225124559530218"
                data-ad-slot="5087273059"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
        </div>
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
