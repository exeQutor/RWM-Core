<?php

/**
 * @package RWM Core
 * @author Randolph
 */
 
 class RWM_Main {
    function __construct() {
        // Add theme supports
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_image_size('rwm960', 960, 960, true);
    }
 }