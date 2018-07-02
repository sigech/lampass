<?php
// カスタム投稿タイプ　(営業所情報　ﾂｱｰ情報)
// カスタム分類(タクソノミー)　なし　→　投稿タイプ：固定ページに近い性質(営業所) 階層型
//                           あり　→　投稿タイプ：投稿に近い性質(ﾂｱｰ情報) 非階層型
// カスタム分類(タクソノミー)：地域
        //ターム　アジア　ハワイ・グアム　ヨーロッパ　日本
add_action('init', 'register_post_type_and_taxonomy');
function register_post_type_and_taxonomy() {
  register_post_type(   // カスタム投稿タイプ  営業所(階層型)設定
    'branch',
    array(
      'labels' => array(
        'name' => '営業所情報',
        'add_new_item' => '営業所を追加',
        'edit_item' => '営業所の編集',
      ),
      'public' => true,
      'hierarchical' => true, //階層型　固定ﾍﾟｰｼﾞ　設定無し(false)で投稿
      'menu_position' => 5, //管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => array(
        'title',
        'excerpt',
        'custom-fields',
        'thumbnail',
        'page-attributes',
      ),
    )
  );
  register_post_type(   // カスタム投稿タイプ　部屋(非階層型)設定
    'rooms',
    array(
      'labels' => array(
        'name' => '部屋情報',
        'add_new_item' => '新規部屋情報を追加',
        'edit_item' => '部屋情報の編集',
      ),
      'public' => true,
      'menu_position' => 6, //管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'custom-fields',
        'thumbnail',
      ),
    )
  );
  register_taxonomy(    // カスタム分類(タクソノミー)：タイプ：type
    'type',
    'rooms', // カスタム分類(タクソノミー)　あり　→　投稿タイプ：投稿に近い性質 非階層型
    array(
      'labels' => array(
        'name' => '部屋タイプ',
        'add_new_item' => '部屋タイプを追加',
        'edit_item' => '部屋タイプの編集',
      ),
      'hierarchical' => true, //trueでカテゴリ　falseでタグ
      'show_admin_column' => true,
    )
  );
}

