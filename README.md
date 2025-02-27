# Enabling Logo option in Customize Section

## Version 1 (v1)

Ths `functions.php` is given in **v1** folder

if we add below function in `functions.php`.

```ruby
<?php
// Theme Setup - Logo
function gifton_theme_setup_logo() {
    // Enable support for custom logo
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'gifton_theme_setup_logo');
?>
```

## output before above code

![Before our code](/images/site_identity_options.jpg)

## output After above code

![Before our code](/images/site_logo_after.jpg)
