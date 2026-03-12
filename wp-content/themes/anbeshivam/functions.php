<?php
/**
 * Theme bootstrap.
 *
 * @package AnbeShivam
 */

if (! defined('ABSPATH')) {
    exit;
}

define('AS_WHATSAPP_NUMBER', '916364659339');

add_action('after_setup_theme', 'as_theme_setup');
function as_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_editor_style('style.css');

    register_nav_menus(
        [
            'primary' => __('Primary Navigation', 'anbeshivam'),
            'footer'  => __('Footer Navigation', 'anbeshivam'),
        ]
    );

    register_block_style(
        'core/group',
        [
            'name'  => 'as-section',
            'label' => __('AnbeShivam Section Card', 'anbeshivam'),
        ]
    );
}

add_action('wp_enqueue_scripts', 'as_enqueue_assets');
function as_enqueue_assets(): void
{
    wp_enqueue_style(
        'anbeshivam-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'anbeshivam-site',
        get_template_directory_uri() . '/assets/js/site.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );

    wp_localize_script(
        'anbeshivam-site',
        'ASWhatsApp',
        [
            'number'         => AS_WHATSAPP_NUMBER,
            'defaultMessage' => __('Namaste. I would like to start a review for old religious items.', 'anbeshivam'),
        ]
    );
}

add_action('init', 'as_register_patterns');
function as_register_patterns(): void
{
    register_block_pattern_category(
        'anbeshivam',
        ['label' => __('AnbeShivam Sections', 'anbeshivam')]
    );

    $patterns = [
        'home',
        'privacy',
        'terms-disclaimer',
        'thank-you',
    ];

    foreach ($patterns as $slug) {
        $file = get_template_directory() . '/patterns/' . $slug . '.php';

        if (file_exists($file)) {
            register_block_pattern(
                'anbeshivam/' . $slug,
                require $file
            );
        }
    }
}

add_action('after_switch_theme', 'as_create_initial_pages');
function as_create_initial_pages(): void
{
    if (get_option('as_pages_created_v1')) {
        return;
    }

    $pages = [
        'home' => [
            'title'   => 'Home',
            'content' => as_get_pattern_content('anbeshivam/home'),
        ],
        'privacy-policy' => [
            'title'   => 'Privacy Policy',
            'content' => as_get_pattern_content('anbeshivam/privacy'),
        ],
        'terms-disclaimer' => [
            'title'   => 'Terms / Disclaimer',
            'content' => as_get_pattern_content('anbeshivam/terms-disclaimer'),
        ],
        'thank-you' => [
            'title'   => 'Continue to WhatsApp',
            'content' => as_get_pattern_content('anbeshivam/thank-you'),
        ],
    ];

    $ids = [];

    foreach ($pages as $slug => $page) {
        $existing = get_page_by_path($slug);

        if ($existing instanceof WP_Post) {
            $ids[$slug] = $existing->ID;
            continue;
        }

        $ids[$slug] = wp_insert_post(
            [
                'post_title'   => $page['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => $page['content'],
            ]
        );
    }

    if (! empty($ids['home'])) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', (int) $ids['home']);
    }

    update_option('as_pages_created_v1', 1);
}

function as_get_pattern_content(string $pattern_name): string
{
    $registry = WP_Block_Patterns_Registry::get_instance();
    $pattern  = $registry->get_registered($pattern_name);

    return $pattern['content'] ?? '';
}

add_action('wp_footer', 'as_render_floating_whatsapp', 30);
function as_render_floating_whatsapp(): void
{
    $url = 'https://wa.me/' . AS_WHATSAPP_NUMBER . '?text=' . rawurlencode(__('Namaste. I want to share photos for review.', 'anbeshivam'));
    ?>
    <div class="as-floating-whatsapp">
        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e('Open WhatsApp for item review', 'anbeshivam'); ?>">
            <span aria-hidden="true">💬</span>
            <span><?php esc_html_e('Start WhatsApp Review', 'anbeshivam'); ?></span>
        </a>
    </div>
    <?php
}

function as_primary_menu_fallback(): void
{
    echo '<ul>';
    echo '<li><a href="#what-we-accept">' . esc_html__('What We Accept', 'anbeshivam') . '</a></li>';
    echo '<li><a href="#process">' . esc_html__('Process', 'anbeshivam') . '</a></li>';
    echo '<li><a href="#trust">' . esc_html__('Trust', 'anbeshivam') . '</a></li>';
    echo '<li><a href="#faq">' . esc_html__('FAQ', 'anbeshivam') . '</a></li>';
    echo '<li><a href="#contact">' . esc_html__('Contact', 'anbeshivam') . '</a></li>';
    echo '</ul>';
}
