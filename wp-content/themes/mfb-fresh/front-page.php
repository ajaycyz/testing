<?php
/**
 * Homepage template.
 *
 * @package mfb-fresh
 */

get_header();

$project_query = new WP_Query([
    'post_type'      => 'mfb_project',
    'posts_per_page' => 6,
]);

$home_query = new WP_Query([
    'post_type'      => 'mfb_home',
    'posts_per_page' => 6,
]);

$testimonial_query = new WP_Query([
    'post_type'      => 'mfb_testimonial',
    'posts_per_page' => 3,
]);
?>

<section class="mfb-hero">
  <div class="mfb-container">
    <h1><?php esc_html_e('Custom & Semi-Custom Homes Built for West Michigan Living', 'mfb-fresh'); ?></h1>
    <p><?php esc_html_e('From thoughtfully designed spec homes to fully custom builds, we create homes built to last in communities across West Michigan.', 'mfb-fresh'); ?></p>
    <p>
      <a class="button" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Schedule a Consultation', 'mfb-fresh'); ?></a>
      <a class="button button--secondary" href="<?php echo esc_url(get_post_type_archive_link('mfb_project')); ?>"><?php esc_html_e('View Current Projects', 'mfb-fresh'); ?></a>
    </p>
    <div class="mfb-trust-strip">
      <div class="mfb-card"><?php esc_html_e('Serving West Michigan', 'mfb-fresh'); ?></div>
      <div class="mfb-card"><?php esc_html_e('Custom, Semi-Custom & Spec Homes', 'mfb-fresh'); ?></div>
      <div class="mfb-card"><?php esc_html_e('$400K–$700K Range', 'mfb-fresh'); ?></div>
      <div class="mfb-card"><?php esc_html_e('Built with Integrity', 'mfb-fresh'); ?></div>
    </div>
  </div>
</section>

<section class="mfb-section">
  <div class="mfb-container">
    <h2><?php esc_html_e('What We Build', 'mfb-fresh'); ?></h2>
    <div class="mfb-grid mfb-grid--4">
      <article class="mfb-card"><h3><?php esc_html_e('Custom Homes', 'mfb-fresh'); ?></h3><p><?php esc_html_e('Built from the ground up around your vision.', 'mfb-fresh'); ?></p></article>
      <article class="mfb-card"><h3><?php esc_html_e('Semi-Custom Homes', 'mfb-fresh'); ?></h3><p><?php esc_html_e('Refined floor plans with room to personalize.', 'mfb-fresh'); ?></p></article>
      <article class="mfb-card"><h3><?php esc_html_e('Available Homes', 'mfb-fresh'); ?></h3><p><?php esc_html_e('Move-in ready homes built with the same craftsmanship.', 'mfb-fresh'); ?></p></article>
      <article class="mfb-card"><h3><?php esc_html_e('Developments', 'mfb-fresh'); ?></h3><p><?php esc_html_e('Carefully selected communities with premium lots.', 'mfb-fresh'); ?></p></article>
    </div>
  </div>
</section>

<section class="mfb-section mfb-section--alt">
  <div class="mfb-container">
    <h2><?php esc_html_e('Current Projects Across West Michigan', 'mfb-fresh'); ?></h2>
    <p><?php esc_html_e('Explore homes currently under construction and see craftsmanship in progress.', 'mfb-fresh'); ?></p>
    <div class="mfb-grid mfb-grid--3">
      <?php if ($project_query->have_posts()) : ?>
        <?php while ($project_query->have_posts()) : $project_query->the_post(); ?>
          <article class="mfb-card">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_city')); ?></p>
            <p><?php echo esc_html(sprintf('%s Bed | %s Bath | %s Sq Ft', mfb_get_meta((int) get_the_ID(), 'mfb_beds'), mfb_get_meta((int) get_the_ID(), 'mfb_baths'), mfb_get_meta((int) get_the_ID(), 'mfb_sqft'))); ?></p>
            <p><strong><?php esc_html_e('Estimated Completion:', 'mfb-fresh'); ?></strong> <?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_completion')); ?></p>
            <p><strong><?php esc_html_e('Status:', 'mfb-fresh'); ?></strong> <?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_status')); ?></p>
            <p><a class="button" href="<?php the_permalink(); ?>"><?php esc_html_e('Watch Build Progress', 'mfb-fresh'); ?></a></p>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php esc_html_e('Add Current Project posts to populate this section.', 'mfb-fresh'); ?></p>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<section class="mfb-section">
  <div class="mfb-container">
    <h2><?php esc_html_e('Craftsmanship You Can See', 'mfb-fresh'); ?></h2>
    <div class="mfb-grid mfb-grid--3">
      <?php if ($home_query->have_posts()) : ?>
        <?php while ($home_query->have_posts()) : $home_query->the_post(); ?>
          <article class="mfb-card">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_city')); ?></p>
            <p><?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_short_desc')); ?></p>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php esc_html_e('Add Completed Home posts to populate this section.', 'mfb-fresh'); ?></p>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<section class="mfb-section mfb-section--alt">
  <div class="mfb-container">
    <h2><?php esc_html_e('A Clear, Guided Building Experience', 'mfb-fresh'); ?></h2>
    <div class="mfb-process">
      <div class="mfb-card">1. <?php esc_html_e('Consultation & Vision', 'mfb-fresh'); ?></div>
      <div class="mfb-card">2. <?php esc_html_e('Budget & Lot Planning', 'mfb-fresh'); ?></div>
      <div class="mfb-card">3. <?php esc_html_e('Design & Selections', 'mfb-fresh'); ?></div>
      <div class="mfb-card">4. <?php esc_html_e('Construction & Communication', 'mfb-fresh'); ?></div>
      <div class="mfb-card">5. <?php esc_html_e('Final Walkthrough & Warranty', 'mfb-fresh'); ?></div>
    </div>
  </div>
</section>

<section class="mfb-section">
  <div class="mfb-container">
    <h2><?php esc_html_e('Why West Michigan Families Choose Us', 'mfb-fresh'); ?></h2>
    <ul>
      <li><?php esc_html_e('Local trade partners', 'mfb-fresh'); ?></li>
      <li><?php esc_html_e('Transparent communication', 'mfb-fresh'); ?></li>
      <li><?php esc_html_e('Realistic timelines', 'mfb-fresh'); ?></li>
      <li><?php esc_html_e('Quality materials', 'mfb-fresh'); ?></li>
      <li><?php esc_html_e('Hands-on project oversight', 'mfb-fresh'); ?></li>
    </ul>
  </div>
</section>

<section class="mfb-section mfb-section--alt">
  <div class="mfb-container">
    <h2><?php esc_html_e('Testimonials', 'mfb-fresh'); ?></h2>
    <div class="mfb-grid mfb-grid--3">
      <?php if ($testimonial_query->have_posts()) : ?>
        <?php while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>
          <article class="mfb-card">
            <blockquote><?php the_excerpt(); ?></blockquote>
            <p>
              <strong><?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_client_name', get_the_title())); ?></strong>
              <?php if (mfb_get_meta((int) get_the_ID(), 'mfb_location')) : ?>
                — <?php echo esc_html(mfb_get_meta((int) get_the_ID(), 'mfb_location')); ?>
              <?php endif; ?>
            </p>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php esc_html_e('Add Testimonial posts to populate this section.', 'mfb-fresh'); ?></p>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<section class="mfb-section">
  <div class="mfb-container">
    <h2><?php esc_html_e('Start Planning Your Forever Home', 'mfb-fresh'); ?></h2>
    <?php if (isset($_GET['lead_submitted']) && $_GET['lead_submitted'] === '1') : ?>
      <p><strong><?php esc_html_e('Thank you — we received your request and will reach out soon.', 'mfb-fresh'); ?></strong></p>
    <?php endif; ?>
    <?php mfb_render_lead_form(); ?>
  </div>
</section>

<?php
get_footer();
