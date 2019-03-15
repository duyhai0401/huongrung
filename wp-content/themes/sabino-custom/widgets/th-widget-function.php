<?php

function th_widgets_register() {
    register_widget( 'custom_categories' );
    register_widget( 'recent_posts_custom' );
}

add_action( 'widgets_init', 'th_widgets_register' );

require get_template_directory() . '/widgets/custom_categories.php';
require get_template_directory() . '/widgets/recent_posts_custom.php';