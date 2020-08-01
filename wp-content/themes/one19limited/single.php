<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package one19limited
 */

use Timber\Timber;

get_header();
$context = Timber::context();
$post = Timber::get_post();
$post->pictures = get_field_object('post-pictures');
$context['post'] = $post;
Timber::render('single.twig', $context);
get_sidebar();
get_footer();