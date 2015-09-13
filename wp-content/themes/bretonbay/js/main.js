 $(window).load(function() {
    $('.flexslider').flexslider();
  });
$(document).ready(function(){
  $(".primary-navigation a").addClass("hvr-underline-from-left");

  $(".page-scroll").smoothScroll({speed: 900});
  $(".smooth-scroll").smoothScroll({speed: 900});
  $(".affix-scroll").smoothScroll({speed: 900, offset: -70});

  $('.page-affixed-nav').affix({
  offset: {
    top: function(){
      return ($(".navigation").outerHeight(true)+$(".page-banner").outerHeight(true))
    },
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})
$(".affix-wrapper").css("min-height", $(".page-affixed-nav").outerHeight(true));
$(".gform_wrapper .gform_footer input[type=submit]").addClass('hvr-grow-shadow');

$(".gform_wrapper input[type=text]").blur(function(){
  if($(".gform_wrapper input[type=text]").val().trim() !== '' ){
    $(this).css('border-color', 'rgb(0, 167, 229)');
  }
  else{
    $(this).css('border-color', '#DCDCDC');
  }
});

});
