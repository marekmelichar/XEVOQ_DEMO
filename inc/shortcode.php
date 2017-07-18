<?php

add_shortcode( 'demo', 'xevoq_demo_shortcode' );
function xevoq_demo_shortcode( $atts ) {

  $atts = shortcode_atts( array(
    'slideshow_class' => 'slideshow',
    'slide_class' => 'slide'
  ), $atts );

  // $media = get_attached_media( 'image' );

  // if ( !$media ) {
  //   return '';
  // }
  // 
  

  if(ICL_LANGUAGE_CODE == 'en')
    {
      // create the html
      $html .= '<div id="demo" class="row">';
        $html .= '<ul class="'. esc_attr($atts['slideshow_class']) .'">';
        
        $html .= '<li id="1" class="'. esc_attr( $atts['slide_class'] ) .'">';
        $html .= '<img src="/wp-content/plugins/XEVOQ_DEMO/images/demo_1.jpg" alt="slide 1 choose Book now Xevoq" >';
        $html .= '<span class="icon-slide-demo_1-cursor"></span><span class="icon-slide-demo_1-text pulse">Click on BOOK NOW</span>';
        $html .= '</li>';

        $html .= '<li id="2" class="'. esc_attr( $atts['slide_class'] ) .'">';
        $html .= '<img src="/wp-content/plugins/XEVOQ_DEMO/images/demo_2.jpg" alt="slide 2 choose Book now Xevoq" >';
        $html .= '<span class="icon-slide-demo_2-cursor"></span><span class="icon-slide-demo_2-text pulse">Choose meeting duration</span>';
        $html .= '</li>';

        $html .= '<li id="3" class="'. esc_attr( $atts['slide_class'] ) .'">';
        $html .= '<img src="/wp-content/plugins/XEVOQ_DEMO/images/demo_3.jpg" alt="slide 3 choose Book now Xevoq" >';
        $html .= '<span class="icon-slide-demo_3-cursor"></span><span class="icon-slide-demo_3-text pulse">Success</span>';
        $html .= '</li>';
        
        $html .= '</ul>';
        $html .= '<span class="nav_point_1"></span>';
        $html .= '<span class="nav_point_2"></span>';
        $html .= '<span class="nav_point_3"></span>';
        $html .= '<a href="/#demo" id="try-again-demo">Try it again</a>';
      $html .= '</div>';

      return $html;
    }

  if(ICL_LANGUAGE_CODE == 'de')
    {
      // create the html
      $html .= '<div id="demo" class="row">';
        $html .= '<ul class="'. esc_attr($atts['slideshow_class']) .'">';
        
        $html .= '<li id="1" class="'. esc_attr( $atts['slide_class'] ) .'">';
        $html .= '<img src="/wp-content/plugins/XEVOQ_DEMO/images/demo_1.jpg" alt="slide 1 choose Book now Xevoq" >';
        $html .= '<span class="icon-slide-demo_1-cursor"></span><span class="icon-slide-demo_1-text pulse">Klicken Sie JETZT BUCHEN</span>';
        $html .= '</li>';

        $html .= '<li id="2" class="'. esc_attr( $atts['slide_class'] ) .'">';
        $html .= '<img src="/wp-content/plugins/XEVOQ_DEMO/images/demo_2.jpg" alt="slide 2 choose Book now Xevoq" >';
        $html .= '<span class="icon-slide-demo_2-cursor"></span><span class="icon-slide-demo_2-text pulse">Wählen Sie Sitzungsdauer</span>';
        $html .= '</li>';

        $html .= '<li id="3" class="'. esc_attr( $atts['slide_class'] ) .'">';
        $html .= '<img src="/wp-content/plugins/XEVOQ_DEMO/images/demo_3.jpg" alt="slide 3 choose Book now Xevoq" >';
        $html .= '<span class="icon-slide-demo_3-cursor"></span><span class="icon-slide-demo_3-text pulse">Erfolg</span>';
        $html .= '</li>';
        
        $html .= '</ul>';
        $html .= '<span class="nav_point_1"></span>';
        $html .= '<span class="nav_point_2"></span>';
        $html .= '<span class="nav_point_3"></span>';
        $html .= '<a href="/#demo" id="try-again-demo">Noch einmal</a>';
      $html .= '</div>';

      return $html;
    }  
  

  
}
