<?php
/**
 * Custom post types for projects, portfolio, testimonials.
 *
 * @package mfb-fresh
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('init', function () {
    register_post_type('mfb_project', [
        'labels' => [
            'name'          => __('Current Projects', 'mfb-fresh'),
            'singular_name' => __('Project', 'mfb-fresh'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-building',
        'rewrite'      => ['slug' => 'current-projects'],
        'show_in_rest' => true,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);

    register_post_type('mfb_home', [
        'labels' => [
            'name'          => __('Completed Homes', 'mfb-fresh'),
            'singular_name' => __('Completed Home', 'mfb-fresh'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-admin-home',
        'rewrite'      => ['slug' => 'portfolio'],
        'show_in_rest' => true,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);

    register_post_type('mfb_testimonial', [
        'labels' => [
            'name'          => __('Testimonials', 'mfb-fresh'),
            'singular_name' => __('Testimonial', 'mfb-fresh'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-format-quote',
        'rewrite'      => ['slug' => 'testimonials'],
        'show_in_rest' => true,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);
});
