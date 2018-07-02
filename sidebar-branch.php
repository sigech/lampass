<?php
//****get_sidebar('branch')  ﾀｰﾑ一覧*********************
//page-office.php:固定ﾍﾟｰｼﾞからの呼び込み
//ｶｽﾀﾑ投稿ﾀｲﾌﾟ branchの一覧表示
?>    
<div id="side1"> 
<div class="side_nav">
    <h2>
  <!--  <a href="http://192.168.56.101/office/">営業所</a> -->
    <a href="<?php echo get_permalink(get_page_by_path('office')); ?>">
    営業所</a>
    </h2>
    <ul class="sub_navi">
    <?php
    add_filter('wp_list_pages','apt_add_current');
    wp_list_pages(
            array(
                'post_type' => 'branch',
                'title_li' => 0
                ));
    remove_filter('wp_list_pages','apt_add_current');
    ?>
    </ul>
</div>
<?php //get_template_part('sidebar-common'); ?>
</div><!-- end #side1 -->
