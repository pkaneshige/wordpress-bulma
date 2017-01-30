<?php

  function load_css() {
    wp_enqueue_style( 'bulma_stylesheet', '//cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css' );
    wp_enqueue_style( 'bulma_stylesheet_map', '//cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css.map' );
  }

  add_action( 'wp_enqueue_scripts', 'load_css' );

?>
