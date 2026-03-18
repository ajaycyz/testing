<?php
/**
 * MFB Fresh theme bootstrap.
 *
 * @package mfb-fresh
 */

if (! defined('ABSPATH')) {
    exit;
}

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/meta-boxes.php';
require get_template_directory() . '/inc/lead-form.php';
