<?php

// 1. CSS・JSを読み込む関数
function my_theme_enqueue_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null);
    wp_enqueue_style('photoswipe-css', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/photoswipe.min.css', array(), '5.4.4');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');

    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);
    wp_enqueue_script('gsap-scroll-to', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js', array('gsap'), null, true);

    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('gsap'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

add_filter('script_loader_tag', function($tag, $handle, $src) {
    if ($handle === 'main-js') {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}, 10, 3);