<?php
// カスタムメニュー
register_nav_menus(
  array(
    //ﾊﾟﾗﾒｰﾀのｷｰ:半角英数字のﾛｹｰｼｮﾝ名(ｶｽﾀﾑﾒﾆｭｰの識別名)
    //ﾊﾟﾗﾒｰﾀの値:管理画面に表示するﾛｹｰｼｮﾝ名(日本語可)→ｶｽﾀﾑﾒﾆｭｰの設定画面の｢ﾃｰﾏの場所｣に表示される名前
    'place_pc_global' => 'PCグローバル',
    'place_pc_utility' => 'PCユーティリティ',
  )   
);
//wp_nav_menuにslugのクラス属性を追加する。
//classに'menu-item-slug-name'を追加
//function apt_slug_nav($css, $item) {
function apt_slug_nav($classes, $item) {//ﾌｯｸした条件で引数にﾃﾞｰﾀを代入してくれている？
  if ($item->object == 'page') {
    $page = get_post($item->object_id);
//    $css[] = 'menu-item-slug-' . esc_attr($page->post_name);
    $classes[] = 'menu-item-slug-' . esc_attr($page->post_name);
  }
  return $classes;
}
// wp_nav_menuにcurrentのクラス属性を追加します。
// 子ﾅﾋﾞ選択時は
//投稿ﾀｲﾌﾟ：投稿､固定ﾍﾟｰｼﾞはcurrent-page-ancestor(前身/原型)が付くが、
//ｶｽﾀﾑ投稿ﾀｲﾌﾟは付かないので追加。
function apt_current_nav($css, $item) {
  if (is_search()) {
    return $css;
  }
  if ($item->title == 'ツアー情報') {
    if (get_post_type() == 'tour' || is_tax('area')) {
      $css[] = 'current-page-ancestor';
    }
  } elseif ($item->title == '営業所') {
    if (get_post_type() == 'branch') {
      $css[] = 'current-page-ancestor';
    }
  }
  return $css;
}
//カスタムメニューの二段表示
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);
function description_in_nav_menu($item_output, $item){
  return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br /><span>{$item->description}</span><", $item_output);
}
