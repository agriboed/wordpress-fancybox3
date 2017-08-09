<?php
/*
Plugin Name: WP fancyBox3
Description: The plugin allows to include <a href="http://fancyapps.com/fancybox/3/" target=_blank>fancyBox 3</a> on your website
Version: 1.0
Author: AGriboed
Author URI: https://v1rus.ru
*/

if (!class_exists('WPfancyBox3')) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'WPfancyBox3.php';
    new WPfancyBox3(__FILE__);
}