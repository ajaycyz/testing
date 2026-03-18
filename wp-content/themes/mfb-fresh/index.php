<?php
/**
 * Default template.
 *
 * @package mfb-fresh
 */

get_header();
?>
<section class="mfb-section">
  <div class="mfb-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('mfb-card'); ?>>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; ?>
      <?php the_posts_pagination(); ?>
    <?php else : ?>
      <p><?php esc_html_e('No content found.', 'mfb-fresh'); ?></p>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer();
