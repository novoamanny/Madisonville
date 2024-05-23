<?php
/**
 * Template Name: Communities Served
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

<!-- Service Area Locator -->
<?php get_template_part('partials/service-area-locator'); ?>

<?php $loop = new WP_Query( array( 'post_type' => 'communities', 'posts_per_page' => 100, 'orderby' => 'title', 'order'   => 'ASC', ) ); ?>

<!-- Communities List -->
<div class="container communities-list-content">
    <h3 class="center">List of Communities</h3>
    <ul>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php the_title( '<li class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></li>' ); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); /* RESET POST DATA HERE */ ?>
    </ul>
</div>

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