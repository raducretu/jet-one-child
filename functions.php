<?php

add_action( 'wp_enqueue_scripts', 'jet_one_child_enqueue_front' );

function jet_one_child_enqueue_front(){
  wp_enqueue_style( 'jet-one-style-parent', get_template_directory_uri() .'/style.css' );
  wp_enqueue_style( 'jet-one-style' );
}

?>
