<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one19limited
 */

use Timber\Post;
use Timber\Timber;

$context = Timber::context();
$post = new Post();
$context['o19'] = [
    'clothing' => [
        'title' => $post->custom['clothing-title'],
        'text' => $post->custom['clothing-text'],
        'brands' => [
            'brand1' => [
                'logo' => $post->custom['clothing-brand_1_logo'],
                'url' => $post->custom['clothing-brand_1_website'],
            ],
            'brand2' => [
                'logo' => $post->custom['clothing-brand_2_logo'],
                'url' => $post->custom['clothing-brand_2_website'],
            ],
            'brand3' => [
                'logo' => $post->custom['clothing-brand_3_logo'],
                'url' => $post->custom['clothing-brand_3_website'],
            ],
            'brand4' => [
                'logo' => $post->custom['clothing-brand_4_logo'],
                'url' => $post->custom['clothing-brand_4_website'],
            ],
        ],
    ],
    'nzta' => [
        'title' => $post->custom['nzta-title'],
        'text' => $post->custom['nzta-text'],
    ],
    'dry_cleaning' => [
        'title' => $post->custom['dry_cleaning-title'],
        'text' => $post->custom['dry_cleaning-text'],
    ],
    'computer_repair' => [
        'title' => $post->custom['computer-title'],
        'text' => $post->custom['computer-text'],
    ],
    'important' => [
        'title' => $post->custom['important-title'],
        'text' => $post->custom['important-text'],
        'url' => $post->custom['important-call_to_action'],
    ],
];
Timber::render('front-page.twig', $context['o19']);
?>