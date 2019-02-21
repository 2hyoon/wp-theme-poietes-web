<?php
/**
 * Template that handle 404 requests on server
 *
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 */
?>

<?php get_header();?>

<main>
  <article class="container">
    <div class="h-4"></div>
    <h6>ERROR 404</h6>
    <h1><?php echo esc_html('Oops, something went wrong', 'poietes'); ?></h1>
    <div class="h-1"></div>
    <p>You can start from
      <a href="<?php echo esc_attr(home_url()); ?>">
        <?php echo esc_html('home', 'poietes'); ?>
      </a>
    </p>
    <div class="h-4"></div>
  </article>
</main>

<?php get_footer();?>