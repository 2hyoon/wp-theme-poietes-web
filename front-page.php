<?php get_header(); ?>

<main>
  <div class="h-3"></div>
    <div class="container">
      <?php $type = get_option('show_on_front'); ?>
      <?php if($type==='posts'): ?>
        <h1><?php the_field('home_title', 'option'); ?></h1>
      <?php endif; ?>
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