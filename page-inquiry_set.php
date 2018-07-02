<?php get_header(); ?>
<main class="item">
<?php while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
</main>
<div id ="sidebar_inq" class="item">
    side1
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>​