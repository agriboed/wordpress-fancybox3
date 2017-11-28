<div>
    <form method="post" action="options.php">
        <h1>WP Fancybox 3 Settings</h1>
        <?php settings_fields(static::$key); ?>
        <?php do_settings_sections(static::$key); ?>
        <table class="wp-list-table widefat fixed striped wpfancybox3">
            <tr>
                <th><strong>Custom Css selector</strong></th>
                <td>
                            <textarea name="<?php echo $key; ?>[selector]"
                                      placeholder="Custom Css Selector"><?php echo ! empty($options['selector']) ? $options['selector'] : ''; ?></textarea>
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
                <th><strong>Create a gallery</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[gallery]" <?php echo ! empty($options['gallery']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Combine all images on a page into one gallery
                </td>
            </tr>
            <tr>
                <th><strong>Loop</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[loop]" <?php echo ! empty($options['loop']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Enable infinite gallery navigation
                </td>
            </tr>
            <tr>
                <th><strong>Margin</strong></th>
                <td>
                    <label>
                        Vertical
                        <input type="number"
                               placeholder="Vertical"
                               name="<?php echo $key; ?>[margin][v]"
                               value="<?php echo ! empty($options['margin']['v']) ? $options['margin']['v'] : ''; ?>">
                    </label>
                    <p></p>
                    <label>
                        Horizontal
                        <input type="number"
                               placeholder="Horizontal"
                               name="<?php echo $key; ?>[margin][h]"
                               value="<?php echo ! empty($options['margin']['h']) ? $options['margin']['h'] : ''; ?>">
                    </label>
                </td>
                <td>
                    Space around image, ignored if zoomed-in or viewport smaller than 800px. <br>
                    Left blank for
                    default values.
                </td>
            </tr>
            <tr>
                <th><strong>Gutter</strong></th>
                <td>
                    <input type="number"
                           placeholder="Gutter"
                           name="<?php echo $key; ?>[gutter]"
                           value="<?php echo ! empty($options['gutter']) ? $options['gutter'] : ''; ?>">
                </td>
                <td>
                    Horizontal space between slides.<br>Left blank for default values
                </td>
            </tr>
            <tr>
                <th><strong>Keyboard</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[keyboard]" <?php echo ! empty($options['keyboard']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Enable keyboard navigation
                </td>
            </tr>
            <tr>
                <th><strong>Arrows</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[arrows]" <?php echo ! empty($options['arrows']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Should display navigation arrows at the screen edges
                </td>
            </tr>
            <tr>
                <th><strong>Infobar</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[infobar]" <?php echo ! empty($options['infobar']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Should display infobar (counter and arrows at the top)
                </td>
            </tr>
            <tr>
                <th><strong>Toolbar</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[toolbar]" <?php echo ! empty($options['toolbar']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Should display toolbar (buttons at the top)
                </td>
            </tr>
            <tr>
                <th><strong>Buttons</strong></th>
                <td>
                    <label>
                        SlideShow
                        <input type="checkbox"
                               name="<?php echo $key; ?>[buttons][slideShow]" <?php echo ! empty($options['buttons']['slideShow']) ? 'checked' : ''; ?>>
                    </label>
                    <p></p>
                    <label>
                        FullScreen
                        <input type="checkbox"
                               name="<?php echo $key; ?>[buttons][fullScreen]" <?php echo ! empty($options['buttons']['fullScreen']) ? 'checked' : ''; ?>>
                    </label>
                    <p></p>
                    <label>
                        Thumbs
                        <input type="checkbox"
                               name="<?php echo $key; ?>[buttons][thumbs]" <?php echo ! empty($options['buttons']['thumbs']) ? 'checked' : ''; ?>>
                    </label>
                    <p></p>
                    <label>
                        Close
                        <input type="checkbox"
                               name="<?php echo $key; ?>[buttons][close]" <?php echo ! empty($options['buttons']['close']) ? 'checked' : ''; ?>>
                    </label>
                </td>
                <td>
                    What buttons should appear in the top right corner.
                </td>
            </tr>
            <tr>
                <th><strong>idle Time</strong></th>
                <td>
                    <input type="number"
                           placeholder="idle Time"
                           name="<?php echo $key; ?>[idleTime]" min="0" step="1"
                           value="<?php echo ! empty($options['idleTime']) ? $options['idleTime'] : ''; ?>">
                </td>
                <td>
                    Detect "idle" time in seconds. <br>
                    Left blank for default value
                </td>
            </tr>
            <tr>
                <th><strong>Small Buttons</strong></th>
                <td>
                    <input type="text"
                           placeholder="Small Buttons"
                           name="<?php echo $key; ?>[smallBtn]"
                           value="<?php echo ! empty($options['smallBtn']) ? $options['smallBtn'] : ''; ?>">
                </td>
                <td>
                    Should display buttons at top right corner of the content
                    If 'auto' - they will be created for content having type 'html', 'inline' or 'ajax'.
                    <br>Left blank for default value.
                </td>
            </tr>
            <tr>
                <th><strong>Protect</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[protect]" <?php echo ! empty($options['protect']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Disable right-click and use simple image protection for images
                </td>
            </tr>
            <tr>
                <th><strong>Modal</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[modal]" <?php echo ! empty($options['modal']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Shortcut to make content "modal" - disable keyboard navigation, hide buttons, etc
                </td>
            </tr>
            <tr>
                <th><strong>Animation Effect</strong></th>
                <td>
                    <select name="<?php echo $key; ?>[animationEffect]">
                        <option>Disable</option>
                        <option value="zoom" <?php echo ( ! empty($options['animationEffect']) && $options['animationEffect'] === 'zoom') ? 'selected' : ''; ?>>
                            Zoom - zoom images from/to thumbnail
                        </option>
                        <option value="fade" <?php echo ( ! empty($options['animationEffect']) && $options['animationEffect'] === 'fade') ? 'selected' : ''; ?>>
                            Fade
                        </option>
                        <option value="zoom-in-out" <?php echo ( ! empty($options['animationEffect']) && $options['animationEffect'] === 'zoom-in-out') ? 'selected' : ''; ?>>
                            Zoom-in-Out
                        </option>
                    </select>
                </td>
                <td>
                    Open/close animation type
                </td>
            </tr>
            <tr>
                <th><strong>Animation Duration</strong></th>
                <td>
                    <input type="number"
                           min="0" step="1"
                           placeholder="Animation Duration"
                           name="<?php echo $key; ?>[animationDuration]"
                           value="<?php echo ! empty($options['animationDuration']) ? $options['animationDuration'] : ''; ?>">
                </td>
                <td>
                    Duration in ms for open/close animation.
                    <br>Left blank for default value
                </td>
            </tr>
            <tr>
                <th><strong>Zoom Opacity</strong></th>
                <td>
                    <input type="text"
                           placeholder="Zoom Opacity"
                           name="<?php echo $key; ?>[zoomOpacity]"
                           value="<?php echo ! empty($options['zoomOpacity']) ? $options['zoomOpacity'] : ''; ?>">
                </td>
                <td>
                    Should image change opacity while zooming.
                    If opacity is 'auto', then opacity will be changed if image and thumbnail have different
                    aspect ratios. <br>
                    Left blank for default value
                </td>
            </tr>
            <tr>
                <th><strong>Transition Effect</strong></th>
                <td>
                    <select name="<?php echo $key; ?>[transitionEffect]">
                        <option>
                            Disable
                        </option>
                        <option value="fade" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'fade') ? 'selected' : ''; ?>>
                            Fade
                        </option>
                        <option value="slide" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'slide') ? 'selected' : ''; ?>>
                            Slide
                        </option>
                        <option value="circular" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'circular') ? 'selected' : ''; ?>>
                            Circular
                        </option>
                        <option value="tube" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'tube') ? 'selected' : ''; ?>>
                            Tube
                        </option>
                        <option value="zoom-in-out" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'zoom-in-out') ? 'selected' : ''; ?>>
                            Zoom-in-Out
                        </option>
                        <option value="rotate" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'rotate') ? 'selected' : ''; ?>>
                            Rotate
                        </option>
                    </select>

                </td>
                <td>
                    Transition effect between slides
                </td>
            </tr>
            <tr>
                <th><strong>Transition Duration</strong></th>
                <td>
                    <input type="number"
                           placeholder="Transition Duration"
                           name="<?php echo $key; ?>[transitionDuration]"
                           value="<?php echo ! empty($options['transitionDuration']) ? $options['transitionDuration'] : ''; ?>">
                </td>
                <td>
                    Duration in ms for transition animation. <br>Left blank for default value
                </td>
            </tr>
            <tr>
                <th><strong>Slide Class</strong></th>
                <td>
                    <input type="text"
                           placeholder="Slide Class"
                           name="<?php echo $key; ?>[slideClass]"
                           value="<?php echo ! empty($options['slideClass']) ? $options['slideClass'] : ''; ?>">
                </td>
                <td>
                    Custom CSS class for slide element
                </td>
            </tr>
            <tr>
                <th><strong>Base Class</strong></th>
                <td>
                    <input type="text"
                           placeholder="Base Class"
                           name="<?php echo $key; ?>[baseClass]"
                           value="<?php echo ! empty($options['baseClass']) ? $options['baseClass'] : ''; ?>">
                </td>
                <td>
                    Custom CSS class for layout
                </td>
            </tr>
            <tr>
                <th><strong>Auto Focus</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[autoFocus]" <?php echo ! empty($options['autoFocus']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Try to focus on the first focusable element after opening
                </td>
            </tr>
            <tr>
                <th><strong>Back Focus</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[backFocus]" <?php echo ! empty($options['backFocus']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Put focus back to active element after closing
                </td>
            </tr>
            <tr>
                <th><strong>Trap Focus</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[trapFocus]" <?php echo ! empty($options['trapFocus']) ? 'checked' : ''; ?>>
                </td>
                <td>
                    Do not let user to focus on element outside modal content
                </td>
            </tr>
            <tr>
                <th><strong>FullScreen Auto Start</strong></th>
                <td>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[fullScreen][autoStart]" <?php echo ! empty($options['fullScreen']['autoStart']) ? 'checked' : ''; ?>>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <th><strong>Touch</strong></th>
                <td>
                    <label>
                        Allow to drag content vertically
                        <input type="checkbox"
                               name="<?php echo $key; ?>[touch][vertical]" <?php echo ! empty($options['touch']['vertical']) ? 'checked' : ''; ?>>
                    </label>
                    <p></p>
                    <label>
                        Continue movement after releasing mouse/touch when panning
                        <input type="checkbox"
                               name="<?php echo $key; ?>[touch][momentum]" <?php echo ! empty($options['touch']['momentum']) ? 'checked' : ''; ?>>
                    </label>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <th><strong>Slide Show</strong></th>
                <td>
                    <label>
                        Auto Start
                        <input type="checkbox"
                               name="<?php echo $key; ?>[slideShow][autoStart]" <?php echo ! empty($options['slideShow']['autoStart']) ? 'checked' : ''; ?>>
                    </label>
                    <p></p>
                    <label>
                        Speed
                        <input type="number" min="0" step="1"
                               placeholder="Speed"
                               name="<?php echo $key; ?>[slideShow][speed]" <?php echo ! empty($options['slideShow']['speed']) ? $options['slideShow']['speed'] : '400'; ?>>
                    </label>
                </td>
                <td>
                    Left blank for default values
                </td>
            </tr>
            <tr>
                <th><strong>Thumbs</strong></th>
                <td>
                    <label>
                        Display thumbnails on opening
                        <input type="checkbox"
                               name="<?php echo $key; ?>[thumbs][autoStart]" <?php echo ! empty($options['thumbs']['autoStart']) ? 'checked' : ''; ?>>
                    </label>
                    <p></p>
                    <label>
                        Hide thumbnail grid when closing animation starts
                        <input type="checkbox"
                               name="<?php echo $key; ?>[thumbs][hideOnClose]" <?php echo ! empty($options['thumbs']['hideOnClose']) ? 'checked' : ''; ?>>
                    </label>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <th><strong>Translation</strong></th>
                <td>
                    <label>
                        Close
                        <input type="text"
                               placeholder="Close"
                               name="<?php echo $key; ?>[translation][close]"
                               value="<?php echo ! empty($options['translation']['close']) ? $options['translation']['close'] : ''; ?>">
                    </label>
                    <p></p>
                    <label>
                        Next
                        <input type="text"
                               placeholder="Next"
                               name="<?php echo $key; ?>[translation][next]"
                               value="<?php echo ! empty($options['translation']['next']) ? $options['translation']['next'] : ''; ?>">
                    </label>
                    <p></p>
                    <label>
                        Previous
                        <input
                                placeholder="Previous"
                                name="<?php echo $key; ?>[translation][prev]"
                                value="<?php echo ! empty($options['translation']['prev']) ? $options['translation']['prev'] : ''; ?>">
                    </label>
                    <p></p>
                    <label>
                        Error
                        <input placeholder="Error"
                               name="<?php echo $key; ?>[translation][error]"
                               value="<?php echo ! empty($options['translation']['error']) ? $options['translation']['error'] : ''; ?>">
                    </label>
                    <p></p>
                    <label>
                        <?php _e('Start slideshow', $key); ?>
                        <input type="text"
                               placeholder="Start slideshow"
                               name="<?php echo $key; ?>[translation][start]"
                               value="<?php echo ! empty($options['translation']['start']) ? $options['translation']['start'] : ''; ?>">
                    </label>
                    <p></p>
                    <label>
                        <?php _e('Pause slideshow', $key); ?>
                        <input
                                placeholder="<?php _e('Pause slideshow', $key); ?>"
                                name="<?php echo $key; ?>[translation][pause]"
                                value="<?php echo ! empty($options['translation']['pause']) ? $options['translation']['pause'] : ''; ?>">
                    </label>
                    <p></p>
                    <label>
                        <?php _e('Full screen', $key); ?>
                        <input placeholder="<?php _e('Full screen', $key); ?>"
                               name="<?php echo $key; ?>[translation][full]"
                               value="<?php echo ! empty($options['translation']['full']) ? $options['translation']['full'] : ''; ?>">
                    </label>
                    <p></p>
                    <label>
                        <?php _e('Thumbnails', $key); ?>
                        <input placeholder="<?php _e('Thumbnails', $key); ?>"
                               name="<?php echo $key; ?>[translation][thumbs]"
                               value="<?php echo ! empty($options['translation']['thumbs']) ? $options['translation']['thumbs'] : ''; ?>">
                    </label>
                </td>
                <td>
                    <?php _e('Left blank for default values', $key); ?>
                </td>
            </tr>
            <tr>
                <th><strong><?php _e('Custom initialization JavaScript Code', $key); ?></strong></th>
                <td>
                            <textarea
                                    name="<?php echo $key; ?>[customOptions]"><?php echo ! empty($options['customOptions']) ? $options['customOptions'] : ''; ?></textarea>
                </td>
                <td>
                    <?php _e('This code will be added into the Fancybox initialization JavaScript code.
                    Be careful and left it blank if you don\'t understand what you doing.', $key); ?>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
    <div class="wpfancybox3-footer">
        <?php _e('Please see more documentation and information about license on <a
            href="http://fancyapps.com/fancybox/3/" target="_blank">fancyapps.com</a>', $key); ?>
    </div>
</div>
