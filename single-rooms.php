<!-- single-tour カスタム投稿タイプ(tour) -->
<!-- single-tour -> content-tour -> table-tour ｶｽﾀﾑ投稿の個別ﾍﾟｰｼﾞ-->
<?php get_header(); ?>
  <div id="container">
    <div id="main" role="main">
      <div id="content">
<?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      get_template_part('contents/content','rooms');
    endwhile;
  endif;
?>
<?php get_template_part('page_top_link'); ?>
      </div><!-- end #content -->
    </div><!-- end #main -->
<?php get_sidebar('tour'); ?>
  </div><!-- end #container -->
<?php get_footer(); ?>
