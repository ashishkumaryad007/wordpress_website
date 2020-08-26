<?php

function cbusiness_consult_lite_style() {
    wp_enqueue_style('cbusiness-consult-lite-basic-style', get_stylesheet_uri());
    wp_enqueue_style('cbusiness-consult-lite-style', get_template_directory_uri() . '/design/css/cbusiness-consult-lite-main.css');
    wp_enqueue_style('cbusiness-consult-lite-responsive', get_template_directory_uri() . '/design/css/cbusiness-consult-lite-responsive.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/design/css/font-awesome.css');
    wp_enqueue_script('cbusiness-consult-lite-toggle', get_template_directory_uri() . '/design/js/cbusiness-consult-lite-toggle.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'cbusiness_consult_lite_style');
?>
<?php

function cbusiness_consult_lite_header_style() {
    $cbusiness_consult_lite_header_text_color = get_header_textcolor();
    if (get_theme_support('custom-header', 'default-text-color') === $cbusiness_consult_lite_header_text_color) {
        return;
    }
    echo '<style id="cbusiness-consult-lite-custom-header-styles" type="text/css">';
    if ('blank' !== $cbusiness_consult_lite_header_text_color) {
        echo '.header_top .logo a,
            .blog-post h3 a,
            .blog-post .pageheading h1
			 {
				color: #' . esc_attr($cbusiness_consult_lite_header_text_color) . '
			}';
    }
    echo '</style>';
}
