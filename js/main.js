(function($, window, document) {

  var hasScrollbar = function() {
    // The Modern solution
    if (typeof window.innerWidth === 'number')
        return window.innerWidth > document.documentElement.clientWidth

    // rootElem for quirksmode
    var rootElem = document.documentElement || document.body

    // Check overflow style property on body for fauxscrollbars
    var overflowStyle

    if (typeof rootElem.currentStyle !== 'undefined')
        overflowStyle = rootElem.currentStyle.overflow

    overflowStyle = overflowStyle || window.getComputedStyle(rootElem, '').overflow

    // Also need to check the Y axis overflow
    var overflowYStyle

    if (typeof rootElem.currentStyle !== 'undefined')
        overflowYStyle = rootElem.currentStyle.overflowY

    overflowYStyle = overflowYStyle || window.getComputedStyle(rootElem, '').overflowY

    var contentOverflows = rootElem.scrollHeight > rootElem.clientHeight
    var overflowShown    = /^(visible|auto)$/.test(overflowStyle) || /^(visible|auto)$/.test(overflowYStyle)
    var alwaysShowScroll = overflowStyle === 'scroll' || overflowYStyle === 'scroll'

    return (contentOverflows && overflowShown) || (alwaysShowScroll)
  }


  if (hasScrollbar()) {
    $('html').addClass('has-scrollbar');
  }

  $('.nav_point_1').addClass('fill')


  var slideshow = $('.slideshow'),
      slides = $('.slide')
      index = 0,
      trigger = '',
      triggersArray = [],
      tryAgainBtn = $('#try-again-demo');

  while (index <= slides.length) {
    trigger = $(`.icon-slide-demo_${index++}-cursor`)
    triggersArray.push(trigger)
  }

  slideshow.children(':not(:first)').hide()

  triggersArray.forEach((itm, i) => {

    itm.on('click', function() {
      itm.parent().fadeOut(600, function(){

      }).next().fadeIn(600)
      console.log(itm.selector);

      if (itm.selector === `.icon-slide-demo_1-cursor`) {
        $('.nav_point_2').toggleClass('fill')
      }

      if (itm.selector === `.icon-slide-demo_2-cursor`) {
        $('.nav_point_3').toggleClass('fill')
      }

      if (itm.selector === `.icon-slide-demo_${triggersArray.length - 2}-cursor`) {
        $(tryAgainBtn).css('opacity', '1')
      }


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
