<form method="post" action="options.php">
    <h1><?php esc_html_e('WP fancyBox3 Settings', 'wpfancybox3'); ?></h1>
    <?php settings_fields('wpfancybox3'); ?>
    <?php do_settings_sections('wpfancybox3'); ?>

    <table class="wp-list-table widefat fixed striped wpfancybox3">
        <tr>
            <th><strong><?php esc_html_e('Custom selector', 'wpfancybox3'); ?></strong></th>
            <td>
                <textarea name="wpfancybox3[selector]"
                          placeholder="<?php esc_html_e('Custom Selector',
                              'wpfancybox3'); ?>"><?php echo ! empty($options['selector']) ? esc_html($options['selector']) : ''; ?></textarea>
            </td>
            <td>
                <?php esc_html_e('Use your own elements selector instead of a plugin variant.', 'wpfancybox3'); ?> <br>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
                <br>
                <small>
                    <?php echo $selector; ?>
                </small>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Create a gallery', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[gallery]" <?php echo ! empty($options['gallery']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Combine all images on a page in one gallery', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Loop', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[loop]" <?php echo ! empty($options['loop']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Enable infinite gallery navigation', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Margin', 'wpfancybox3'); ?></strong></th>
            <td>
                <label>
                    <input type="number"
                           placeholder="<?php esc_html_e('Vertical', 'wpfancybox3'); ?>"
                           name="wpfancybox3[margin][v]"
                           value="<?php echo ! empty($options['margin']['v']) ? esc_attr($options['margin']['v']) : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input type="number"
                           placeholder="<?php esc_html_e('Horizontal', 'wpfancybox3'); ?>"
                           name="wpfancybox3[margin][h]"
                           value="<?php echo ! empty($options['margin']['h']) ? esc_attr($options['margin']['h']) : ''; ?>">
                </label>
            </td>
            <td>
                <?php esc_html_e('Space around image, ignored if zoomed-in or viewport smaller than 800px.',
                    'wpfancybox3'); ?><br>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Gutter', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="number"
                       placeholder="<?php esc_html_e('Gutter', 'wpfancybox3'); ?>"
                       name="wpfancybox3[gutter]"
                       value="<?php echo ! empty($options['gutter']) ? esc_attr($options['gutter']) : ''; ?>">
            </td>
            <td>
                <?php esc_html_e('Horizontal space between slides.', 'wpfancybox3'); ?><br>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Keyboard', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[keyboard]" <?php echo ! empty($options['keyboard']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Enable keyboard navigation', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Arrows', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[arrows]" <?php echo ! empty($options['arrows']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Should display navigation arrows at the screen edges', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Infobar', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[infobar]" <?php echo ! empty($options['infobar']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Should display infobar (counter and arrows at the top)', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Toolbar', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[toolbar]" <?php echo ! empty($options['toolbar']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Should display toolbar (buttons at the top)', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Buttons', 'wpfancybox3'); ?></strong></th>
            <td>
                <label>
                    <?php esc_html_e('SlideShow', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[buttons][slideShow]" <?php echo ! empty($options['buttons']['slideShow']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php esc_html_e('FullScreen', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[buttons][fullScreen]" <?php echo ! empty($options['buttons']['fullScreen']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php esc_html_e('Share', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[buttons][share]" <?php echo ! empty($options['buttons']['share']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php esc_html_e('Thumbs', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[buttons][thumbs]" <?php echo ! empty($options['buttons']['thumbs']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php esc_html_e('Close', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[buttons][close]" <?php echo ! empty($options['buttons']['close']) ? 'checked' : ''; ?>>
                </label>
            </td>
            <td>
                <?php esc_html_e('What buttons should appear in the top right corner', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('idle Time', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="number"
                       placeholder="<?php esc_html_e('idle Time', 'wpfancybox3'); ?>"
                       name="wpfancybox3[idleTime]" min="0" step="1"
                       value="<?php echo ! empty($options['idleTime']) ? esc_attr($options['idleTime']) : ''; ?>">
            </td>
            <td>
                <?php esc_html_e('Detect "idle" time in seconds.', 'wpfancybox3'); ?><br>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Small Buttons', 'wpfancybox3'); ?></strong></th>
            <td>
                <input
                        type="text"
                        placeholder="<?php esc_html_e('Small Buttons', 'wpfancybox3'); ?>"
                        name="wpfancybox3[smallBtn]"
                        value="<?php echo ! empty($options['smallBtn']) ? esc_attr($options['smallBtn']) : ''; ?>">
            </td>
            <td>
                <?php esc_html_e('Should display buttons at top right corner of the content
                    If "auto" - they will be created for content having type "html", "inline" or "ajax".',
                    'wpfancybox3'); ?>
                <br>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Protect', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[protect]" <?php echo ! empty($options['protect']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Disable right-click and use simple image protection for images', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Modal', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[modal]" <?php echo ! empty($options['modal']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Shortcut to make content "modal" - disable keyboard navigation, hide buttons, etc',
                    $key); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Animation Effect', 'wpfancybox3'); ?></strong></th>
            <td>
                <select name="wpfancybox3[animationEffect]">
                    <option><?php esc_html_e('Disable', 'wpfancybox3'); ?></option>
                    <option value="zoom" <?php echo ( ! empty($options['animationEffect']) && $options['animationEffect'] === 'zoom') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Zoom - zoom images from/to thumbnail', 'wpfancybox3'); ?>
                    </option>
                    <option value="fade" <?php echo ( ! empty($options['animationEffect']) && $options['animationEffect'] === 'fade') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Fade', 'wpfancybox3'); ?>
                    </option>
                    <option value="zoom-in-out" <?php echo ( ! empty($options['animationEffect']) && $options['animationEffect'] === 'zoom-in-out') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Zoom-in-Out', 'wpfancybox3'); ?>
                    </option>
                </select>
            </td>
            <td>
                <?php esc_html_e('Open/close animation type', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Animation Duration', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="number"
                       min="0" step="1"
                       placeholder="<?php esc_html_e('Animation Duration', 'wpfancybox3'); ?>"
                       name="wpfancybox3[animationDuration]"
                       value="<?php echo ! empty($options['animationDuration']) ? esc_attr($options['animationDuration']) : ''; ?>">
            </td>
            <td>
                <?php esc_html_e('Duration in ms for open/close animation.', 'wpfancybox3'); ?>
                <br>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Zoom Opacity', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="text"
                       placeholder="<?php esc_html_e('Zoom Opacity', 'wpfancybox3'); ?>"
                       name="wpfancybox3[zoomOpacity]"
                       value="<?php echo ! empty($options['zoomOpacity']) ? esc_attr($options['zoomOpacity']) : ''; ?>">
            </td>
            <td>
                <?php esc_html_e('Should image change opacity while zooming.
                    If opacity is "auto", then opacity will be changed if image and thumbnail have different
                    aspect ratios.', 'wpfancybox3'); ?><br>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Transition Effect', 'wpfancybox3'); ?></strong></th>
            <td>
                <select name="wpfancybox3[transitionEffect]">
                    <option>
                        <?php esc_html_e('Disable', 'wpfancybox3'); ?>
                    </option>
                    <option value="fade" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'fade') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Fade', 'wpfancybox3'); ?>
                    </option>
                    <option value="slide" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'slide') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Slide', 'wpfancybox3'); ?>
                    </option>
                    <option value="circular" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'circular') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Circular', 'wpfancybox3'); ?>
                    </option>
                    <option value="tube" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'tube') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Tube', 'wpfancybox3'); ?>
                    </option>
                    <option value="zoom-in-out" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'zoom-in-out') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Zoom-in-Out', 'wpfancybox3'); ?>
                    </option>
                    <option value="rotate" <?php echo ( ! empty($options['transitionEffect']) && $options['transitionEffect'] === 'rotate') ? 'selected' : ''; ?>>
                        <?php esc_html_e('Rotate', 'wpfancybox3'); ?>
                    </option>
                </select>

            </td>
            <td>
                <?php esc_html_e('Transition effect between slides', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Transition Duration', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="number"
                       placeholder="<?php esc_html_e('Transition Duration', 'wpfancybox3'); ?>"
                       name="wpfancybox3[transitionDuration]"
                       value="<?php echo ! empty($options['transitionDuration']) ? esc_attr($options['transitionDuration']) : ''; ?>">
            </td>
            <td>
                <?php esc_html_e('Duration in ms for transition animation.', 'wpfancybox3'); ?><br>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Slide Class', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="text"
                       placeholder="<?php esc_html_e('Slide Class', 'wpfancybox3'); ?>"
                       name="wpfancybox3[slideClass]"
                       value="<?php echo ! empty($options['slideClass']) ? esc_attr($options['slideClass']) : ''; ?>">
            </td>
            <td>
                <?php esc_html_e('Custom CSS class for slide element', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Base Class', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="text"
                       placeholder="<?php esc_html_e('Base Class', 'wpfancybox3'); ?>"
                       name="wpfancybox3[baseClass]"
                       value="<?php echo ! empty($options['baseClass']) ? esc_attr($options['baseClass']) : ''; ?>">
            </td>
            <td>
                <?php esc_html_e('Custom CSS class for layout', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Auto Focus', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[autoFocus]" <?php echo ! empty($options['autoFocus']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Try to focus on the first focusable element after opening', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Back Focus', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[backFocus]" <?php echo ! empty($options['backFocus']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Put focus back to active element after closing', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Trap Focus', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[trapFocus]" <?php echo ! empty($options['trapFocus']) ? 'checked' : ''; ?>>
            </td>
            <td>
                <?php esc_html_e('Do not let user to focus on element outside modal content', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('FullScreen Auto Start', 'wpfancybox3'); ?></strong></th>
            <td>
                <input type="checkbox"
                       name="wpfancybox3[fullScreen][autoStart]" <?php echo ! empty($options['fullScreen']['autoStart']) ? 'checked' : ''; ?>>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Touch', 'wpfancybox3'); ?></strong></th>
            <td>
                <label>
                    <?php esc_html_e('Allow to drag content vertically', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[touch][vertical]" <?php echo ! empty($options['touch']['vertical']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php esc_html_e('Continue movement after releasing mouse/touch when panning', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[touch][momentum]" <?php echo ! empty($options['touch']['momentum']) ? 'checked' : ''; ?>>
                </label>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Slide Show', 'wpfancybox3'); ?></strong></th>
            <td>
                <label>
                    <?php esc_html_e('Auto Start', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[slideShow][autoStart]" <?php echo ! empty($options['slideShow']['autoStart']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <input type="number" min="0" step="1"
                           placeholder="<?php esc_html_e('Speed'); ?>"
                           name="wpfancybox3[slideShow][speed]"
                           value="<?php echo ! empty($options['slideShow']['speed']) ? esc_attr($options['slideShow']['speed']) : ''; ?>">
                </label>
            </td>
            <td>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Thumbs', 'wpfancybox3'); ?></strong></th>
            <td>
                <label>
                    <?php esc_html_e('Display thumbnails on opening', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[thumbs][autoStart]" <?php echo ! empty($options['thumbs']['autoStart']) ? 'checked' : ''; ?>>
                </label>
                <p></p>
                <label>
                    <?php esc_html_e('Hide thumbnail grid when closing animation starts', 'wpfancybox3'); ?>
                    <input type="checkbox"
                           name="wpfancybox3[thumbs][hideOnClose]" <?php echo ! empty($options['thumbs']['hideOnClose']) ? 'checked' : ''; ?>>
                </label>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Translations', 'wpfancybox3'); ?></strong></th>
            <td>
                <label>
                    <input
                            type="text"
                            placeholder="<?php esc_html_e('Close', 'wpfancybox3'); ?>"
                            name="wpfancybox3[translation][close]"
                            value="<?php echo ! empty($options['translation']['close']) ? esc_attr($options['translation']['close']) : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input
                            type="text"
                            placeholder="<?php esc_html_e('Next', 'wpfancybox3'); ?>"
                            name="wpfancybox3[translation][next]"
                            value="<?php echo ! empty($options['translation']['next']) ? esc_attr($options['translation']['next']) : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input
                            type="text"
                            placeholder="<?php esc_html_e('Previous'); ?>"
                            name="wpfancybox3[translation][prev]"
                            value="<?php echo ! empty($options['translation']['prev']) ? esc_attr($options['translation']['prev']) : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input type="text"
                           placeholder="<?php esc_html_e('Error', 'wpfancybox3'); ?>"
                           name="wpfancybox3[translation][error]"
                           value="<?php echo ! empty($options['translation']['error']) ? esc_attr($options['translation']['error']) : ''; ?>">
                </label>
                <p></p>
                <label>

                    <input
                            type="text"
                            placeholder="<?php esc_html_e('Start slideshow', 'wpfancybox3'); ?>"
                            name="wpfancybox3[translation][start]"
                            value="<?php echo ! empty($options['translation']['start']) ? $options['translation']['start'] : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input type="text"
                           placeholder="<?php esc_html_e('Pause slideshow', 'wpfancybox3'); ?>"
                           name="wpfancybox3[translation][pause]"
                           value="<?php echo ! empty($options['translation']['pause']) ? esc_attr($options['translation']['pause']) : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input type="text"
                           placeholder="<?php esc_html_e('Full screen', 'wpfancybox3'); ?>"
                           name="wpfancybox3[translation][full]"
                           value="<?php echo ! empty($options['translation']['full']) ? esc_attr($options['translation']['full']) : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input type="text"
                           placeholder="<?php esc_html_e('Thumbnails', 'wpfancybox3'); ?>"
                           name="wpfancybox3[translation][thumbs]"
                           value="<?php echo ! empty($options['translation']['thumbs']) ? esc_attr($options['translation']['thumbs']) : ''; ?>">
                </label>
                <p></p>
                <label>
                    <input type="text"
                           placeholder="<?php esc_html_e('Share', 'wpfancybox3'); ?>"
                           name="wpfancybox3[translation][share]"
                           value="<?php echo ! empty($options['translation']['share']) ? esc_attr($options['translation']['share']) : ''; ?>">
                </label>
            </td>
            <td>
                <?php esc_html_e('Leave it blank for default value', 'wpfancybox3'); ?>
            </td>
        </tr>
        <tr>
            <th><strong><?php esc_html_e('Custom initialization JavaScript Code', 'wpfancybox3'); ?></strong></th>
            <td>
                            <textarea
                                    name="wpfancybox3[customOptions]"><?php echo ! empty($options['customOptions']) ? esc_html($options['customOptions']) : ''; ?></textarea>
            </td>
            <td>
                <?php esc_html_e('This code will be added into the Fancybox initialization JavaScript code.
                    Be careful and left it blank if you don\'t understand what you doing.', 'wpfancybox3'); ?>
            </td>
        </tr>
    </table>
    <?php submit_button(); ?>
</form>
<div class="wpfancybox3-footer">
    <?php echo wp_kses_post(__('Please see more documentation and information about license on <a
            href="http://fancyapps.com/fancybox/3/" target="_blank">fancyapps.com</a>', 'wpfancybox3')); ?>
</div>