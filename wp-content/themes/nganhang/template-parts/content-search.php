<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */
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
                                     style="border-bottom-color:#e5e5e5;margin-top:0px;margin-bottom:0px;"><h1
                                        class="title-heading-left"><span
                                            style="color: #ff0000;"><?php the_title(); ?></span></h1></div>
                                <p><span style="color: #000000; font-weight: 400; font-size: 15px;">
                                            <?php the_excerpt(); ?>
                                    </span>
                                </p>

                                <div class="fusion-button-wrapper">
                                    <a class="fusion-button button-flat button-round button-large button-default button-2"
                                       target="_self" href="<?php the_permalink(); ?>"><i
                                            class="fa fa-forward button-icon-left"></i><span
                                            class="fusion-button-text"><?php _e('Xem chi tiết','nganhang') ?></span></a>
                                </div>
                                <div class="fusion-clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="nav"><?php wp_pagenavi()?></div>

