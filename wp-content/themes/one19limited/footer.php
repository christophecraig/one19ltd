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
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>