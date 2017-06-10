(function($, window, document) {

  var slideshow = $('.slideshow'),
      slides = $('.slide')

      console.log('DEMO', slideshow, slides);

  slideshow.children(':not(:last)').hide()

  slides.on('click', function(){
    slideshow.children(':last').fadeOut(600, function(){
      $(this).prependTo( slideshow )
    }).prev().fadeIn(600)
  })

}(window.jQuery, window, document));
