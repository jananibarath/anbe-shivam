<?php
/**
 * Page template.
 *
 * @package AnbeShivam
 */

get_header();
?>
<main id="main" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if (! is_front_page()) : ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php endif; ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>
<?php
get_footer();
