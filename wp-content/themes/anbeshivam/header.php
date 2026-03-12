<?php
/**
 * Header template.
 *
 * @package AnbeShivam
 */

if (! defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="site-header__inner">
        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>">AnbeShivam</a>
        </div>

        <nav class="main-navigation" aria-label="<?php esc_attr_e('Primary navigation', 'anbeshivam'); ?>">
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => 'as_primary_menu_fallback',
                ]
            );
            ?>
        </nav>

        <?php $cta = 'https://wa.me/' . AS_WHATSAPP_NUMBER . '?text=' . rawurlencode(__('Namaste. I would like to start a review for old religious items.', 'anbeshivam')); ?>
        <a class="header-cta" href="<?php echo esc_url($cta); ?>" target="_blank" rel="noopener"><?php esc_html_e('Start WhatsApp Review', 'anbeshivam'); ?></a>
    </div>
</header>
