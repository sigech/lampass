<?php get_header(); ?>
<!-- branch:分岐　-->
  <div id="container">
    <div id="main" role="main">
      <div id="content">
<?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      get_template_part('contents/content','branch');
    endwhile;
  endif;
?>
<?php get_template_part('page_top_link'); ?>
      </div><!-- end #content -->
    </div><!-- end #main -->

  </div><!-- end #container -->
<?php get_footer(); ?>
