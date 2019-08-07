<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
               <h1><span> <?php
                   echo get_query_var( 'term' );
                   ?>
               </span>
               </h1>

            </header><!-- .page-header -->

            <?php
            // Start the Loop.
            $k=1;
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */

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
            endwhile;
        wp_reset_query();
            // Previous/next page navigation.
            echo '<div class="nav">';
            wp_pagenavi();
        echo '</div>';

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
