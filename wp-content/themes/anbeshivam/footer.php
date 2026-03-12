<?php
/**
 * Footer template.
 *
 * @package AnbeShivam
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <p><?php echo esc_html(date_i18n('Y')); ?> <?php esc_html_e('AnbeShivam. Respectful review-first handling for old religious items.', 'anbeshivam'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
