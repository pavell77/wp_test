<?php

/*
 * Plugin Name: pl-accordion
 * Plugin URI: https://localhost
 * Description: accordion
 * Author: pl
 * Author URI: https://localhost
 * License: GPLv2 or later
 */
 
 add_action( 'admin_head', 'true_colored_admin_bar_0073aa' );
function true_colored_admin_bar_0073aa(){
	echo '<style>#wpadminbar{background-color: #00ff00;}</style>';
}