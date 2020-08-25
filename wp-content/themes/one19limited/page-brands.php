<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one19limited
 */

use Timber\PostQuery;
use Timber\Timber;

get_header();

$context = Timber::context();
$context['brands'] = new PostQuery('post_type=brands');

Timber::render('brands.twig', $context);
get_sidebar();
get_footer();