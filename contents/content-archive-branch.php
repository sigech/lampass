<!-- content-archive-branch -->
<?php
// $img = get_field('img');
// $imgurl = wp_get_attachment_image_src($img, 'full');
 $street_address_no = get_field('street_address_no');
 $street_address = get_field('street_address');
 $tell_no = get_field('tell_no');
 $opencloss = get_field('opencloss');
?>
<div class="branch_info clearfix">
  <h2 class="page_ttl"><?php the_title(); ?></h2>
  <table>
    <tr>
      <th>住所</th>
      <td>〒<?php echo esc_html($street_address_no); ?> 
          <?php echo esc_html( $street_address); ?>
          <br /> <?php //Break（改行）?>
          
          <?php //*********************************************
            $location = get_field('keisai-map');
            if( !empty($location) ):
          ?>
            <div class="acf-map">
             <div class="marker" data-lat="<?php echo $location['lat']; ?>" 
                  data-lng="<?php echo $location['lng']; ?>">
             </div>
            </div>
            <?php endif; ?>
          
      </td>
    </tr>
    <tr>
      <th>電話番号</th> <!-- ｽﾏｰﾄﾌｫﾝであればﾀｯﾌﾟで通話可能とする　-->
      <td><?php apt_telephone($tell_no); ?></td>
    </tr>
  </table>
  <div class="detail_more">
    <p><a href="<?php the_permalink(); ?>">詳細を見る</a></p>
  </div>
</div>
