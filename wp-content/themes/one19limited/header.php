<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one19limited
 */

use Timber\Menu;
use Timber\Post;
use Timber\Timber;

$context = Timber::context();
$context['menu'] = new Menu('Menu');
$context['custom_logo'] = get_custom_logo();
$context['important'] = new Post(259);
$context['widgets']['love_local'] = Timber::get_widgets('love_local');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e(
            'Skip to content',
            'one19limited'
        ); ?></a>

        <?php Timber::render('header.twig', $context);