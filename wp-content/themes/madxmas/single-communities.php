<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>
<!-- Hero -->
<?php get_template_part('partials/hero'); ?>

<!-- Intro Content -->
<div class="container center intro-content">
    <?php if(get_field('intro_content')):?>
        <?php the_field('intro_content'); ?>
    <?php endif; ?>
    <?php if(get_field('intro_cta_text')):?>
        <a href="<?php the_field('intro_cta_link'); ?>" class="button"><?php the_field('intro_cta_text'); ?></a>
    <?php endif; ?>
</div>

<!-- Services -->
<?php if( have_rows('available_services_&_pricing') ): ?>
    <div class="container">
        <?php if(get_field('available_services_heading')):?>
            <h2 class="center"><?php the_field('available_services_heading'); ?></h2>
        <?php endif; ?>
        <div class="services-set flex">
            <?php while(the_repeater_field('available_services_&_pricing')): ?>
                <div class="service grid3 flex">
                    <?php if(get_sub_field('service_details')):?>
                        <div class="service-details">
                            <?php the_sub_field('service_details'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if(get_sub_field('serfice_pricing')):?>
                        <h3 class="service-pricing"><?php the_sub_field('serfice_pricing'); ?></h3>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
        <?php if(get_field('available_services_outro')):?>
            <div class="available-services-outro center">
                <?php the_field('available_services_outro'); ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- Section 1 -->
<?php $section_1 = get_field('section_1'); ?>
<?php if ($section_1['section_copy']):?>
    <div class='content-container'>
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
                <a href="<?php echo $section_1['section_cta_link']; ?>" class="button"><?php echo $section_1['section_cta_text']; ?></a>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<!-- Locations -->
<?php if( have_rows('locations') ): ?>
    <?php while(the_repeater_field('locations')): ?>
        <div class='content-container'>
            <?php if(get_sub_field('location_image')):?>
                <img src="<?php the_sub_field('location_image'); ?>" alt='residential services' class='animate-right' />
            <?php endif; ?>
            <div class='content animate-left'>
                <?php if(get_sub_field('location_heading')):?>
                    <h1>
                        <?php the_sub_field('location_heading'); ?>
                    </h1>
                <?php endif; ?>
                <?php if(get_sub_field('location_copy')):?>
                    <?php the_sub_field('location_copy'); ?>
                <?php endif; ?>
                <?php if(get_sub_field('location_cta_text')):?>
                    <a href="<?php the_sub_field('location_cta_link'); ?>" class="button"><?php the_sub_field('location_cta_text'); ?></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<!-- Section 2 -->
<?php $section_2 = get_field('section_2'); ?>
<?php if ($section_2['section_copy']):?>
    <div class='content-container'>
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
                <a href="<?php echo $section_2['section_cta_link']; ?>" class="button"><?php echo $section_2['section_cta_text']; ?></a>
            <?php endif; ?>
        </div>
        <?php if($section_2['section_image']):?>
            <img src="<?php echo $section_1['section_image']; ?>" alt='residential services' class='animate-left' />
        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- Outro Content -->
<div class="container center outro-content">
    <?php if(get_field('outro_content')):?>
        <?php the_field('outro_content'); ?>
    <?php endif; ?>
    <?php if(get_field('outro_cta_text')):?>
        <a href="<?php the_field('outro_cta_link'); ?>" class="button"><?php the_field('outro_cta_text'); ?></a>
    <?php endif; ?>
</div>

<!-- Testimonials -->
<?php get_template_part('partials/testimonials'); ?>

<?php
get_footer();
