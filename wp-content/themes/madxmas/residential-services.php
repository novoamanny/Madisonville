<?php
/**
 * Template Name: Residential Services
 */
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();
?>
<?php $hero = get_field('hero'); ?>
<?php if ($hero): ?>
<div id='hero-container'>
    <?php if($hero['hero_image']):?>
    <img src="<?php echo esc_url( $hero['hero_image'] ); ?>" alt="Hero Image" />
    <?php endif; ?>
    <div class="hero-content">
        <?php if($hero['hero_title']):?>
        <h1><?php echo $hero['hero_title']; ?></h1>
        <?php endif; ?>
        <?php if($hero['hero_subtitle']):?>
        <p><?php echo $hero['hero_subtitle']; ?></p>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php $section_1 = get_field('section_1'); ?>
<?php if ($section_1['section_copy']):?>
<div id="internet" class='content-container animation-container'>
    <?php if($section_1['section_image']):?>
    <img src="<?php echo $section_1['section_image']; ?>" alt='residential services' class='animate-right' />
    <?php endif; ?>
    <div class='content animate-left'>
        <?php if($section_1['section_heading']):?>
        <h1>
            <?php echo $section_1['section_heading']; ?>
        </h1>
        <?php endif; ?>
        <?php if($section_1['section_copy']):?>
        <?php echo $section_1['section_copy']; ?>
        <?php endif; ?>
        <?php if($section_1['section_cta_text']):?>
        <a href="<?php echo $section_1['section_cta_link']; ?>"
            class="button"><?php echo $section_1['section_cta_text']; ?></a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php $section_2 = get_field('section_2'); ?>
<?php if ($section_2['section_copy']):?>
<div id="phone" class='content-container animation-container'>
    <div class='content animate-right'>
        <?php if($section_2['section_heading']):?>
        <h1>
            <?php echo $section_2['section_heading']; ?>
        </h1>
        <?php endif; ?>
        <?php if($section_2['section_copy']):?>
        <?php echo $section_2['section_copy']; ?>
        <?php endif; ?>
        <?php if($section_2['section_cta_text']):?>
        <a href="<?php echo $section_2['section_cta_link']; ?>"
            class="button"><?php echo $section_2['section_cta_text']; ?></a>
        <?php endif; ?>
    </div>
    <?php if($section_2['section_image']):?>
    <img src="<?php echo $section_2['section_image']; ?>" alt='residential services' class='animate-left' />
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- Animate -->
<?php get_template_part('partials/animate'); ?>

<!-- Service Area Locator -->
<?php get_template_part('partials/service-area-locator'); ?>

<!-- Testimonials -->
<?php get_template_part('partials/testimonials'); ?>

<?php
get_footer();