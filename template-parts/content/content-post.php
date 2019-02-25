<div class="po-featured" 
    style="background-image:url('<?php the_post_thumbnail_url('h-xlg'); ?>');">
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio'); ?>>
  <div class="po-header" 
  style="background-color:<?php the_field('header_background_color'); ?>; color:<?php the_field('header_font_color'); ?>;">
    <div class="container">
      <?php the_title('<h1 class="entry-title">', '</h1>');?>
      <div class="row">
        <div class="col-lg-4">
          <?php the_field('description'); ?>
          <div class="h-1"></div>
        </div>
        <div class="col-lg-4">
          <?php if(!empty(get_field('live_link'))): ?>
            <h6>LIVE SITE</h6>
            <p class="po-meta"><?php the_field('live_link'); ?></p>
          <?php endif; ?>
          <?php if(!empty(get_field('clients'))): ?>
            <h6>CLIENTS</h6>
            <p class="po-meta"><?php the_field('clients'); ?></p>
          <?php endif; ?>
          <?php if(!empty(get_field('role'))): ?>
            <h6>ROLE</h6>
            <p class="po-meta"><?php the_field('role'); ?></p>
          <?php endif; ?>
          <?php if(!empty(get_field('skills'))): ?>
            <h6>SKILLS</h6>
            <p class="po-meta"><?php the_field('skills'); ?></p>
          <?php endif; ?>
          <?php if(!empty(get_field('year'))): ?>
            <h6>YEAR</h6>
            <p class="po-meta"><?php the_field('year'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  
	<div class="po-content">
    <?php 
      if(have_rows('flexible_contents')):
       while(have_rows('flexible_contents')): the_row(); ?>
   
        <?php if(get_row_layout()=='browser_width_image'): ?>
          <div style="background-color:<?php the_sub_field('background_color'); ?>;">
            <?php echo wp_get_attachment_image(get_sub_field('image'), "large" ); ?>
          </div>
          
        <?php elseif(get_row_layout()=='site_width_image'): ?>
          <div style="background-color:<?php the_sub_field('background_color'); ?>;">
            <div class="h-3"></div>
            <div class="container" style="background-color:<?php the_sub_field('background_color'); ?>;">
              <?php echo wp_get_attachment_image(get_sub_field('image'), "large" ); ?>
            </div>
            <div class="h-3"></div>
          </div>

        <?php elseif(get_row_layout()=='one_col_image'): ?>
        <div style="background-color:<?php the_sub_field('background_color'); ?>;">
          <div class="container">
            <div class="h-3"></div>
            <div class="row justify-content-center">
              <div class="col-md-6">
                <?php echo wp_get_attachment_image(get_sub_field('image'), "medium" ); ?>
              </div>
            </div>
            <div class="h-3"></div>
          </div>
        </div>

        <?php elseif(get_row_layout()=='two_cols_images'): ?>
        <div style="background-color:<?php the_sub_field('background_color'); ?>;">
          <div class="container">
            <div class="h-3"></div>
            <div class="row">
              <?php 
                if(have_rows('images')):
                  while(have_rows('images')): the_row(); ?>
                    <div class="col-md-6 po-two-col">
                      <?php echo wp_get_attachment_image(get_sub_field('image'), "medium" ); ?>
                    </div>
              <?php
                  endwhile;
                endif;
              ?>
            </div>
            <div class="h-3"></div>
          </div>
        </div>

    <?php endif; endwhile; endif; ?>
	</div>
</article>