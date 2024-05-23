<?php
/**
 * Template Name: Business Services
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
<!-- Hero -->
<?php get_template_part('partials/hero'); ?>

<!-- Section 1 -->
<?php $section_1 = get_field('section_1'); ?>
<?php if ($section_1['section_copy']):?>
<div class='content-container animation-container'>
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

<!-- Section 2 -->
<?php $section_2 = get_field('section_2'); ?>
<?php if ($section_2['section_copy']):?>
<div class='content-container animation-container'>
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
    <img src="<?php echo $section_1['section_image']; ?>" alt='residential services' class='animate-left' />
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- Services -->
<?php if( have_rows('services') ): ?>
<div class="container">
    <h2 class="center">Services</h2>
    <div class="services-set flex">
        <?php while(the_repeater_field('services')): ?>
        <div class="service grid4 flex">
            <?php if(get_sub_field('icon')):?>
            <img src=<?php the_sub_field('icon'); ?> />
            <?php endif; ?>
            <?php if(get_sub_field('service_name')):?>
            <h3><?php the_sub_field('service_name'); ?></h3>
            <?php endif; ?>
            <?php if(get_sub_field('service_description')):?>
            <?php the_sub_field('service_description'); ?>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>
<?php if(get_field('additional_services_cta_text')):?>
    <div class="additional-services-cta-container">
        <a href="<?php the_field('additional_services_cta_link'); ?>"
            class="button"><?php the_field('additional_services_cta_text'); ?></a>
    </div>
<?php endif; ?>

<!-- Testimonials -->
<?php get_template_part('partials/testimonials'); ?>

<!-- Animate -->
<?php get_template_part('partials/animate'); ?>

<?php
get_footer();