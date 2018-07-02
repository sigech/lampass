<!-- content-branch -->
<?php
 $incidental = get_field('incidental');
 $meal = get_field('meal');
 $price = get_field('price');
 $rank = get_field('rank');
 
 //$area = apt_category_info('area');
  //ｶｽﾀﾑﾀｸｿﾉﾐｰ(地域：area)のスラッグを設定　asia hawaii-guam europe japan
?>
<div class="rooms_column">
<h3 class="page_ttl">
    <a href="<?php the_permalink(); ?>"><?php the_title(); 
    //#tour_info h3でpadding:186pxを指定
    ?>
      </a>
</h3>
<!--
<p class="tour_info_top">
    <span class="tour_category 
        <?php echo esc_attr($area->slug); //htmlタグの属性として出力す場合は「esc_attr」
    //両方のクラスが併記されている場合のみ、適用されるスタイルを作る。
    //.tour_category.japanでtour_categoryとjapanの両方のclassが
    //設定されている範囲をcssで指定可能。
        ?>">
        <?php echo esc_html($area->name);  //htmlテキストとして出力する場合は「esc_html」
        ?>
    </span>
    <span class="tour_date">設定期間：<?php echo esc_html($post->cf_start_day); 
    //100% = 1em = 1rem = 16px = 12pt
    ?>&#xFF5E;<?php echo esc_html($post->cf_end_day); ?></span>
  </p>
-->  
  <p class="tour_image">
      <a href="<?php the_permalink(); ?>">
          <?php
            if (has_post_thumbnail()) :
                the_post_thumbnail('post-thumbnail');
            else :
                echo "No Image";
            endif;
          ?>
      </a>
  </p>    
    
<div class="branch_info">
  <h2部屋の説明</h2>
  <table>
    <tr>
      <th>部屋の状況</th>
      <td><?php echo esc_html($incidental); ?></td>
    </tr>
    <tr>
      <th>食事</th>
      <td><?php echo esc_html($meal); ?></td>
    </tr>
    <tr>
      <th>現在の料金</th>
      <td><?php apt_telephone($price); ?></td>
    </tr>
    <tr>
      <th>人気ランキング</th>
      <td><?php echo esc_html($rank); ?></td>
    </tr>
    <tr>
      <th>写真</th>
      <td><img src="<?php the_field('photo1'); ?>" width="150px"/>
      <img src="<?php the_field('photo2'); ?>" width="150px"/>
      <img src="<?php the_field('photo3'); ?>" width="150px"/></td> 
    </tr>
  </table>
</div>
</div>



