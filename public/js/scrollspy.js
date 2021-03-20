jQuery("#navbar a").on('click', function(event) {

  if ((String(this.pathname).includes("onama")) && (this.hash !== '') && (String(this.hash).includes("#"))) {
    event.preventDefault();
    var hash = this.hash;

    // Collapse navbar after click on screens smaller then lg
    if($(window).width() <= 992) {
      jQuery('.collapse').collapse('toggle');
    }
    
    jQuery('html, body').animate({
      scrollTop: jQuery(hash).offset().top - 150
    }, 1500, function(){
      window.location.hash = hash - 130;
    });
  }
});

// function checkScroll() {
//   var startY = $('.navbar').height() * 2;
//   if($(window).scrollTop() > startY) {
//     $('.bottom-top-button').css('display', 'block');
//   } else {
//     $('.bottom-top-button').css('display', 'none');
//   }
// }
// if($('.navbar').length > 0) {
//   $(window).on('scroll load resize', function(){
//     checkScroll();
//   });
// }
