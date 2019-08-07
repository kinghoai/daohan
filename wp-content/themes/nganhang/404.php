<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */

get_header(); ?>

<div id="main" class="clearfix " style="">
    <div class="fusion-row" style="">
        <div id="content" style="float: left;">

            <h1 style="text-align: center; background: #3B5998; color: #fff; border-radius: 5px; box-shadow: 0 5px 5px rgba(255,47,52,0.5)" >TRANG KHÔNG TÌM THẤY! VUI LÒNG KIỂM TRA LẠI ĐƯỜNG DẪN</h1>

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
