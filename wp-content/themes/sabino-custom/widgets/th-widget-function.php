<?php

function th_widgets_register() {
    register_widget( 'Th_Custom_Categories' );
}

add_action( 'widgets_init', 'th_widgets_register' );

require get_template_directory() . '/widgets/custom-categories.php';