<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one19limited
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()):
            the_title('<h1 class="entry-title">', '</h1>');
        else:
            the_title(
                '<h2 class="entry-title"><a href="' .
                    esc_url(get_permalink()) .
                    '" rel="bookmark">',
                '</a></h2>'
            );
        endif;

        if ('post' === get_post_type()): ?>
        <div class="entry-meta">
            <?php
            one19limited_posted_on();
            one19limited_posted_by();
            ?>
        </div><!-- .entry-meta -->
        <?php endif;
        ?>
    </header><!-- .entry-header -->

    <?php one19limited_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __(
                        'Continue reading<span class="screen-reader-text"> "%s"</span>',
                        'one19limited'
                    ),
                    [
                        'span' => [
                            'class' => [],
                        ],
                    ]
                ),
                wp_kses_post(get_the_title())
            )
        );
        $post_pictures = get_field('post-pictures');
        if (is_array($post_pictures)) {
            foreach ($post_pictures as $pic) {
                echo '<a href=' .
                    wp_get_attachment_image_url($pic) .
                    '>' .
                    wp_get_attachment_image($pic, 'medium') .
                    '</a>';
            }
        }

        wp_link_pages([
            'before' =>
                '<div class="page-links">' .
                esc_html__('Pages:', 'one19limited'),
            'after' => '</div>',
        ]);
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php one19limited_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->