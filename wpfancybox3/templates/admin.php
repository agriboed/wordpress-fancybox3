<form method="post" action="options.php">
    <h1><?php _e('WP fancyBox3 Settings', $key); ?></h1>
    <?php settings_fields($key); ?>
    <?php do_settings_sections($key); ?>
    <table class="wp-list-table widefat fixed striped wpfancybox3">
        <tr>
            <th><strong><?php _e('Custom Css selector', $key); ?></strong></th>
            <td>
                            <textarea name="<?php echo $key; ?>[selector]"
                                      placeholder="<?php _e('Custom Css Selector',
                                          $key); ?>"><?php echo !empty($options['selector']) ? $options['selector'] : ''; ?></textarea>
            </td>
            <td>
                <?php _e('Use your own elements selector instead of a plugin variant.', $key); ?> <br>
                <?php _e('Leave it blank for default value', $key); ?>
                <br>
                <small>
                    <?php echo $selector; ?>
                </small>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Create a gallery', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[gallery]" <?php echo !empty($options['gallery']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Combine all images on a page in one gallery', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Loop'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[loop]" <?php echo !empty($options['loop']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Enable infinite gallery navigation', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Margin', $key); ?></strong></th>
            <td>
                <label>
                    <input type="number"
                           placeholder="<?php _e('Vertical', $key); ?>"
                           name="<?php echo $key; ?>[margin][v]"
                           value="<?php echo !empty($options['margin']['v']) ? $options['margin']['v'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input type="number"
                           placeholder="<?php _e('Horizontal', $key); ?>"
                           name="<?php echo $key; ?>[margin][h]"
                           value="<?php echo !empty($options['margin']['h']) ? $options['margin']['h'] : ''; ?>">
                </label>
            </td>
            <td>
                <?php _e('Space around image, ignored if zoomed-in or viewport smaller than 800px.', $key); ?><br>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Gutter', $key); ?></strong></th>
            <td>
                <input type="number"
                       placeholder="<?php _e('Gutter', $key); ?>"
                       name="<?php echo $key; ?>[gutter]"
                       value="<?php echo !empty($options['gutter']) ? $options['gutter'] : ''; ?>">
            </td>
            <td>
                <?php _e('Horizontal space between slides.', $key); ?><br>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Keyboard', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[keyboard]" <?php echo !empty($options['keyboard']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Enable keyboard navigation', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Arrows', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[arrows]" <?php echo !empty($options['arrows']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Should display navigation arrows at the screen edges', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Infobar', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[infobar]" <?php echo !empty($options['infobar']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Should display infobar (counter and arrows at the top)', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Toolbar', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[toolbar]" <?php echo !empty($options['toolbar']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Should display toolbar (buttons at the top)', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Buttons', $key); ?></strong></th>
            <td>
                <label>
                    <?php _e('SlideShow', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[buttons][slideShow]" <?php echo !empty($options['buttons']['slideShow']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php _e('FullScreen', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[buttons][fullScreen]" <?php echo !empty($options['buttons']['fullScreen']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php _e('Thumbs', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[buttons][thumbs]" <?php echo !empty($options['buttons']['thumbs']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php _e('Close', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[buttons][close]" <?php echo !empty($options['buttons']['close']) ? 'checked' : ''; ?>>
                </label>
            </td>
            <td>
                <?php _e('What buttons should appear in the top right corner', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('idle Time', $key); ?></strong></th>
            <td>
                <input type="number"
                       placeholder="<?php _e('idle Time', $key); ?>"
                       name="<?php echo $key; ?>[idleTime]" min="0" step="1"
                       value="<?php echo !empty($options['idleTime']) ? $options['idleTime'] : ''; ?>">
            </td>
            <td>
                <?php _e('Detect "idle" time in seconds.', $key); ?><br>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Small Buttons', $key); ?></strong></th>
            <td>
                <input type="text"
                       placeholder="<?php _e('Small Buttons', $key); ?>"
                       name="<?php echo $key; ?>[smallBtn]"
                       value="<?php echo !empty($options['smallBtn']) ? $options['smallBtn'] : ''; ?>">
            </td>
            <td>
                <?php _e('Should display buttons at top right corner of the content
                    If "auto" - they will be created for content having type "html", "inline" or "ajax".', $key); ?>
                <br>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Protect', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[protect]" <?php echo !empty($options['protect']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Disable right-click and use simple image protection for images', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Modal', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[modal]" <?php echo !empty($options['modal']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Shortcut to make content "modal" - disable keyboard navigation, hide buttons, etc',
                    $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Animation Effect', $key); ?></strong></th>
            <td>
                <select name="<?php echo $key; ?>[animationEffect]">
                    <option><?php _e('Disable', $key); ?></option>
                    <option value="zoom" <?php echo (!empty($options['animationEffect']) && $options['animationEffect'] === 'zoom') ? 'selected' : ''; ?>>
                        <?php _e('Zoom - zoom images from/to thumbnail', $key); ?>
                    </option>
                    <option value="fade" <?php echo (!empty($options['animationEffect']) && $options['animationEffect'] === 'fade') ? 'selected' : ''; ?>>
                        <?php _e('Fade', $key); ?>
                    </option>
                    <option value="zoom-in-out" <?php echo (!empty($options['animationEffect']) && $options['animationEffect'] === 'zoom-in-out') ? 'selected' : ''; ?>>
                        <?php _e('Zoom-in-Out', $key); ?>
                    </option>
                </select>
            </td>
            <td>
                <?php _e('Open/close animation type', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Animation Duration', $key); ?></strong></th>
            <td>
                <input type="number"
                       min="0" step="1"
                       placeholder="<?php _e('Animation Duration', $key); ?>"
                       name="<?php echo $key; ?>[animationDuration]"
                       value="<?php echo !empty($options['animationDuration']) ? $options['animationDuration'] : ''; ?>">
            </td>
            <td>
                <?php _e('Duration in ms for open/close animation.', $key); ?>
                <br>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Zoom Opacity', $key); ?></strong></th>
            <td>
                <input type="text"
                       placeholder="<?php _e('Zoom Opacity', $key); ?>"
                       name="<?php echo $key; ?>[zoomOpacity]"
                       value="<?php echo !empty($options['zoomOpacity']) ? $options['zoomOpacity'] : ''; ?>">
            </td>
            <td>
                <?php _e('Should image change opacity while zooming.
                    If opacity is "auto", then opacity will be changed if image and thumbnail have different
                    aspect ratios.', $key); ?><br>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Transition Effect', $key); ?></strong></th>
            <td>
                <select name="<?php echo $key; ?>[transitionEffect]">
                    <option>
                        <?php _e('Disable', $key); ?>
                    </option>
                    <option value="fade" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'fade') ? 'selected' : ''; ?>>
                        <?php _e('Fade', $key); ?>
                    </option>
                    <option value="slide" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'slide') ? 'selected' : ''; ?>>
                        <?php _e('Slide', $key); ?>
                    </option>
                    <option value="circular" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'circular') ? 'selected' : ''; ?>>
                        <?php _e('Circular', $key); ?>
                    </option>
                    <option value="tube" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'tube') ? 'selected' : ''; ?>>
                        <?php _e('Tube', $key); ?>
                    </option>
                    <option value="zoom-in-out" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'zoom-in-out') ? 'selected' : ''; ?>>
                        <?php _e('Zoom-in-Out', $key); ?>
                    </option>
                    <option value="rotate" <?php echo (!empty($options['transitionEffect']) && $options['transitionEffect'] === 'rotate') ? 'selected' : ''; ?>>
                        <?php _e('Rotate', $key); ?>
                    </option>
                </select>

            </td>
            <td>
                <?php _e('Transition effect between slides', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Transition Duration', $key); ?></strong></th>
            <td>
                <input type="number"
                       placeholder="<?php _e('Transition Duration', $key); ?>"
                       name="<?php echo $key; ?>[transitionDuration]"
                       value="<?php echo !empty($options['transitionDuration']) ? $options['transitionDuration'] : ''; ?>">
            </td>
            <td>
                <?php _e('Duration in ms for transition animation.', $key); ?><br>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Slide Class', $key); ?></strong></th>
            <td>
                <input type="text"
                       placeholder="<?php _e('Slide Class', $key); ?>"
                       name="<?php echo $key; ?>[slideClass]"
                       value="<?php echo !empty($options['slideClass']) ? $options['slideClass'] : ''; ?>">
            </td>
            <td>
                <?php _e('Custom CSS class for slide element', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Base Class', $key); ?></strong></th>
            <td>
                <input type="text"
                       placeholder="<?php _e('Base Class', $key); ?>"
                       name="<?php echo $key; ?>[baseClass]"
                       value="<?php echo !empty($options['baseClass']) ? $options['baseClass'] : ''; ?>">
            </td>
            <td>
                <?php _e('Custom CSS class for layout', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Auto Focus', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[autoFocus]" <?php echo !empty($options['autoFocus']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Try to focus on the first focusable element after opening', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Back Focus', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[backFocus]" <?php echo !empty($options['backFocus']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Put focus back to active element after closing', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Trap Focus', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[trapFocus]" <?php echo !empty($options['trapFocus']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php _e('Do not let user to focus on element outside modal content', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('FullScreen Auto Start', $key); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="<?php echo $key; ?>[fullScreen][autoStart]" <?php echo !empty($options['fullScreen']['autoStart']) ? 'checked' : ''; ?>>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Touch', $key); ?></strong></th>
            <td>
                <label>
                    <?php _e('Allow to drag content vertically', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[touch][vertical]" <?php echo !empty($options['touch']['vertical']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php _e('Continue movement after releasing mouse/touch when panning', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[touch][momentum]" <?php echo !empty($options['touch']['momentum']) ? 'checked' : ''; ?>>
                </label>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Slide Show', $key); ?></strong></th>
            <td>
                <label>
                    <?php _e('Auto Start', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[slideShow][autoStart]" <?php echo !empty($options['slideShow']['autoStart']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php _e('Speed', $key); ?>
                    <input type="number" min="0" step="1"
                           placeholder="<?php _e('Speed'); ?>"
                           name="<?php echo $key; ?>[slideShow][speed]" <?php echo !empty($options['slideShow']['speed']) ? $options['slideShow']['speed'] : '400'; ?>>
                </label>
            </td>
            <td>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Thumbs', $key); ?></strong></th>
            <td>
                <label>
                    <?php _e('Display thumbnails on opening', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[thumbs][autoStart]" <?php echo !empty($options['thumbs']['autoStart']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php _e('Hide thumbnail grid when closing animation starts', $key); ?>
                    <input type="checkbox"
                           name="<?php echo $key; ?>[thumbs][hideOnClose]" <?php echo !empty($options['thumbs']['hideOnClose']) ? 'checked' : ''; ?>>
                </label>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Translation', $key); ?></strong></th>
            <td>
                <label>
                    <?php _e('Close', $key); ?>
                    <input type="text"
                           placeholder="<?php _e('Close', $key); ?>"
                           name="<?php echo $key; ?>[translation][close]"
                           value="<?php echo !empty($options['translation']['close']) ? $options['translation']['close'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <?php _e('Next', $key); ?>
                    <input type="text"
                           placeholder="<?php _e('Next', $key); ?>"
                           name="<?php echo $key; ?>[translation][next]"
                           value="<?php echo !empty($options['translation']['next']) ? $options['translation']['next'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <?php _e('Previous', $key); ?>
                    <input
                            placeholder="<?php _e('Previous'); ?>"
                            name="<?php echo $key; ?>[translation][prev]"
                            value="<?php echo !empty($options['translation']['prev']) ? $options['translation']['prev'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <?php _e('Error', $key); ?>
                    <input placeholder="<?php _e('Error', $key); ?>"
                           name="<?php echo $key; ?>[translation][error]"
                           value="<?php echo !empty($options['translation']['error']) ? $options['translation']['error'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <?php _e('Start slideshow', $key); ?>
                    <input type="text"
                           placeholder="<?php _e('Start slideshow', $key); ?>"
                           name="<?php echo $key; ?>[translation][start]"
                           value="<?php echo !empty($options['translation']['start']) ? $options['translation']['start'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <?php _e('Pause slideshow', $key); ?>
                    <input
                            placeholder="<?php _e('Pause slideshow', $key); ?>"
                            name="<?php echo $key; ?>[translation][pause]"
                            value="<?php echo !empty($options['translation']['pause']) ? $options['translation']['pause'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <?php _e('Full screen', $key); ?>
                    <input placeholder="<?php _e('Full screen', $key); ?>"
                           name="<?php echo $key; ?>[translation][full]"
                           value="<?php echo !empty($options['translation']['full']) ? $options['translation']['full'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <?php _e('Thumbnails', $key); ?>
                    <input placeholder="<?php _e('Thumbnails', $key); ?>"
                           name="<?php echo $key; ?>[translation][thumbs]"
                           value="<?php echo !empty($options['translation']['thumbs']) ? $options['translation']['thumbs'] : ''; ?>">
                </label>
            </td>
            <td>
                <?php _e('Leave it blank for default value', $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php _e('Custom initialization JavaScript Code', $key); ?></strong></th>
            <td>
                            <textarea
                                    name="<?php echo $key; ?>[customOptions]"><?php echo !empty($options['customOptions']) ? $options['customOptions'] : ''; ?></textarea>
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