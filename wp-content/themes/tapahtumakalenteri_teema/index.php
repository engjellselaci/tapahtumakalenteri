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
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<?php if ( have_posts()) :?>
<?php while ( have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></h2>
<?php the_content() ?>
<?php endwhile ;?>
<?php else:?>
<p>There are no posts!</p>
<?php endif;?>

<?php
get_footer();