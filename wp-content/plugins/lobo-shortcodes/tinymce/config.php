<?php

$current_theme = wp_get_theme();
if ( file_exists( $current_theme->get_template_directory() . '/includes/lobo-shortcodes-config.php' ) ) {
	include_once( $current_theme->get_template_directory() . '/includes/lobo-shortcodes-config.php' );
}


$iconsArray = Array(
	'none' => 'None',
	'fa-glass' => 'glass',
	'fa-music' => 'music',
	'fa-search' => 'search',
	'fa-envelope-o' => 'envelope-o',
	'fa-heart' => 'heart',
	'fa-star' => 'star',
	'fa-star-o' => 'star-o',
	'fa-user' => 'user',
	'fa-film' => 'film',
	'fa-th-large' => 'th-large',
	'fa-th' => 'th',
	'fa-th-list' => 'th-list',
	'fa-check' => 'check',
	'fa-times' => 'times',
	'fa-search-plus' => 'search-plus',
	'fa-search-minus' => 'search-minus',
	'fa-power-off' => 'power-off',
	'fa-signal' => 'signal',
	'fa-cog' => 'cog',
	'fa-trash-o' => 'trash-o',
	'fa-home' => 'home',
	'fa-file-o' => 'file-o',
	'fa-clock-o' => 'clock-o',
	'fa-road' => 'road',
	'fa-download' => 'download',
	'fa-arrow-circle-o-down' => 'arrow-circle-o-down',
	'fa-arrow-circle-o-up' => 'arrow-circle-o-up',
	'fa-inbox' => 'inbox',
	'fa-play-circle-o' => 'play-circle-o',
	'fa-repeat' => 'repeat',
	'fa-refresh' => 'refresh',
	'fa-list-alt' => 'list-alt',
	'fa-lock' => 'lock',
	'fa-flag' => 'flag',
	'fa-headphones' => 'headphones',
	'fa-volume-off' => 'volume-off',
	'fa-volume-down' => 'volume-down',
	'fa-volume-up' => 'volume-up',
	'fa-qrcode' => 'qrcode',
	'fa-barcode' => 'barcode',
	'fa-tag' => 'tag',
	'fa-tags' => 'tags',
	'fa-book' => 'book',
	'fa-bookmark' => 'bookmark',
	'fa-print' => 'print',
	'fa-camera' => 'camera',
	'fa-font' => 'font',
	'fa-bold' => 'bold',
	'fa-italic' => 'italic',
	'fa-text-height' => 'text-height',
	'fa-text-width' => 'text-width',
	'fa-align-left' => 'align-left',
	'fa-align-center' => 'align-center',
	'fa-align-right' => 'align-right',
	'fa-align-justify' => 'align-justify',
	'fa-list' => 'list',
	'fa-outdent' => 'outdent',
	'fa-indent' => 'indent',
	'fa-video-camera' => 'video-camera',
	'fa-picture-o' => 'picture-o',
	'fa-pencil' => 'pencil',
	'fa-map-marker' => 'map-marker',
	'fa-adjust' => 'adjust',
	'fa-tint' => 'tint',
	'fa-pencil-square-o' => 'pencil-square-o',
	'fa-share-square-o' => 'share-square-o',
	'fa-check-square-o' => 'check-square-o',
	'fa-arrows' => 'arrows',
	'fa-step-backward' => 'step-backward',
	'fa-fast-backward' => 'fast-backward',
	'fa-backward' => 'backward',
	'fa-play' => 'play',
	'fa-pause' => 'pause',
	'fa-stop' => 'stop',
	'fa-forward' => 'forward',
	'fa-fast-forward' => 'fast-forward',
	'fa-step-forward' => 'step-forward',
	'fa-eject' => 'eject',
	'fa-chevron-left' => 'chevron-left',
	'fa-chevron-right' => 'chevron-right',
	'fa-plus-circle' => 'plus-circle',
	'fa-minus-circle' => 'minus-circle',
	'fa-times-circle' => 'times-circle',
	'fa-check-circle' => 'check-circle',
	'fa-question-circle' => 'question-circle',
	'fa-info-circle' => 'info-circle',
	'fa-crosshairs' => 'crosshairs',
	'fa-times-circle-o' => 'times-circle-o',
	'fa-check-circle-o' => 'check-circle-o',
	'fa-ban' => 'ban',
	'fa-arrow-left' => 'arrow-left',
	'fa-arrow-right' => 'arrow-right',
	'fa-arrow-up' => 'arrow-up',
	'fa-arrow-down' => 'arrow-down',
	'fa-share' => 'share',
	'fa-expand' => 'expand',
	'fa-compress' => 'compress',
	'fa-plus' => 'plus',
	'fa-minus' => 'minus',
	'fa-asterisk' => 'asterisk',
	'fa-exclamation-circle' => 'exclamation-circle',
	'fa-gift' => 'gift',
	'fa-leaf' => 'leaf',
	'fa-fire' => 'fire',
	'fa-eye' => 'eye',
	'fa-eye-slash' => 'eye-slash',
	'fa-exclamation-triangle' => 'exclamation-triangle',
	'fa-plane' => 'plane',
	'fa-calendar' => 'calendar',
	'fa-random' => 'random',
	'fa-comment' => 'comment',
	'fa-magnet' => 'magnet',
	'fa-chevron-up' => 'chevron-up',
	'fa-chevron-down' => 'chevron-down',
	'fa-retweet' => 'retweet',
	'fa-shopping-cart' => 'shopping-cart',
	'fa-folder' => 'folder',
	'fa-folder-open' => 'folder-open',
	'fa-arrows-v' => 'arrows-v',
	'fa-arrows-h' => 'arrows-h',
	'fa-bar-chart-o' => 'bar-chart-o',
	'fa-twitter-square' => 'twitter-square',
	'fa-facebook-square' => 'facebook-square',
	'fa-camera-retro' => 'camera-retro',
	'fa-key' => 'key',
	'fa-cogs' => 'cogs',
	'fa-comments' => 'comments',
	'fa-thumbs-o-up' => 'thumbs-o-up',
	'fa-thumbs-o-down' => 'thumbs-o-down',
	'fa-star-half' => 'star-half',
	'fa-heart-o' => 'heart-o',
	'fa-sign-out' => 'sign-out',
	'fa-linkedin-square' => 'linkedin-square',
	'fa-thumb-tack' => 'thumb-tack',
	'fa-external-link' => 'external-link',
	'fa-sign-in' => 'sign-in',
	'fa-trophy' => 'trophy',
	'fa-github-square' => 'github-square',
	'fa-upload' => 'upload',
	'fa-lemon-o' => 'lemon-o',
	'fa-phone' => 'phone',
	'fa-square-o' => 'square-o',
	'fa-bookmark-o' => 'bookmark-o',
	'fa-phone-square' => 'phone-square',
	'fa-twitter' => 'twitter',
	'fa-facebook' => 'facebook',
	'fa-github' => 'github',
	'fa-unlock' => 'unlock',
	'fa-credit-card' => 'credit-card',
	'fa-rss' => 'rss',
	'fa-hdd-o' => 'hdd-o',
	'fa-bullhorn' => 'bullhorn',
	'fa-bell' => 'bell',
	'fa-certificate' => 'certificate',
	'fa-hand-o-right' => 'hand-o-right',
	'fa-hand-o-left' => 'hand-o-left',
	'fa-hand-o-up' => 'hand-o-up',
	'fa-hand-o-down' => 'hand-o-down',
	'fa-arrow-circle-left' => 'arrow-circle-left',
	'fa-arrow-circle-right' => 'arrow-circle-right',
	'fa-arrow-circle-up' => 'arrow-circle-up',
	'fa-arrow-circle-down' => 'arrow-circle-down',
	'fa-globe' => 'globe',
	'fa-wrench' => 'wrench',
	'fa-tasks' => 'tasks',
	'fa-filter' => 'filter',
	'fa-briefcase' => 'briefcase',
	'fa-arrows-alt' => 'arrows-alt',
	'fa-users' => 'users',
	'fa-link' => 'link',
	'fa-cloud' => 'cloud',
	'fa-flask' => 'flask',
	'fa-scissors' => 'scissors',
	'fa-files-o' => 'files-o',
	'fa-paperclip' => 'paperclip',
	'fa-floppy-o' => 'floppy-o',
	'fa-square' => 'square',
	'fa-bars' => 'bars',
	'fa-list-ul' => 'list-ul',
	'fa-list-ol' => 'list-ol',
	'fa-strikethrough' => 'strikethrough',
	'fa-underline' => 'underline',
	'fa-table' => 'table',
	'fa-magic' => 'magic',
	'fa-truck' => 'truck',
	'fa-pinterest' => 'pinterest',
	'fa-pinterest-square' => 'pinterest-square',
	'fa-google-plus-square' => 'google-plus-square',
	'fa-google-plus' => 'google-plus',
	'fa-money' => 'money',
	'fa-caret-down' => 'caret-down',
	'fa-caret-up' => 'caret-up',
	'fa-caret-left' => 'caret-left',
	'fa-caret-right' => 'caret-right',
	'fa-columns' => 'columns',
	'fa-sort' => 'sort',
	'fa-sort-asc' => 'sort-asc',
	'fa-sort-desc' => 'sort-desc',
	'fa-envelope' => 'envelope',
	'fa-linkedin' => 'linkedin',
	'fa-undo' => 'undo',
	'fa-gavel' => 'gavel',
	'fa-tachometer' => 'tachometer',
	'fa-comment-o' => 'comment-o',
	'fa-comments-o' => 'comments-o',
	'fa-bolt' => 'bolt',
	'fa-sitemap' => 'sitemap',
	'fa-umbrella' => 'umbrella',
	'fa-clipboard' => 'clipboard',
	'fa-lightbulb-o' => 'lightbulb-o',
	'fa-exchange' => 'exchange',
	'fa-cloud-download' => 'cloud-download',
	'fa-cloud-upload' => 'cloud-upload',
	'fa-user-md' => 'user-md',
	'fa-stethoscope' => 'stethoscope',
	'fa-suitcase' => 'suitcase',
	'fa-bell-o' => 'bell-o',
	'fa-coffee' => 'coffee',
	'fa-cutlery' => 'cutlery',
	'fa-file-text-o' => 'file-text-o',
	'fa-building-o' => 'building-o',
	'fa-hospital-o' => 'hospital-o',
	'fa-ambulance' => 'ambulance',
	'fa-medkit' => 'medkit',
	'fa-fighter-jet' => 'fighter-jet',
	'fa-beer' => 'beer',
	'fa-h-square' => 'h-square',
	'fa-plus-square' => 'plus-square',
	'fa-angle-double-left' => 'angle-double-left',
	'fa-angle-double-right' => 'angle-double-right',
	'fa-angle-double-up' => 'angle-double-up',
	'fa-angle-double-down' => 'angle-double-down',
	'fa-angle-left' => 'angle-left',
	'fa-angle-right' => 'angle-right',
	'fa-angle-up' => 'angle-up',
	'fa-angle-down' => 'angle-down',
	'fa-desktop' => 'desktop',
	'fa-laptop' => 'laptop',
	'fa-tablet' => 'tablet',
	'fa-mobile' => 'mobile',
	'fa-circle-o' => 'circle-o',
	'fa-quote-left' => 'quote-left',
	'fa-quote-right' => 'quote-right',
	'fa-spinner' => 'spinner',
	'fa-circle' => 'circle',
	'fa-reply' => 'reply',
	'fa-github-alt' => 'github-alt',
	'fa-folder-o' => 'folder-o',
	'fa-folder-open-o' => 'folder-open-o',
	'fa-smile-o' => 'smile-o',
	'fa-frown-o' => 'frown-o',
	'fa-meh-o' => 'meh-o',
	'fa-gamepad' => 'gamepad',
	'fa-keyboard-o' => 'keyboard-o',
	'fa-flag-o' => 'flag-o',
	'fa-flag-checkered' => 'flag-checkered',
	'fa-terminal' => 'terminal',
	'fa-code' => 'code',
	'fa-reply-all' => 'reply-all',
	'fa-mail-reply-all' => 'mail-reply-all',
	'fa-star-half-o' => 'star-half-o',
	'fa-location-arrow' => 'location-arrow',
	'fa-crop' => 'crop',
	'fa-code-fork' => 'code-fork',
	'fa-chain-broken' => 'chain-broken',
	'fa-question' => 'question',
	'fa-info' => 'info',
	'fa-exclamation' => 'exclamation',
	'fa-superscript' => 'superscript',
	'fa-subscript' => 'subscript',
	'fa-eraser' => 'eraser',
	'fa-puzzle-piece' => 'puzzle-piece',
	'fa-microphone' => 'microphone',
	'fa-microphone-slash' => 'microphone-slash',
	'fa-shield' => 'shield',
	'fa-calendar-o' => 'calendar-o',
	'fa-fire-extinguisher' => 'fire-extinguisher',
	'fa-rocket' => 'rocket',
	'fa-maxcdn' => 'maxcdn',
	'fa-chevron-circle-left' => 'chevron-circle-left',
	'fa-chevron-circle-right' => 'chevron-circle-right',
	'fa-chevron-circle-up' => 'chevron-circle-up',
	'fa-chevron-circle-down' => 'chevron-circle-down',
	'fa-html5' => 'html5',
	'fa-css3' => 'css3',
	'fa-anchor' => 'anchor',
	'fa-unlock-alt' => 'unlock-alt',
	'fa-bullseye' => 'bullseye',
	'fa-ellipsis-h' => 'ellipsis-h',
	'fa-ellipsis-v' => 'ellipsis-v',
	'fa-rss-square' => 'rss-square',
	'fa-play-circle' => 'play-circle',
	'fa-ticket' => 'ticket',
	'fa-minus-square' => 'minus-square',
	'fa-minus-square-o' => 'minus-square-o',
	'fa-level-up' => 'level-up',
	'fa-level-down' => 'level-down',
	'fa-check-square' => 'check-square',
	'fa-pencil-square' => 'pencil-square',
	'fa-external-link-square' => 'external-link-square',
	'fa-share-square' => 'share-square',
	'fa-compass' => 'compass',
	'fa-caret-square-o-down' => 'caret-square-o-down',
	'fa-caret-square-o-up' => 'caret-square-o-up',
	'fa-caret-square-o-right' => 'caret-square-o-right',
	'fa-eur' => 'eur',
	'fa-gbp' => 'gbp',
	'fa-usd' => 'usd',
	'fa-inr' => 'inr',
	'fa-jpy' => 'jpy',
	'fa-rub' => 'rub',
	'fa-krw' => 'krw',
	'fa-btc' => 'btc',
	'fa-file' => 'file',
	'fa-file-text' => 'file-text',
	'fa-sort-alpha-asc' => 'sort-alpha-asc',
	'fa-sort-alpha-desc' => 'sort-alpha-desc',
	'fa-sort-amount-asc' => 'sort-amount-asc',
	'fa-sort-amount-desc' => 'sort-amount-desc',
	'fa-sort-numeric-asc' => 'sort-numeric-asc',
	'fa-sort-numeric-desc' => 'sort-numeric-desc',
	'fa-thumbs-up' => 'thumbs-up',
	'fa-thumbs-down' => 'thumbs-down',
	'fa-youtube-square' => 'youtube-square',
	'fa-youtube' => 'youtube',
	'fa-xing' => 'xing',
	'fa-xing-square' => 'xing-square',
	'fa-youtube-play' => 'youtube-play',
	'fa-dropbox' => 'dropbox',
	'fa-stack-overflow' => 'stack-overflow',
	'fa-instagram' => 'instagram',
	'fa-flickr' => 'flickr',
	'fa-adn' => 'adn',
	'fa-bitbucket' => 'bitbucket',
	'fa-bitbucket-square' => 'bitbucket-square',
	'fa-tumblr' => 'tumblr',
	'fa-tumblr-square' => 'tumblr-square',
	'fa-long-arrow-down' => 'long-arrow-down',
	'fa-long-arrow-up' => 'long-arrow-up',
	'fa-long-arrow-left' => 'long-arrow-left',
	'fa-long-arrow-right' => 'long-arrow-right',
	'fa-apple' => 'apple',
	'fa-windows' => 'windows',
	'fa-android' => 'android',
	'fa-linux' => 'linux',
	'fa-dribbble' => 'dribbble',
	'fa-skype' => 'skype',
	'fa-foursquare' => 'foursquare',
	'fa-trello' => 'trello',
	'fa-female' => 'female',
	'fa-male' => 'male',
	'fa-gittip' => 'gittip',
	'fa-sun-o' => 'sun-o',
	'fa-moon-o' => 'moon-o',
	'fa-archive' => 'archive',
	'fa-bug' => 'bug',
	'fa-vk' => 'vk',
	'fa-weibo' => 'weibo',
	'fa-renren' => 'renren',
	'fa-pagelines' => 'pagelines',
	'fa-stack-exchange' => 'stack-exchange',
	'fa-arrow-circle-o-right' => 'arrow-circle-o-right',
	'fa-arrow-circle-o-left' => 'arrow-circle-o-left',
	'fa-caret-square-o-left' => 'caret-square-o-left',
	'fa-dot-circle-o' => 'dot-circle-o',
	'fa-wheelchair' => 'wheelchair',
	'fa-vimeo-square' => 'vimeo-square',
	'fa-try' => 'try',
	'fa-plus-square-o' => 'plus-square-o'
);

/* ------------------------
-----   Accordion    -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['accordion'] ) ) {

	$lobo_shortcodes['accordion'] = array(
	    'params' => array(
			'opened' => array(
	            'std' => '0',
	            'type' => 'text',
	            'label' => __('Opened', 'textdomain'),
	            'desc' => __('You can choose which of the sections will be opened at load. "0" is the first, while "-1" will leave all sections closed.', 'textdomain')
			)
	    ),
	    'no_preview' => true,
	    'shortcode' => '[lobo_accordion opened="{{opened}}"] {{child_shortcode}} [/lobo_accordion]',
	    'popup_title' => __('Insert Accordion', 'textdomain'),
	    'child_shortcode' => array(
	        'params' => array(
	            'title' => array(
	                'std' => 'Title',
	                'type' => 'text',
	                'label' => __('Section Title', 'textdomain'),
	                'desc' => __('Title of the accordion section.', 'textdomain'),
	            ),
	            'content' => array(
	                'std' => '',
	                'type' => 'textarea',
	                'label' => __('Section Content', 'textdomain'),
	                'desc' => __('Add the accordion section content.', 'textdomain')
	            )
	        ),
	        'shortcode' => '[lobo_accordion_section title="{{title}}"] {{content}} [/lobo_accordion_section]',
	        'clone_button' => __('Add Section', 'textdomain')
	    )
	);

}

/* ------------------------
-----   Content Slider    -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['cslider'] ) ) {

	$lobo_shortcodes['cslider'] = array(
	    'params' => array(
	    	'style' => array(
	            'std' => 'slider',
	            'type' => 'select',
	            'label' => __('Style', 'textdomain'),
	            'desc' => __('The style of the current shortcode. It can either look as a normal slider or a tabbed slider.', 'textdomain'),
				'options' => array(
					'slider' => 'Slider',
					'tabs' => 'Tabs'
				)
			)
	    ),
	    'no_preview' => true,
	    'shortcode' => '[lobo_cslider style="{{style}}"] {{child_shortcode}} [/lobo_cslider]',
	    'popup_title' => __('Insert Content Slider', 'textdomain'),
	    'child_shortcode' => array(
	        'params' => array(
	            'title' => array(
	                'std' => '',
	                'type' => 'text',
	                'label' => __('Title', 'textdomain'),
	                'desc' => __('Add title for this slide.', 'textdomain')
	            ),
	            'icon' => array(
	                'std' => '',
	                'type' => 'select',
	                'label' => __('Icon', 'textdomain'),
                	'options' => $iconsArray,
	                'desc' => __('(optional) Select the desired icon from the given list.', 'textdomain')
	            ),
	            'content' => array(
	                'std' => '',
	                'type' => 'textarea',
	                'label' => __('Content', 'textdomain'),
	                'desc' => __('Add the  content for this slide.', 'textdomain')
	            )
	        ),
	        'shortcode' => '[lobo_cslider_slide title="{{title}}"  icon="{{icon}}"] {{content}} [/lobo_cslider_slide]',
	        'clone_button' => __('Add Slide', 'textdomain')
	    )
	);

}


/* ------------------------
-----   Images List    -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['list'] ) ) {

	$lobo_shortcodes['list'] = array(
	    'no_preview' => true,
	    'shortcode' => '[lobo_list] {{child_shortcode}} [/lobo_list]',
	    'popup_title' => __('Insert Images List', 'textdomain'),
	    'child_shortcode' => array(
	        'params' => array(
	            'image' => array(
	                'std' => '',
	                'type' => 'text',
	                'label' => __('Image', 'textdomain'),
	                'desc' => __('Add an image (absolute path).', 'textdomain')
	            )
	        ),
	        'shortcode' => '[lobo_list_image image="{{image}}"]',
	        'clone_button' => __('Add Image', 'textdomain')
	    )
	);

}


/* ------------------------
-----   Tabs   -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['tabs'] ) ) {

	$lobo_shortcodes['tabs'] = array(
	    'no_preview' => true,
	    'shortcode' => '[lobo_tabs] {{child_shortcode}} [/lobo_tabs]',
	    'popup_title' => __('Insert Tabs', 'textdomain'),
	    'child_shortcode' => array(
	        'params' => array(
	            'title' => array(
	                'std' => 'Title',
	                'type' => 'text',
	                'label' => __('Tab Title', 'textdomain'),
	                'desc' => __('Title of the tab.', 'textdomain'),
	            ),
	            'content' => array(
	                'std' => '',
	                'type' => 'textarea',
	                'label' => __('Tab Content', 'textdomain'),
	                'desc' => __('Add the tab content.', 'textdomain')
	            )
	        ),
	        'shortcode' => '[lobo_tabs_section title="{{title}}"] {{content}} [/lobo_tabs_section]',
	        'clone_button' => __('Add Tab', 'textdomain')
	    )
	);

}

/* ------------------------
-----   Team Slider    -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['tslider'] ) ) {

	$lobo_shortcodes['tslider'] = array(
	    'params' => array(
			'type' => array(
				'type' => 'select',
				'label' => __('Slider Type', 'textdomain'),
				'desc' => __('There are two styles for the team slider. One features larger images with no social links, while the other one features smaller images with social links.', 'textdomain'),
				'options' => array(
					'one' => '#1',
					'two' => '#2'
				)
			)
	    ),
	    'no_preview' => true,
	    'shortcode' => '[lobo_tslider type="{{type}}"] {{child_shortcode}} [/lobo_tslider]',
	    'popup_title' => __('Insert Team Slider', 'textdomain'),
	    'child_shortcode' => array(
	        'params' => array(
	            'title' => array(
	                'std' => '',
	                'type' => 'text',
	                'label' => __('Title', 'textdomain'),
	                'desc' => __('Add title for this slide (member name).', 'textdomain')
	            ),
	            'subtitle' => array(
	                'std' => '',
	                'type' => 'text',
	                'label' => __('Subtitle', 'textdomain'),
	                'desc' => __('Add subtitle for this slide (member role).', 'textdomain')
	            ),
	            'image' => array(
	                'std' => '',
	                'type' => 'text',
	                'label' => __('Image', 'textdomain'),
	                'desc' => __('Add an image for this slide (absolute path).', 'textdomain')
	            ),
	            'content' => array(
	                'std' => '',
	                'type' => 'text',
	                'label' => __('Social icons', 'textdomain'),
	                'desc' => __('Add the social icons for this slide (through the social icons shortcode).', 'textdomain')
	            )
	        ),
	        'shortcode' => '[lobo_tslider_slide title="{{title}}" subtitle="{{subtitle}}" image="{{image}}"] {{content}} [/lobo_tslider_slide]',
	        'clone_button' => __('Add Slide', 'textdomain')
	    )
	);

}

/* ------------------------
-----   Buttons    -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['button'] ) ) {

	$lobo_shortcodes['button'] = array(
		'no_preview' => true,
		'params' => array(
			'url' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Button URL', 'textdomain'),
				'desc' => __('Add the button\'s url eg http://example.com.', 'textdomain')
			),
			'target' => array(
				'type' => 'select',
				'label' => __('Button Target', 'textdomain'),
				'desc' => __('_self = open in same window. _blank = open in new window.', 'textdomain'),
				'options' => array(
					'_self' => '_self',
					'_blank' => '_blank'
				)
			),
			'label' => array(
				'std' => 'Button Text',
				'type' => 'text',
				'label' => __('Button\'s Text', 'textdomain'),
				'desc' => __('Add the button\'s text.', 'textdomain'),
			),
			'bgcolor' => array(
				'type' => 'text',
				'label' => __('Background Color', 'textdomain'),
				'desc' => __('Choose the button\'s background color.', 'textdomain'),
				'std' => '#fff'
			),
			'color' => array(
				'type' => 'text',
				'label' => __('Text Color', 'textdomain'),
				'desc' => __('Choose the button\'s text color.', 'textdomain'),
				'std' => '#000'
			)
		),
		'shortcode' => '[lobo_button url="{{url}}" bgcolor="{{bgcolor}}" color="{{color}}"  target="{{target}}" label="{{label}}"]',
		'popup_title' => __('Insert Button', 'textdomain')
	);

}

/* ------------------------
-----   Contact Form    -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['form'] ) ) {

	$lobo_shortcodes['form'] = array(
		'no_preview' => true,
		'params' => array(
			'email' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Recipent Email Address', 'textdomain'),
				'desc' => __('Enter the email address where you wish to receive the emails sent from this form.', 'textdomain')
			),
			'label_subject' => array(
				'std' => 'Subject Idea',
				'type' => 'textarea',
				'label' => __('Subject Options', 'textdomain'),
				'desc' => __('The subject field allows to have more than one subject for the user to choose from. Use "\n" after each subject (ex: Subject #1\nSubject #2). If you write a simple label, the drop down box will not appear.', 'textdomain')
			),
			'label_name' => array(
				'std' => 'Name',
				'type' => 'text',
				'label' => __('Name Label', 'textdomain'),
				'desc' => __('Add the text for the name input field.', 'textdomain')
			),
			'label_email' => array(
				'std' => 'Email',
				'type' => 'text',
				'label' => __('Email Label', 'textdomain'),
				'desc' => __('Add the text for the email input field.', 'textdomain')
			),
			'label_message' => array(
				'std' => 'Message',
				'type' => 'text',
				'label' => __('Message Label', 'textdomain'),
				'desc' => __('Add the text for the message input field.', 'textdomain')
			),
			'label_send' => array(
				'std' => 'Send',
				'type' => 'text',
				'label' => __('Send Button Label', 'textdomain'),
				'desc' => __('Add the text for the send button.', 'textdomain')
			),
			'success' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Success Message', 'textdomain'),
				'desc' => __('Add a message which appears when the email was sucessfuly sent. Use "\n" for line breaks.', 'textdomain')
			),
			'required' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Required Message', 'textdomain'),
				'desc' => __('Add a message which appears at the end of the form, explaining about required fields.', 'textdomain')
			)
		),
		'shortcode' => '[lobo_form label_name="{{label_name}}" label_email="{{label_email}}"  label_subject="{{label_subject}}" label_message="{{label_message}}" label_send="{{label_send}}" email="{{email}}" success="{{success}}" required="{{required}}"]',
		'popup_title' => __('Insert Form', 'textdomain')
	);

}

/* ------------------------
-----   Icons    -----
------------------------------*/


if ( ! isset( $lobo_shortcodes['icon'] ) ) {

	$lobo_shortcodes['icon'] = array(
		'no_preview' => true,
		'params' => array(
            'icon' => array(
                'std' => '',
                'type' => 'select',
                'label' => __('Icon', 'textdomain'),
                'desc' => __('Select the desired icon from the given list.', 'textdomain'),
                'options' => $iconsArray
            ),
            'size' => array(
                'std' => '',
                'type' => 'select',
                'label' => __('Size', 'textdomain'),
                'desc' => __('Select the icon\'s size', 'textdomain'),
				'options' => array(
					'fa-tn' => 'Tiny',
					'fa-lg' => 'Small',
					'fa-2x' => 'Regular',
					'fa-3x' => 'Medium',
					'fa-4x' => 'Large',
					'fa-5x' => 'Extra large'
				)
            ),
            'color' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Color', 'textdomain'),
                'desc' => __('Write a color of the icon. It can be any <a href="http://www.w3schools.com/cssref/css_colornames.asp" target="_blank">css color name</a> or <a href="http://www.w3schools.com/cssref/css_colors_legal.asp" target="_blank">css color value</a>.', 'textdomain')
            ),
            'break' => array(
                'std' => '',
                'type' => 'select',
                'label' => __('Wrapping', 'textdomain'),
                'desc' => __('Choose how will this icon wrap against the text.', 'textdomain'),
				'options' => array(
					'float' => 'Float around text',
					'break' => 'Break text'
				)
            )
		),
		'shortcode' => '[lobo_icon size="{{size}}" icon="{{icon}}" color="{{color}}" break="{{break}}"]',
		'popup_title' => __('Insert Icon', 'textdomain')
	);

}

/* ------------------------
-----   Team Member    -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['team'] ) ) {

	$lobo_shortcodes['team'] = array(
		'no_preview' => true,
		'params' => array(
            'image' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Member Picture', 'textdomain'),
                'desc' => __('Use an absolute URL to a valid image file.', 'textdomain')
            ),
            'title' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Title', 'textdomain'),
                'desc' => __('Add the member\'s title.', 'textdomain')
            ),
            'subtitle' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Subtitle', 'textdomain'),
                'desc' => __('Add the member\'s subtitle.', 'textdomain')
            ),
            'content' => array(
                'std' => '',
                'type' => 'textarea',
                'label' => __('Content', 'textdomain'),
                'desc' => __('Add the member\'s content (it can be anything from some text or a social shortcode for example).', 'textdomain')
            )
		),
		'shortcode' => '[lobo_team image="{{image}}" title="{{title}}" subtitle="{{subtitle}}"] {{content}} [/lobo_team]',
		'popup_title' => __('Insert Team Member', 'textdomain')
	);

}

/* ------------------------
-----   Twitter Feed   -----
------------------------------*/

if ( ! isset( $lobo_shortcodes['twitter'] ) ) {

	$lobo_shortcodes['twitter'] = array(
		'no_preview' => true,
		'params' => array(
            'user' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Username', 'textdomain'),
                'desc' => __('Add the desired twitter username (just the name without any special symbols).', 'textdomain')
            ),
            'no' => array(
                'std' => '',
                'type' => 'text',
                'label' => __('Number of Tweets', 'textdomain'),
                'desc' => __('Choose the number of tweets to appear in the widget.', 'textdomain')
            )
		),
		'shortcode' => '[lobo_twitter user="{{user}}" no="{{no}}"]',
		'popup_title' => __('Insert Twitter', 'textdomain')
	);

}

?>