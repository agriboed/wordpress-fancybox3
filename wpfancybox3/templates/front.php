<?php echo "<script type=\"text/javascript\">
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
			THUMBS      : '" . (!empty($options['translation']['thumbs']) ? $options['translation']['thumbs'] : 'Thumbnails') . "',
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