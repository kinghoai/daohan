<?php
/********************************************************************
//widget lịch vạn sự by HuyKira
********************************************************************/
class Main_Category_widget extends WP_Widget {
  function Main_Category_widget() {
    $widget_ops = array( 'classname' => 'main_category_widget', 'description' => 'Lịch vạn sự, lịch vạn niên xây dựng bởi Huy Kira' ); // Widget Settings
    $control_ops = array( 'id_base' => 'main_category_widget' ); // Widget Control Settings
    $this->WP_Widget( 'Main_Category_widget', '+ Lịch vạn sự', $widget_ops, $control_ops ); // Create the widget
  }
  function widget($args, $instance) {
      extract( $args );
      $name    = $instance['name'];
      $width    = $instance['width'];
      if ( !defined('ABSPATH') )
      die('-1');
      echo $before_widget;
      echo $before_title.$name.$after_title;
  ?>
  <script type='text/javascript' charset="UTF-8" src='<?php bloginfo('url'); ?>/wp-content/plugins/lich-van-nien/js/hoangdao.min.js'></script>
  <style>
    .hdngay {
      max-width: <?php echo $width ; ?>!important;
    }
  </style>
  <?php echo $after_widget;
  } 
  function update($new_instance, $old_instance) {
    $instance['name']     = strip_tags($new_instance['name']);
    $instance['width']    = strip_tags($new_instance['width']);
    return $instance;
  }

  function form($instance) {
  $defaults = array(
      'name' => 'lịch vạn sự',
      'width' => '250px'
  );
  $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    <p>
      <label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Nhập tiêu đề: '); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo $instance['name']; ?>"  />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('width'); ?>"><?php _e('Nhập chiều dài: '); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" type="text" value="<?php echo $instance['width']; ?>" />
    </p>
    <?php }
}
 add_action('widgets_init', create_function('', 'return register_widget("Main_Category_widget");'));
?>