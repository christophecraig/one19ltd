<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one19limited
 */
?>

<footer id="colophon" class="site-footer">
    <div class="flex">
        <div class="column">
            <?php dynamic_sidebar('footer_area_one'); ?>
        </div>
        <div class="column">
            <?php dynamic_sidebar('footer_area_two'); ?>
        </div>
        <div class="column"><?php dynamic_sidebar('footer_area_three'); ?></div>
        <div class="column"><?php dynamic_sidebar('footer_area_four'); ?></div>

    </div>
    <div class="site-info">
        <a href="<?php echo esc_url(
            __('https://wordpress.org/', 'one19limited')
        ); ?>">
            <?php printf(
                esc_html__('Proudly powered by %s', 'one19limited'),
                'WordPress'
            ); ?>
        </a>
        <span class="sep"> | </span>
        <?php printf(
            esc_html__('Theme: %1$s by %2$s.', 'one19limited'),
            'one19limited',
            '<a href="http://underscores.me/">Underscores.me</a>'
        ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>