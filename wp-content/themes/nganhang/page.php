<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */

get_header(); ?>

<div id="main" class="clearfix " style="">
    <div class="fusion-row" style="">
        <div id="content" style="float: left;">


            <div id="post-1104" class="post post-1104 type-post status-publish format-standard has-post-thumbnail hentry category-dich-vu">



                <?php while(have_posts()):the_post();?>
                    <h2 class="entry-title"><?php the_title()?></h2>
                    <div class="post-content">
                        <?php the_content();?>
                    </div>

                    <div class="fusion-meta-info"><div class="fusion-meta-info-wrapper">By <span class="vcard"><span class="fn"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="Đăng bởi <?php the_author()?>" rel="author"><?php the_author()?></a></span></span><span class="fusion-inline-sep">|</span>


			<span class="updated" style="display:none;">
			<?php printf('Ngày %s / %s / %s',get_the_time('d'),get_the_time('m'),get_the_time('Y'));?>		</span>

                            <span><?php printf('Ngày %s / %s / %s',get_the_time('d'),get_the_time('m'),get_the_time('Y'));?>	</span><span class="fusion-inline-sep">|</span><span class="fusion-comments"><a href="<?php the_permalink()?>#respond" title="<?php the_title()?>"><?php echo wp_count_comments($post->ID)->total_comments;?> Bình luận</a></span></div></div>
                <?php endwhile;?>
                <div class="fusion-sharing-box fusion-single-sharing-box share-box">

                    <h4>Chia sẻ bài viết</h4>
                    <div class="fusion-social-networks boxed-icons">
                        <div class="fusion-social-networks-wrapper">
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                </div>


                <?php
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                ?>


            </div>
        </div>
        <div id="sidebar" class="sidebar fusion-widget-area fusion-content-widget-area" style="float: right;">


            <div id="search-2" class="widget widget_search">
                <form role="search" class="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="search-table">
                        <div class="search-field">
                            <input type="text" value="<?php echo get_search_query(); ?>" name="s" class="s" placeholder="Search ..." />
                        </div>
                        <div class="search-button">
                            <input type="submit" class="searchsubmit" value="&#xf002;" />
                        </div>
                    </div>
                </form>
            </div>	</div>
    </div>  <!-- fusion-row -->
</div>  <!-- #main -->

<?php get_footer(); ?>
