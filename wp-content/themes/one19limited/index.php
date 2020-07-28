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

use Timber\Post;
use Timber\Timber;

get_header();

$context = Timber::context();
$posts = Timber::get_posts();
// Retrieve post-picture group field fields
foreach ($posts as $post) {
    $post->pictures = !empty(get_field_object('post-pictures')['value'])
        ? get_field_object('post-pictures')['value']
        : [];
}
$context['posts'] = $posts;
$context['pagination'] = Timber::get_pagination();
Timber::render('blog.twig', $context);
get_sidebar();
get_footer();