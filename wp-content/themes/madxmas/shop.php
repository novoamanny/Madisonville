<?php
/**
 * Template Name: Shop
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
$intro = get_field("intro_content");
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

<!-- Intro Content -->

<div class="container headline shop">
    
    <div class="headline-section">
    <h2><?php echo $intro['title']; ?></h2>
        <?php echo $intro['editor']; ?>
    </div>
    
</div>

<!-- SQUARE SECTIONS -->
<?php

// check if the repeater field has rows of data
if( have_rows("shop_sections") ):
    
    // loop through the rows of data
    while ( have_rows("shop_sections") ) : the_row();
    $color = get_sub_field('background_color');
    $index = get_row_index();
?>

    <div class="sections shop-sections <?php if($index == 1) : echo 'one'; endif; ?> <?php if($index % 2 != 0) : echo 'flex-flow'; endif; ?>">
        <?php if($index % 2 != 0) : ?>
            <div class="left text" style="background-color: <?php echo $color; ?>">
            <div class="copy <?php if($index == 3 || $index == 5) : echo "white-text"; endif; ?>">
                <h2><?php echo the_sub_field('title'); ?></h2>
                <h5><?php echo the_sub_field('subtitle'); ?></h5>
                <?php echo the_sub_field('editor'); ?>

                <img class="stamp" src="<?php the_sub_field("stamp"); ?>"/>
            </div>
            </div>
            <div class="right image" style="background-image: url('<?php echo the_sub_field("image"); ?>');">
                <!-- <div class="owl-carousel">
      
                    <img src="<?php echo the_sub_field("image"); ?>" />

                    
                </div> -->
            </div>

        <?php else : ?>
            <div class="left image" style="background-image: url('<?php echo the_sub_field("image"); ?>');">
                <!-- <div class="owl-carousel">
                  
                    <img src="<?php echo the_sub_field("image"); ?>" />

                    
                </div> -->
            </div>
            <div class="right text" style="background-color: <?php echo $color; ?>">
                <div class="copy">
                    <h2><?php echo the_sub_field('title'); ?></h2>
                    <h5><?php echo the_sub_field('subtitle'); ?></h5>
                    <?php echo the_sub_field('editor'); ?>

                    <img class="stamp" src="<?php the_sub_field("stamp"); ?>"/>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endwhile; endif; ?>
<!-- Sign Off -->
<div class="sign-off" style="background-color: <?php echo $sign_off['background_color']; ?>">
<img class="ornament-left" src="<?php echo get_template_directory_uri();?>/img/ornaments-left.png" />
<img class="ornament-right" src="<?php echo get_template_directory_uri();?>/img/ornaments-right.png"/>
    <div class="copy">
        <h2><?php echo $sign_off['title'] ?></h2>
        <div class="dashes align">
            <div class="horizontal"></div>
            <div class="horizontal"></div>
            <div class="horizontal"></div>
        </div>
        <?php echo $sign_off['editor'] ?>
    </div>
<img class="christmas-break" src="<?php the_field("christmas_break", "option") ?>" />
</div>
<?php
get_footer();