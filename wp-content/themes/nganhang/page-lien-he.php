<?php
/**
 * Created by PhpStorm.
 * User: ARIES HAI AU
 * Date: 02/10/2016
 * Time: 10:19 AM
 * Template Name: Lien he
 */
get_header();
?>

    <div id="main" class="clearfix width-100" style="padding-left:30px;padding-right:30px">
        <div class="fusion-row" style="max-width:100%;">
            <div id="content" class="full-width">
                <div id="post-744" class="post-744 page type-page status-publish hentry">

                    <div class="post-content">
                        <div class="fusion-fullwidth fullwidth-box fusion-fullwidth-1  fusion-parallax-none nonhundred-percent-fullwidth"
                            style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:100px;padding-top:110px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:rgba(255,255,255,0);">

                            <div class="fusion-row">
                                <div class="fusion-sep-clear"></div>
                                <div class="fusion-separator fusion-full-width-sep sep-single"
                                     style="border-color:#3B5998;border-top-width:5px;margin-left: auto;margin-right: auto;margin-top:;"></div>
                                <div
                                    class="fusion-one-full fusion-layout-column fusion-column-last fusion-spacing-yes green-border rounded-border"
                                    style="margin-top:0px;margin-bottom:20px;">
                                    <div class="fusion-column-wrapper"
                                         style="background-color:#ffffff;border:1px solid #e2e2e2;padding:40px 60px 20px;">
                                        <div class="fusion-sep-clear"></div>
                                        <div class="fusion-separator fusion-full-width-sep sep-none"
                                             style="border-color:#e0dede;margin-left: auto;margin-right: auto;margin-top:15px;"></div>
                                        <div class="fusion-content-boxes content-boxes columns fusion-columns-4 fusion-columns-total-4 fusion-content-boxes-1 content-boxes-icon-on-top row content-left"
                                            data-animationOffset="100%" style="margin-top:0px;margin-bottom:20px;">
                                            <?php
                                            $args_2 = array(
                                                'post_type' => 'porfolio',
                                                'post_status' => 'publish',
                                                'posts_per_page' => 4,
                                                'offset' => 0,
                                                'meta_key' => TITLE_BLOCK . 'show-block-where',
                                                'meta_value' => 'lienhe'
                                            );
                                            $all_args2 = new WP_Query($args_2);
                                            $j = 1;
                                            if ($all_args2->have_posts()): while ($all_args2->have_posts()): $all_args2->the_post();
                                                ?>
                                            <div
                                                class="fusion-column content-box-column content-box-column-1 col-lg-3 col-md-3 col-sm-3 fusion-content-box-hover content-box-column-first-in-row">
                                                <div
                                                    class="col content-wrapper link-area-box icon-hover-animation-slide"
                                                    style="background-color:rgba(255,255,255,0);">
                                                    <div class="heading heading-with-icon icon-left">
                                                        <div class="icon"><i
                                                                style="background-color:transparent;border-color:transparent;height:auto;width:44pxpx;line-height:normal;color:#3B5998;font-size:44px;"
                                                                class=" fontawesome-icon <?php if (get_post_meta($post->ID, TITLE_BLOCK . 'class-icon', true)) {
                                                                    echo get_post_meta($post->ID, TITLE_BLOCK . 'class-icon', true);
                                                                } else {
                                                                    echo 'fa fa-check';
                                                                } ?>  circle-no"></i></div>
                                                        <h2 class="content-box-heading"
                                                            style="font-size: 18px;line-height:23px;"><?php the_title()?></h2></div>
                                                    <div class="fusion-clearfix"></div>
                                                    <div class="content-container" style="color:#747474;">
                                                        <p style="text-align: center;"><?php echo get_post_meta($post->ID, TITLE_BLOCK . 'thong-diep', true) ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                                <?php
                                                endwhile;
                                                endif;
                                                wp_reset_query();
                                                ?>


                                            <div class="fusion-clearfix"></div>
                                            <div class="fusion-clearfix"></div>
                                        </div>
                                        <div class="fusion-clearfix"></div>
                                    </div>
                                </div>
                                <div class="fusion-clearfix"></div>
                            </div>
                        </div>
                        <div class="fusion-bg-parallax" data-bg-align="left top" data-direction="up" data-mute="yes"
                             data-opacity="100" data-velocity="-0.4" data-mobile-enabled="false" data-break-parents="0"
                             data-bg-image="http://daono.dichvuthamtutu.info/wp-content/uploads/2015/02/banner-home.jpg"
                             data-bg-repeat="false"></div>
                        <div
                            class="fusion-fullwidth fullwidth-box fusion-fullwidth-2  fusion-parallax-up nonhundred-percent-fullwidth"
                            style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:85px;padding-top:110px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;">
                            <style type="text/css" scoped="scoped">.fusion-fullwidth-2 {
                                    padding-left: 30px !important;
                                    padding-right: 30px !important;
                                }</style>
                            <div class="fusion-row">
                                <div class="fusion-one-third fusion-layout-column fusion-spacing-yes"
                                     style="margin-top:0px;margin-bottom:20px;">
                                    <div class="fusion-column-wrapper" style="color: #3B5998;">
                                        <?php the_content();?>

                                        <div class="fusion-sep-clear"></div>
                                        <div class="fusion-separator fusion-full-width-sep sep-none"
                                             style="border-color:#e0dede;margin-left: auto;margin-right: auto;margin-top:40px;"></div>
                                        <div class="fusion-clearfix"></div>
                                    </div>
                                </div>
                                <div class="fusion-two-third fusion-layout-column fusion-column-last fusion-spacing-yes"
                                     style="margin-top:0px;margin-bottom:20px;">
                                    <?php echo do_shortcode('[contact-form-7 id="4" title="Liên hệ"]');?>
                                        <div class="fusion-clearfix"></div>
                                    </div>
                                </div>
                                <div class="fusion-clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fusion-row -->
    </div>  <!-- #main -->
<?php
get_footer();
?>