<?php
// Theme Setup - Logo
function myTM_theme_setup_logo() {
    // Enable support for custom logo
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'myTM_theme_setup_logo');
?>