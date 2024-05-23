<?php
/**
 * Template Name: 12/25
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
$sign_off = get_field("sign_off");
?>

<!-- Intro Content -->
<div class="hero-carousel">
    <div class="owl-carousel">
        <?php

            // check if the repeater field has rows of data
            if( have_rows("hero_carousel") ):
                
                // loop through the rows of data
                while ( have_rows("hero_carousel") ) : the_row();
            ?>
                <img src="<?php echo the_sub_field("image"); ?>" />

        <?php endwhile; endif; ?>
    </div>
</div>

<!-- Intro -->

<div class="container headline">
    <div class="headline-section caramel">
        <h2 class="center"><?php the_field('headline'); ?></h2>
    </div>
    <img class="break" src="<?php echo get_template_directory_uri();?>/img/tan-ornament-orig.svg" />
</div>

<!-- SQUARE SECTIONS -->
<?php

// check if the repeater field has rows of data
if( have_rows("square_sections_alt") ):
    
    // loop through the rows of data
    while ( have_rows("square_sections_alt") ) : the_row();
    $color = get_sub_field('color');
    $cta_url = get_sub_field("cta_url_link");
    $cta_link_target = get_sub_field("cta_link_target");
    $index = get_row_index();
?>

    <div class="sections sections-alt <?php if($index % 2 != 0) : echo 'flex-flow'; endif; ?>">
        <?php if($index % 2 != 0) : ?>
            <div class="left">
            <div class="copy">
                <h2><?php echo the_sub_field('title'); ?></h2>
                <div class="dashes">
                    <div class="vertical"></div>
                    <div class="vertical"></div>
                    <div class="vertical"></div>
                </div>
                <h5><?php echo the_sub_field('subtitle'); ?></h5>
                <?php echo the_sub_field('editor'); ?>
                <?php if(get_sub_field('cta_text') && $index != 3): // only show button if cta_text is set ?>
                    <div class="full-width-button">
                    <button id="sc1" class="button" style="color: <?php echo $color; ?>" onclick="window.open('<?php echo $cta_url; ?>','<?php echo $cta_link_target; ?>')">
                    <span style="color: #033E4C; font-family: 'Bigola Display';"><?php echo the_sub_field('cta_text'); ?></span>
                        <div class="button__horizontal"></div>
                        <div class="button__vertical"></div>
                    </button>
                    </div>
                <?php endif; ?>
            </div>
            </div>
            <div class="right" style="background-color: <?php echo $color; ?>">
                <div class="owl-carousel">
                    <?php

                        // check if the repeater field has rows of data
                        if( have_rows("carousel") ):
                            
                            // loop through the rows of data
                            while ( have_rows("carousel") ) : the_row();
                        ?>
                            <img src="<?php echo the_sub_field("image"); ?>" />

                    <?php endwhile; endif; ?>
                </div>
            </div>

        <?php else : ?>
            <div class="left" style="background-color: <?php echo $color; ?>">
                <div class="owl-carousel">
                    <?php

                        // check if the repeater field has rows of data
                        if( have_rows("carousel") ):
                            
                            // loop through the rows of data
                            while ( have_rows("carousel") ) : the_row();
                        ?>
                            <img src="<?php echo the_sub_field("image"); ?>" />

                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="right" >
                <div class="copy">
                    <h2><?php echo the_sub_field('title'); ?></h2>
                    <div class="dashes">
                        <div class="vertical"></div>
                        <div class="vertical"></div>
                        <div class="vertical"></div>
                    </div>
                    <h5><?php echo the_sub_field('subtitle'); ?></h5>
                    <?php echo the_sub_field('editor'); ?>
                    <?php if(get_sub_field('cta_text')): // only show button if cta_text is set ?>
                        <div class="full-width-button">
                        <button id="sc2" class="button" style="color: <?php echo $color; ?>" onclick="window.open('<?php echo $cta_url; ?>','<?php echo $cta_link_target; ?>')">
                        <span style="color: #033E4C; font-family: 'Bigola Display';"><?php echo the_sub_field('cta_text'); ?></span>
                            <div class="button__horizontal"></div>
                            <div class="button__vertical"></div>
                        </div>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endwhile; endif; ?>
<div class="white-break"></div>
<!-- Sign Off -->
<div class="sign-off" style="background-color: <?php echo $sign_off['background_color']; ?>">
<img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
    <div class="copy">
        <h2><?php echo $sign_off['title'] ?></h2>
        <?php echo $sign_off['editor'] ?>
    </div>
<img class="christmas-break" src="<?php the_field("christmas_break", "option") ?>" />
</div>
<?php
get_footer();