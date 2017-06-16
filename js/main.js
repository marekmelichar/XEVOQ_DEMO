(function($, window, document) {

  var slideshow = $('.slideshow'),
      slides = $('.slide')
      index = 0,
      trigger = '',
      triggersArray = [],
      tryAgainBtn = $('#try-again-demo');

  while (index <= slides.length) {
    trigger = $(`.icon-slide-${index++}-cursor`)
    triggersArray.push(trigger)
  }

  slideshow.children(':not(:first)').hide()

  triggersArray.forEach(itm => {

    itm.on('click', function() {
      itm.parent().fadeOut(600, function(){

      }).next().fadeIn(600)
      console.log(itm.parent());
    })
  })

  // slideshow.children(':not(:first)').hide()
  //
  // slides.on('click', function(){
  //   slideshow.children(':first').fadeOut(600, function(){
  //     $(this).appendTo( slideshow )
  //   }).next().fadeIn(600)
  // })



  tryAgainBtn.on('click', function(event) {
    event.preventDefault()

    window.location.reload()

    // $('html, body').animate({
    //     scrollTop: slideshow.offset().top
    // }, 2000);
  })


}(window.jQuery, window, document));
