<?php
// 外部ファイルに関数を記載*****************************
require_once locate_template('lib/custom_taxonomy.php'); //カスタム投稿タイプの設定関数
require_once locate_template('lib/nav.php'); //navi設定の関数
require_once locate_template('lib/tel.php'); //telephon設定の関数
require_once locate_template('lib/category_func.php');   //category設定の関数
//****************************************************
//register_sidebars」は、複数系なので「sidebar」の後に「s」が入ってます。1つの時は「s」が入りません。
register_sidebars(  2, array( 
    'name' => __( 'Side Widget %d' ), 
    'id' => 'side-widget', 
    'before_widget' => '<li class="widget-container">', 
    'after_widget' => '</li>', 
    'before_title' => '<h3>', 
    'after_title' => '</h3>', 
) ); 

function add_my_scripts() {  
  if(is_admin()) return; //管理画面にはスクリプトは追加しない
  wp_deregister_script( 'jquery');  //デフォルトの jQuery は読み込まない
  //CDN から読み込む
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2', false);
  wp_enqueue_script( 'jquery-mig', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js', array(), '1.2.1', false);  
}
//add_action('wp_print_scripts', 'add_my_scripts'); 訂正：以下のフックを使ったほうが良い
add_action('wp_enqueue_scripts', 'add_my_scripts');

// JS・CSSファイルを読み込む テンプレートファイル毎にjs cssの読み込みファイルを変える
function add_files_js_css() {
// サイト共通JS
 //wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20160608', true );
$page_name_cc = array('office'
                     ,'top_link'
                );    
// サイト共通のCSSの読み込み
 if(is_front_page()) {
  wp_enqueue_style( 'front_main1', get_template_directory_uri() . '/css/front_page.css', 
         "", '20180601' );
  }
 //個別対応
 elseif(is_single()) {// singleページ専用JS
   wp_enqueue_style( 'single_grid', get_template_directory_uri() . '/css/single.css', 
         "", '20180601' );
}
 elseif(is_page('inquiry_set')) {
   wp_enqueue_style( 'page_inquiry_grid', get_template_directory_uri() . '/css/inquiry_set.css', 
         "", '20180601' );
}
 else {
    print("その他<br>");
 }
}
add_action('wp_enqueue_scripts', 'add_files_js_css');

function special_nav_class ($classes, $item) { 
    if (in_array('current-menu-item', $classes) ){ 
        $classes[] = 'active ';
    } 
    return $classes; 
} 
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2); 

// カテゴリーイメージで使用するファイル名を出力します。
//フロントのimgをカテゴリ毎に変更する。
function apt_category_image() {
  global $post;
  $page_name_img = array('company'  //固定pageのスラッグ
                        ,'production'
                        ,'service'
                        ,'system'
                        ,'office'//office一覧
                        ,'inquiry_set'
                );    
  $cat_img = 'def';
  //page情報
  if (is_page()) {//固定ページ？
    if (in_array($post->post_name, $page_name_img)) {
    //選択されたpage名がarray内にあるか？
      $cat_img = $post->post_name;
    } else {//子が選択された場合はその親のimgで対応する。但し親子のみ親子孫はできない
      $anc = array_pop(get_post_ancestors($post));//配列の末尾から要素を取り除く
      //先祖の投稿を遡りすべての投稿IDが格納された配列を返す。先祖の投稿がない場合は空の配列となる。
      if ($anc) {//子が選択された場合はその親のimgで対応する。
        $anc = get_page($anc);//ページ情報を取得する
        if (in_array($anc->post_name, array('company', 'production'))) {//最上位のnameにする
          $cat_img = $anc->post_name;
        }
      }
    }
  }
  //カスタム投稿は投稿扱い(single-***.php)
  //get_post_type()で現在の投稿の投稿タイプを取得できます。
  if (get_post_type() == 'branch') {//階層型
    $cat_img = 'office';
  }
  if (get_post_type() == 'tour' || is_tax('area')) {//非階層型
    $cat_img = 'tour-info';
  }
  if (is_search()) {//検索
    $cat_img = 'def';
  }
  $cat_img = 'img_cat_' . $cat_img . '.png';
  return $cat_img;
}
 
// wp_list_pagesのクラス属性を変更する。
function apt_add_current($output) {
  global $post;
  $oid = "page-item-{$post->ID}";
  $cid = "$oid current_page_item";
  $output = preg_replace("/$oid/", $cid, $output);
  return $output;
}

function my_acf_google_map_api( $api ){
 $api['key'] = 'AIzaSyCq1pGi_ptHca9t3epOpiEbECquPC85QKg';
 return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');