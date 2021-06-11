var motospa_theme;
$(function() {
    "use strict";

    motospa_theme = {
        init: function() {
            this.mianMenu();
        },
        //===== 01. Main Menu
        mianMenu() {
            // Variables
            var var_window = $(window),
                navContainer = $('.nav-container'),
                pushedWrap = $('.nav-pushed-item'),
                pushItem = $('.nav-push-item'),
                pushedHtml = pushItem.html(),
                pushBlank = '',
                navbarToggler = $('.navbar-toggler'),
                navMenu = $('.nav-menu'),
                navMenuLi = $('.nav-menu ul li ul li'),
                closeIcon = $('.navbar-close');
            // navbar toggler
            navbarToggler.on('click', function() {
                navbarToggler.toggleClass('active');
                navMenu.toggleClass('menu-on');
            });
            // close icon
            closeIcon.on('click', function() {
                navMenu.removeClass('menu-on');
                navbarToggler.removeClass('active');
            });

            // adds toggle button to li items that have children
            navMenu.find('li a').each(function() {
                if ($(this).next().length > 0) {
                    $(this)
                        .parent('li')
                        .append(
                            '<span class="dd-trigger"><i class="fas fa-angle-down"></i></span>'
                        );
                }
            });
            // expands the dropdown menu on each click
            navMenu.find('li .dd-trigger').on('click', function(e) {
                e.preventDefault();
                $(this)
                    .parent('li')
                    .children('ul')
                    .stop(true, true)
                    .slideToggle(350);
                $(this).parent('li').toggleClass('active');
            });

            // check browser width in real-time
            function breakpointCheck() {
                var windoWidth = window.innerWidth;
                if (windoWidth <= 991) {
                    navContainer.addClass('breakpoint-on');

                    pushedWrap.html(pushedHtml);
                    pushItem.hide();
                } else {
                    navContainer.removeClass('breakpoint-on');

                    pushedWrap.html(pushBlank);
                    pushItem.show();
                }
            }

            breakpointCheck();
            var_window.on('resize', function() {
                breakpointCheck();
            });
        },
    };
    // Document Ready
    $(document).ready(function() {
        motospa_theme.init();
    });
    //===== Prealoder
    $(window).on('load', function(event) {
        $('.preloader').delay(500).fadeOut('500');
    })
    //===== Sticky
    $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 190) {
            $(".header-navigation").removeClass("sticky");
        } else {
            $(".header-navigation").addClass("sticky");
        }
    });

    //====== Magnific Popup
    $('.video-popup').magnificPopup({
        type: 'iframe'
        // other options
    });

    //===== Magnific Popup
    $('.image-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    //===== counter up
    $('.counter').counterUp({
        delay: 20,
        time: 1000
    });
    //===== Back to top

    $(window).on('scroll', function(event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });
    //Animate the scroll to top
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
    //=====  Slick Slider js    
    $('.service-slide').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 2500,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.testimonial-slide-one').slick({
        dots: false,
        infinite: true,
        autoplay: false,
        arrows: true,
        autoplaySpeed: 2000,
        prevArrow: '<div class="prev"><i class="fas fa-angle-left"></i></div>',
        nextArrow: '<div class="next"><i class="fas fa-angle-right"></i></div>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                }
            }
        ]
    });
    $('.testimonial-slide-two').slick({
        dots: true,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    // Isotope js
    $('#gallery-filter').imagesLoaded( function() {
        var $grid = $('.filter-grid').isotope({
            itemSelector: '.grid-column',
            percentPosition: true,
            masonry: {
              columnWidth: 1
            }
        });
        $('.filter-button').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({filter: filterValue});
        });
        $('.filter-button').each(function (i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function () {
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });
    });

    // wow min js
    new WOW().init();
});