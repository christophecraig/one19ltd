<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one19limited
 */
?>
ZGEGZGEGGEGE
<div class="banner-important">
    <h3><?php echo get_field('important-title'); ?></h3>
    <p><?php echo get_field('important-text'); ?></p>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->

    <?php
// one19limited_post_thumbnail();
?>

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages([
            'before' =>
                '<div class="page-links">' .
                esc_html__('Pages:', 'one19limited'),
            'after' => '</div>',
        ]);
        ?>
    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()): ?>
    <footer class="entry-footer">
        <?php edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */ __(
                        'Edit <span class="screen-reader-text">%s</span>',
                        'one19limited'
                    ),
                    [
                        'span' => [
                            'class' => [],
                        ],
                    ]
                ),
                wp_kses_post(get_the_title())
            ),
            '<span class="edit-link">',
            '</span>'
        ); ?>
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->