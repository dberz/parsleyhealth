<?php
if (!function_exists('foundationpress_sidebar_widgets')) :
function foundationpress_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h4>',
      'after_title' => '</h4>'
  ));

  register_sidebar(array(
      'id' => 'store-widgets',
      'name' => __('Store widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this sidebar container.', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h4>',
      'after_title' => '</h4>'
  ));

  register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __('Footer widgets', 'FoundationPress'),
      'description' => __('Drag widgets to this footer container', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h5>',
      'after_title' => '</h5>'      
  ));

}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>
