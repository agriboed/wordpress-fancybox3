<?php
/*
Plugin Name: WP FancyBox 3
Plugin URI: https://v1rus.ru/
Description: Enable support for the jQuery Fancybox 3 on the your website
Text Domain: wp_fancybox3
Domain Path: languages
Version: 1.0
Author: AGriboed
Author URI: https://v1rus.ru/
*/

if (!class_exists('WPFancybox')) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'WPFancybox.php';

    new WPFancybox(__FILE__);
}