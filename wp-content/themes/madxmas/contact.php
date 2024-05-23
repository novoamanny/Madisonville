<?php
/**
 * Template Name: Contact
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


$footer = get_field("footer", "option");
$location = $footer['location'];
$hours = $footer['hours'];

$address = $location['address'];
$city = $location['city'];
$state = $location['state'];
$zipcode = $location['zipcode'];

$weekday = $hours['weekday'];
$weekend = $hours['weekend'];
$weekend_2 = $hours['weekend_2'];

$contact = get_field("contact_form_7_form_id");

$sign_off = get_field("sign_off");
?>
 <?php 
    $uri = $_SERVER['REQUEST_URI'];
    $path = parse_url($uri, PHP_URL_PATH); // gives "/pwsdedtech"
    $pathWithoutSlash = substr($path, 1);
    // echo $pathWithoutSlash;
    // if(!$pathWithoutSlash) :
?>
<!-- Hero -->
<?php get_template_part('partials/hero'); ?>

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



<div class="headline cherry">
    <div class="headline-section cherry">
        <h2 class="center contact-space"><?php the_field('headline'); ?></h2>
    </div>
    <img class="break contact-break" src="<?php echo get_template_directory_uri();?>/img/snow-trees.png"/>
</div>

<?php if ($pathWithoutSlash == "contact/") : ?>
<div class="info">
    <div class="content-contact">
        <a href="https://www.google.com/maps/search/madisonville+christmas+company/@30.9678663,-95.8890714,15z/data=!3m1!4b1?entry=ttu" style="text-align: center;" target="blank">
            <img class="map" src="<?php echo get_template_directory_uri(); ?>/img/contact-map.jpg" />
        </a>
        <div class="contact-bottom">

            <img class="watermark-logo" src="<?php echo get_template_directory_uri();?>/img/Madisonville-logo-w.png" />


            <div class="information">
            <img class="stars" src="<?php echo get_template_directory_uri();?>/img/yellow-stars.png" />
                <h3>Location</h3>
                <div class="location contact-copy">
                
                    <p><?php echo $address ?></p>
                    <p><?php echo $city ?>, <?php echo $state ?> <?php echo $zipcode ?></p>
                </div>
                <h3>Hours</h3>
                <div class="hours contact-copy">
                    <!-- <p>Grand Opening September 29</p> -->
                    <p>OPEN <?php echo $weekday['open'] ?>AM - <?php echo $weekday['close'] ?>PM</p>
                    <p>Mon - Thur</p>
                    <p>OPEN <?php echo $weekend['open'] ?>AM - <?php echo $weekend['close'] ?>PM</p>
                    <p>Fri - Sat</p>
                    <p>OPEN <?php echo $weekend_2['open'] ?>AM - <?php echo $weekend_2['close'] ?>PM</p>
                    <p>Sunday</p>
                </div>
            </div>
            <div class="form-contact">
                <?php
                    // Inject the PHP statement with the dynamic ID into the do_shortcode function
                    echo do_shortcode("[contact-form-7 id='$contact' title='Subscribe']");
                ?>
            </div>
         
        </div>
    </div>
</div>
<div class="white-break"></div>

<div class="sign-off" style="background-color: <?php echo $sign_off['background_color']; ?>">
    <img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
        <div class="copy">
            <h2><?php echo $sign_off['title'] ?></h2>
            <?php echo $sign_off['editor'] ?>
        </div>
    <img class="christmas-break" src="<?php the_field("christmas_break", "option") ?>" />
</div>
<?php else : ?>
<div class="info privacy">
    <div style="text-align: left;">
        <?php the_content(); ?>
    </div>
</div>
</div>
<?php endif; ?>

<?php
get_footer();