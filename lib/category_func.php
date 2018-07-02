<?php
//項目の一覧表示からﾊﾞｯｸｶﾗｰ変改用のclassを追加するための処理
//投稿ﾀｲﾌﾟ　投稿ｶﾃｺﾞﾘ一覧 or ｶｽﾀﾑ投稿ﾀｲﾌﾟ ｶｽﾀﾑﾀｸｿﾉﾐのﾀｰﾑ一覧
//からｶﾃｺﾞﾘorﾀｰﾑの識別IDやclass名を戻り値とする
function apt_category_id($tax='category') {
  global $post;
  $cat_id = 0;
  if (is_single()) {
//get_the_terms():投稿記事のタクソノミー情報を取得する
//投稿ID（数値）, 'category'、'post_tag'などのタクソノミー名を指定。
    $cat_info = get_the_terms($post->ID, $tax);
    if ($cat_info) {
//配列の最初の値を取り出して返します。
      $cat_id = array_shift($cat_info)->term_id;
    }
  }
  return $cat_id;  
}

// カテゴリ情報を取得する。(カテゴリの項目(ターム)情報を取得)
//投稿：category カスタム投稿：area
function apt_category_info($tax='category') {//引数は初期値　呼び出しで上書きも可能
  global $post; //投稿ﾀｲﾌﾟ(投稿､固定ﾍﾟｰｼﾞ)orｶｽﾀﾑ投稿ﾀｲﾌﾟのいずれかのﾃﾞｰﾀ
  //投稿記事はすべてターム(IR情報,ｱｼﾞｱなど)に紐付けされている。
  //投稿に割り当てられたタクソノミーのターム（カスタム分類の項目）IR情報　アジアなどを取得する。 
  //タクソノミー(地域)とカテゴリを一緒として処理
  $cat =  get_the_terms($post->ID, $tax);    //投稿記事のarea,category情報を取得
  //投稿ID（数値）、'category'、'post_tag'などのタクソノミー名を指定。
  //投稿IDが$post->IDのカテゴリ情報を取得する。
  //戻り値：タームのオブジェクトの配列を返す。
  $obj = new stdClass;
  if ($cat) {
    $cat = array_shift($cat);   //配列の先頭から要素を一つ取り出す
    $obj->name = $cat->name;
    $obj->slug = $cat->slug;
  } else {
    $obj->name = '';
    $obj->slug = '';
  }
  return $obj;
}