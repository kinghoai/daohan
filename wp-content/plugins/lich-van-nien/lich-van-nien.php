<?php
/*
Plugin Name: Lịch vạn niên
Plugin URI: http://www.huykira.net
Description: Plugin lịch vạn niên, lịch vạn sự được xây dựng bởi Huy Kira
Author: Huy Kira
Version: 1.0
Author URI: http://www.huykira.net
*/
if ( !function_exists( 'add_action' ) ) {
  echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
  exit;
}
define('HK_CALENDAR_PLUGIN_URL', plugin_dir_url(__FILE__));
define('HK_CALENDAR_PLUGIN_DIR', plugin_dir_path(__FILE__));
require_once(HK_CALENDAR_PLUGIN_DIR . 'include/widget.php');
require_once(HK_CALENDAR_PLUGIN_DIR . 'include/shortcode.php');

class Hk_Calender_Setting { 
	public function __construct() {
		add_action('admin_menu', function() {
			add_menu_page( 
	        	__( 'Lịch vạn sự', 'lichhk' ),
		        'Lịch vạn sự',
		        'manage_options',
		        'hk_calender_setting',
		        [$this, 'page_ca_st'],
		        'dashicons-calendar'
		    );
	    });
	    add_action('admin_init', [$this, 'register_setting']);
	}

	public function register_setting() {  
        register_setting('settings-group','my_setting');
    }

	public function page_ca_st() { ?>
		<div class="wrap tp-app">
			<h2>Hướng dẫn dùng lịch vạn niên </h2>
			<h3>Dùng shortcode</h3>
			<p>Sử dụng shortcode, chèn đoạn mã sau vào khung soạn thảo bài viết, page hoặc post</p>
		    <code>
		    	[lich-van-nien width="250px"]
		    </code>	
		    <em>Trong đó: width là chiều rộng của lịch hiển trị bên ngoài </em>

		    <p><i>Ngoài ra có thể chèn bất cứ vị trí nào trong giao diện với đoạn code </i></p>
		    <code>
		    	&lt;?php echo do_shortcode( '[lich-van-nien width="250px"]' ); ?&gt; 
		    </code>
		    <h3>Dùng widget</h3>
		    <p>Plugin cũng có cung cấp 1 widget để thực hiện việc hiển thị lịch, các bạn vui lòng vào <strong>Giao diện -> Widget </strong> để sử dụng!</p>
		    <p><strong>Plugin được xây dựng bởi <a href="http://huykira.net">Huy Kira</a> được share tại <a href="http://huykira.net">Blog Huy Kira</a></strong></p>
		</div>
	<?php }
}
$huykira = new Hk_Calender_Setting();