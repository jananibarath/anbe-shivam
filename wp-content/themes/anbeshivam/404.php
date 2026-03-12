<?php
/**
 * 404 template.
 *
 * @package AnbeShivam
 */

get_header();
$cta = 'https://wa.me/' . AS_WHATSAPP_NUMBER . '?text=' . rawurlencode(__('Namaste. I am trying to reach AnbeShivam for review guidance.', 'anbeshivam'));
?>
<main id="main" class="site-main">
    <section class="entry-content">
        <div class="wp-block-group is-style-as-section">
            <h1><?php esc_html_e('Page not found', 'anbeshivam'); ?></h1>
            <p><?php esc_html_e('The page you are looking for is unavailable. You can return to the homepage or continue on WhatsApp for review guidance.', 'anbeshivam'); ?></p>
            <div class="wp-block-buttons">
                <div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Go to Home', 'anbeshivam'); ?></a></div>
                <div class="wp-block-button"><a class="wp-block-button__link" href="<?php echo esc_url($cta); ?>" target="_blank" rel="noopener"><?php esc_html_e('Start WhatsApp Review', 'anbeshivam'); ?></a></div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
