<?php
/**
 * Created by PhpStorm.
 * User: ARIES HAI AU
 * Date: 02/10/2016
 * Time: 11:47 AM
 * Template Name: dich vu
 */
get_header();
?>
    <div id="main" class="clearfix " style="">
        <div class="fusion-row" style="">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args_4 = array(
                'post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'paged' => $paged
            );
            $all_args4 = new WP_Query($args_4);
            $k = 4;
            if ($all_args4->have_posts()):while ($all_args4->have_posts()):$all_args4->the_post();
                if ($k % 2 == 0):
                    ?>
                    <div
                        class="fusion-fullwidth fullwidth-box fusion-fullwidth-<?php echo $k; ?>  fusion-parallax-none nonhundred-percent-fullwidth"
                        style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:0px;padding-top:30px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:#ffffff;">
                        <div class="fusion-row">
                            <div class="fusion-one-half fusion-layout-column fusion-spacing-yes"
                                 style="margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper"><span
                                        class="fusion-imageframe imageframe-none imageframe-1 hover-type-none">
                                    <?php the_post_thumbnail('medium', array('class' => 'img-responsive')) ?>
                                    </span>

                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                            <div class="fusion-one-half fusion-layout-column fusion-column-last fusion-spacing-yes"
                                 style="margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper">
                                    <div class="fusion-title title sep-underline sep-solid fusion-title-size-one"
                                         style="border-bottom-color:#e5e5e5;margin-top:0px;margin-bottom:0px;"><h2
                                            class="title-heading-left"><span
                                                style="color: #ff0000;"><?php the_title(); ?></span></h2></div>
                                    <p><span style="color: #000000; font-weight: 400; font-size: 15px;">
                                            <?php the_excerpt(); ?>
                                    </span>
                                    </p>

                                    <div class="fusion-button-wrapper">
                                        <a class="fusion-button button-flat button-round button-large button-default button-2"
                                           target="_self" href="<?php the_permalink(); ?>" title="<?php the_title()?>"><i
                                                class="fa fa-forward button-icon-left" ></i><span
                                                class="fusion-button-text"><?php echo 'Hồ sơ ' . get_the_title() ?></span></a>
                                    </div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                            <div class="fusion-clearfix"></div>
                        </div>
                    </div>
                <?php else: ?>
                    <div
                        class="fusion-fullwidth fullwidth-box fusion-fullwidth-<?php echo $k ?>  fusion-parallax-none nonhundred-percent-fullwidth"
                        style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:0px;padding-top:30px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:#ffffff;">
                        <div class="fusion-row">
                            <div class="fusion-one-half fusion-layout-column fusion-spacing-yes"
                                 style="margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper">
                                    <div class="fusion-title title sep-underline sep-solid fusion-title-size-one"
                                         style="border-bottom-color:#e5e5e5;margin-top:0px;margin-bottom:0px;"><h1
                                            class="title-heading-left"><span
                                                style="color: #ff0000;"><?php the_title() ?></span>
                                        </h1></div>
                                    <?php the_excerpt(); ?>

                                    <div class="fusion-button-wrapper">

                                        <a class="fusion-button button-flat button-round button-large button-default button-3"
                                           target="_self" href="<?php the_permalink(); ?>" title="<?php the_title()?>"><span
                                                class="fusion-button-text"><?php echo 'Hồ sơ ' . get_the_title() ?></span><i
                                                class="fa fa-backward button-icon-right"></i></a></div>
                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                            <div class="fusion-one-half fusion-layout-column fusion-column-last fusion-spacing-yes"
                                 style="margin-top:0px;margin-bottom:20px;">
                                <div class="fusion-column-wrapper"><span
                                        class="fusion-imageframe imageframe-none imageframe-2 hover-type-none">
                                        <?php the_post_thumbnail('medium', array('class' => 'img-responsive')) ?>
                                    </span>

                                    <div class="fusion-clearfix"></div>
                                </div>
                            </div>
                            <div class="fusion-clearfix"></div>
                        </div>
                    </div>
                <?php
                endif;
                $k++;
            endwhile; endif;
            wp_reset_query();
            ?>
            <div class="nav"><?php wp_pagenavi(array('query'=>$all_args4))?></div>
        </div>
        <!-- fusion-row -->
    </div>  <!-- #main -->

<?php get_footer(); ?>