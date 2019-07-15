// fade in .navbar
$(function () {

  $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();
    var target = this.hash;
    $target = $(target);
    $('html, body').stop().animate({
        'scrollTop':  $target.offset().top //no need of parseInt here
    }, 900, 'swing', function () {
        window.location.hash = target;
    });
  });

  if ($(this).scrollTop() > 100) {
    $('#navTop').addClass("nav-small");
  } else {
    $('#navTop').removeClass("nav-small");
  }
  $(window).scroll(function () {
     // set distance user needs to scroll before we start fadeIn
    if ($(this).scrollTop() > 100) {
      $('#navTop').addClass("nav-small");
    } else {
      $('#navTop').removeClass("nav-small");
    }
  });

  $('.feature-icon').slick({
      arrows: true,
      infinite: false,
      speed: 300,
      mobileFirst:true,
      slidesToShow: 7,
      slidesToScroll: 7,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 6,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });

  $('.box-testimoni').slick({
      arrows: true,
      infinite: true,
      autoplay: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
  });

});
