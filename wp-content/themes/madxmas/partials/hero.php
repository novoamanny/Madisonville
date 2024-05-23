<?php $hero = get_field('hero'); ?>
<?php if ($hero): ?>
<div id='hero-container'>
    <?php if($hero['hero_image']):?>
    <img src="<?php echo esc_url( $hero['hero_image'] ); ?>" alt="Hero Image" />
    <?php else : ?>
    <img src="<?php echo get_template_directory_uri();?>/src/images/Header-Communities-Individual-V2.jpg"
        alt="Hero Image" />
    <?php endif; ?>
    <div class="hero-content">
        <?php if($hero['hero_title']):?>
        <h1><?php echo $hero['hero_title']; ?></h1>
        <?php else : ?>
        <h1><?php the_title(); ?></h1>
        <?php endif; ?>
        <?php if($hero['hero_subtitle']):?>
        <p><?php echo $hero['hero_subtitle']; ?></p>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>