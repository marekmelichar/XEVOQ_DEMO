<?php

add_shortcode( 'demo', 'xevoq_demo_shortcode' );
function xevoq_demo_shortcode( $atts ) {

  $atts = shortcode_atts( array(
    'slideshow_class' => 'slideshow',
    'slide_class' => 'slide'
  ), $atts );

  $media = get_attached_media( 'image' );

  if ( !$media ) {
    return '';
  }

  // create the html
  $html .= '<div id="demo">';
    $html .= '<ul class="'. esc_attr($atts['slideshow_class']) .'">';
  foreach ( $media as $img ) {
    $html .= '<li class="'. esc_attr( $atts['slide_class'] ) .'">';
    $html .= '<img src="'. esc_url( wp_get_attachment_image_url($img->ID, 'full') ) .'" alt="'. esc_attr( $img->post_title ) .'" >';
    $html .= '</li>';
  }
    $html .= '</ul>';
  $html .= '</div>';


  return $html;
}
