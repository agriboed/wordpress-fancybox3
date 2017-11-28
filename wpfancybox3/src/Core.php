<?php

namespace WPFancyBox3;

/**
 * Class WPfancyBox3
 * @package WPFancyBox3
 */
class Core
{
    /**
     * @var string
     */
    protected static $key = 'wpfancybox3';

    /**
     * @var string
     */
    protected static $plugin_url;

    /**
     * @var string
     */
    protected static $plugin_basename;

    /**
     * @var string
     */
    protected static $plugin_settings_url;

    /**
     * @var
     */
    protected static $plugin_dir;

    /**
     * @var string
     */
    protected static $fancybox_version = '3.2.9';

    /**
     * WPfancyBox3 constructor.
     *
     * @param $plugin_file
     */
    public function __construct($plugin_file)
    {
        static::$plugin_url          = plugins_url('/', $plugin_file);
        static::$plugin_basename     = plugin_basename($plugin_file);
        static::$plugin_dir          = plugin_dir_path($plugin_file);
        static::$plugin_settings_url = admin_url('options-general.php?page=' . static::$key);

        add_action('wp_enqueue_scripts', array($this, 'registerAssets'));
        add_action('admin_enqueue_scripts', array($this, 'registerAssetsAdmin'));
        add_action('wp_footer', array($this, 'renderFront'), 999);
        add_action('admin_menu', array($this, 'addLink'));
        add_action('admin_init', array($this, 'registerOptions'));
        add_filter('plugin_action_links_' . self::$plugin_basename, array($this, 'addSettingsLink'));
    }

    /**
     * Register whole assets in WP for the front
     */
    public function registerAssets()
    {
        wp_enqueue_script('jquery-fancybox', static::$plugin_url . 'assets/js/jquery.fancybox.min.js', array('jquery'),
            static::$fancybox_version, true);
        wp_enqueue_style('jquery-fancybox', static::$plugin_url . 'assets/css/jquery.fancybox.min.css', false,
            static::$fancybox_version, 'screen');
    }

    /**
     * Register assets for admin area
     */
    public function registerAssetsAdmin()
    {
        wp_register_style(static::$key, static::$plugin_url . 'assets/css/admin.css', null, null, 'screen');
    }

    /**
     * Render script on site area
     */
    public function renderFront()
    {
        wp_enqueue_style('jquery-fancybox');
        wp_enqueue_script('jquery-fancybox');

        $options  = get_option(static::$key, array());
        $selector = ! empty($options['selector']) ? $options['selector'] : 'a[href*=".jpg"]:not(.nolightbox,li.nolightbox>a), area[href*=".jpg"]:not(.nolightbox), a[href*=".jpeg"]:not(.nolightbox,li.nolightbox>a), area[href*=".jpeg"]:not(.nolightbox), a[href*=".png"]:not(.nolightbox,li.nolightbox>a), area[href*=".png"]:not(.nolightbox)';

        include static::$plugin_dir . '/templates/front.php';
    }

    /**
     *  Method adds link to options page on main admin area menu
     */
    public function addLink()
    {
        add_options_page(
            __('WP fancyBox3 Settings', static::$key),
            __('WP fancyBox3', static::$key),
            'manage_options',
            static::$key,
            array($this, 'renderAdmin')
        );
    }

    /**
     * Method adds a new one link to array
     *
     * @param array $links
     *
     * @return array
     */
    public function addSettingsLink($links)
    {
        $links[] = '<a href="' . self::$plugin_settings_url . '">' . __('Settings', static::$key) . '</a>';

        return $links;
    }

    /**
     * Register plugin settings in WP
     */
    public function registerOptions()
    {
        register_setting(static::$key, static::$key);
    }

    /**
     * WP Plugin Settings Page
     * @throws \Exception
     */
    public function renderAdmin()
    {
        wp_enqueue_style(static::$key);

        $options = get_option(static::$key, array());
        $key     = static::$key;

        if ( ! file_exists(static::$plugin_dir . '/templates/admin.php')) {
            throw new \RuntimeException('Template not found');
        }

        include static::$plugin_dir . '/templates/admin.php';
    }
}