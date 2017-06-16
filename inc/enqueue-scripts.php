<?php

add_action('wp_enqueue_scripts', 'default_demo_scripts');
function default_demo_scripts()
{
  // if( ! is_single( 75 ) ) {
	// 	return;
	// }

  wp_register_script( 'demo-js', plugins_url( '../js/main.js', __FILE__ ) );
  wp_enqueue_script( 'demo-js', '', array( 'jquery' ), false, true );

  wp_register_style( 'demo-icons', plugins_url( '../style/ion-icons.css', __FILE__ ), array(), '', 'all' );
  wp_enqueue_style( 'demo-icons' );
  wp_register_style( 'demo-lib', plugins_url( '../style/demo_lib.css', __FILE__ ), array(), '', 'all' );
  wp_enqueue_style( 'demo-lib' );
  wp_register_style( 'demo-style', plugins_url( '../style/demo_style.css', __FILE__ ), array(), '', 'all' );
  wp_enqueue_style( 'demo-style' );

}
