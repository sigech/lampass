<!-- content-branch -->
<?php
// $img = get_field('img');
// $imgurl = wp_get_attachment_image_src($img, 'full');
 $street_address_no = get_field('street_address_no');
 $street_address = get_field('street_address');
 $tell_no = get_field('tell_no');
 $opencloss = get_field('opencloss');
 $location = get_field('keisai-map');

// 【具体例】
//$s_text = get_field('keisai-map' );
//echo $s_text;

//the_field( "acf-field-keisai-map" );


 $access = get_field('access');
?>
<h1 class="page_ttl"><?php the_title(); ?></h1>
<div class="branch_info">
  <h2>営業所情報</h2>
  <table>
    <tr>
      <th>郵便番号</th>
      <td>〒<?php echo esc_html($street_address_no); ?></td>
    </tr>
    <tr>
      <th>住所</th>
      <td><?php echo esc_html($street_address); ?></td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td><?php apt_telephone($tell_no); ?></td>
    </tr>
    <tr>
      <th>営業時間</th>
      <td><?php echo esc_html($opencloss); ?></td>
    </tr>
    <tr>
      <th>アクセス</th>
      <td><?php echo esc_html($access); ?></td>
    </tr>
  </table>
</div>
<div class="maps clearfix">
  <h2>地図</h2>
  <?php //*********************************************
    if( !empty($location) ):
  ?>
  <div class="acf-map">
  　<div class="marker" data-lat="<?php echo $location['lat']; ?>" 
     data-lng="<?php echo $location['lng']; ?>">
    </div>
  </div>
   <?php endif; ?>
  
    <a id="display-gmap" href="https://maps.google.co.jp/maps?q=
        <?php echo esc_attr($location['lat']); ?>,<?php echo esc_attr($location['lng']); ?>+
        (<?php echo urlencode(esc_attr($post->post_title)); ?>)&amp;iwloc=A&amp;z=14
            " target="_blank">Google マップ で表示する</a>
  
</div>


