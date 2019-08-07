<?php
/**
 * The template for displaying all single posts and attachments
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
<h1 class="entry-title"><?php the_title()?></h1>
<div class="post-content">
    <?php the_content();?>
</div>

<div class="fusion-meta-info"><div class="fusion-meta-info-wrapper">By <span class="vcard"><span class="fn"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="Đăng bởi <?php the_author()?>" rel="author"><?php the_author()?></a></span></span><span class="fusion-inline-sep">|</span>


			<span class="updated" style="display:none;">
			<?php printf('Ngày %s / %s / %s',get_the_time('d'),get_the_time('m'),get_the_time('Y'));?>		</span>

        <span><?php printf('Ngày %s / %s / %s',get_the_time('d'),get_the_time('m'),get_the_time('Y'));?>	</span><span class="fusion-inline-sep">|</span><a href="#" rel="category tag"><?php $category_detail= get_the_category($post->ID); foreach($category_detail as $cd){ echo $cd->cat_name; } ?></a><span class="fusion-inline-sep">|</span><span class="fusion-comments"><a href="<?php the_permalink()?>#respond"><?php echo wp_count_comments($post->ID)->total_comments;?> Bình luận</a></span></div></div>
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
    $posttype = get_post_type();
    $args = array(
        'post_type' => $posttype,
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'rand',
        'post__not_in' => array($post->ID)
    );
    $all_args = new WP_Query($args);
    if($all_args->post_count>0):
    ?>
    <div class="related-posts single-related-posts">
    <div class="fusion-title fusion-title-size-three sep-single" style="margin-top:0px;margin-bottom:0px;"><h3 class="title-heading-left"><?php _e('Bài viết liên quan','nganhang')?></h3><div class="title-sep-container"><div class="title-sep sep-single"></div></div></div>




    <div class="fusion-carousel" data-imagesize="fixed" data-metacontent="yes" data-autoplay="no" data-touchscroll="no" data-columns="3" data-itemmargin="20px" data-itemwidth="180" data-touchscroll="yes" data-scrollitems="">
        <div class="fusion-carousel-positioner">
            <ul class="fusion-carousel-holder">
                <?php if($all_args->have_posts()):while($all_args->have_posts()):$all_args->the_post();?>
                <li class="fusion-carousel-item">
                    <div class="fusion-carousel-item-wrapper">

                        <div class="fusion-image-wrapper fusion-image-size-fixed" aria-haspopup="true">

                            <?php the_post_thumbnail('thumbnail')?>



                            <div class="fusion-rollover">
                                <div class="fusion-rollover-content">

                                    <a class="fusion-rollover-link" href="<?php the_permalink()?>" title="<?php the_title()?>">Permalink</a>



                                    <div class="fusion-rollover-sep"></div>

                                    <a class="fusion-rollover-gallery" href="<?php the_post_thumbnail_url('full')?>" data-id="1125" data-rel="iLightbox[gallery]" data-title="<?php the_title()?>" data-caption="<?php the_title()?>">
                                        Gallery					</a>






                                </div>
                            </div>


                        </div>


                        <h4 class="fusion-carousel-title">
                            <a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a>
                        </h4>

                        <div class="fusion-carousel-meta">
                            <span class="fusion-date"><?php printf('Ngày %s / %s / %s', get_the_time('d'), get_the_time('m'), get_the_time('Y'))?></span>

                            <span class="fusion-inline-sep">|</span>
                            <span><a href="<?php the_permalink()?>#respond" title="<?php the_title()?>"><?php echo wp_count_comments($post->ID)->total_comments;?> Bình luận</a></span>
                        </div><!-- fusion-carousel-meta -->
                    </div><!-- fusion-carousel-item-wrapper -->
                </li>
            <?php endwhile; endif; wp_reset_query();?>
            </ul><!-- fusion-carousel-holder -->
            <div class="fusion-carousel-nav">
                <span class="fusion-nav-prev"></span>
                <span class="fusion-nav-next"></span>
            </div>

        </div><!-- fusion-carousel-positioner -->
    </div><!-- fusion-carousel -->
</div><!-- related-posts -->
    <?php endif;?>



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

    </div>
    <?php if(is_active_sidebar('sidebar-2')){
        dynamic_sidebar('sidebar-2');
    }?>
</div>
</div>  <!-- fusion-row -->
</div>  <!-- #main -->


<?php get_footer(); ?>
