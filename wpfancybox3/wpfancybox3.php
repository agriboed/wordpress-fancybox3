<?php
/*
Plugin Name: WP fancyBox3
Description: The plugin allows to include <a href="http://fancyapps.com/fancybox/3/" target=_blank>fancyBox 3</a> on your website
Version: 1.0.6
Tags: fancybox, lightbox, gallery, image, photo, video, flash, overlay, youtube, vimeo, dailymotion, pdf, svg, iframe, swf, jquery, webp
Author: AGriboed
Author URI: https://v1rus.ru/
*/

if (!class_exists('WPfancyBox3')) {
    require __DIR__ . '/src/Core.php';
    new \WPFancyBox3\Core(__FILE__);
}