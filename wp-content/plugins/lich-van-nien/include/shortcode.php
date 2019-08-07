<?php 
if ( !function_exists( 'add_action' ) ) {
  echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
  exit;
}
function create_lich_shortcode($args) { 
if($args['width']) { 
		$width  = $args['width'];
	} else {
		$width = '100%';
	} ?>
	<script type='text/javascript' charset="UTF-8" src='<?php bloginfo('url'); ?>/wp-content/plugins/lich-van-nien/js/hoangdao.min.js'></script>
	<style>
		.hdngay {
			max-width: <?php echo $width ; ?>!important;
		}
	</style>
<?php  }
add_shortcode( 'lich-van-nien', 'create_lich_shortcode' );