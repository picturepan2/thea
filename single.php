<?php get_header(); ?>
<?php get_template_part( 'template-parts/part-ad'); ?>

<main class="thea-post" role="main">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="post post-full">
      <header class="post-header">
        <div class="post-meta-tags">
          <?php 
            $categories = get_the_category();
            if ( !empty( $categories ) ) {
              echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="label tag">' . $categories[0]->name . '</a>';
            }
          ?>
        </div>
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

      <div class="post-meta-tags">
        <?php 
          $tags = get_the_tags();
          foreach( $tags as $tag ) {
            echo '<a href="' . get_tag_link( $tag->term_id ) . '" class="label tag">' . $tag->name . '</a>';
          }
        ?>
      </div>

      <div class="post-related">
        <div class="ads post-ads right pr">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <ins class="adsbygoogle"
              style="display:block"
              data-ad-format="autorelaxed"
              data-ad-client="ca-pub-2225124559530218"
              data-ad-slot="5206161521"></ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
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
