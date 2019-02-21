<?php get_header(); ?>

  <?php
    while(have_posts()):
      the_post();
      get_template_part('template-parts/content/content', 'post');?>

  <?php if(is_singular('post')): ?>
    <div class="po-nav">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <?php 
            $previous = get_previous_post_link('<i class="fas fa-chevron-circle-left"></i>%link');
            $next = get_next_post_link('%link<i class="fas fa-chevron-circle-right"></i>');
          ?>
          <div class="col-sm-6 po-nav-prev"><?php echo $previous; ?></div>
          <div class="col-sm-6 po-nav-next"><?php echo $next; ?></div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php endwhile; ?>

<?php
get_footer();
