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

      <div class="post-meta-tags">
        <?php 
          $tags = get_the_tags();
          foreach( $tags as $tag ) {
            echo '<a href="' . get_tag_link( $tag->term_id ) . '" class="label tag">' . $tag->name . '</a>';
          }
        ?>
      </div>

      <div class="post-like">
        <a href="#like" class="btn btn-primary btn-lg">赞赏</a>
        <div id="like" class="modal">
          <a href="#thankyou" class="modal-overlay"></a>
          <div class="modal-container">
            <div class="modal-header">
              <a href="#thankyou" class="btn btn-clear float-right"></a>
              <div class="modal-title h5">谢谢赞赏 <span class="text-error">&hearts;</span></div>
            </div>
            <div class="modal-body">
              <div class="columns">
                <div class="column col-6">
                  <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/like-wechat.png">
                </div>
                <div class="column col-6">
                  <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/like-alipay.png">
                </div>
              </div>
            </div>
          </div>
        </div>
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
      <p>抱歉，没有找到任何内容。</p>
    </article>

    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
