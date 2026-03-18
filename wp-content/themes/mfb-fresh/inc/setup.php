<?php
/**
 * Theme setup and helper functions.
 *
 * @package mfb-fresh
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'mfb-fresh'),
        'footer'  => __('Footer Menu', 'mfb-fresh'),
    ]);
});

/**
 * Safe post meta getter.
 */
function mfb_get_meta(int $post_id, string $key, string $default = ''): string
{
    $value = get_post_meta($post_id, $key, true);
    if (is_string($value) && $value !== '') {
        return $value;
    }

    return $default;
}
