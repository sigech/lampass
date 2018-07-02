<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title('|', true, 'right'); bloginfo('name');?></title>
<meta name="viewport" content="width=device-width">
<!--
Open Sans Condensedフォント
Font Awesomeアイコン Font Awesome（ フォントオーサム）
-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- CSS（style.css）の読み込み-->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<!-- Google map の読み込み-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCq1pGi_ptHca9t3epOpiEbECquPC85QKg"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div class="TopBand TopScroll">
<span> 本日の営業時間のお知らせ。　午前１０：００～午後１１：００まで </span>
</div>
    
<div id ="title_logo" class="opacity_05">
 <a href="<?php echo home_url('/'); ?>">
 <img src="<?php bloginfo('template_url'); ?>/images/rantan4.png"
        alt="<?php bloginfo('name'); ?>" class="lampas" />
 </a>
</div> <!-- title_logo end -->

<!-- グローバルナビゲーション -->
<nav class="navbar .navbar-default" role="navigation">
 <div class="container">
  <div class="navbar-header">
   <button class="navbar-toggle" type="button"  
           data-toggle="collapse" data-target="#mainNav">
            <div>MENU</div> 
            <span class="sr-only">ナビゲーション</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
   </button>
   <a href="#" class="navbar-brand">Lumpas</a>
  </div>
<div class="collapse navbar-collapse" id="mainNav">
<?php
//************ global_nav **********************
//クラスの操作は nav_menu_css_class フィルターフック、
//IDの操作は nav_menu_item_id フィルターフックを使って行います。
//nav_menu_css_class と nav_menu_item_id フィルターフックで、
// li 要素に付けられるはずのクラスとIDが入った配列（$classes/$id）を操作します。
 //wp_nav_menuにslugのクラス属性を追加する。
 //classに'current-page-ancestor'を追加
//li 要素のクラスの操作
  add_filter('nav_menu_css_class', 'apt_current_nav', 10, 2);
 //classに'menu-item-slug-name'を追加
 //ﾌｯｸﾎﾟｲﾝﾄ　登録する関数名　優先順位　登録する関数が受け取るﾊﾟﾗﾒｰﾀの数
  add_filter('nav_menu_css_class', 'apt_slug_nav', 10, 2);
  wp_nav_menu(
    array(  //ｷｰ設定
    'container' => 'div',//divで囲んでid,classを追加
    'container_class' => 'gblnv_block_class fa', 
    'menu_class'=> 'nav navbar-nav' , // ulでmenuを囲む
    'theme_location' =>'place_pc_global', //register_nav_menusで設定
  ));
  //remove_filter:特定のフィルターフックに付加されている関数を除去します。
 remove_filter('nav_menu_css_class', 'apt_current_nav'); 
 remove_filter('nav_menu_css_class', 'apt_slug_nav');
?> 
  </div>
 </div>
</nav>
<!-- グローバルナビゲーション end -->

<div id ="inquiry" class="opacity_05">
<!-- get_page_by_path(スラッグ)でページのオブジェクトを取得(ID等)  -->
<!--  get_permalink（ID) でIDへのパーマリンクを取得  -->
  <a href="<?php echo get_permalink( get_page_by_path( 'inquiry_set' )->ID); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/images/mail-1.png"
    alt="見積もり" class="inquiry_mail">
  </a>
     <!-- <li class="head_estimate"><a href="/web/estimate.html">お見積り</a></li> --> 
</div>

<!-- carousel start -->
<?php if(is_front_page()) : ?>
<!-- HTMLギャラリー [ここから] -->
<?php $image_src1 = wp_get_attachment_image_src(114,'full'); ?>
<?php $image_src2 = wp_get_attachment_image_src(113,'full'); ?>
<?php $image_src3 = wp_get_attachment_image_src(112,'full'); ?>
<?php $image_src4 = wp_get_attachment_image_src(111,'full'); ?>

<div id ="carousel" class="fluid2">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <img src="<?php echo $image_src1[0]; ?>" alt="画像1">
     <div class="carousel-caption">
      <img class="cover_im1" 
        src="<?php echo get_template_directory_uri(); ?>/images/top/gohp_mian4_img.png" 
       alt="storeへ">
      <div class="sbs1">
      <a class="btn btn-danger btn-lg" href=""><i class="fa fa-home fa-2x"></i><br />作成例</a>
      <a class="btn btn-success btn-lg" href=""><i class="fa fa-envelope fa-2x"></i><br />見積もり依頼</a>
      </div>
     </div>
    </div>
    <div class="item">
      <img src="<?php echo $image_src2[0]; ?>" alt="画像2">
      <div class="carousel-caption">
       <h3>この文字組サンプルは、解説原稿の表現案</h3>
       <p>この文字組サンプルは、解説原稿の表現案として作成したものです。可読性やグラフィック表現の大切な要素として、選択しました。文字組サンプル案を含ん</p>
       <a class="btn btn-danger" href="">無料アカウント作成</a>
       <!-- googleplayアイコン部分（問題箇所）-->
       <a href=""><img class="google-icon" src="<?php echo get_template_directory_uri(); ?>/images/top/down_contbt.png" alt="storeへ"></a>
       <!-- bootstrapのボタンにしてみた場合の記述
       <a class="btn btn-success" href="">google-sample</a>
       -->
     </div>
    </div>
    <div class="item">
      <img src="<?php echo $image_src3[0]; ?>" alt="画像3">
      <div class="carousel-caption">サンプル画像3</div>
    </div>
    <div class="item">
      <img src="<?php echo $image_src4[0]; ?>" alt="画像4">
      <div class="carousel-caption">サンプル画像4</div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  </div>
</div>
<!-- carousel end -->

 <?php else: 
 //カテゴリー or page or single毎のimgを使用    
?>
<!-- .category_image function  -->
    <div id ="carousel" class="frontimg">
    <img src="<?php bloginfo('template_url'); ?>/images/sub/<?php echo apt_category_image(); ?>"
    width="950" height="120" alt="カテゴリーの絵">
    </div>
<!-- .category_image end -->
 

 <?php endif; ?>




