<?php
  $cat_info = apt_category_info();
  //投稿のslug名：classにして色をつける　カテゴリ名：カテゴリを表示(色付き)
?>
<li>
<?php
// 投稿日時
// カテゴリ名(色付き)
// 投稿タイトル(アンカー付き)
?>
<span class="info_li_inner">
<span class="news_date"><?php the_time('Y年m月d日'); ?></span>
<span class="news_category <?php echo esc_attr($cat_info->slug); ?>">
    <?php echo esc_html($cat_info->name); ?></span>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</span>
</li>
