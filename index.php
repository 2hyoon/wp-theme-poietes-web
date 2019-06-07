<?php get_header(); ?>

<main>
  <div class="h-3"></div>
    <div class="container">
      <h1><?php single_post_title(); ?></h1>
      <div class="row">
        <?php if(have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>
            <div class="col-card">
              <?php get_template_part( "template-parts/post/post", "card" ); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  <div class="h-4"></div>
</main>

<?php get_footer(); ?>