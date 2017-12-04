<script type="text/javascript">
    try {
        jQuery(document).ready(function () {
            var e = jQuery('<?php echo $selector;?>');<?php
            $s = '{';
            $s .= 'loop: ' . (!empty($options['loop']) ? 'true' : 'false') . ',';
            $s .= 'margin: [' . (!empty($options['margin']['v']) ? (float)$options['margin']['v'] : '44') . ',' . (!empty($options['margin']['h']) ? (float)$options['margin']['h'] : '0') . '],';
            $s .= !empty($options['gutter']) ? 'gutter : ' . (float)$options['gutter'] . ',' : '';
            $s .= 'keyboard: ' . (!empty($options['keyboard']) ? 'true' : 'false') . ',';
            $s .= 'arrows: ' . (!empty($options['arrows']) ? 'true' : 'false') . ',';
            $s .= 'infobar: ' . (!empty($options['infobar']) ? 'true' : 'false') . ',';
            $s .= 'toolbar: ' . (!empty($options['toolbar']) ? 'true' : 'false') . ',';

            $s .= 'buttons: [';
            $s .= !empty($options['buttons']['slideShow']) ? "'slideShow'," : '';
            $s .= !empty($options['buttons']['fullScreen']) ? "'fullScreen'," : '';
            $s .= !empty($options['buttons']['thumbs']) ? "'thumbs'," : '';
            $s .= !empty($options['buttons']['close']) ? "'close'" : '';
            $s .= '],';

            $s .= !empty($options['idleTime']) ? 'idleTime: ' . (int)$options['idleTime'] . ',' : '';
            $s .= !empty($options['smallBtn']) ? "smallBtn: '" . $options['smallBtn'] . "'," : '';

            $s .= 'protect:' . (!empty($options['protect']) ? 'true' : 'false') . ',';
            $s .= 'modal:' . (!empty($options['modal']) ? 'true' : 'false') . ',';

            if (!empty($options['animationEffect'])) {
                $s .= "animationEffect: '" . $options['animationEffect'] . "',";
            }

            $s .= !empty($options['animationDuration']) ? 'animationDuration: ' . (int)$options['animationDuration'] . ',' : '';

            if (!empty($options['zoomOpacity'])) {
                $s .= "zoomOpacity: '" . $options['zoomOpacity'] . "',";
            }

            if (!empty($options['transitionEffect'])) {
                $s .= "transitionEffect: '" . $options['transitionEffect'] . "',";
            }

            $s .= !empty($options['transitionDuration']) ? 'transitionDuration: ' . (int)$options['animationDuration'] . ',' : '';

            if (!empty($options['slideClass'])) {
                $s .= "slideClass: '" . $options['slideClass'] . "',";
            }

            if (!empty($options['baseClass'])) {
                $s .= "baseClass: '" . $options['baseClass'] . "',";
            }

            $s .= 'autoFocus: ' . (!empty($options['autoFocus']) ? 'true' : 'false') . ',';
            $s .= 'backFocus: ' . (!empty($options['backFocus']) ? 'true' : 'false') . ',';
            $s .= 'trapFocus: ' . (!empty($options['trapFocus']) ? 'true' : 'false') . ',';
            $s .= 'fullScreen: { autoStart: ' . (!empty($options['fullScreen']['autoStart']) ? 'true' : 'false') . ' },';
            $s .= 'touch: { vertical: ' . (!empty($options['touch']['vertical']) ? 'true' : 'false') . ', momentum: ' . (!empty($options['touch']['momentum']) ? 'true' : 'false') . '},';
            $s .= 'slideShow: { autoStart: ' . (!empty($options['slideShow']['autoStart']) ? 'true' : 'false') . ', speed: ' . (!empty($options['slideShow']['speed']) ? (int)$options['slideShow']['speed'] : '400') . '},';
            $s .= 'thumbs: { autoStart: ' . (!empty($options['thumbs']['autoStart']) ? 'true' : 'false') . ', momentum: ' . (!empty($options['thumbs']['hideOnClose']) ? 'true' : 'false') . '},';

            $s .= "lang : 'default',
	i18n : {
		'default' : {
			CLOSE       : '" . (!empty($options['translation']['close']) ? $options['translation']['close'] : __('Close')) . "',
			NEXT        : '" . (!empty($options['translation']['next']) ? $options['translation']['next'] : __('Next')) . "',
			PREV        : '" . (!empty($options['translation']['prev']) ? $options['translation']['prev'] : __('Previous')) . "',
			ERROR       : '" . (!empty($options['translation']['error']) ? $options['translation']['error'] : __('The requested content cannot be loaded. <br/> Please try again later.')) . "',
			PLAY_START  : '" . (!empty($options['translation']['start']) ? $options['translation']['start'] : __('Start slideshow')) . "',
			PLAY_STOP   : '" . (!empty($options['translation']['pause']) ? $options['translation']['stop'] : __('Pause slideshow')) . "',
			FULL_SCREEN : '" . (!empty($options['translation']['full']) ? $options['translation']['full'] : __('Full screen')) . "',
			THUMBS      : '" . (!empty($options['translation']['thumbs']) ? $options['translation']['thumbs'] : __('Thumbnails')) . "',
		},
	}";

            if (!empty($options['customOptions'])) {
                $s .= ',' . $options['customOptions'];
            }

            $s .= '}';
            $s = trim($s);

            echo !empty($options['gallery']) ? "e.on('click', function() {jQuery.fancybox.open( e, {$s}, e.index( this ));
	return false;})" : "e.fancybox($s);";?>});
    } catch (e) {
        console.log('Error:' + e);
    }
</script>