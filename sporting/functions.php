<?php
/**
 * Child-Theme functions and definitions
 */

function wineshop_child_scripts() {
    wp_enqueue_style( 'wineshop-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wineshop_child_scripts' );


?>