<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */
define('TITLE_BLOCK','wpcf-');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <title><?php wp_title(''); ?></title>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/html5shiv.js"></script>
    <![endif]-->

    <script>
        /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
        if ( typeof WebFontConfig === "undefined" ) {
            WebFontConfig = new Object();
        }
        WebFontConfig['google'] = {families: ['Open+Sans:400,800', 'Raleway:800', 'PT+Sans:700']};

        (function() {
            var wf = document.createElement( 'script' );
            wf.src = '../ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName( 'script' )[0];
            s.parentNode.insertBefore( wf, s );
        })();
    </script>
    <?php wp_head();?>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <!--    <link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/styles11b8.css?ver=4.5' type='text/css' media='all' />-->
    <link rel='stylesheet' id='avada-stylesheet-css'  href='<?php echo get_template_directory_uri();?>/css/stylefa0c.css?ver=4.0.3' type='text/css' media='all' />
    <!--[if lte IE 9]>
    <link rel='stylesheet' id='avada-shortcodes-css'  href='<?php echo get_template_directory_uri()?>/assets/css/shortcodes.css?ver=4.0.3' type='text/css' media='all' />
    <![endif]-->
    <link rel='stylesheet' id='fontawesome-css'  href='<?php echo get_template_directory_uri();?>/assets/fonts/fontawesome/font-awesomefa0c.css?ver=4.0.3' type='text/css' media='all' />
    <!--[if lte IE 9]>
    <link rel='stylesheet' id='avada-IE-fontawesome-css'  href='<?php echo get_template_directory_uri()?>/assets/fonts/fontawesome/font-awesome.css?ver=4.0.3' type='text/css' media='all' />
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel='stylesheet' id='avada-IE8-css'  href='<?php echo get_template_directory_uri()?>/css/ie8.css?ver=4.0.3' type='text/css' media='all' />
    <![endif]-->
    <!--[if IE]>
    <link rel='stylesheet' id='avada-IE-css'  href='<?php echo get_template_directory_uri()?>/css/ie.css?ver=4.0.3' type='text/css' media='all' />
    <![endif]-->
    <link rel='stylesheet' id='avada-animations-css'  href='<?php echo get_template_directory_uri();?>/css/animationsfa0c.css?ver=4.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='avada-dynamic-css-css'  href='<?php echo get_template_directory_uri();?>/assets/css/avada-1062c459.css?timestamp=1473568930&amp;ver=4.6.1' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/jqueryb8ff.js?ver=1.12.4'></script>



    <!--[if IE 9]> <script>var _fusionParallaxIE9 = true;</script> <![endif]-->

    <!--[if lte IE 8]>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            var imgs, i, w;
            var imgs = document.getElementsByTagName( 'img' );
            for( i = 0; i < imgs.length; i++ ) {
                w = imgs[i].getAttribute( 'width' );
                imgs[i].removeAttribute( 'width' );
                imgs[i].removeAttribute( 'height' );
            }
        });
    </script>

    <script src="<?php echo get_template_directory_uri()?>/assets/js/excanvas.js"></script>

    <![endif]-->

    <!--[if lte IE 9]>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            // Combine inline styles for body tag
            jQuery('body').each( function() {
                var combined_styles = '<style type="text/css">';

                jQuery( this ).find( 'style' ).each( function() {
                    combined_styles += jQuery(this).html();
                    jQuery(this).remove();
                });

                combined_styles += '</style>';

                jQuery( this ).prepend( combined_styles );
            });
        });
    </script>

    <![endif]-->

    <script type="text/javascript">
        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);
    </script>


</head>
<body class="home page page-id-1062 page-template page-template-100-width page-template-100-width-php fusion-body no-tablet-sticky-header no-mobile-sticky-header no-mobile-slidingbar mobile-logo-pos-left layout-wide-mode menu-text-align-left mobile-menu-design-modern fusion-image-hovers fusion-show-pagination-text">
<div id="wrapper" class="">
    <div id="home" style="position:relative;top:1px;"></div>


    <div class="fusion-header-wrapper">
        <div class="fusion-header-v2 fusion-logo-left fusion-sticky-menu- fusion-sticky-logo- fusion-mobile-logo- fusion-mobile-menu-design-modern ">

            <!--<div class="fusion-secondary-header">
                <div class="fusion-row">
                    <div class="fusion-alignleft"><div class="fusion-contact-info">Hotline: 0916.839.839<a href="mailto:"></a></div></div>
                </div>
            </div>-->
            <div class="fusion-header">
                <div class="fusion-row">
                    <div class="fusion-logo" data-margin-top="20px" data-margin-bottom="20px" data-margin-left="0px" data-margin-right="0px">
                        <?php if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                            }
                        ?>
                    </div>
                    <div class="fusion-main-menu">
<!--                        <ul id="menu-main-menu" class="fusion-menu"><li  id="menu-item-1048"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1048"  ><a  href="lien-he/index.html"><span class="menu-text">Liên hệ</span></a></li></ul>-->
                    <?php
                    wp_nav_menu( array(
                        'menu'   => 'primary',
                        'menu_class' => 'fusion-menu',
                        'menu_id' => 'menu-main-menu',
                        'container' => '',
                        'walker' => new WPDocs_Walker_Nav_Menu()
                    ) );
                    ?>
                    </div>
                    <div class="fusion-mobile-menu-icons">
                        <a href="#" class="fusion-icon fusion-icon-bars"></a>


                    </div>


                    <div class="fusion-mobile-nav-holder"></div>

                </div>
            </div>
        </div>
        <div class="fusion-clearfix"></div>
    </div>
