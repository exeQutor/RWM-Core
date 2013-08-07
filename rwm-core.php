<?php

/*
Plugin Name: RWM Core
Plugin URI: http://www.realworldmedia.com.au/
Description: Manage your post and theme options with this neat plugin.
Author: Real World Media
Version: 0.1.5
Author URI: http://www.realworldmedia.com.au/
*/

define('RWM_VERSION', '0.0.1');
define('RWM_DIR', trailingslashit(plugin_dir_path(__FILE__)));
define('RWM_URL', trailingslashit(plugin_dir_url(__FILE__)));
define('RWM_FILE', __FILE__);
define('RWM_NAME', 'RWM Core');
define('RWM_SINGULAR', 'RWM Core');
define('RWM_SLUG', 'rmw_core');
define('RWM_PREFIX', 'rwm_');

require_once(RWM_DIR . 'controllers/main.php'); new RWM_Main;

// EOF ./rwm-core.php