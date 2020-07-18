<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one19limited
 */

get_header(); ?>

<div class="container">
    <section class="clothing section">
        <h2 class="section-title"><?php echo get_field(
            'clothing-title'
        ); ?></h2>
        <p class="section-text"><?php echo get_field('clothing-text'); ?></p>
        <div class="brands">
            <div class="brand"><a target="_blank" href="<?php echo get_field(
                'clothing-brand_1'
            )['website']; ?>">
                    <?php echo wp_get_attachment_image(
                        get_field('clothing-brand_1')['logo'],
                        'medium'
                    ); ?>
                </a>
            </div>
            <div class="brand"><a target="_blank" href="<?php echo get_field(
                'clothing-brand_2'
            )['website']; ?>">
                    <?php echo wp_get_attachment_image(
                        get_field('clothing-brand_2')['logo'],
                        'medium'
                    ); ?>
                </a>
            </div>
            <div class="brand"><a target="_blank" href="<?php echo get_field(
                'clothing-brand_3'
            )['website']; ?>">
                    <?php echo wp_get_attachment_image(
                        get_field('clothing-brand_3')['logo'],
                        'medium'
                    ); ?>
                </a>
            </div>
        </div>

    </section>

    <?php if (get_field('nzta-title')): ?>
    <section class="section nzta">
        <h2 class="section-title"><?php echo get_field('nzta-title'); ?></h2>
        <p class="section-text"><?php echo get_field('nzta-text'); ?></p>
    </section>
    <?php endif; ?>

    <?php if (get_field('dry_cleaning-title')): ?>
    <section class="section dry-cleaning">
        <h2 class="section-title"><?php echo get_field(
            'dry_cleaning-title'
        ); ?></h2>
        <p class="section-text"><?php echo get_field(
            'dry_cleaning-text'
        ); ?></p>
    </section>
    <?php endif; ?>

    <?php if (get_field('computer-title')): ?>
    <section class="section computer">
        <h2 class="section-title"><?php echo get_field(
            'computer-title'
        ); ?></h2>
        <p class="section-text"><?php echo get_field('computer-text'); ?></p>
    </section>
    <?php endif; ?>
</div>
<?php if (get_field('important-title')) { ?>
<div class="banner-important">
    <h3><?php echo get_field('important-title'); ?></h3>
    <p><?php echo get_field('important-text'); ?></p>
    <div class="button-wrapper"><a class="button button-cta" href="<?php echo get_field(
        'important-call_to_action'
    ); ?>">Get 10% off</a></div>
</div>
<?php } ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>