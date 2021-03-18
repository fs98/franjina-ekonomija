jQuery("a").on('click', function(event) {
  jQuery('.navbar-nav>li>a').on('click', function(){
    jQuery('.navbar-collapse').collapse('hide');
  });
  if ((String(this.pathname).includes("about")) && (this.hash !== '') && (String(this.hash).includes("#"))) {
    event.preventDefault();
    var hash = this.hash;
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
