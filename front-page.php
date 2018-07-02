
<?php get_header(); ?>

<div id ="main_moni" class="item">
<div class="g-inner clfix"> <!-- images-->
<!-- HTMLギャラリー [ここから] -->
  <?php $image_src1 = wp_get_attachment_image_src(104,'full'); ?>
  <?php $image_src2 = wp_get_attachment_image_src(208,'full'); ?>
  <?php $image_src3 = wp_get_attachment_image_src(102,'full'); ?>
  <?php $image_src4 = wp_get_attachment_image_src(101,'full'); ?>
  <?php $image_src5 = wp_get_attachment_image_src(100,'full'); ?>
<!-- メイン画像：上書きされるのでdivで囲む　-->
 <div id="view">
 <p class="sample-main"><img src="<?php echo $image_src1[0]; ?>" alt="" width="560" height="360"></p>
 <p class="sample-main"><img src="<?php echo $image_src2[0]; ?>" alt="" width="560" height="360"></p>
 <p class="sample-main"><img src="<?php echo $image_src3[0]; ?>" alt="" width="560" height="360"></p>
 <p class="sample-main"><img src="<?php echo $image_src4[0]; ?>" alt="" width="560" height="360"></p>
 <p class="sample-main"><img src="<?php echo $image_src5[0]; ?>" alt="" width="560" height="360"></p>
 </div>
</div>
</div>

<div id ="sel_img" class="item">
<ul id="thumbBtn" class="lp-gallery">
 <li class="sample-cell1"><img src="<?php echo $image_src1[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>外観1</li>
 <li class="sample-cell1"><img src="<?php echo $image_src2[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>外観2</li>
 <li class="sample-cell1"><img src="<?php echo $image_src3[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>外観3</li>
 <li class="sample-cell1"><img src="<?php echo $image_src4[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>外観4</li>
 <li class="sample-cell1"><img src="<?php echo $image_src5[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>外観5</li>    
</ul>
    
<div id="img_desc">
<div>
 <table class="table1" >
 外観1の説明
 <tr><th></th><th>列-A</th><th>列-B</th></tr>
 <tr><td>行-1</td><td>A-1</td><td>B-1</td></tr>
 <tr><td>行-2</td><td>A-2</td><td>B-2</td></tr>
 <tr><td>行-3</td><td>A-3</td><td>B-3</td></tr>
 </table>
</div>
<div>
 <table class="table1" >
 外観2の説明
 <tr><th></th><th>列-A</th><th>列-B</th></tr>
 <tr><td>行-1</td><td>A-1</td><td>B-1</td></tr>
 <tr><td>行-2</td><td>A-2</td><td>B-2</td></tr>
 <tr><td>行-3</td><td>A-3</td><td>B-3</td></tr>
 </table>
</div>
<div>
 <table class="table1" >
 外観3の説明
  <tr><th></th><th>列-A</th><th>列-B</th></tr>
  <tr><td>行-1</td><td>A-1</td><td>B-1</td></tr>
  <tr><td>行-2</td><td>A-2</td><td>B-2</td></tr>
  <tr><td>行-3</td><td>A-3</td><td>B-3</td></tr>
 </table>
</div>
<div>
 <table class="table1" >
 外観4の説明
  <tr><th></th><th>列-A</th><th>列-B</th></tr>
  <tr><td>行-1</td><td>A-1</td><td>B-1</td></tr>
  <tr><td>行-2</td><td>A-2</td><td>B-2</td></tr>
  <tr><td>行-3</td><td>A-3</td><td>B-3</td></tr>
 </table>
</div>
<div>
 <table class="table1" >
 外観5の説明
  <tr><th></th><th>列-A</th><th>列-B</th></tr>
  <tr><td>行-1</td><td>A-1</td><td>B-1</td></tr>
  <tr><td>行-2</td><td>A-2</td><td>B-2</td></tr>
  <tr><td>行-3</td><td>A-3</td><td>B-3</td></tr>
 </table>
</div>
</div>
</div>

<div id ="main_sel_img">
<?php $image_src6 = wp_get_attachment_image_src(104,'full'); ?>
<?php $image_src7 = wp_get_attachment_image_src(99,'full'); ?>
<?php $image_src8 = wp_get_attachment_image_src(185,'full'); ?>
<?php $image_src9 = wp_get_attachment_image_src(142,'full'); ?>
<?php $image_src10 = wp_get_attachment_image_src(151,'full'); ?>  
<!-- <div id="thumbBtn" class="lp-gallery"> jsのコンストラクタで設定 -->
<ul id = "thumbBtn2" class="lp-gallery">
    <li class="sample-cell2"><img src="<?php echo $image_src6[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>画像1</li>
    <li class="sample-cell2"><img src="<?php echo $image_src7[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>画像2</li>
    <li class="sample-cell2"><img src="<?php echo $image_src8[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>画像3</li>
    <li class="sample-cell2"><img src="<?php echo $image_src9[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>画像4</li>
    <li class="sample-cell2"><img src="<?php echo $image_src10[0]; ?>"  class="sample-img" alt="" width="180" height="150"><br/>画像5</li>    
</ul>
</div>

<div id ="sample_itm">
<section class="Section">
<!--  overlay -->
    <div class="Section__item l-row">
        <div class="l-halfTile  IndexPage__drinkMenu">
            <a href="#" class="OverlayPanel">
                <h3 class="OverlayPanel__head">Drink Menu</h3>
                    <p class="OverlayPanel__body">
                        定番メニューから、季節に合わせた商品まで品揃え豊富に取り揃えております。あなたのお気に入りを見つけましょう。
                    </p>
             </a>
        </div>
        <div class="l-halfTile  IndexPage__foodMenu">
            <a href="#" class="OverlayPanel">
                <h3 class="OverlayPanel__head">Food Menu</h3>
                    <p class="OverlayPanel__body">
                    サンドイッチ、ケーキ、パスタ、当店自慢のコーヒーと一緒にどうぞ。
                    </p>
            </a>
        </div>
    </div>
<!--  overlay end -->
</section>
    
<h2 class="sectionLabel l-column">Content</h2>



<h2 class="sectionLabel l-column TestLabel">Test font</h2>

<h2><img src="<?php bloginfo('template_url'); ?>/images/top/ttl_tour.png"
     width="183" height="25" alt="最新ツアー情報">
</h2>
<p class="list_link">
    <a href="<?php echo get_permalink(get_page_by_path('tour-info')); ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/top/btn_linklist.png"
        width="80" height="29" alt="一覧を見る">
    </a>
</p>
  
<?php
  $args_rooms = array(
               'posts_per_page' => 3,  //-1:全件取得
               'post_type' => 'rooms',
               );
/* ｺﾝｽﾄﾗｸﾀ(初期設定)で配列$argsを設定→その後にそれに連なるﾃﾞｰﾀを設定  */
  $args_rooms = new WP_Query($args_rooms);
  if ($args_rooms->have_posts()) :
    while ($args_rooms->have_posts()) :
     $args_rooms->the_post();
     get_template_part('contents/content','rooms');
    endwhile;
  endif;
  wp_reset_postdata();    //投稿記事をリセットする
?>
</div>

<main>
<!--  タブパネル　-->
<div class="full_content"> 
 <div class="menu hover"><i class="fa fa-home fa-2x"></i><br />Home</div>
  <div class="content">
   <div id ="role_button"> 
    <ul>
     <li><a href="#"><div class="animation_button grey"><i class="fa fa-home fa-2x"></i><br />Home</div></a></li>
     <li><a href="#"><div class="animation_button grey"><i class="fa fa-picture-o  fa-2x"></i><br />Gallery</div></a></li>
     <li><a href="#"><div class="animation_button grey"><i class="fa fa-key fa-2x"></i><br />Login</div></a></li>
     <li><a href="#"><div class="animation_button grey"><i class="fa fa-globe   fa-2x"></i><br />About us</div></a></li>
     <li><a href="#"><div class="animation_button grey"><i class="fa fa-envelope fa-2x"></i><br />Contact</div></a></li>
    </ul>
   </div><!-- end #role_button -->
  </div>
 <div class="menu"><i class="fa fa-check-square fa-2x"></i><br />News</div>
  <div class="content">
   <div id="top_info">
    <h2><img src="<?php bloginfo('template_url'); ?>/images/top/ttl_news.png" 
       width="183" height="25" alt="お知らせ"></h2>
    <p class="list_link"><a href="<?php echo get_permalink(get_page_by_path('news')); ?>">
     <img src="<?php bloginfo('template_url'); ?>/images/top/btn_linklist.png" 
       width="80" height="29" alt="一覧を見る"></a></p>
    <div class="inner">
     <ul>
     <?php
        $args = array(
              'posts_per_page' => 3,  //-1:全件取得
              'paged' => get_query_var('page'),
              'post_type' => 'post',
           );
/* ｺﾝｽﾄﾗｸﾀ(初期設定)で配列$argsを設定→その後にそれに連なるﾃﾞｰﾀを設定  */
     $news_posts = new WP_Query($args);
     if ($news_posts->have_posts()) :
      while ($news_posts->have_posts()) :
       $news_posts->the_post();//グローバル変数postにﾃﾞｰﾀ展開⇒処理終了後にpostを戻す必要あり
       get_template_part('contents/content','top-info');
      endwhile;
     endif;
     if(function_exists('wp_pagenavi')){
      wp_pagenavi(array('query'=>$news_posts));
     }
     wp_reset_postdata();    //投稿記事をリセットする
    ?>
    </ul>
    </div><!-- end .news_inner -->
   </div><!-- end .top_info -->
  </div>
  <div class="menu">部屋</div>
   <div class="content">
    <H2>リンクボタンとかバナーとかも表示してみたり・・・</H2>
   </div>
  <div class="menu">入力</div>
   <div class="content">
    <H2>こんな感じでメールフォームとかも設置できますね・・・</H2>
   </div>
  <div class="menu">テーブル</div>
   <div class="content">
    <H2>テーブルだってOKです。</H2>
   </div>   
</div>
<!--  タブパネル　END -->

</main>

<div id ="sidebar" class="item">
side1
<img src="<?php echo $image_src6[0]; ?>"  class="sample-img" alt="" width="180" height="150">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>​
