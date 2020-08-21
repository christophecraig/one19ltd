<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one19limited
 */

use Timber\Post;
use Timber\Timber;

get_header();
?>

<?php
$context = Timber::context();
$context['page'] = new Post();
Timber::render('page.twig', $context);