<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Life_Insurance_Theme
 */

get_header();
?>

	<main id="main-content">
        <?php get_template_part('template-parts/spinner'); ?>
		<?php get_template_part('template-parts/topbar'); ?>
		<?php get_template_part('template-parts/navbar-hero'); ?>
		<?php get_template_part('template-parts/modal-search'); ?>
		<?php get_template_part('template-parts/carousel'); ?>
		<?php get_template_part('template-parts/feature'); ?>
		<?php get_template_part('template-parts/about'); ?>
		<?php get_template_part('template-parts/blog'); ?>
		<?php get_template_part('template-parts/team'); ?>
		<?php get_template_part('template-parts/testimonial'); ?>
	</main><!-- #main -->

<?php
get_footer();
