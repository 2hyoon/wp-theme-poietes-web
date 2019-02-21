<article class="card">
  <a href="<?php the_permalink() ?>" class="card__img">
    <?php 
      $card = wp_get_attachment_image(get_post_thumbnail_id(), 'h-md');
      echo $card;
    ?>
    <h5 class="card__title"><?php the_title(); ?></h5>
  </a>
</article>