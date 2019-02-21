<?php
/**
 * Template Name: Sample Template
 *
 * This is custom template, that you can select from template option when adding new page/post/custom-post.
 * To modify template, simply rename this file and change Template Name below
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<?php get_header(); ?>

<main>
	<?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content/content', 'page' );
    endwhile; 
  ?>
</main>

<?php get_footer(); ?>