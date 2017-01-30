<?php

  function load_css() {
    wp_enqueue_style( 'bulma_stylesheet', '//cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css' );
    wp_enqueue_style( 'bulma_stylesheet_map', '//cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css.map' );
    wp_enqueue_style( 'font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
  }

  add_action( 'wp_enqueue_scripts', 'load_css' );

?>
