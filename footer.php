<footer class="item">
    footer<br>
<?php //表示中のページに適用されているテンプレート表示
global $template;
$template_name = basename($template, '.php');
echo $template_name;
?>
   
<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/img_works_off.jpg" alt="button" class="rollover"></a>

</footer>
<!-- JavaScriptの読み込み -->
<script src="<?php bloginfo('template_url'); ?>/js/flickity/flickity.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/flickity/fire-flickity.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/select_image.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tabpane.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/testjq.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/acf_map.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/easy-rollover.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>

