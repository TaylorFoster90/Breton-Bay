 $(window).load(function() {
    $('.flexslider').flexslider();
  });
$(document).ready(function(){
  $(".primary-navigation a").addClass("hvr-underline-reveal");

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
$('.popup-gallery').magnificPopup({
  delegate: 'a',
  type: 'image'
});
$.ajax({
      url: 'https://api.forecast.io/forecast/952d2ececca93bcf0f0b027da994a65e/38.239446,-76.618166',
      dataType: 'jsonp'
    })
    .done(function(data){
      //take off after development
      console.log(data);
      if(data){
        var current = data.currently;
        $(".current-temp").html("Temperature: " +  Math.round(current.temperature) + '&#8457;');
        $(".humidity").html("Humidity: " + Math.round(current.humidity * 100) + "%");
        $(".summary").html(current.summary);
        $(".windSpeed").html("Wind Speeds: " + Math.round(current.windSpeed) + " mph");
        $(".cloudCover").html("Cloud Cover: " + (current.cloudCover * 100) + "%");
      }else{
        $(".cloudCover").html("Weather Currently Unavailable. We're Sorry.");
      }
    })

});
