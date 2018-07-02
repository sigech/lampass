<?php get_header(); ?>
<?php //カテゴリ毎にテンプレートファイルを変える
  $post = $wp_query->post;
  if (in_category('wordpress-slug')){
      include(TEMPLATEPATH.'/single/wordpress.php');
  }elseif(in_category( array('php-slug','jquery-slug'))){
    include(TEMPLATEPATH.'/single/php_jQuery.php');
  }
?>
<main class="item">
    single
</main>
<?php get_footer(); ?>
