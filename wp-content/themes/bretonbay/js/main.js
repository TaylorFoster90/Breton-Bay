 $(window).load(function() {
    $('.flexslider').flexslider();
  });
$(document).ready(function(){
  $(".primary-navigation a").addClass("hvr-underline-from-left");

  $(".page-scroll").smoothScroll({speed: 900});

  $('.page-affixed-nav').affix({
  offset: {
    top: 300,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})

});
