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
  $html .= '<div id="demo" class="row">';
    $html .= '<ul class="'. esc_attr($atts['slideshow_class']) .'">';
  foreach ( $media as $img ) {
    $alt_text = get_post_meta($img->ID, '_wp_attachment_image_alt', true);

    $html .= '<li class="'. esc_attr( $atts['slide_class'] ) .'">';
    $html .= '<img src="'. esc_url( wp_get_attachment_image_url($img->ID, 'full') ) .'" alt="'. esc_attr( $img->post_title ) .'" >';
    $html .= '<span class="icon-slide-'. esc_attr( $img->post_title ) .'-cursor"></span><span class="icon-slide-'. esc_attr( $img->post_title ) .'-text">'. esc_attr( $img->post_content ) .'</span>';
    $html .= '</li>';
  }
    $html .= '</ul>';
    $html .= '<span class="nav_point_1"></span>';
    $html .= '<span class="nav_point_2"></span>';
    $html .= '<span class="nav_point_3"></span>';
    $html .= '<a href="/#demo" id="try-again-demo">Try it again</a>';
  $html .= '</div>';


  return $html;
}
