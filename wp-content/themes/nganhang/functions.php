<?php
/**
 * Ngan Hang functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */

/**
 * Ngan Hang only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'nganhang_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own nganhang_setup() function to override in a child theme.
 *
 * @since Ngan Hang 1.0
 */
function nganhang_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/nganhang
	 * If you're building a theme based on Ngan Hang, use a find and replace
	 * to change 'nganhang' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nganhang' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Ngan Hang 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'nganhang' ),
		'social'  => __( 'Social Links Menu', 'nganhang' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', nganhang_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // nganhang_setup
add_action( 'after_setup_theme', 'nganhang_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Ngan Hang 1.0
 */
function nganhang_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nganhang_content_width', 840 );
}
add_action( 'after_setup_theme', 'nganhang_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Ngan Hang 1.0
 */
function nganhang_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'footer', 'nganhang' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'nganhang' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Content sidebar', 'nganhang' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'nganhang' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'nganhang' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'nganhang' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nganhang_widgets_init' );

if ( ! function_exists( 'nganhang_fonts_url' ) ) :
/**
 * Register Google fonts for Ngan Hang.
 *
 * Create your own nganhang_fonts_url() function to override in a child theme.
 *
 * @since Ngan Hang 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function nganhang_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'nganhang' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'nganhang' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'nganhang' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Ngan Hang 1.0
 */
function nganhang_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'nganhang_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Ngan Hang 1.0
 */
function nganhang_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'nganhang-fonts', nganhang_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'nganhang-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'nganhang-ie', get_template_directory_uri() . '/css/ie.css', array( 'nganhang-style' ), '20160816' );
	wp_style_add_data( 'nganhang-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'nganhang-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'nganhang-style' ), '20160816' );
	wp_style_add_data( 'nganhang-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'nganhang-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'nganhang-style' ), '20160816' );
	wp_style_add_data( 'nganhang-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'nganhang-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'nganhang-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'nganhang-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'nganhang-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}

	wp_enqueue_script( 'nganhang-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

	wp_localize_script( 'nganhang-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'nganhang' ),
		'collapse' => __( 'collapse child menu', 'nganhang' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'nganhang_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Ngan Hang 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function nganhang_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'nganhang_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Ngan Hang 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function nganhang_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Ngan Hang 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function nganhang_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'nganhang_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Ngan Hang 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function nganhang_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'nganhang_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Ngan Hang 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function nganhang_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'nganhang_widget_tag_cloud_args' );


function slidebaner(){
    global $post;
    ?>
    <div class="fusion-slider-container fusion-slider-1062  full-width-slider-container" style="height:600px;max-width:100%;">
        <style type="text/css" scoped="scoped">
            .fusion-slider-1062 .flex-direction-nav a {
                width:63px;height:63px;line-height:63px;margin-top:-31.5px;font-size:25px;					}
        </style>
        <div class="fusion-slider-loading">Loading...</div>
        <div class="tfs-slider flexslider main-flex full-width-slider" style="max-width:100%;" data-slider_width="100%" data-slider_height="600px" data-full_screen="0" data-parallax="1" data-nav_arrows="0" data-pagination_circles="0" data-autoplay="0" data-loop="0" data-animation="fade" data-slideshow_speed="7000" data-animation_speed="600" data-typo_sensitivity="0.6" data-typo_factor="1.5" data-nav_box_width="63px" data-nav_box_height="63px" data-nav_arrow_size="25px" >
            <ul class="slides" style="max-width:100%;">
                <li data-mute="yes" data-loop="yes" data-autoplay="yes">
                    <div class="slide-content-container slide-content-center" style="display: none;">
                        <div class="slide-content" style="">
                            <div class="heading with-bg">
                                <div class="fusion-title-sc-wrapper" style="background-color: rgba(255,255,255,0.6);">
                                    <div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-two" style="margin-top:0px;margin-bottom:0px;">
                                        <h1 class="title-heading-center" style="color:#001E67;"><?php echo get_post_meta($post->ID,TITLE_BLOCK.'tieu-de-lon-cho-banner',true)?></h1></div>													</div>

                                </div>
                            <div class="caption ">
                                <div class="fusion-title-sc-wrapper" style="">
                                    <div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-three"
                                         style="margin-top:0px;margin-bottom:0px;">
                                        <div class="title-heading-center-2"><span style="font-weight: bold; color:#001E67; font-family: arial;"><?php echo get_post_meta($post->ID, TITLE_BLOCK . 'tieu-de-nho-cho-banner', true); ?></span>
                                            <style>
                                                h2.title-heading-center {
                                                    font-family: roboto !important;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if(get_post_meta($post->ID,TITLE_BLOCK.'so-dien-thoai-hotline',true)):?>
                            <div class="buttons" >
                                <div class="tfs-button-1"><div class="fusion-button-wrapper fusion-aligncenter"><style type="text/css" scoped="scoped">.fusion-button.button-1 .fusion-button-text, .fusion-button.button-1 i {color:#ffffff;}.fusion-button.button-1 {border-width:0px;border-color:#ffffff;}.fusion-button.button-1 .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-1:hover .fusion-button-text, .fusion-button.button-1:hover i,.fusion-button.button-1:focus .fusion-button-text, .fusion-button.button-1:focus i,.fusion-button.button-1:active .fusion-button-text, .fusion-button.button-1:active{color:#ffffff;}.fusion-button.button-1:hover, .fusion-button.button-1:focus, .fusion-button.button-1:active{border-width:0px;border-color:#ffffff;}.fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:active .fusion-button-icon-divider{border-color:#ffffff;}.fusion-button.button-1{background: #3B5998;}.fusion-button.button-1:hover,.button-1:focus,.fusion-button.button-1:active{background: #0098D3;}.fusion-button.button-1{width:auto;}</style><a class="fusion-button button-flat button-round button-xlarge button-default button-1" target="_self" href="tel:<?php echo get_post_meta($post->ID,TITLE_BLOCK.'so-dien-thoai-hotline',true)?>"><span class="fusion-button-text">HOTLINE: <?php echo get_post_meta($post->ID,TITLE_BLOCK.'so-dien-thoai-hotline',true)?> <?php echo get_post_meta($post->ID,TITLE_BLOCK.'ten-chu-hotline',true);?></span></a></div></div>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="background background-image" style="background-image: url(/wp-content/uploads/2019/04/d22c96e8bdad976f2cd572ddab63a596.jpg);max-width:100%;height:600px;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo get_post_meta($post->ID,TITLE_BLOCK.'hinh-banner-lon',true)?>', sizingMethod='scale');-ms-filter:'progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo get_post_meta($post->ID,TITLE_BLOCK.'hinh-banner-lon',true)?>', sizingMethod='scale')';" data-imgwidth="908">
                    </div>
                </li>

            </ul>
        </div>
    </div>
<?php
}
function before_field(){
    ?>
    <div id="comment-input">
<?php
}
add_action('comment_form_before_fields','before_field');
function after_field(){
    ?>
    </div>
<?php
}
add_action('comment_form_after_fields','after_field');

class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {

    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // Build HTML.
        $output .= $indent . '<li id="menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        // Link attributes.
        $attributes  = ! empty( $item->title ) ? ' title="'  . esc_attr( $item->title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
function custom_remove_sp_slug($post_link, $post, $leavename)
{
    if ('service' != $post->post_type || 'publish' != $post->post_status) {
        return $post_link;
    }
    $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);
    return $post_link;
}

add_filter('post_type_link', 'custom_remove_sp_slug', 10, 3);
function custom_parse_request_tricksy($query)
{

    // Only noop the main query
    if (!$query->is_main_query())
        return;

    // Only noop our very specific rewrite rule match
    if (2 != count($query->query) || !isset($query->query['page'])) {
        return;
    }

    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if (!empty($query->query['name'])) {
        $query->set('post_type', array('post', 'service', 'page'));
    }
}

add_action('pre_get_posts', 'custom_parse_request_tricksy');

function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');