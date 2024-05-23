<?php
/**
 * Template Name: Frequently Asked Questions
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

<div class="faq-container">
    <?php while(the_repeater_field('faq_section')): ?>
    <div class="faq-section">
        <?php if(get_sub_field('faq_section_heading')):?>
        <h3 class="section_heading">
            <?php the_sub_field('faq_section_heading'); ?>
        </h3>
        <?php endif; ?>
        <?php if(get_sub_field('faq_question_container')):?>
        <?php while(the_repeater_field('faq_question_container')): ?>
        <div class="faq_question_container">
            <?php if(get_sub_field('faq_question')):?>
            <p class="faq_question">
                <?php the_sub_field('faq_question'); ?>
                <span class="icon_container" />
            </p>
            <?php endif; ?>
            <?php if(get_sub_field('faq_answer')):?>

            <div class="faq_answer">
                <?php the_sub_field('faq_answer'); ?>
            </div>

            <?php endif; ?>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php endwhile; ?>
</div>

<script>
// Script for expanding the answer to each question
var questions = document.querySelectorAll('.faq_question');
var questionsArray = [...questions];
questionsArray.forEach(q => {
    q.addEventListener("click", () => {
        if (q.classList.contains('expanded')) {
            q.classList.remove('expanded')
        } else {
            q.classList.add('expanded')
        }
    });
})
</script>

<?php
get_footer();