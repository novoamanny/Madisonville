<section class='hero-banner'>
    <?php if(get_field('hero_banner')):?>
        <img src="<?php the_field('hero_banner'); ?>" alt="Hero banner" />
    <?php endif; ?>
    <div class="content-set">
        <?php if(get_field('hero_title')):?>
            <h1><?php the_field('hero_title'); ?></h1>
        <?php endif; ?>
        <?php if(get_field('hero_text')):?>
            <?php the_field('hero_text'); ?>
        <?php endif; ?>
        <?php if(get_field('hero_cta_link')):?>
            <a href="<?php the_field('hero_cta_link'); ?>" class="button"><?php the_field('hero_cta_text'); ?></a>
        <?php endif; ?>
    </div>
</section>