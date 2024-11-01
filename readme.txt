=== Spring Metrics ===

Contributors: Bob Hiler
Tags: javascript, springmetrics, analytics
Requires at least: 2.7
Tested up to: 3.1.3
Stable tag: 1.0

Enables Spring Metrics on all pages.

== Description ==

This plugin adds the required javascript for Spring Metrics to your header.

For more information visit:
[Spring Metrics](http://www.springmetrics.com)

== Installation ==

1. After signing into Word Press Admin, navigate to Plugins > Add New > Upload.  
Upload the springmetrics.zip file.
2. Return to the Plugins menu, locate the Spring Metrics item, and Activate
3. Navigate to Admin > Settings > Spring Metrics, enter your Spring Metrics ID, and click "Save." (Note: Your Spring Metrics ID is located in Step 1 of the Spring Metrics setup page.)

== Troubleshooting ==

1. If your Spring Metrics tracking code does not appear in your page as expected, confirm that your header.php file includes the wp_head() action hook.
