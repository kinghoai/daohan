<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */
?>

<div class="fusion-footer fusion-footer-parallax">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <h4 class="title-service">ĐÁO HẠN NGÂN HÀNG</h4>
                    <ul class="list-service">
                        <?php
                            $args = array(
                                'posts_per_page'   => -1,
                                'post_type'        => 'service',
                                'post_status'      => 'publish',
                                'tax_query' => array(
                                    array(
                                     'taxonomy' => 'loai-dv',
                                      'field' => 'id',
                                      'terms' => 3,
                                        )
                                    )     
                            );
                            $all = new WP_Query($args);
                            if($all->have_posts()):
                                while($all->have_posts()):$all->the_post();
                                    ?>
                                    <li class="item-service">
                                        <a href="<?php the_permalink()?>" title="<?php the_title();?>">
                                            <?php the_title();?>
                                        </a>
                                    </li>
                                <?php
                                endwhile; endif; wp_reset_query();
                            ?>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h4 class="title-service">PHÁP LÝ</h4>
                    <ul class="list-service">
                        <?php
                            $args = array(
                                'posts_per_page'   => -1,
                                'post_type'        => 'service',
                                'post_status'      => 'publish',
                                'tax_query' => array(
                                    array(
                                     'taxonomy' => 'loai-dv',
                                      'field' => 'id',
                                      'terms' => 5,
                                        )
                                    )     
                            );
                            $all = new WP_Query($args);
                            if($all->have_posts()):
                                while($all->have_posts()):$all->the_post();
                                    ?>
                                    <li class="item-service">
                                        <a href="<?php the_permalink()?>" title="<?php the_title();?>">
                                            <?php the_title();?>
                                        </a>
                                    </li>
                                <?php
                                endwhile; endif; wp_reset_query();
                            ?>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <h4 class="title-service">VAY VỐN</h4>
                    <ul class="list-service">
                        <?php
                            $args = array(
                                'posts_per_page'   => -1,
                                'post_type'        => 'service',
                                'post_status'      => 'publish',
                                'tax_query' => array(
                                    array(
                                     'taxonomy' => 'loai-dv',
                                      'field' => 'id',
                                      'terms' => 4,
                                        )
                                    )     
                            );
                            $all = new WP_Query($args);
                            if($all->have_posts()):
                                while($all->have_posts()):$all->the_post();
                                    ?>
                                    <li class="item-service">
                                        <a href="<?php the_permalink()?>" title="<?php the_title();?>">
                                            <?php the_title();?>
                                        </a>
                                    </li>
                                <?php
                                endwhile; endif; wp_reset_query();
                            ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-line foo-fixed">
        <div class="container">
            <div class="row">
                <div class="footer-item col-md-6 text-center">
                    <span class="name">Tư vấn miễn phí: </span>
                    <a href="tel:<?php echo get_post_meta(5, TITLE_BLOCK . 'so-dien-thoai-hotline', true) ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_post_meta(5, TITLE_BLOCK . 'so-dien-thoai-hotline', true) ?></a>
                    <span></span>
                </div>
                <div class="footer-item col-md-6 text-center">
                <span class="cty_text">
                Email:
                <a href="mailto:lyhoahon@gmail.com"> contact@daohannganhang.vn</a>
                </span>
                </div>
            </div>
        </div>
    </div>
    <!-- #footer -->
</div> <!-- fusion-footer -->
</div> <!-- wrapper -->


<a class="fusion-one-page-text-link fusion-page-load-link"></a>

<!-- W3TC-include-js-head -->


<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/js/comment-reply.min1c9b.js?ver=4.6.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var toTopscreenReaderText = {"label": "Go to Top"};
    var js_local_vars = {
        "admin_ajax": "\/wp-admin\/admin-ajax.php",
        "admin_ajax_nonce": "93c0bc0782",
        "protocol": "",
        "theme_url": "<?php echo get_template_directory_uri()?>",
        "dropdown_goto": "Go to...",
        "mobile_nav_cart": "Shopping Cart",
        "page_smoothHeight": "false",
        "flex_smoothHeight": "false",
        "language_flag": "en",
        "infinite_blog_finished_msg": "<em>All posts displayed.<\/em>",
        "infinite_finished_msg": "<em>All items displayed.<\/em>",
        "infinite_blog_text": "<em>Loading the next set of posts...<\/em>",
        "portfolio_loading_text": "<em>Loading Portfolio Items...<\/em>",
        "faqs_loading_text": "<em>Loading FAQ Items...<\/em>",
        "order_actions": "Details",
        "avada_rev_styles": "1",
        "avada_styles_dropdowns": "1",
        "blog_grid_column_spacing": "40",
        "blog_pagination_type": "Pagination",
        "carousel_speed": "2500",
        "counter_box_speed": "1000",
        "content_break_point": "800",
        "disable_mobile_animate_css": "0",
        "disable_mobile_image_hovers": "1",
        "portfolio_pagination_type": "Pagination",
        "form_bg_color": "#ffffff",
        "header_transparency": "0",
        "header_padding_bottom": "0px",
        "header_padding_top": "0px",
        "header_position": "Top",
        "header_sticky": "1",
        "header_sticky_tablet": "0",
        "header_sticky_mobile": "0",
        "header_sticky_type2_layout": "menu_only",
        "sticky_header_shrinkage": "0",
        "is_responsive": "1",
        "is_ssl": "false",
        "isotope_type": "masonry",
        "layout_mode": "wide",
        "lightbox_animation_speed": "Fast",
        "lightbox_arrows": "1",
        "lightbox_autoplay": "0",
        "lightbox_behavior": "all",
        "lightbox_desc": "0",
        "lightbox_deeplinking": "1",
        "lightbox_gallery": "1",
        "lightbox_opacity": "0.98",
        "lightbox_path": "vertical",
        "lightbox_post_images": "1",
        "lightbox_skin": "light",
        "lightbox_slideshow_speed": "5000",
        "lightbox_social": "0",
        "lightbox_title": "0",
        "lightbox_video_height": "720",
        "lightbox_video_width": "1280",
        "logo_alignment": "Left",
        "logo_margin_bottom": "20px",
        "logo_margin_top": "20px",
        "megamenu_max_width": "1100",
        "mobile_menu_design": "modern",
        "nav_height": "90",
        "nav_highlight_border": "2",
        "page_title_fading": "0",
        "pagination_video_slide": "0",
        "related_posts_speed": "2500",
        "submenu_slideout": "0",
        "side_header_break_point": "1050",
        "sidenav_behavior": "Hover",
        "site_width": "1170px",
        "slider_position": "below",
        "slideshow_autoplay": "1",
        "slideshow_speed": "7000",
        "smooth_scrolling": "0",
        "status_lightbox": "0",
        "status_totop_mobile": "1",
        "status_vimeo": "1",
        "status_yt": "1",
        "testimonials_speed": "4000",
        "tfes_animation": "sides",
        "tfes_autoplay": "1",
        "tfes_interval": "3000",
        "tfes_speed": "800",
        "tfes_width": "150",
        "title_style_type": "single",
        "title_margin_top": "0px",
        "title_margin_bottom": "0px",
        "typography_responsive": "0",
        "typography_sensitivity": "0.6",
        "typography_factor": "1.5",
        "woocommerce_shop_page_columns": "",
        "woocommerce_checkout_error": "Not all fields have been filled in correctly.",
        "side_header_width": "0"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri() ?>/assets/js/main.minfa0c.js?ver=4.0.3'
        async></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/js/wp-embed.min1c9b.js?ver=4.6.1'></script>


<!--[if lte IE 8]>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/respond.js"></script>
<![endif]-->
<script type="text/javascript">/* <![CDATA[ */
    (function (d, s, a, i, j, r, l, m, t) {
        try {
            l = d.getElementsByTagName('a');
            t = d.createElement('textarea');
            for (i = 0; l.length - i; i++) {
                try {
                    a = l[i].href;
                    s = a.indexOf('/cdn-cgi/l/email-protection');
                    m = a.length;
                    if (a && s > -1 && m > 28) {
                        j = 28 + s;
                        s = '';
                        if (j < m) {
                            r = '0x' + a.substr(j, 2) | 0;
                            for (j += 2; j < m && a.charAt(j) != 'X'; j += 2)s += '%' + ('0' + ('0x' + a.substr(j, 2) ^ r).toString(16)).slice(-2);
                            j++;
                            s = decodeURIComponent(s) + a.substr(j, m - j)
                        }
                        t.innerHTML = s.replace(/</g, '&lt;').replace(/>/g, '&gt;');
                        l[i].href = 'mailto:' + t.value
                    }
                } catch (e) {
                }
            }
        } catch (e) {
        }
    })(document);
    /* ]]> */</script></body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86470233-1', 'auto');
  ga('send', 'pageview');

</script>


</html>

<?php wp_footer(); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f0bd163a456733"></script>

</body>
</html>
