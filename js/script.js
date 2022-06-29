

$(document).ready(function () {
    $("#stu_video").owlCarousel({
        nav: true, // Show next and prev buttons
       slideSpeed: 20,
        dots: false,
        nav: true,
        loop: true,
        autoplay: false,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 1,
                nav:false,
            },
            600: {
                items: 1,
                nav:false,
            },
            1000: {
                items: 1,

           }
        }
    });
});


// ================================== Owl Carusel ==================================
$(document).ready(function () {
    $("#news").owlCarousel({
        nav: true, // Show next and prev buttons
       slideSpeed: 20,
       dots: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 15000,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 1,
                nav:false,
                dots:false,
            },
            600: {
                items: 1,
                nav:false,
                dots:false,

            },
            1000: {
                items: 1,

           }
        }
    });
   $(function(){
  $('.marquee').marquee({

  //If you wish to always animate using jQuery
  allowCss3Support: true,

  //works when allowCss3Support is set to true - for full list see http://www.w3.org/TR/2013/WD-css3-transitions-20131119/#transition-timing-function
  css3easing: 'linear',

  //requires jQuery easing plugin. Default is 'linear'
  easing: 'linear',

  //pause time before the next animation turn in milliseconds
  delayBeforeStart: 1000,
  //'left', 'right', 'up' or 'down'
  direction: 'up',

  //true or false - should the marquee be duplicated to show an effect of continues flow
  duplicated: true,

  //speed in milliseconds of the marquee in milliseconds
  duration: 8000,

  //gap in pixels between the tickers
  gap: 20,

  //on cycle pause the marquee
  pauseOnCycle: false,

  //on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
  pauseOnHover: true,

  //the marquee is visible initially positioned next to the border towards it will be moving
  startVisible: false

  });
});
});
$(document).ready(function () {
    $("#pubication").owlCarousel({
        nav: true, // Show next and prev buttons
       slideSpeed: 20,
        dots: false,
        loop: true,
        autoplay: true,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 1,
                nav:false,
                dots:false,
            },
            600: {
                items: 1,
                nav:false,
                dots:false,

            },
            1000: {
                items: 1,

           }
        }
    });
});
$(document).ready(function () {
    $("#events").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 20,
        margin: 18,
        loop: false,
        autoplay: 1800,
        autoplaySpeed:true,
        smartSpeed:250,

        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3,
                nav: true,
                dots: true,

            }
        }
    });
});
$(document).ready(function () {
    $("#campus_slide").owlCarousel({
        nav: true, // Show next and prev buttons
        slideSpeed: 20,
        margin: 18,
        loop: true,
        autoplay: true,
        paginationSpeed: 10,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
            0: {
                items: 1,
                 nav: false,
                dots: true,
            },
            600: {
                items: 2,
                 nav: false,
                dots: true,
            },
            1000: {
                items: 2,
                nav: false,
                dots: false,

            }
        }
    });
});

$(document).ready(function () {
    $("#reviews").owlCarousel({
        loop:true,
        autoplay: true,
        autoplaySpeed:1000,
         nav: true, // Show next and prev buttons
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        singleItem: true,
        responsive: {
             0: {
                items: 1,
                 nav: false,
                dots: true,
            },
            600: {
                items: 1,
                 nav: false,
                dots: true,
            },
            1000: {
                items: 1,
                nav: false,
                dots: true,

            }
        }
    });
});

// ================================= Click to go to Top jQuery ==================================
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#back-to-top').tooltip('show');
});
// Click to go to Top jQuery


// ================================== NiceScroll ==================================

$("body").niceScroll({
    cursorcolor: "#f99d1cc2",
    cursorwidth: "8px"
});


// ================================== Smooth Scroll ==================================


//var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');


/*!
 * Bootstrap 4 multi dropdown navbar
 * Copyright 2017.
 * Licensed under the GPL license
 */


$(document).ready(function () {
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parent("li").toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-menu .show').removeClass("show");
        });

        if (!$parent.parent().hasClass('navbar-nav')) {
            $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
        }

        return false;
    });

});
