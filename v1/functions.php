<?php
// Theme Setup - Logo
function gifton_theme_setup_logo() {
    // Enable support for custom logo
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'gifton_theme_setup_logo');
?>