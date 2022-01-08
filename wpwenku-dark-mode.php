<?php
/*
Plugin Name: WPWenku Dark Mode
Description: Dark Mode for WPWenku.com
Plugin URI:  https://WPWenku.com/
Version:     1.1
Author:      WPWenku.com
Author URI:  https://WPWenku.com
License URI: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


add_action('wp_print_styles', 'wpwkdm_enquescripts');

function wpwkdm_enquescripts()
{
    wp_enqueue_style("wpwenku-darkmode", plugins_url('/css/darkmode.css', __FILE__));
}
