<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */

get_header(); ?>
<div id="main" class="clearfix " style="">
    <div class="fusion-row" style="">
		<?php if ( have_posts() ) : ?>

			<header class="search-key">
				<h1 class="page-title"><?php printf( __( 'Kết quả cho từ khóa: %s', 'nganhang' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

    </div>
    <!-- fusion-row -->
</div>  <!-- #main -->


<?php get_footer(); ?>
