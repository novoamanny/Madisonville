<?php
/**
 * The blog template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();
$section1 = get_field("section_1", "option");
$section2 = get_field("section_2", "option");
$section3 = get_field("section_3", "option");

$squares = get_field("square_sections", "option");
$square_one = $squares['one'];
$square_two = $squares['two'];
$square_three = $squares['three'];


$footer = get_field("footer", "option");
$location = $footer['location'];
$hours = $footer['hours'];

$address = $location['address'];
$city = $location['city'];
$state = $location['state'];
$zipcode = $location['zipcode'];

$weekday = $hours['weekday'];
$weekend = $hours['weekend'];


?>
<div id="main-content">

<div class="snowflake-container" style="background-image: url('<?php echo get_template_directory_uri();?>/img/snowflake-BG.jpg')">
    <div class="hero-copy">
        <?php echo the_field("home_hero_copy", "option"); ?>
    </div>
    <div class="snowglobe">
        <div class="snowglobe-content">
            <img src="<?php echo the_field("homepage_hero_image", "option"); ?>"/>
        </div>
        <div class="falling-snow-wrap">
            <div class="falling-snow">
                <div class="flake flakes1">
                    <p>❄</p>
                </div>
                <div class="flake flakes2">
                    <p>❆</p>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer">&nbsp;</div>
</div>

    <!-- <div class="container hero" style="background-image: url('<?php echo get_template_directory_uri();?>/img/snowflake-BG.jpg')">
                <img src="<?php echo the_field("homepage_hero_image", "option"); ?>"/>
                <div class="snow-overlay"></div>
    </div> -->

       <?php if($section1) : ?>
    <div id="about" class="who-we-are">
        <img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
        <div class="left">
<!-- ARCH IMAGE CAROUSEL -->
            <div class="arch">
                <img class="arch-bg" src="<?php echo get_template_directory_uri();?>/img/arch-bg-2.png" />
                <div class="owl-carousel">
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows("arch_image_carousel", "option") ):
                        
                        // loop through the rows of data
                        while ( have_rows("arch_image_carousel", "option") ) : the_row();
                    ?>
                        <img src="<?php echo the_sub_field("image"); ?>" />

                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
<!-- SECTION ONE -->
        <div class="right">
            <div class="copy">
            <h2><?php echo $section1['title']; ?></h2>
            <div class="dashes">
                <div class="vertical"></div>
                <div class="vertical"></div>
                <div class="vertical"></div>
            </div>
            <h5><?php echo $section1['subtitle']; ?></h5>
            <?php echo $section1['editor']; ?>
            <a href="/shop">
            <button class="button" style="display: none;">
                Learn More
                <div class="button__horizontal"></div>
                <div class="button__vertical"></div>
            </button>
            </a>
            </div>
        </div>
    </div>
    <?php endif; ?>


<!-- VIDEO -->
    <div class="embed-container">
    
    <iframe id='player' width="100%" frameborder="0" src="https://www.youtube.com/embed/KbusIX5QK20?si=TnlAls5iFq4hCVQO?&amp;autoplay=1&amp;mute=1&amp;loop=1&amp;controls=1&amp;rel=0&amp;showinfo=0&amp;playlist=KbusIX5QK20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; loop;"></iframe>
    </div>



<!-- SECTION TWO -->
    <div class="decorator-dream" style="background-image: url('<?php echo the_field("decorators_dream", "option") ?>');">
        <div class="left">
            <h2><?php echo $section2['title']; ?></h2>
            <div class="dashes" style="width:100%;"> 
                <div class="horizontal"></div>
                <div class="horizontal"></div>
                <div class="horizontal"></div>
            </div>
            <?php echo $section2['editor']; ?>
        </div>
       
    </div>

<!-- SQUARE SECTIONS -->
        <!-- ONE -->
    <div id="shop" class="sections shop">
        
        <div class="left">
        <div class="copy">
            <h2><?php echo $square_one['title']; ?></h2>
            <div class="dashes">
                <div class="vertical"></div>
                <div class="vertical"></div>
                <div class="vertical"></div>
            </div>
            <h5><?php echo $square_one['subtitle']; ?></h5>
            <?php echo $square_one['editor']; ?>
            <a href="/shop">
            <button class="button" style="font-family: 'Bigola Display';">
                Learn More
                <div class="button__horizontal"></div>
                <div class="button__vertical"></div>
            </button>
            </a>
        </div>
        </div>
        <div class="right logo-static">
        <img class="logo shop-logo" src="<?php echo get_template_directory_uri();?>/img/shop-logo.png" />
            <div class="owl-carousel logo-static">
                <?php

                    // check if the repeater field has rows of data
                    if( have_rows("carousel_one", "option") ):
                        
                        // loop through the rows of data
                        while ( have_rows("carousel_one", "option") ) : the_row();
                    ?>
                        <img src="<?php echo the_sub_field("image"); ?>" />

                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>

        <!-- TWO -->
    <div id="eat" class="sections food">
        
        <div class="left logo-static">
            <img class="logo eat-logo" src="<?php echo get_template_directory_uri();?>/img/eat-logo.png" />
            <div class="owl-carousel">
            
                <?php

                // check if the repeater field has rows of data
                if( have_rows("carousel_two", "option") ):
                    
                    // loop through the rows of data
                    while ( have_rows("carousel_two", "option") ) : the_row();
                ?>
                    <img src="<?php echo the_sub_field("image"); ?>" />

                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="right">
            <div class="copy">
                <h2><?php echo $square_two['title']; ?></h2>
                <div class="dashes">
                    <div class="vertical"></div>
                    <div class="vertical"></div>
                    <div class="vertical"></div>
                </div>
                <h5><?php echo $square_two['subtitle']; ?></h5>
                <?php echo $square_two['editor']; ?>
                <a href="/eat">
                <button class="button" style="font-family: 'Bigola Display';">
                    Learn More
                    <div class="button__horizontal"></div>
                    <div class="button__vertical"></div>
                </button>
                </a>
            </div>
        </div>
    </div>

        <!-- THREE -->
    <div class="sections play">
        
        <div class="left">
        <div class="copy">
            <h2><?php echo $square_three['title']; ?></h2>
            <div class="dashes">
                <div class="vertical"></div>
                <div class="vertical"></div>
                <div class="vertical"></div>
            </div>
            <h5><?php echo $square_three['subtitle']; ?></h5>
            <?php echo $square_three['editor']; ?>
            <a href="/eat">
            <button class="button" style="display: none; font-family: 'Bigola Display';">
                Learn More
                <div class="button__horizontal"></div>
                <div class="button__vertical"></div>
            </button>
            </a>
        </div>
        </div>
        <div class="right logo-static">
        <img class="logo play-logo" src="<?php echo get_template_directory_uri();?>/img/play-logo.png" />
            <div class="owl-carousel ">
            
                <?php

                // check if the repeater field has rows of data
                if( have_rows("carousel_three", "option") ):
                    
                    // loop through the rows of data
                    while ( have_rows("carousel_three", "option") ) : the_row();
                ?>
                    <img src="<?php echo the_sub_field("image"); ?>" />

                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>


<!-- SECTION THREE -->
    <div class="something-coming" >
        <img class="madlogo" src="<?php echo get_template_directory_uri();?>/img/Madisonville-logo-w.png" />
        <div class="copy">
            <h2><?php echo $section3['title']; ?></h2>
            <div class="dashes align">
                <div class="horizontal"></div>
                <div class="horizontal"></div>
                <div class="horizontal"></div>
            </div>
            <?php echo $section3['editor']; ?>
        </div>
       
    </div>

<!-- FEED SECTION -->
    <div class="feed-section">
    
    <img class="snow-break" src="<?php the_field("snow_break", "option") ?>" />
        <h2>Tis' the Season to be Social</h2>
        <div class="feed">

        <?php echo do_shortcode("[instagram-feed feed=1]"); ?>
        
         
        </div>
    <img class="christmas-break" src="<?php the_field("christmas_break", "option") ?>" />
    </div>
</div>

<script>
      
    </script>
<?php
get_footer();