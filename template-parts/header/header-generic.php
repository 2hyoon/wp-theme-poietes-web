<header class="header">
  <div class="header__nav">
    <div class="container header__container">
      <a href="<?php echo esc_attr(get_site_url()); ?>" title="<?php echo esc_attr('Back to homepage', 'poietes'); ?>" class="header__logo">WEB.POIETES</a>
      <div class="header__knob"></div>
    </div>
  </div>
  <div class="header__about disabled">
    <div class="container">
      <div class="row">
        <div class="col-md-8 header__about-txt">
        <?php the_field('about', 'option'); ?>
        </div>
      </div>
    </div>
  </div>
</header>