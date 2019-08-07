<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */

get_header(); ?>




<div id="sliders-container">
    <?php slidebaner(); ?>
</div>


<div id="main" class="clearfix width-100" style="padding-left:30px;padding-right:30px">
<div class="fusion-row" style="max-width:100%;">
<div id="content" class="full-width">
<div id="post-1062" class="post-1062 page type-page status-publish hentry">

            <div class="post-content">
            <div
                class="fusion-fullwidth fullwidth-box fusion-fullwidth-1  fusion-parallax-none nonhundred-percent-fullwidth"
                style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:0px;padding-top:20px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:rgba(255,255,255,0);">
                <div class="fusion-row">
                    <div
                        class="fusion-content-boxes content-boxes columns fusion-columns-4 fusion-columns-total-4 fusion-content-boxes-1 content-boxes-icon-on-top row content-left"
                        data-animationOffset="100%" style="margin-top:0px;margin-bottom:60px;">

                        <?php
                        $args = array(
                            'post_type' => 'porfolio',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                            'offset' => 0,
                            'meta_key' => TITLE_BLOCK . 'show-block-where',
                            'meta_value' => 'top'
                        );
                        $all_args = new WP_Query($args);
                        $i = 1;
                        if ($all_args->have_posts()):while ($all_args->have_posts()): $all_args->the_post();
                            ?>
                            <div
                                class="fusion-column content-box-column content-box-column-<?php echo $i; ?> col-lg-3 col-md-3 col-sm-3 fusion-content-box-hover content-box-column-first-in-row">
                                <div class="col content-wrapper link-area-box icon-hover-animation-slide"
                                     style="background-color:rgba(255,255,255,0);">
                                    <div class="heading heading-with-icon icon-left">
                                        <div class="icon"><i
                                                style="background-color:transparent;border-color:transparent;height:auto;width:50pxpx;line-height:normal;color:#0098D3;font-size:50px;"
                                                class="fontawesome-icon <?php if (get_post_meta($post->ID, TITLE_BLOCK . 'class-icon', true)) {
                                                    echo get_post_meta($post->ID, TITLE_BLOCK . 'class-icon', true);
                                                } else {
                                                    echo 'fa fa-check';
                                                } ?> circle-no"></i></div>
                                        <h2 class="content-box-heading" style="font-size: 18px;line-height:23px;">
                                            <?php the_title(); ?></h2></div>
                                    <div class="fusion-clearfix"></div>
                                    <div class="content-container" style="color:#000000;">
                                        <?php echo get_post_meta($post->ID, TITLE_BLOCK . 'thong-diep', true); ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endwhile;
                        endif;
                        wp_reset_query();
                        ?>

                        <div class="fusion-clearfix"></div>

                    </div>
                </div>
            </div>
            <?php if(get_post_meta($post->ID,TITLE_BLOCK.'show-block-about',true)==1):?>
                <div
                    class="fusion-fullwidth fullwidth-box fusion-fullwidth-2  fusion-parallax-none nonhundred-percent-fullwidth"
                    style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:0px;padding-top:30px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:#0098D3;">
                    <div class="fusion-row">
                        <div class="fusion-one-half fusion-layout-column fusion-spacing-yes"
                             style="margin-top:0px;margin-bottom:20px;">
                            <div class="fusion-column-wrapper">
                                <div class="fusion-title title sep-underline sep-solid fusion-title-size-one"
                                     style="border-bottom-color:#e5e5e5;margin-top:0px;margin-bottom:0px;"><h1
                                        class="title-heading-left"><span
                                            style="color: #ffffff;"><?php echo get_post_meta($post->ID,TITLE_BLOCK.'title-block',true);?></span></h1></div>
                                <p><span style="color: #ffffff;"><?php echo get_post_meta($post->ID,TITLE_BLOCK.'short-description',true)?></span></p>

                                <div class="fusion-clearfix"></div>
                            </div>
                        </div>
                        <div class="fusion-one-half fusion-layout-column fusion-column-last fusion-spacing-yes"
                             style="margin-top:0px;margin-bottom:20px;">
                            <div class="fusion-column-wrapper"><p><span
                                        style="color: #ffffff; font-weight: 400; font-size: 15px;">
                                    <?php echo get_post_meta($post->ID,TITLE_BLOCK.'about-info',true)?>
                                    </span>
                                </p>

                                <div class="fusion-clearfix"></div>
                            </div>
                        </div>
                        <div class="fusion-clearfix"></div>
                    </div>
                </div>
            <?php endif;?>


            <div
                class="fusion-fullwidth fullwidth-box fusion-fullwidth-3  fusion-parallax-none nonhundred-percent-fullwidth"
                style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:0px;padding-top:20px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:rgba(255,255,255,0);">
                <div class="fusion-row">
                    <div
                        class="fusion-content-boxes content-boxes columns fusion-columns-3 fusion-columns-total-3 fusion-content-boxes-2 content-boxes-icon-on-top row content-left"
                        data-animationOffset="100%" style="margin-top:0px;margin-bottom:60px;">

                        <?php
                        $args_2 = array(
                            'post_type' => 'porfolio',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'offset' => 0,
                            'meta_key' => TITLE_BLOCK . 'show-block-where',
                            'meta_value' => 'bottom'
                        );
                        $all_args2 = new WP_Query($args_2);
                        $j = 1;
                        if ($all_args2->have_posts()): while ($all_args2->have_posts()): $all_args2->the_post();
                            ?>
                            <div
                                class="fusion-column content-box-column content-box-column-1 col-lg-4 col-md-4 col-sm-4 fusion-content-box-hover content-box-column-first-in-row">
                                <div class="col content-wrapper link-area-box icon-hover-animation-slide"
                                     style="background-color:rgba(255,255,255,0);">
                                    <div class="heading heading-with-icon icon-left">
                                        <div class="icon"><i
                                                style="background-color:transparent;border-color:transparent;height:auto;width:70pxpx;line-height:normal;color:#0098D3;font-size:70px;"
                                                class="fontawesome-icon <?php if (get_post_meta($post->ID, TITLE_BLOCK . 'class-icon', true)) {
                                                    echo get_post_meta($post->ID, TITLE_BLOCK . 'class-icon', true);
                                                } else {
                                                    echo 'fa fa-check';
                                                } ?> circle-no"></i></div>
                                        <h2 class="content-box-heading" style="font-size: 18px;line-height:23px;">
                                            <?php the_title(); ?></h2></div>
                                    <div class="fusion-clearfix"></div>
                                    <div class="content-container" style="color:#000000;">
                                        <?php echo get_post_meta($post->ID, TITLE_BLOCK . 'thong-diep', true) ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        endif;
                        wp_reset_query();
                        ?>


                        <div class="fusion-clearfix"></div>
                    </div>
                </div>
            </div>
            <?php
            $args_4 = array(
                'post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'offset' => 0
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
                                         style="border-bottom-color:#e5e5e5;margin-top:0px;margin-bottom:0px;"><h1
                                            class="title-heading-left"><span
                                                style="color: #ff0000;"><?php the_title(); ?></span></h1></div>
                                    <p><span style="color: #000000; font-weight: 400; font-size: 15px;">
                                            <?php the_excerpt(); ?>
                                    </span>
                                    </p>

                                    <div class="fusion-button-wrapper">
                                        <a class="fusion-button button-flat button-round button-large button-default button-2"
                                           target="_self" href="<?php the_permalink(); ?>" title="<?php the_title()?>"><i
                                                class="fa fa-forward button-icon-left"></i><span
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

            <div
                class="fusion-fullwidth fullwidth-box fusion-fullwidth-8  fusion-parallax-none nonhundred-percent-fullwidth"
                style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:20px;padding-top:20px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:#ffffff;">
                <div class="fusion-row"><h2
                        style="text-align: center;"><?php _e('ĐỐI TÁC CỦA CHÚNG TÔI', 'nganhang') ?></h2>

                    <div class="fusion-image-carousel fusion-image-carousel-fixed lightbox-enabled">
                        <div class="fusion-carousel" data-autoplay="yes" data-columns="5" data-itemmargin="13"
                             data-itemwidth="180" data-touchscroll="no" data-imagesize="fixed">
                            <div class="fusion-carousel-positioner">
                                <ul class="fusion-carousel-holder">
                                    <?php
                                    $args_3 = array(
                                        'post_type' => 'doi-tac',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'offset' => 0
                                    );
                                    $all_args3 = new WP_Query($args_3);
                                    if ($all_args3->have_posts()):while ($all_args3->have_posts()):$all_args3->the_post();
                                        ?>
                                        <li class="fusion-carousel-item">
                                            <div class="fusion-carousel-item-wrapper">
                                                <div class="fusion-image-wrapper hover-type-zoomin"><a
                                                        data-rel="iLightbox[gallery_image_1]"
                                                        href="<?php echo get_post_meta($post->ID, TITLE_BLOCK . 'dia-chi-website-doi-tac', true); ?>"
                                                        target="_self" title="<?php the_title()?>"><img
                                                            src="<?php echo get_post_meta($post->ID, TITLE_BLOCK . 'logo-doi-tac', true); ?>"
                                                            width="" height="" alt="<?php the_title() ?>"
                                                            class="img-responsive"/></a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>
                                </ul>
                                <div class="fusion-carousel-nav"><span class="fusion-nav-prev"></span><span
                                        class="fusion-nav-next"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(get_post_meta($post->ID,TITLE_BLOCK.'show-block-helper',true)):?>
                <div class="fusion-fullwidth fullwidth-box fusion-fullwidth-9  fusion-parallax-none nonhundred-percent-fullwidth fusion-equal-height-columns"
                     style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:35px;padding-top:75px;padding-left:0px;padding-right:0px;background-color:rgba(255,255,255,0);background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;-ms-filter: &quot;progid:DXImageTransform.Microsoft.AlphaImageLoader(src=&#039;http://daohannganhangaz.com/wp-content/uploads/2016/08/banner-min.jpg&#039;, sizingMethod=&#039;scale&#039;)&quot;;background-image: url(http://daohannganhangaz.com/wp-content/uploads/2016/08/banner-min.jpg);">
                    <div class="fusion-row">
                        <div class="fusion-three-fourth fusion-layout-column fusion-spacing-yes"
                             style="margin-top:0px;margin-bottom:20px;">
                            <div class="fusion-column-wrapper">
                                <div class="fusion-sep-clear"></div>
                                <div class="fusion-separator fusion-full-width-sep sep-none"
                                     style="border-color:#e0dede;margin-left: auto;margin-right: auto;margin-top:10px;"></div>
                                <h2 style="text-align: center;"><span style="color: #3B5998;"><?php echo get_post_meta($post->ID,TITLE_BLOCK.'thong-diep-ngan',true)?></span>
                                </h2>

                                <div class="fusion-clearfix"></div>
                            </div>
                        </div>
                        <div class="fusion-one-fourth fusion-layout-column fusion-column-last fusion-spacing-yes"
                             style="margin-top:0px;margin-bottom:20px;">
                            <div class="fusion-column-wrapper">
                                <div class="fusion-button-wrapper fusion-aligncenter">
                                    <?php if(get_post_meta($post->ID,TITLE_BLOCK.'button-title',true)):?>
                                        <a class="fusion-button button-flat button-round button-xlarge button-custom button-6"
                                           target="_self" href="<?php echo get_post_meta($post->ID,TITLE_BLOCK.'link-button',true)?>" data-toggle="modal" data-target=".expert"><span
                                                class="fusion-button-text"><?php echo get_post_meta($post->ID,TITLE_BLOCK.'button-title',true)?></span></a>
                                    <?php endif;?>
                                </div>
                                <div class="fusion-clearfix"></div>
                            </div>
                        </div>
                        <div class="fusion-clearfix"></div>
                    </div>
                </div>
            <?php endif;?>
            <div
                class="fusion-fullwidth fullwidth-box fusion-fullwidth-10  fusion-parallax-none nonhundred-percent-fullwidth"
                style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:20px;padding-top:20px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:rgba(255,255,255,0);">
                <div class="fusion-row"><h2 style="text-align: center;"><?php _e('TIN TỨC MỚI NHẤT','nganhang')?></h2>

                    <div class="fusion-recent-posts avada-container layout-default layout-columns-4">
                        <section class="fusion-columns columns fusion-columns-4 columns-4">
                            <?php
                            $args_post = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 4,
                                'offset' => 0
                            );
                            $all_argsp = new WP_Query($args_post);
                            if ($all_argsp->have_posts()):while ($all_argsp->have_posts()):$all_argsp->the_post();
                                ?>
                                <div class="fusion-column column col col-lg-3 col-md-3 col-sm-3">
                                    <div class="fusion-flexslider flexslider flexslider-hover-type-none">
                                        <ul class="slides">
                                            <li><a href="<?php the_permalink();?>"
                                                   class="hover-type-none"><?php the_post_thumbnail('thumbnail');?></a></li>
                                        </ul>
                                    </div>
                                    <div class="recent-posts-content">

			<span class="vcard" style="display: none;">
			<span class="fn">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="Đăng bởi <?php the_author()?>" rel="author"><?php the_author();?></a>			</span>
		</span>

			<span class="updated" style="display:none;">
			2016-09-11T04:28:54+00:00		</span>

                                        <h4 class="entry-title"><a
                                                href="<?php the_permalink()?>"><?php the_title()?></a></h4>

                                        <p class="meta"><span><span
                                                    class="date">Ngày <?php the_time('d')?>/ <?php the_time('m')?>/ <?php the_time('Y')?></span></span><span
                                                class="meta-separator">|</span><span><a
                                                    href="<?php the_permalink()?>#respond"><?php comments_number()?></a></span></p>

                                        <?php the_excerpt()?></div>
                                </div>
                            <?php endwhile; endif; wp_reset_query();?>

                            <div class="fusion-clearfix"></div>
                        </section>
                    </div>
                </div>
            </div>
            </div>
</div>
</div>
</div>
<!-- fusion-row -->
</div>  <!-- #main -->





<?php get_footer() ?>

