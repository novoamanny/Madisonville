<?php
/**
 * Template Name: IT Service Management
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
        <?php // var_dump(get_fields()); ?>
        <div class="service grid6 flex">
            <?php if(get_sub_field('icon')):?>
            <img src=<?php the_sub_field('icon'); ?> />
            <?php endif; ?>
            <?php if(get_sub_field('service_name')):?>
            <?php $str = get_sub_field('service_name'); ?>
            <h3><?php the_sub_field('service_name'); ?></h3>
            <?php endif; ?>
            <?php if(get_sub_field('service_description')):?>
            <div class="desc" id="<?php echo str_replace(' ', '-', strtolower($str)); ?>_desc">
                <?php the_sub_field('service_description'); ?>
            </div>
            <?php endif; ?>
            <p class='more' id="<?php echo str_replace(' ', '-', strtolower($str)); ?>_button">
                More >
            </p>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>

<!-- Additional Services -->
<?php if( have_rows('additional_services') ): ?>
<div class="additional-services">
    <div class="container">
        <h2 class="center">Additional Services</h2>
        <div class="services-set flex">
            <?php while(the_repeater_field('additional_services')): ?>
            <div class="service grid6 flex">
                <h3><?php the_sub_field('heading'); ?></h3>
                <?php the_sub_field('description'); ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
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

<!-- Animate -->
<?php get_template_part('partials/animate'); ?>

<!-- Testimonials -->
<?php get_template_part('partials/testimonials'); ?>

<script>
const handleExpand = (e, desc) => {
    if (desc.classList.contains('expanded')) {
        desc.classList.remove('expanded')
        e.target.innerText = "More >"
    } else {
        desc.classList.add('expanded')
        e.target.innerText = "Close"
    }
}

var buttons = document.querySelectorAll('div.service > .more');
var buttonArray = [...buttons];
buttonArray.forEach(b => {
    const service = b.id.split('_')[0];
    const desc = document.getElementById(service + "_desc");
    b.addEventListener("click", (e) => handleExpand(e, desc));

    let childrenHeight = 0;
    for (let child of desc.children) {
        childrenHeight += child.clientHeight
    }
    if (childrenHeight > 190) {
        b.style.display = "block"
    } else {
        b.style.display = "none"
    }
})
</script>

<?php
get_footer();