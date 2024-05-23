<?php $show_testimonials = get_field('show_testimonials'); ?>
<?php if ( $show_testimonials ): ?>
    <?php if( have_rows('testimonials') ): ?>
        <div class="container testimonials center">
            <h2>Testimonials</h2>
            <div class="testimonials-set owl-carousel center">
                <?php while(have_rows('testimonials')): the_row(); ?>
                    <div class="testimonial">
                        <?php if(the_sub_field('testimonial')):?>
                            <div class="quote"><?php the_sub_field('testimonial'); ?></div>
                        <?php endif; ?>
                        <?php if(the_sub_field('author')):?>
                            <p class="author"><?php the_sub_field('author'); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php else : // Global testimonials ?>
        <div class="container testimonials center">
            <h2>Testimonials</h2>
            <div class="testimonials-set owl-carousel center">
                <?php while(have_rows('global_testimonials', 'option')): the_row(); ?>
                    <div class="testimonial">
                        <?php if(the_sub_field('testimonial', 'option')):?>
                            <div class="quote"><?php the_sub_field('testimonial', 'option'); ?></div>
                        <?php endif; ?>
                        <?php if(the_sub_field('author', 'option')):?>
                            <p class="author"><?php the_sub_field('author', 'option'); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
<?php else: // show_testimonials returned false ?>
<!-- Testimonials section not loaded -->
<?php endif; ?>