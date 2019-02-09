<?php if (is_home()) { ?>
<?php
  $title = get_the_title() . ' | LiveSino 中文版, 微软资讯, 微软信仰中心';
  $tags = '微软,Microsoft,微软新闻,微软资讯,微软快讯,微软粉丝,微软信仰中心,微软社区,微软最新动态,微软商店,微软商城,微软设备,Windows,Surface,Office,Office 365,Xbox,Bing';
  $description = '微软信仰中心 | 微软软粉中心 | 微软资讯、应用、设备、新品、最低折扣 | Windows 10、Surface、Office 365、Xbox 最新动态';
  $url = esc_url(home_url( '/' ));
  if( $paged != "" ) {
    $url .= 'page/' . $paged;
  }
?>
<meta name="keywords" content="<?php echo $tags; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />
<?php } elseif (is_single()) { ?>
<?php
  $posttags = get_the_tags();
  $tags = '微软, Microsoft';
  if ($posttags) {
    foreach($posttags as $tag) {
      $tags .= ', ' . $tag->name; 
    }
  }
  global $post;
  setup_postdata( $post );
  $title = get_the_title() . ' | LiveSino 中文版, 微软资讯, 微软信仰中心';
  $description = wp_strip_all_tags( get_the_excerpt( $post->ID ), true );
  $url = get_permalink();
?>
<meta name="keywords" content="<?php echo $tags; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />
<?php } elseif (is_page()) { ?>
<?php
  global $post;
  setup_postdata( $post );
  $title = get_the_title() . ' | LiveSino 中文版, 微软资讯, 微软信仰中心';
  $description = wp_strip_all_tags( get_the_excerpt( $post->ID ), true );
  $url = get_permalink();
?>
<meta name="description" content="<?php echo $description; ?>" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />
<?php } elseif (is_category()) { ?>
<?php
  $obj_id = get_queried_object_id();
  $term = '微软' . single_term_title('', false);
  $title = $term . ' | LiveSino 中文版, 微软资讯, 微软信仰中心';
  $tags = $term . ', '. $term . '是什么, ' . $term . '官方, ' . $term . '新闻, ' . $term . '快讯, ' . $term . '介绍, 三分钟了解' . $term . ', 如何评价' . $term;
  $description = $term . ' - ' . category_description();
  $url = get_term_link( $obj_id );
  if( $paged != "" ) {
    $url .= '/page/' . $paged;
  }
?>
<?php  ?>
<meta name="description" content="<?php echo $description; ?>" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />
<?php } elseif (is_tag()) { ?>
<?php
  $obj_id = get_queried_object_id();
  $term = single_term_title('', false);
  $title = '微软' . $term . ' | LiveSino 中文版, 微软资讯, 微软信仰中心';
  $tags = $term . ', '. $term . '是什么, ' . $term . '官方, ' . $term . '新闻, ' . $term . '快讯, ' . $term . '介绍, 三分钟了解' . $term . ', 如何评价' . $term;
  $description = '微软' . $term . ' - ' . $term . '是什么, ' . $term . '官方, ' . $term . '新闻, ' . $term . '快讯, ' . $term . '介绍, 三分钟了解' . $term . ', 如何评价' . $term;
  $url = get_term_link( $obj_id );
  if( $paged != "" ) {
    $url .= '/page/' . $paged;
  }
?>
<meta name="keywords" content="<?php echo $tags; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />
<?php } ?>