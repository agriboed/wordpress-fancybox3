<?php

/**
 * Author: AGriboed
 * https://v1rus.ru | alexv1rs@gmail.com
 *
 */
class WPFancybox
{
    private static $version = '3.2.1';
    private static $key = 'wpfancybox3';
    private static $plugin_url;
    private static $plugin_basename;
    private static $plugin_settings_url;

    public function __construct($file)
    {
        self::setPluginUrl(plugins_url('/', $file));
        self::setPluginBasename(plugin_basename($file));
        self::setPluginSettingsUrl(admin_url('options-general.php?page=' . self::getKey()));

        add_action('wp_enqueue_scripts', array($this, 'registerAssets'), 10);
        add_action('wp_footer', array($this, 'includeScript'), 10);
        add_action('admin_menu', array($this, 'addLinkToMenu'));
        add_action('admin_init', array($this, 'registerOptions'));
        add_filter('plugin_action_links_' . self::$plugin_basename, array($this, 'addSettingsLink'));
    }

    /**
     * @return string
     */
    public static function getKey()
    {
        return self::$key;
    }

    /**
     * @return string
     */
    public static function getVersion()
    {
        return self::$version;
    }

    /**
     * @return string
     */
    public static function getPluginUrl()
    {
        return self::$plugin_url;
    }

    /**
     * @param string $plugin_url
     */
    public static function setPluginUrl($plugin_url)
    {
        self::$plugin_url = $plugin_url;
    }

    /**
     * @return string
     */
    public static function getPluginBasename()
    {
        return self::$plugin_basename;
    }

    /**
     * @param string
     */
    public static function setPluginBasename($plugin_basename)
    {
        self::$plugin_basename = $plugin_basename;
    }

    /**
     * @return string
     */
    public static function getPluginSettingsUrl()
    {
        return self::$plugin_settings_url;
    }

    /**
     * @param string
     */
    public static function setPluginSettingsUrl($plugin_settings_url)
    {
        self::$plugin_settings_url = $plugin_settings_url;
    }

    /**
     *
     */
    public function registerAssets()
    {
        wp_register_script('jquery-fancybox', self::$plugin_url . 'assets/js/jquery.fancybox.js', array('jquery'), self::getVersion(), true);
        wp_register_style('jquery-fancybox', self::$plugin_url . 'assets/css/jquery.fancybox.css', false, self::getVersion(), 'screen');
    }

    /**
     * Render script on site area
     */
    public function includeScript()
    {
        wp_enqueue_style('jquery-fancybox');
        wp_enqueue_script('jquery-fancybox');

        $options = $this->getOptions();
        $selector = !empty($options['selector']) ? $options['selector'] : 'a[href*=".jpg"]:not(.nolightbox,li.nolightbox>a), area[href*=".jpg"]:not(.nolightbox), a[href*=".jpeg"]:not(.nolightbox,li.nolightbox>a), area[href*=".jpeg"]:not(.nolightbox), a[href*=".png"]:not(.nolightbox,li.nolightbox>a), area[href*=".png"]:not(.nolightbox)';

        echo "<script type=\"text/javascript\">
jQuery(document).ready(function(){
    var el = jQuery('{$selector}');";

        $settings = '{';
        $settings .= 'loop: ' . (!empty($options['loop']) ? 'true' : 'false') . ',';
        $settings .= 'margin: [' . (!empty($options['margin']['v']) ? (float)$options['margin']['v'] : '44') . ',' . (!empty($options['margin']['h']) ? (float)$options['margin']['h'] : '0') . '],';
        $settings .= !empty($options['gutter']) ? 'gutter : ' . (float)$options['gutter'] . ',' : '';
        $settings .= 'keyboard: ' . (!empty($options['keyboard']) ? 'true' : 'false') . ',';
        $settings .= 'arrows: ' . (!empty($options['arrows']) ? 'true' : 'false') . ',';
        $settings .= 'infobar: ' . (!empty($options['infobar']) ? 'true' : 'false') . ',';
        $settings .= 'toolbar: ' . (!empty($options['toolbar']) ? 'true' : 'false') . ',';

        $settings .= 'buttons: [';
        $settings .= !empty($options['buttons']['slideShow']) ? "'slideShow'," : '';
        $settings .= !empty($options['buttons']['fullScreen']) ? "'fullScreen'," : '';
        $settings .= !empty($options['buttons']['thumbs']) ? "'thumbs'," : '';
        $settings .= !empty($options['buttons']['close']) ? "'close'" : '';
        $settings .= '],';

        $settings .= !empty($options['idleTime']) ? 'idleTime: ' . (int)$options['idleTime'] . ',' : '';
        $settings .= !empty($options['smallBtn']) ? "smallBtn: '" . $options['smallBtn'] . "'," : '';

        $settings .= 'protect:' . (!empty($options['protect']) ? 'true' : 'false') . ',';
        $settings .= 'modal:' . (!empty($options['modal']) ? 'true' : 'false') . ',';

        if (!empty($options['animationEffect'])) {
            $settings .= "animationEffect: '" . $options['animationEffect'] . "',";
        }

        $settings .= !empty($options['animationDuration']) ? 'animationDuration: ' . (int)$options['animationDuration'] . ',' : '';

        if (!empty($options['zoomOpacity'])) {
            $settings .= "zoomOpacity: '" . $options['zoomOpacity'] . "',";
        }

        if (!empty($options['transitionEffect'])) {
            $settings .= "transitionEffect: '" . $options['transitionEffect'] . "',";
        }

        $settings .= !empty($options['transitionDuration']) ? 'transitionDuration: ' . (int)$options['animationDuration'] . ',' : '';

        if (!empty($options['slideClass'])) {
            $settings .= "slideClass: '" . $options['slideClass'] . "',";
        }

        if (!empty($options['baseClass'])) {
            $settings .= "baseClass: '" . $options['baseClass'] . "',";
        }

        $settings .= 'autoFocus: ' . (!empty($options['autoFocus']) ? 'true' : 'false') . ',';
        $settings .= 'backFocus: ' . (!empty($options['backFocus']) ? 'true' : 'false') . ',';
        $settings .= 'trapFocus: ' . (!empty($options['trapFocus']) ? 'true' : 'false') . ',';
        $settings .= 'fullScreen: { autoStart: ' . (!empty($options['fullScreen']['autoStart']) ? 'true' : 'false') . ' },';
        $settings .= 'touch: { vertical: ' . (!empty($options['touch']['vertical']) ? 'true' : 'false') . ', momentum: ' . (!empty($options['touch']['momentum']) ? 'true' : 'false') . '},';
        $settings .= 'slideShow: { autoStart: ' . (!empty($options['slideShow']['autoStart']) ? 'true' : 'false') . ', speed: ' . (!empty($options['slideShow']['speed']) ? (int)$options['slideShow']['speed'] : '400') . '},';
        $settings .= 'thumbs: { autoStart: ' . (!empty($options['thumbs']['autoStart']) ? 'true' : 'false') . ', momentum: ' . (!empty($options['thumbs']['hideOnClose']) ? 'true' : 'false') . '},';

        $settings .= "lang : 'default',
	i18n : {
		'default' : {
			CLOSE       : '" . (!empty($options['translation']['close']) ? $options['translation']['close'] : 'Close') . "',
			NEXT        : '" . (!empty($options['translation']['next']) ? $options['translation']['next'] : 'Next') . "',
			PREV        : '" . (!empty($options['translation']['prev']) ? $options['translation']['prev'] : 'Previous') . "',
			ERROR       : '" . (!empty($options['translation']['error']) ? $options['translation']['error'] : 'The requested content cannot be loaded. <br/> Please try again later.') . "',
			PLAY_START  : '" . (!empty($options['translation']['start']) ? $options['translation']['start'] : 'Start slideshow') . "',
			PLAY_STOP   : '" . (!empty($options['translation']['pause']) ? $options['translation']['stop'] : 'Pause slideshow') . "',
			FULL_SCREEN : '" . (!empty($options['translation']['full']) ? $options['translation']['full'] : 'Full screen') . "',
			THUMBS      : '" . (!empty($options['translation']['thumb']) ? $options['translation']['thumb'] : 'Thumbnails') . "',
		},
	}";

        if (!empty($options['customOptions'])) {
            $settings .= ',' . $options['customOptions'];
        }

        $settings .= '}';

        if (!empty($options['gallery'])) {
            echo "el.on('click', function() {
	        jQuery.fancybox.open( el, {$settings}, el.index( this ) );
	return false;});
	";
        } else {
            echo "el.fancybox($settings);";
        }

        echo ' });</script>';
    }

    /**
     *
     */
    public function addLinkToMenu()
    {
        add_options_page(
            'WP Fancybox 3 Settings',
            'WP Fancybox 3',
            'manage_options',
            self::getKey(),
            array($this, 'renderOptionsPage')
        );
    }

    /**
     *
     * @param array $links
     * @return array
     */
    public function addSettingsLink($links)
    {
        $links[] = '<a href="' . self::getPluginSettingsUrl() . '">Settings</a>';

        return $links;
    }

    /**
     * Register plugin settings in WP
     */
    public function registerOptions()
    {
        register_setting(self::getKey(), self::getKey());
    }

    /**
     * Get all plugin settins as array
     *
     * @return array
     */
    public function getOptions()
    {
        return get_option(self::getKey(), array());
    }

    /**
     * WP Plugin Settings Page
     */
    public function renderOptionsPage()
    {
        $options = $this->getOptions();
        $key = self::getKey();
        ?>
        <div>
            <form method="post" action="options.php">
                <h1>WP Fancybox 3 Settings</h1>
                <?php settings_fields(self::getKey()); ?>
                <?php do_settings_sections(self::getKey()); ?>
                <table class="wp-list-table widefat fixed striped">
                    <tr>
                        <th scope="row"><strong>Custom Css selector</strong></th>
                        <td>
                            <input type="text" name="<?php echo $key; ?>[selector]"
                                   placeholder="Custom Css Selector"
                                   value="<?php echo !empty($options['selector']) ? $options['selector'] : ''; ?>">
                        </td>
                        <td>
                            Use your own elements selector instead a plugin variant. <br>
                            Left blank for default:
                            <small>
                                a[href*=".jpg"]:not(.nolightbox,li.nolightbox>a),
                                area[href*=".jpg"]:not(.nolightbox), a[href*=".jpeg"]:not(.nolightbox,li.nolightbox>a),
                                area[href*=".jpeg"]:not(.nolightbox), a[href*=".png"]:not(.nolightbox,li.nolightbox>a),
                                area[href*=".png"]:not(.nolightbox)
                            </small>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Create a gallery</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[gallery]" <?php echo !empty($options['gallery']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Combine all images on a page into one gallery
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Loop</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[loop]" <?php echo !empty($options['loop']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Enable infinite gallery navigation
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Margin</strong></th>
                        <td>
                            <label>
                                Vertical
                                <input type="number"
                                       placeholder="Vertical"
                                       name="<?php echo $key; ?>[margin][v]"
                                       value="<?php echo !empty($options['margin']['v']) ? $options['margin']['v'] : ''; ?>">
                            </label>
                            <p></p>
                            <label>
                                Horizontal
                                <input type="number"
                                       placeholder="Horizontal"
                                       name="<?php echo $key; ?>[margin][h]"
                                       value="<?php echo !empty($options['margin']['h']) ? $options['margin']['h'] : ''; ?>">
                            </label>
                        </td>
                        <td>
                            Space around image, ignored if zoomed-in or viewport smaller than 800px. <br>
                            Left blank for
                            default values.
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Gutter</strong></th>
                        <td>
                            <input type="number"
                                   placeholder="Gutter"
                                   name="<?php echo $key; ?>[gutter]"
                                   value="<?php echo !empty($options['gutter']) ? $options['gutter'] : ''; ?>">
                        </td>
                        <td>
                            Horizontal space between slides.<br>Left blank for default values
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Keyboard</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[keyboard]" <?php echo !empty($options['keyboard']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Enable keyboard navigation
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Arrows</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[arrows]" <?php echo !empty($options['arrows']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Should display navigation arrows at the screen edges
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Infobar</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[infobar]" <?php echo !empty($options['infobar']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Should display infobar (counter and arrows at the top)
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Toolbar</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[toolbar]" <?php echo !empty($options['toolbar']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Should display toolbar (buttons at the top)
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Buttons</strong></th>
                        <td>
                            <label>
                                SlideShow
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[buttons][slideShow]" <?php echo !empty($options['buttons']['slideShow']) ? 'checked' : ''; ?>>
                            </label>
                            <p></p>
                            <label>
                                FullScreen
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[buttons][fullScreen]" <?php echo !empty($options['buttons']['fullScreen']) ? 'checked' : ''; ?>>
                            </label>
                            <p></p>
                            <label>
                                Thumbs
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[buttons][thumbs]" <?php echo !empty($options['buttons']['thumbs']) ? 'checked' : ''; ?>>
                            </label>
                            <p></p>
                            <label>
                                Close
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[buttons][close]" <?php echo !empty($options['buttons']['close']) ? 'checked' : ''; ?>>
                            </label>
                        </td>
                        <td>
                            What buttons should appear in the top right corner.
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>idle Time</strong></th>
                        <td>
                            <input type="number"
                                   placeholder="idle Time"
                                   name="<?php echo $key; ?>[idleTime]" min="0" step="1"
                                   value="<?php echo !empty($options['idleTime']) ? $options['idleTime'] : ''; ?>">
                        </td>
                        <td>
                            Detect "idle" time in seconds. <br>
                            Left blank for default value
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Small Buttons</strong></th>
                        <td>
                            <input type="text"
                                   placeholder="Small Buttons"
                                   name="<?php echo $key; ?>[smallBtn]"
                                   value="<?php echo !empty($options['smallBtn']) ? $options['smallBtn'] : ''; ?>">
                        </td>
                        <td>
                            Should display buttons at top right corner of the content
                            If 'auto' - they will be created for content having type 'html', 'inline' or 'ajax'.
                            <br>Left blank for default value.
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Protect</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[protect]" <?php echo !empty($options['protect']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Disable right-click and use simple image protection for images
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Modal</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[modal]" <?php echo !empty($options['modal']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Shortcut to make content "modal" - disable keyboard navigation, hide buttons, etc
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Animation Effect</strong></th>
                        <td>
                            <select name="<?php echo $key; ?>[animationEffect]">
                                <option>Disable</option>
                                <option value="zoom" <?php echo (!empty($options['animationEffect']) && $options['animationEffect'] === 'zoom') ? 'selected' : ''; ?>>
                                    Zoom - zoom images from/to thumbnail
                                </option>
                                <option value="fade" <?php echo (!empty($options['animationEffect']) && $options['animationEffect'] === 'fade') ? 'selected' : ''; ?>>
                                    Fade
                                </option>
                                <option value="zoom-in-out" <?php echo (!empty($options['animationEffect']) && $options['animationEffect'] === 'zoom-in-out') ? 'selected' : ''; ?>>
                                    Zoom-in-Out
                                </option>
                            </select>
                        </td>
                        <td>
                            Open/close animation type
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Animation Duration</strong></th>
                        <td>
                            <input type="number"
                                   min="0" step="1"
                                   placeholder="Animation Duration"
                                   name="<?php echo $key; ?>[animationDuration]"
                                   value="<?php echo !empty($options['animationDuration']) ? $options['animationDuration'] : ''; ?>">
                        </td>
                        <td>
                            Duration in ms for open/close animation.
                            <br>Left blank for default value
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Zoom Opacity</strong></th>
                        <td>
                            <input type="text"
                                   placeholder="Zoom Opacity"
                                   name="<?php echo $key; ?>[zoomOpacity]"
                                   value="<?php echo !empty($options['zoomOpacity']) ? $options['zoomOpacity'] : ''; ?>">
                        </td>
                        <td>
                            Should image change opacity while zooming.
                            If opacity is 'auto', then opacity will be changed if image and thumbnail have different
                            aspect ratios. <br>
                            Left blank for default value
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Transition Effect</strong></th>
                        <td>
                            <select name="<?php echo $key; ?>[transitionEffect]">
                                <option>
                                    Disable
                                </option>
                                <option value="fade" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'fade') ? 'selected' : ''; ?>>
                                    Fade
                                </option>
                                <option value="slide" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'slide') ? 'selected' : ''; ?>>
                                    Slide
                                </option>
                                <option value="circular" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'circular') ? 'selected' : ''; ?>>
                                    Circular
                                </option>
                                <option value="tube" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'tube') ? 'selected' : ''; ?>>
                                    Tube
                                </option>
                                <option value="zoom-in-out" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'zoom-in-out') ? 'selected' : ''; ?>>
                                    Zoom-in-Out
                                </option>
                                <option value="rotate" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'rotate') ? 'selected' : ''; ?>>
                                    Rotate
                                </option>
                            </select>

                        </td>
                        <td>
                            Transition effect between slides
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Transition Duration</strong></th>
                        <td>
                            <input type="number"
                                   placeholder="Transition Duration"
                                   name="<?php echo $key; ?>[transitionDuration]"
                                   value="<?php echo !empty($options['transitionDuration']) ? $options['transitionDuration'] : ''; ?>">
                        </td>
                        <td>
                            Duration in ms for transition animation. <br>Left blank for default value
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Slide Class</strong></th>
                        <td>
                            <input type="text"
                                   placeholder="Slide Class"
                                   name="<?php echo $key; ?>[slideClass]"
                                   value="<?php echo !empty($options['slideClass']) ? $options['slideClass'] : ''; ?>">
                        </td>
                        <td>
                            Custom CSS class for slide element
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Base Class</strong></th>
                        <td>
                            <input type="text"
                                   placeholder="Base Class"
                                   name="<?php echo $key; ?>[baseClass]"
                                   value="<?php echo !empty($options['baseClass']) ? $options['baseClass'] : ''; ?>">
                        </td>
                        <td>
                            Custom CSS class for layout
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Auto Focus</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[autoFocus]" <?php echo !empty($options['autoFocus']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Try to focus on the first focusable element after opening
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Back Focus</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[backFocus]" <?php echo !empty($options['backFocus']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Put focus back to active element after closing
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Trap Focus</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[trapFocus]" <?php echo !empty($options['trapFocus']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            Do not let user to focus on element outside modal content
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>FullScreen Auto Start</strong></th>
                        <td>
                            <input type="checkbox"
                                   name="<?php echo $key; ?>[fullScreen][autoStart]" <?php echo !empty($options['fullScreen']['autoStart']) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Touch</strong></th>
                        <td>
                            <label>
                                Allow to drag content vertically
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[touch][vertical]" <?php echo !empty($options['touch']['vertical']) ? 'checked' : ''; ?>>
                            </label>
                            <p></p>
                            <label>
                                Continue movement after releasing mouse/touch when panning
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[touch][momentum]" <?php echo !empty($options['touch']['momentum']) ? 'checked' : ''; ?>>
                            </label>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Slide Show</strong></th>
                        <td>
                            <label>
                                Auto Start
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[slideShow][autoStart]" <?php echo !empty($options['slideShow']['autoStart']) ? 'checked' : ''; ?>>
                            </label>
                            <p></p>
                            <label>
                                Speed
                                <input type="number" min="0" step="1"
                                       placeholder="Speed"
                                       name="<?php echo $key; ?>[slideShow][speed]" <?php echo !empty($options['slideShow']['speed']) ? $options['slideShow']['speed'] : '400'; ?>>
                            </label>
                        </td>
                        <td>
                            Left blank for default values
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Thumbs</strong></th>
                        <td>
                            <label>
                                Display thumbnails on opening
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[thumbs][autoStart]" <?php echo !empty($options['thumbs']['autoStart']) ? 'checked' : ''; ?>>
                            </label>
                            <p></p>
                            <label>
                                Hide thumbnail grid when closing animation starts
                                <input type="checkbox"
                                       name="<?php echo $key; ?>[thumbs][hideOnClose]" <?php echo !empty($options['thumbs']['hideOnClose']) ? 'checked' : ''; ?>>
                            </label>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Translation</strong></th>
                        <td>
                            <label>
                                Close
                                <input type="text"
                                       placeholder="Close"
                                       name="<?php echo $key; ?>[translation][close]"
                                       value="<?php echo !empty($options['translation']['close']) ? $options['translation']['close'] : ''; ?>">
                            </label>
                            <p></p>
                            <label>
                                Next
                                <input type="text"
                                       placeholder="Next"
                                       name="<?php echo $key; ?>[translation][next]"
                                       value="<?php echo !empty($options['translation']['next']) ? $options['translation']['next'] : ''; ?>">
                            </label>
                            <p></p>
                            <label>
                                Previous
                                <input type="text"
                                       placeholder="Previous"
                                       name="<?php echo $key; ?>[translation][prev]"
                                       value="<?php echo !empty($options['translation']['prev']) ? $options['translation']['prev'] : ''; ?>">
                            </label>
                            <p></p>
                            <label>
                                Error
                                <input type="text"
                                       placeholder="Error"
                                       name="<?php echo $key; ?>[translation][error]"
                                       value="<?php echo !empty($options['translation']['error']) ? $options['translation']['error'] : ''; ?>">
                            </label>
                            <p></p>
                            <label>
                                Start slideshow
                                <input type="text"
                                       placeholder="Start slideshow"
                                       name="<?php echo $key; ?>[translation][start]"
                                       value="<?php echo !empty($options['translation']['start']) ? $options['translation']['start'] : ''; ?>">
                            </label>
                            <p></p>
                            <label>
                                Pause slideshow
                                <input type="text"
                                       placeholder="Pause slideshow"
                                       name="<?php echo $key; ?>[translation][pause]"
                                       value="<?php echo !empty($options['translation']['pause']) ? $options['translation']['pause'] : ''; ?>">
                            </label>
                            <p></p>
                            <label>
                                Full screen
                                <input type="text"
                                       placeholder="Full screen"
                                       name="<?php echo $key; ?>[translation][full]"
                                       value="<?php echo !empty($options['translation']['full']) ? $options['translation']['full'] : ''; ?>">
                            </label>
                            <p></p>
                            <label>
                                Thumbnails
                                <input type="text"
                                       placeholder="Thumbnails"
                                       name="<?php echo $key; ?>[translation][thumbs]"
                                       value="<?php echo !empty($options['translation']['thumbs']) ? $options['translation']['thumbs'] : ''; ?>">
                            </label>
                        </td>
                        <td>
                            Left blank for default values
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><strong>Custom Fancybox initialization JavaScript Code</strong></th>
                        <td>
                            <textarea
                                    name="<?php echo $key; ?>[customOptions]"><?php echo !empty($options['customOptions']) ? $options['customOptions'] : ''; ?></textarea>
                        </td>
                        <td>
                            This code will be added into Fancybox initialization JavaScript code.
                            Be careful and left it blank if you don't understand what you doing.
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
            <div class="message">Please see more information on <a href="http://fancyapps.com/" target="_blank">http://fancyapps.com/</a>
            </div>
        </div>
        <style>
            .wp-list-table input[type=text],
            .wp-list-table input[type=number],
            .wp-list-table textarea,
            .wp-list-table select {
                display: block;
                width: 100%;
                padding: 5px;
                max-width: 400px;
            }

            .wp-list-table textarea {
                min-height: 200px;
            }

            .wp-list-table label {
                padding-right: 5px;
                display: block;
            }

            .wp-list-table th {
                width: 20%;
            }
        </style>
        <?php
    }
}