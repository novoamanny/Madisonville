<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */
get_header();
?>

<div class='container_404'>
    <h2>404 Error</h2>
    <p>This page does not exist. Click below to return to the site.</p>
    <a href="<?php echo site_url(); ?>" class="button">Return Home</a>
</div>

<?php
get_footer();