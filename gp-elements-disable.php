<?php
/*
Plugin Name: GP Elements Disable
Plugin URI: https://github.com/WestCoastDigital/gp-elements-disable
Description: Adds functionality to remove GeneratePress Elements such as backgrounds and sidebars
Version: 1.0.0
Author: West Coast Digital
Author URI: hhttps://github.com/WestCoastDigital/
Text Domain: generatepress
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once 'inc/bg-options.php';

require_once 'inc/sidebar-options.php';
