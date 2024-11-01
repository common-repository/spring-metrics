<?php
/*
Plugin Name: Spring Metrics
Plugin URI: TBD
Description: Enables <a href="http://www.springmetrics.com/">Spring Metrics</a> on all pages.
Version: 1.0
Author: Bob Hiler, adapted from Kevin Sylvestre's Google Analytics plugin
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_springmetrics() {
  add_option('spring_metrics_id', '');
}

function deactivate_springmetrics() {
  delete_option('spring_metrics_id');
}

function admin_init_springmetrics() {
  register_setting('springmetrics', 'spring_metrics_id');
}

function admin_menu_springmetrics() {
  add_options_page('Spring Metrics', 'Spring Metrics', 8, 'springmetrics', 'options_page_springmetrics');
}

function options_page_springmetrics() {
  include(WP_PLUGIN_DIR.'/spring-metrics/options.php');  
}

function springmetrics() { 
  
  $spring_metrics_id = get_option('spring_metrics_id');
	if ( $spring_metrics_id != '') {
?>
<script type='text/javascript'>
 var _springMetq = _springMetq || [];
 _springMetq.push(['id', '<?php echo $spring_metrics_id;?>']);
 (
  function(){
   var s = document.createElement('script');
   s.type = 'text/javascript';
   s.async = true;
   s.src = ('https:' == document.location.protocol ? 'https://d3rmnwi2tssrfx.cloudfront.net/a.js' : 'http://static.springmetrics.com/a.js');
   var x = document.getElementsByTagName('script')[0];
   x.parentNode.insertBefore(s, x);
  }
 )();
</script>
<?php
	}
}

register_activation_hook(__FILE__, 'activate_springmetrics');
register_deactivation_hook(__FILE__, 'deactivate_springmetrics');

if (is_admin()) {
  add_action('admin_init', 'admin_init_springmetrics');
  add_action('admin_menu', 'admin_menu_springmetrics');
}

if (!is_admin()) {
	add_action('wp_head', 'springmetrics');
}

?>