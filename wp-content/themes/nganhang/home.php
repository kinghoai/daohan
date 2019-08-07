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



<div id="main" class="clearfix width-100" style="padding-left:30px;padding-right:30px">
    <div class="fusion-row" style="max-width:100%;">
        <div id="content" class="full-width">
            <div id="post-1062" class="post-1062 page type-page status-publish hentry">
                <div class="post-content">

                    <div
                        class="fusion-fullwidth fullwidth-box fusion-fullwidth-10  fusion-parallax-none nonhundred-percent-fullwidth"
                        style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:20px;padding-top:20px;padding-left:30px;padding-right:30px;padding-left:30px !important;padding-right:30px !important;background-color:rgba(255,255,255,0);">
                        <div class="fusion-row">
                            <header class="page-header">
                                <h1><span>
                                        <?php _e('TIN TỨC', 'nganhang') ?>
                                        </span>
                                </h1>
                            </header>

                            <div class="fusion-recent-posts avada-container layout-default layout-columns-4">
                                <section class="fusion-columns columns fusion-columns-4 columns-4">
                                    <?php
                                    $i = 1;
                                    if (have_posts()):while (have_posts()):the_post();
                                        ?>
                                        <div class="fusion-column column col col-lg-3 col-md-3 col-sm-3">
                                            <div class="fusion-flexslider flexslider flexslider-hover-type-none">
                                                <ul class="slides">
                                                    <li><a href="<?php the_permalink(); ?>"
                                                           class="hover-type-none" title="<?php the_title()?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="recent-posts-content">

                                            <span class="vcard" style="display: none;">
                                            <span class="fn">
                                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"
                                                   title="Đăng bởi <?php the_author() ?>"
                                                   rel="author"><?php the_author(); ?></a>			</span>
                                            </span>

                                            <span class="updated" style="display:none;">
                                            <?php printf('Ngày %s / %s / %s', get_the_time('d'), get_the_time('m'), get_the_time('Y')) ?>	</span>

                                                <h4 class="entry-title"><a
                                                        href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title() ?></a></h4>

                                                <p class="meta"><span><span
                                                            class="date">Ngày <?php the_time('d') ?>
                                                            / <?php the_time('m') ?>
                                                            / <?php the_time('Y') ?></span></span><span
                                                        class="meta-separator">|</span><span><a
                                                            href="<?php the_permalink() ?>#respond" title="<?php the_title()?>"><?php echo wp_count_comments($post->ID)->total_comments;?> Bình luận</a></span>
                                                </p>

                                                <?php the_excerpt() ?></div>
                                        </div>
                                    <?php
                                    if($i%4==0){
                                        echo '<div class="fusion-clearfix"></div>';
                                    }
                                    $i++;
                                    endwhile; endif;
                                    wp_reset_query(); ?>
                                    <div class="fusion-clearfix"></div>
                                    <div class="nav"><?php wp_pagenavi(); ?></div>
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

