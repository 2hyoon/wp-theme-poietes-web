<?php

  function poietes_register_fonts() {
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Playfair+Display|Roboto+Condensed:300,400,700', false ); 
  }

  function poietes_register_fontawesome(){
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
  }
    
  add_action('wp_enqueue_scripts', 'poietes_register_fonts');
  add_action('wp_enqueue_scripts', 'poietes_register_fontawesome');
