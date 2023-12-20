<?php

define('NICE_THEME_VERSION', 1.0);

add_action( 'after_setup_theme', function() {
	get_template_part( 'inc/classes/Updater' );
});


