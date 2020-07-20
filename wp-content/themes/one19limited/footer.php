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

use Timber\Timber;

$context = Timber::context();
// $sidebars = Timber::get_sidebar();
$footer = [];
$footer[] = Timber::get_widgets('footer_area_one');
$footer[] = Timber::get_widgets('footer_area_two');
$footer[] = Timber::get_widgets('footer_area_three');
$footer[] = Timber::get_widgets('footer_area_four');
$context['footer'] = $footer;
Timber::render('footer.twig', $context);

wp_footer();
?>

</body>

</html>