<?php get_header(); ?>
<main class="item">
<h1 class="page_ttl"><?php single_post_title(); // 現在の投稿・固定ページのタイトルを
//表示または取得する。  ?></h1>
<?php
$args = array(
    'post_type' => 'branch',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1,  //-1:全件取得
);
/* ｺﾝｽﾄﾗｸﾀ(初期設定)で配列$argsを設定→その後にそれに連なるﾃﾞｰﾀを設定  */
  $custam_posts = new WP_Query($args);
  if ($custam_posts->have_posts()) :
    while ($custam_posts->have_posts()) :
      $custam_posts->the_post();
      get_template_part('contents/content','archive-branch');
    endwhile;
  endif;
 wp_reset_postdata();    //投稿記事をリセットする
?>
<?php get_template_part('page_top_link'); ?>
</main>

<?php get_footer(); ?>

