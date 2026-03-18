<?php
/**
 * Theme header.
 *
 * @package mfb-fresh
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="mfb-container site-header__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>"><strong><?php bloginfo('name'); ?></strong></a>
    <nav class="main-navigation" aria-label="<?php esc_attr_e('Primary menu', 'mfb-fresh'); ?>">
      <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'fallback_cb' => false]); ?>
    </nav>
    <a class="button" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Schedule a Consultation', 'mfb-fresh'); ?></a>
  </div>
</header>
<main>
