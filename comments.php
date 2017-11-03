<?php
  if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die ('Please do not load this page directly. Thanks!');
  if ( post_password_required() ) { ?>
  <div class="fuss nova">该文章设置了密码保护。请先输入密码再查看评论。</div> 
  <?php
    return;
  }
?>

<?php function livesino_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>

  <li id="comment-<?php comment_ID() ?>" class="tile tile-comment">
  <?php if ( get_comment_type() == "comment" ) : ?>
    <div class="tile-icon vcard">
      <div class="<?php if($comment->user_id == 0) {echo 'visitor ';} else {echo 'admin ';} ?>gravatar">
        <?php echo get_avatar( $comment, 36, home_url() . '/wp-content/themes/thea/assets/img/avatar.png' ); ?>
      </div>
    </div>
    <div class="tile-content">
      <p class="tile-title text-bold">
        <?php comment_author_link() ?>
      </p>
      <p class="tile-title">
        <?php echo get_comment_text() ?>
      </p>
      <p class="tile-subtitle text-gray">
        <?php comment_date('Y 年 m 月 d 日') ?> <?php comment_time() ?>
        <span class="comment-actions">
          <?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          <a href="#comment-<?php comment_ID() ?>"></a> <?php edit_comment_link('编辑','- ',''); ?>
        </span>
      </p>
    </div>
    <?php if ($comment->comment_approved == '0') : ?>
      <div class="comment-meta">您的评论正在审核。</div>
    <?php endif; ?>
  <?php else : ?>
    <?php if ($comment->comment_approved == '0') : ?>
      <div class="comment-meta">您的评论正在审核。</div>
    <?php endif; ?>
  <?php endif ?>
  </li>
<?php } ?>

<?php if ( have_comments() ) : ?>
  <h5 class="comments-title"><?php comments_number('没有评论', '1 条评论', '% 条评论' );?></h5>
  <ul id="commentlist" class="comments-list">
    <?php wp_list_comments('callback=livesino_comment'); ?>
  </ul>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
  <h5 id="respond" class="comments-title">发表评论</h5>
  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p>您必须<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a>后才能发表评论。</p>
  <?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form form">
    <?php if ( is_user_logged_in() ) : ?>
      <p>您现在以 <a href="<?php echo get_option('siteurl'); ?>/wp-admin/"><?php echo $user_identity; ?></a> 的身份登录。<?php wp_loginout(); ?></p>
    <?php else : ?>
      <div class="form-group">
        <input type="text" name="author" id="author" class="form-input" placeholder="昵称 (必填)" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
      </div>
      <div class="form-group">
        <input type="text" name="email" id="email" class="form-input" placeholder="邮件 (不会被公布)" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
      </div>
      <div class="form-group">
        <input type="text" name="url" id="url" class="form-input" placeholder="网址 (选填)" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" >
      </div>
    <?php endif; ?>
    <?php do_action('comment_form', $post->ID); ?>
      <div class="form-group">
        <textarea name="comment-content" id="comment-content" class="form-input" rows="5" tabindex="4"></textarea>
      </div>
      <div class="form-group">
        <input name="submit" type="submit" id="submit" class="btn btn-primary" tabindex="5" value="发表评论" />
        <span id="cancel-comment-reply" class="btn btn-link"><?php cancel_comment_reply_link('取消回复') ?></span>
      </div>
    <?php comment_id_fields(); ?>
    </form>
  <?php endif; ?>
<?php else : ?>
  <h5 class="comments-title">评论当前被关闭。</h5>
<?php endif; ?>