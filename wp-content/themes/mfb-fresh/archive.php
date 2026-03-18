<?php
/**
 * Archive template.
 *
 * @package mfb-fresh
 */

get_header();
?>
<section class="mfb-section">
  <div class="mfb-container">
    <h1><?php the_archive_title(); ?></h1>
    <?php if (have_posts()) : ?>
      <div class="mfb-grid mfb-grid--3">
        <?php while (have_posts()) : the_post(); ?>
          <article class="mfb-card">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail('medium'); ?>
            <?php the_excerpt(); ?>
          </article>
        <?php endwhile; ?>
      </div>
      <?php the_posts_pagination(); ?>
    <?php else : ?>
      <p><?php esc_html_e('No posts found.', 'mfb-fresh'); ?></p>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer();
