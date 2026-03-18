<?php
/**
 * Theme footer.
 *
 * @package mfb-fresh
 */
?>
</main>
<footer class="site-footer">
  <div class="mfb-container site-footer__inner">
    <div>
      <strong><?php bloginfo('name'); ?></strong>
      <p><?php esc_html_e('Proudly building in Grand Rapids, Hudsonville, Rockford, Ada, and surrounding communities.', 'mfb-fresh'); ?></p>
    </div>
    <nav aria-label="<?php esc_attr_e('Footer menu', 'mfb-fresh'); ?>">
      <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false, 'fallback_cb' => false]); ?>
    </nav>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
