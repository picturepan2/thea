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
<li <?php comment_class('pr'); ?> id="comment-<?php comment_ID() ?>">
<div id="div-comment-<?php comment_ID() ?>" class="comment-content">
<?php if ( get_comment_type() == "comment" ) : ?>
<div class="comment-author vcard">
<div class="<?php if($comment->user_id == 0) {echo 'visitor ';} else {echo 'admin ';} ?>gravatar pa left"><?php echo get_avatar( $comment, 36, 'http://livesino.net/wp-content/themes/h/images/anonymous.gif' ); ?></div>
<small class="comment-meta right"><a href="#comment-<?php comment_ID() ?>"><?php comment_date('Y 年 m 月 d 日') ?> <?php comment_time() ?></a> <?php edit_comment_link('编辑','- ',''); ?></small>
<span class="comment-author-name"><?php comment_author_link() ?></span><cite class="comment-id hide"><?php comment_ID() ?></cite>
</div>
<?php if ($comment->comment_approved == '0') : ?><div class="comment-meta">您的评论正在审核。</div><?php endif; ?>
<?php comment_text() ?>
<?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
<?php else : ?>
<?php if ($comment->comment_approved == '0') : ?><div class="comment-meta">您的评论正在审核。</div><?php endif; ?>
<div class="comment-meta"><small class="right"><a href="#comment-<?php comment_ID() ?>"><?php comment_date('Y 年 m 月 d 日') ?> <?php comment_time() ?></a> <?php edit_comment_link('编辑','- ',''); ?></small><span class="hfl">Trackback</span><br/><?php comment_author_link(); ?></div>
<?php endif ?>
</div>
<?php } ?>
<?php if ( have_comments() ) : ?>
<h4 class="comments-title"><?php comments_number('没有评论', '1 条评论', '% 条评论' );?></h4>
<ul id="commentlist" class="comment-list">
<?php wp_list_comments('callback=livesino_comment'); ?>
</ul>
<?php else : ?>
<?php if ( comments_open() ) : ?>
<?php else : ?>
<span class="comments-title">评论当前被关闭。</span>
<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
<h4 class="comments-title">发表评论</h4>
<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<div class="fuss nova">您必须<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a>后才能发表评论。</div>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form">
<?php if ( is_user_logged_in() ) : ?>
<p>您现在以 <a href="<?php echo get_option('siteurl'); ?>/wp-admin/"><?php echo $user_identity; ?></a> 的身份登录。<?php wp_loginout(); ?></p>
<?php else : ?>
<div class="visitor gravatar right"><a href="http://www.gravatar.com/" rel="external nofollow" target="_blank" title="设置您的 Gravatar 头像"><?php echo get_avatar( esc_attr($comment_author_email), 40, 'http://livesino.net/wp-content/themes/h/images/anonymous.gif' ); ?></a></div>
<p><input type="text" name="author" id="author" class="form-input" value="<?php echo esc_attr($comment_author); ?>" size="45" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>/>
<label for="author"><span class="comment-label">昵称 <span class="req">(必填)</span></span></label></p>
<p><input type="text" name="email" id="email" class="form-input" value="<?php echo esc_attr($comment_author_email); ?>" size="45" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>/>
<label for="email"><span class="comment-label">邮件(不会被公布) <span class="req">(必填)</span></span></label></p>
<p><input type="text" name="url" id="url" class="form-input" value="<?php echo esc_attr($comment_author_url); ?>" size="45" tabindex="3" />
<label for="url"><span class="comment-label">网址 <span class="opt">(选填)</span></span></label></p>
<?php endif; ?>
<?php do_action('comment_form', $post->ID); ?>
<p><textarea name="comment" id="comment" class="form-input" rows="5" tabindex="4"></textarea></p>
<p><input name="submit" type="submit" id="submit" class="btn btn-primary" tabindex="5" value="发表评论" />
<span id="cancel-comment-reply" class="btn btn-link"><?php cancel_comment_reply_link('取消回复') ?></span>
<div class="clear"></div>
<?php comment_id_fields(); ?>
</p>
</form>
<?php endif; ?>
</div>
<?php endif; ?>