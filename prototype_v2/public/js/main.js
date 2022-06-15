/*

[Main Script]

Project     : TheGraphy - Responsive Creative Photography HTML5 Template
Version     : 1.0
Author      : ThemeLooks
Author URI  : https://themeforest.net/user/themelooks

*/

(function ($) {
    "use strict";
    
    /* ------------------------------------------------------------------------- *
     * COMMON VARIABLES
     * ------------------------------------------------------------------------- */
    var $wn = $(window),
        $document = $(document),
        $body = $('body'),
        isRTL = $('html').attr('dir') === 'rtl' ? true : false;
    
    /* ------------------------------------------------------------------------- *
     * CHECK DATA
     * ------------------------------------------------------------------------- */
    var checkData = function (data, value) {
        return typeof data === 'undefined' ? value : data;
    };

    $(function () {
        /* ------------------------------------------------------------------------- *
         * BACKGROUND IMAGE
         * ------------------------------------------------------------------------- */
        var $bgImg = $('[data-bg-img]');

        if ( $bgImg.length ) {
            $bgImg.css('background-image', function () {
                return 'url("' + $(this).data('bg-img') + '")';
            }).addClass('bg--img').removeAttr('data-bg-img').attr('data-rjs', 2);
        }

        /* ------------------------------------------------------------------------- *
         * RETINAJS
         * ------------------------------------------------------------------------- */
        $('img').attr('data-rjs', 2);
        retinajs();
        
        /* ------------------------------------------------------------------------- *
         * FORM VALIDATION
         * ------------------------------------------------------------------------- */
        var $formValidation = $('[data-form="validate"] form');
        
        $formValidation.each(function () {
            var $t = $(this);
            
            $t.validate({
                errorPlacement: function () {
                    return true;
                }
            });
        });

        /* ------------------------------------------------------------------------- *
         * AJAX FORM
         * ------------------------------------------------------------------------- */
        var $ajaxForm = $('[data-form="ajax"] form');
        
        $ajaxForm.each(function () {
            var $form = $(this),
                $formStatus = $form.find('.status');

            $formStatus.hide();
            
            $form.validate({
                errorPlacement: function () {
                    return true;
                },
                submitHandler: function (el) {
                    var $form = $(el),
                        formUrl = $form.attr('action'),
                        formData = $form.serialize();

                    $.post(formUrl, formData, function (res) {
                        $formStatus.html(res).slideDown('slow').delay(6000).slideUp('slow');
                    });
                }
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * COUNTER UP
         * ------------------------------------------------------------------------- */
        var $counterUp = $('[data-trigger="counterup"]');
            
        if ( $counterUp.length ) {
            $counterUp.counterUp({
                delay: 10,
                time: 1000
            });
        }
        
        /* ------------------------------------------------------------------------- *
         * SMOOTH SCROLL
         * ------------------------------------------------------------------------- */
        var $scroll = $('[data-trigger="scroll"]');

        $scroll.on('click', function (e) {
            e.preventDefault();

            e.$target = $(this).attr('href');

            $( e.$target ).animatescroll({
                padding: 80,
                easing: 'easeInOutExpo',
                scrollSpeed: 2000
            });
        });

        /* ------------------------------------------------------------------------- *
         * POPUP
         * ------------------------------------------------------------------------- */
        var $galleryPopup = $('[data-trigger="gallery_popup"]');

        $galleryPopup.each(function () {
            var $t = $(this),
                zoom = typeof $t.data('zoom') === 'undefined' ? true : $t.data('zoom');

            $t.magnificPopup({
                delegate: 'a.zoom',
                type: 'image',
                mainClass: 'mfp-no-margins mfp-with-zoom',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: zoom
                }
            });
        });

        /* ------------------------------------------------------------------------- *
         * BANNER SECTION
         * ------------------------------------------------------------------------- */
        var $banner = $('.banner--section');

        if ( $banner.length ) {
            $banner.css('min-height', function () {
                return $(this).find('.banner--content').outerHeight(true);
            });
        }

        /* ------------------------------------------------------------------------- *
         * SCROLL-SPY
         * ------------------------------------------------------------------------- */
        var $scrollspy = $('[data-trigger="scrollspy"]'),
            $section = $('section'),
            $headerNavList = $('.header--nav-links > li'),
            $scrollspyActive;

        if ( $scrollspy.length ) {
            $scrollspyActive = function ($el) {
                $headerNavList
                        .children('a[href="'+ '#' + $el +'"]')
                        .parent().addClass('active');
            };

            $section.waypoint({
                handler: function (dir) {
                    var $t = $(this.element);

                    $headerNavList.removeClass('active');

                    if ( dir === 'up' && $t.prev()[0].id.length ) {
                        $scrollspyActive( $t.prev()[0].id );
                    } else if ( dir === 'down' && $t[0].id.length ) {
                        $scrollspyActive( $t[0].id );
                    }
                },
                offset: 90
            });
        }
        
        /* -------------------------------------------------------------------------*
         * COUNTDOWN
         * -------------------------------------------------------------------------*/
        var $countDown = $('[data-countdown]');
            
        $countDown.each(function () {
            var $t = $(this);
            
            $t.countdown($t.data('countdown'), function(e) {
                $(this).html( '<ul>' + e.strftime('<li><strong>%D</strong><span>Days</span></li><li><strong>%H</strong><span>Hours</span></li><li><strong>%M</strong><span>Minutes</span></li><li><strong>%S</strong><span>Seconds</span></li>') + '</ul>' );
            });
        });

        /* ------------------------------------------------------------------------- *
         * COMING SOON SECTION
         * ------------------------------------------------------------------------- */
        var $comingSoon = $('.coming-soon--section');

        if ( $comingSoon.length ) {
            $comingSoon.css('min-height', function () {
                return $(this).find('.cs--content').outerHeight(true);
            });
        }

        /* ------------------------------------------------------------------------- *
         * 404 SECTION
         * ------------------------------------------------------------------------- */
        var $f0f = $('.f0f--section');

        if ( $f0f.length ) {
            $f0f.css('min-height', function () {
                return $(this).find('.f0f--content').outerHeight(true);
            });
        }

        /* ------------------------------------------------------------------------- *
         * BACK TO TOP BUTTON
         * ------------------------------------------------------------------------- */
        var $backToTop = $('#backToTop');

        $backToTop.on('click', 'a', function (e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 1200);
        });
    });
    
    $wn.on('load', function () {
        /* ------------------------------------------------------------------------- *
         * BODY SCROLLING
         * ------------------------------------------------------------------------- */
        var isBodyScrolling = function () {
            if ( $wn.scrollTop() > 1 ) {
                $body.addClass('isScrolling');
            } else {
                $body.removeClass('isScrolling');
            }
        };

        isBodyScrolling();
        $wn.on('scroll', isBodyScrolling);

        /* ------------------------------------------------------------------------- *
         * OWL CAROUSEL
         * ------------------------------------------------------------------------- */
        var $owlCarousel = $('.owl-carousel');
        
        $owlCarousel.each(function () {
            var $t = $(this);
            
            $t.owlCarousel({
                rtl: isRTL,
                items: checkData( $t.data('owl-items'), 1 ),
                margin: checkData( $t.data('owl-margin'), 0 ),
                loop: checkData( $t.data('owl-loop'), true ),
                smartSpeed: 2500,
                autoplay: checkData( $t.data('owl-autoplay'), true ),
                autoplayTimeout: checkData( $t.data('owl-speed'), 8000 ),
                center: checkData( $t.data('owl-center'), false ),
                pullDrag: false,
                nav: checkData( $t.data('owl-nav'), false ),
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                dots: checkData( $t.data('owl-dots'), false ),
                responsive: checkData( $t.data('owl-responsive'), {} )
            });
        });

        /* ------------------------------------------------------------------------- *
         * PORTFOLIO SECTION
         * ------------------------------------------------------------------------- */
        var $portfolioItems = $('.portfolio--items'),
            $portfolioFilterMenu = $('.portfolio--filter-menu');

        if ( $portfolioItems.length ) {
            $portfolioItems.isotope({
                originLeft: isRTL ? false : true,
                animationEngine: 'best-available',
                itemSelector: '.portfolio--item',
                masonry: {
                    columnWidth: '.portfolio--sizer'
                }
            });
        }

        $portfolioFilterMenu.on('click', 'li', function (e) {
            e.preventDefault();

            var $t = $(this),
                f = $t.data('target'),
                s = (f !== '*') ? '[data-cat~="'+ f +'"]' : f;

            $portfolioItems.isotope({
                filter: s
            });
            
            $t.addClass('active').siblings().removeClass('active');
        });

        /* ------------------------------------------------------------------------- *
         * PRELOADER
         * ------------------------------------------------------------------------- */
        var $preloader = $('#preloader');

        if ( $preloader.length ) {
            $preloader.fadeOut('slow');
        }
    });

})(jQuery);
