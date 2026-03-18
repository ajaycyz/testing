<?php
/**
 * Single template for current projects.
 *
 * @package mfb-fresh
 */

get_header();
?>
<section class="mfb-section">
  <div class="mfb-container">
    <?php while (have_posts()) : the_post(); ?>
      <article>
        <h1><?php the_title(); ?></h1>
        <p><strong><?php esc_html_e('Location:', 'mfb-fresh'); ?></strong> <?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_city')); ?></p>
        <p><strong><?php esc_html_e('Estimated Completion:', 'mfb-fresh'); ?></strong> <?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_completion')); ?></p>
        <p><strong><?php esc_html_e('Status:', 'mfb-fresh'); ?></strong> <?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_status')); ?></p>
        <?php the_post_thumbnail('large'); ?>
        <?php the_content(); ?>

        <?php $video = mfb_get_meta((int) get_the_ID(), 'mfb_video_url'); ?>
        <?php if ($video) : ?>
          <p><a class="button" href="<?php echo esc_url($video); ?>" target="_blank" rel="noopener"><?php esc_html_e('Watch Video Walkthrough', 'mfb-fresh'); ?></a></p>
        <?php endif; ?>

        <?php $timeline = mfb_get_meta((int) get_the_ID(), 'mfb_build_timeline'); ?>
        <?php if ($timeline) : ?>
          <h2><?php esc_html_e('Build Timeline', 'mfb-fresh'); ?></h2>
          <ul>
            <?php foreach (preg_split('/\r\n|\r|\n/', $timeline) as $step) : ?>
              <?php if (trim($step) !== '') : ?>
                <li><?php echo esc_html($step); ?></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <?php $request_info_url = mfb_get_meta((int) get_the_ID(), 'mfb_request_info_url'); ?>
        <?php if ($request_info_url) : ?>
          <p><a class="button" href="<?php echo esc_url($request_info_url); ?>"><?php esc_html_e('Request Information', 'mfb-fresh'); ?></a></p>
        <?php endif; ?>
      </article>
    <?php endwhile; ?>
  </div>
</section>
<?php
get_footer();
