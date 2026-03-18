<?php
/**
 * Lightweight lead form handler.
 *
 * @package mfb-fresh
 */

if (! defined('ABSPATH')) {
    exit;
}

function mfb_get_form_budget_options(): array
{
    return [
        '$400k-$500k',
        '$500k-$600k',
        '$600k-$700k',
        '$700k+',
    ];
}

function mfb_render_lead_form(): void
{
    $action = esc_url(admin_url('admin-post.php'));
    ?>
    <form class="mfb-lead-form" action="<?php echo $action; ?>" method="post">
      <input type="hidden" name="action" value="mfb_submit_lead" />
      <?php wp_nonce_field('mfb_submit_lead', 'mfb_lead_nonce'); ?>
      <div class="mfb-lead-form__grid">
        <p><label>Name<input required name="name" /></label></p>
        <p><label>Email<input required type="email" name="email" /></label></p>
        <p><label>Phone<input name="phone" /></label></p>
        <p><label>Budget Range
            <select name="budget">
              <?php foreach (mfb_get_form_budget_options() as $option) : ?>
                <option value="<?php echo esc_attr($option); ?>"><?php echo esc_html($option); ?></option>
              <?php endforeach; ?>
            </select>
        </label></p>
      </div>
      <p><label>Timeline<input name="timeline" /></label></p>
      <p><label>Message<textarea rows="4" name="message"></textarea></label></p>
      <p><input type="submit" value="Schedule a Consultation" /></p>
    </form>
    <?php
}

add_action('admin_post_nopriv_mfb_submit_lead', 'mfb_handle_lead_submission');
add_action('admin_post_mfb_submit_lead', 'mfb_handle_lead_submission');

function mfb_handle_lead_submission(): void
{
    if (! isset($_POST['mfb_lead_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['mfb_lead_nonce'])), 'mfb_submit_lead')) {
        wp_die(esc_html__('Invalid form submission.', 'mfb-fresh'));
    }

    $name = isset($_POST['name']) ? sanitize_text_field(wp_unslash($_POST['name'])) : '';
    $email = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field(wp_unslash($_POST['phone'])) : '';
    $budget = isset($_POST['budget']) ? sanitize_text_field(wp_unslash($_POST['budget'])) : '';
    $timeline = isset($_POST['timeline']) ? sanitize_text_field(wp_unslash($_POST['timeline'])) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';

    $admin_email = get_option('admin_email');
    $subject = sprintf(__('New MFB consultation request from %s', 'mfb-fresh'), $name ?: __('Website Visitor', 'mfb-fresh'));
    $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nBudget: {$budget}\nTimeline: {$timeline}\n\nMessage:\n{$message}";

    wp_mail($admin_email, $subject, $body);

    $redirect = add_query_arg('lead_submitted', '1', wp_get_referer() ?: home_url('/'));
    wp_safe_redirect($redirect);
    exit;
}
