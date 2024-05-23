<?php
/**
 * The template for displaying the footer.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */


$section1 = get_field("section_1", "option");
$section2 = get_field("section_2", "option");

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
$weekend_2 = $hours['weekend_2'];

$arch_carousel = array();
?>
<footer id="contact">
    <!-- <a class='cta-button parallelogram blue' href="#"><span class='skew-fix'>Learn More</span></a>
<a class='cta-button parallelogram red' href="#"><span class='skew-fix'>Learn More</span></a> -->
    <div class="container">
        <div class="brand">
            <img class="stars" src="<?php echo get_template_directory_uri();?>/img/footer-stars.png" />
            <div class="left">
                <div class="location">
                    <div class="box">
                        <h3>LOCATION</h3>
                    </div>
                        <p><?php echo $address ?></p>
                        <p><?php echo $city ?>, <?php echo $state ?> <?php echo $zipcode ?></p>
                </div>
                <div class="hours">
                    <div class="box">
                        <h3>HOURS</h3>
                    </div>
                        <!-- <p style="padding-bottom: 10px;">Grand Opening September 29</p> -->
                        <p>OPEN <?php echo $weekday['open'] ?>AM - <?php echo $weekday['close'] ?>PM</p>
                        <p>Mon - Thur</p>
                        <p>OPEN <?php echo $weekend['open'] ?>AM - <?php echo $weekend['close'] ?>PM</p>
                        <p>Fri - Sat</p>
                        <p>OPEN <?php echo $weekend_2['open'] ?>AM - <?php echo $weekend_2['close'] ?>PM</p>
                        <p>Sunday</p>
                </div>
            </div>
            <div class="right">
                <a href="https://www.google.com/maps/search/madisonville+christmas+company/@30.9678663,-95.8890714,15z/data=!3m1!4b1?entry=ttu" target="blank">
                    <img src="<?php echo get_template_directory_uri();?>/img/map.svg" />
                </a>
            </div>
        </div>
        <div class="center">
            <img class="madlogo" src="<?php echo get_template_directory_uri();?>/img/footer-logo.png" />
            <div class="copy">
                <h3 style="text-transform: uppercase;">Madisonville Christmas Company</h3>
                <div class="links menu">
                    <?php wp_nav_menu(array('theme_location' => 'top', 'menu_class' => 'navigation')); ?>
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'navigation')); ?>
                </div>
                <div class="bottom links">
                    <?php wp_nav_menu(array('theme_location' => 'footer_bottom', 'menu_class' => 'navigation')); ?>
                </div>
                <div class="copyright">
                    © <?php echo date("Y"); ?> Madisonville Christmas Company
                </div>
            </div>
        </div>
        <div class="links">
            <!-- <?php wp_nav_menu(array('theme_location' => 'footer_column_1', 'menu_class' => 'sitemap', 'container' => false, 'depth' => '1')); ?>
            <?php wp_nav_menu(array('theme_location' => 'footer_column_2', 'menu_class' => 'sitemap', 'container' => false, 'depth' => '1')); ?> -->
            <div class="social">
                <a href="https://www.facebook.com/MadisonvilleChristmasCo" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/facebook.png" /></a>
                <a href="https://www.pinterest.com/MadisonvilleChristmasCo/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/pint.png" /></a>
                <a href="https://www.instagram.com/madisonvillechristmasco/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/insta.png" /></a>
                <a href="/" style="display: none;" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/twitter.png" /></a>
            </div>
            <!-- <form class="form">
                <p>Join The Fun</p>
                <div class="button email">
                    <div class="button__horizontal"></div>
                    <div class="button__vertical"></div>
                    <input class="button" placeholder="Email Address"/>
                </div>
            </form> -->
            
            <form action=https://squareup.com/outreach/Kefzvy/subscribe method="POST" target="_blank" class="form">
                
                <p>Join The Fun</p>

                <div class="button email">
                    <div class="button__horizontal"></div>
                    <div class="button__vertical"></div>
                    <div class="footer-form-set wpcf7">
                        <input type="hidden" name="embed" value="true">
                        <span class="wpcf7-form-control-wrap" data-name="your-email">
                            <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="EMAIL ADDRESS" value="" type="email" name="email_address">
                        </span>
                        <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Submit"><span class="wpcf7-spinner">
                    </div>
                </div>
            </form>
            <!-- <div class="form">
                <p>Join The Fun</p>
                <div class="button email">
                    <div class="button__horizontal"></div>
                    <div class="button__vertical"></div>
                    <?php
                        // $dynamic_id = $footer['contact_form_7_form_id'];;
                        
                        // Inject the PHP statement with the dynamic ID into the do_shortcode function
                        // echo do_shortcode("[contact-form-7 id='$dynamic_id' title='Subscribe']");
                    ?>
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class="bottom">
        <div class="container flex">
            <div class="copyright">
                © <?php echo date("Y"); ?> Madisonville Christmas
            </div>
        </div>
    </div> -->
</footer>

<div class="windowtop"></div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
<?php if ( is_page_template( 'about.php' ) ) : ?>
<script>
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        items: 1,
        autoHeight: true,
        autoplay: 8000,
        // autoplaySpeed: 7000,
        // autoplayTimeout: 5000,
        // autoplayHoverPause: true,
        loop: true,
        nav: true,
        center: true,
        responsive: {
            768: {
                items: 3
            }
        }
    });
});
</script>
<?php elseif ( is_front_page() || is_page() || is_singular( 'communities' )) : ?>
<script>
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        items: 1,
        autoHeight: true,
        autoplay: 8000,
        // autoplaySpeed: 7000,
        // autoplayTimeout: 5000,
        // autoplayHoverPause: true,
        loop: true,
        nav: false,
        dots: true,
        center: true,
        mouseDrag: false, // Disable slide on mouse
        touchDrag: false // Disable slide on touch
    });
});
</script>
<?php endif; ?>
</body>

</html>