<?php

// スマートフォンテーマが選択されているか判別します。
//ｽﾏｰﾄﾌｫﾝでは子→親の順でfunctionsが読まれるので、apt_is_smart()が存在すれば
//ｽﾏｰﾄﾌｫﾝ(true)で以下は処理しない、但し、親から始まればｽﾏｰﾄﾌｫﾝではなく(false)となる。
if (!function_exists('apt_is_smart')) {
  function apt_is_smart() {
    return false;
  }
}
// 電話番号を処理します。
function apt_telephone($tel, $echo=true){   //出力するか(その場でecho)、返り値にするか(戻ってあとでecho)
  $tel = mb_convert_kana($tel, 'n', 'UTF-8'); //「全角」数字を「半角」に変換します。 
  $tel = preg_replace('/[^0-9\-]/', '', $tel);//数字とハイフン以外を''除去
 // if (wp_is_mobile()) {   //mobileでためしてね。
  if (apt_is_smart()) {
    $tel = '<a href="tel:' . esc_attr($tel) . '">' . esc_html($tel) . '</a>';
  } else {
    $tel = esc_html($tel);
  }
//後から使いたい場合は返り値の形式・すぐ出力したい場合は出力の形式
  if ($echo) {
    echo $tel;//すぐ出力したい場合は出力の形式
    return;
  } else {
    return $tel;//後から使いたい場合は返り値の形式　<-ｼｮｰﾄｺｰﾄﾞを使用した場合は出力は不要
  }
}

// 電話番号処理のショートコードを登録します。
//apt_telephoneを呼び出すWrapper関数
function apt_tel_func($atts, $tel='') {
  return apt_telephone($tel, false);    //後から使いたい場合の返り値の形式 $tel
}
add_shortcode('apt_tel', 'apt_tel_func');
//ｼｮｰﾄｺｰﾄﾞ[apt_tel]***[/apt_tel]というショートコードがみつかれば、apt_tel_func関数が呼び出される。
//ｼｮｰﾄｺｰﾄﾞ[apt_tel]***[/apt_tel]の***が第二引数にはいる。

