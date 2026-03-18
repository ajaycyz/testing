<?php
/**
 * Meta boxes and save handlers for project/home details.
 *
 * @package mfb-fresh
 */

if (! defined('ABSPATH')) {
    exit;
}

const MFB_PROJECT_META = [
    'city'                => 'City',
    'beds'                => 'Beds',
    'baths'               => 'Baths',
    'sqft'                => 'Square Feet',
    'completion'          => 'Estimated Completion (Month Year)',
    'status'              => 'Build Status',
    'video_url'           => 'Video URL',
    'request_info_url'    => 'Request Info URL',
    'build_timeline'      => 'Build Timeline (one milestone per line)',
];

const MFB_HOME_META = [
    'city'             => 'City',
    'short_desc'       => 'Short Description',
];

const MFB_TESTIMONIAL_META = [
    'client_name'      => 'Client Name',
    'location'         => 'Location',
];

add_action('add_meta_boxes', function () {
    add_meta_box('mfb-project-details', __('Project Details', 'mfb-fresh'), 'mfb_render_project_meta', 'mfb_project', 'normal', 'default');
    add_meta_box('mfb-home-details', __('Completed Home Details', 'mfb-fresh'), 'mfb_render_home_meta', 'mfb_home', 'normal', 'default');
    add_meta_box('mfb-testimonial-details', __('Testimonial Details', 'mfb-fresh'), 'mfb_render_testimonial_meta', 'mfb_testimonial', 'normal', 'default');
});

function mfb_render_fields(int $post_id, array $fields): void
{
    wp_nonce_field('mfb_save_meta', 'mfb_meta_nonce');

    foreach ($fields as $key => $label) {
        $value = esc_textarea((string) get_post_meta($post_id, "mfb_{$key}", true));
        echo '<p>';
        echo '<label for="mfb_' . esc_attr($key) . '"><strong>' . esc_html($label) . '</strong></label><br />';
        if ($key === 'build_timeline') {
            echo '<textarea id="mfb_' . esc_attr($key) . '" name="mfb_' . esc_attr($key) . '" rows="6" style="width:100%">' . $value . '</textarea>';
        } else {
            echo '<input id="mfb_' . esc_attr($key) . '" name="mfb_' . esc_attr($key) . '" value="' . esc_attr($value) . '" style="width:100%" />';
        }
        echo '</p>';
    }
}

function mfb_render_project_meta(WP_Post $post): void
{
    mfb_render_fields((int) $post->ID, MFB_PROJECT_META);
}

function mfb_render_home_meta(WP_Post $post): void
{
    mfb_render_fields((int) $post->ID, MFB_HOME_META);
}

function mfb_render_testimonial_meta(WP_Post $post): void
{
    mfb_render_fields((int) $post->ID, MFB_TESTIMONIAL_META);
}

add_action('save_post', function (int $post_id) {
    if (! isset($_POST['mfb_meta_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['mfb_meta_nonce'])), 'mfb_save_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = array_merge(array_keys(MFB_PROJECT_META), array_keys(MFB_HOME_META), array_keys(MFB_TESTIMONIAL_META));

    foreach ($fields as $field) {
        $key = "mfb_{$field}";
        if (isset($_POST[$key])) {
            update_post_meta($post_id, $key, sanitize_textarea_field(wp_unslash($_POST[$key])));
        }
    }
});
