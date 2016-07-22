/*
 Project Name :   Construction
 Author Company : Digitsol
 Project Date:    30-01-2016
 Author Website : http://digitsol.co/

1. PRELOADER
2. 404 height
3. Contact Form
4. Parrallex
5. tooltip
6. banner slider
7. Navigation Scroll function on Mobile
8. Count Down
9. Counter
10. PARALLAX BACHGROUND
11. Navigation Toggle
12. NEWS SLIDER
13. Team slider
14. Animation
15. Map
 */
(function($) {
    "use strict";
    //============================================
    //404 height
    //=============================================
    $(function() {

        $("#error-page,#under").css({
            'height': window.innerHeight
        });

    });

    /* ---------------------------------------------------------------------- */
    /*  Contact Form
    /* ---------------------------------------------------------------------- */

    var submitContact = $('#submit_contact'),
        message = $('#msg');

    submitContact.on('click', function(e) {
        e.preventDefault();

        var $this = $(this);

        $.ajax({
            type: "POST",
            url: 'contact.php',
            dataType: 'json',
            cache: false,
            data: $('#contact-form').serialize(),
            success: function(data) {

                if (data.info !== 'error') {
                    $this.parents('form').find('input[type=text],textarea,select').filter(':visible').val('');
                    message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
                } else {
                    message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
                }
            }
        });
    });
    //========================================
    //Parrallex
    //=======================================
    $('#portfolio').parallax("50%", 0.1);
    $('#work').parallax("50%", 0.1);
    $('#team').parallax("50%", 0.1);
    $('#counter').parallax("50%", 0.1);
    //==========================================
    // tooltip
    //=========================================
    $('[data-toggle="tooltip"]').tooltip();
    //===========================================
    //banner slider
    //==========================================
    var setREVStartSize = function() {
        var tpopt = new Object();
        tpopt.startwidth = 1100;
        tpopt.startheight = 550;
        tpopt.container = jQuery('#rev_slider_1_1');
        tpopt.fullScreen = "off";
        tpopt.forceFullWidth = "off";

        tpopt.container.closest(".rev_slider_wrapper").css({
            height: tpopt.container.height()
        });
        tpopt.width = parseInt(tpopt.container.width(), 0);
        tpopt.height = parseInt(tpopt.container.height(), 0);
        tpopt.bw = tpopt.width / tpopt.startwidth;
        tpopt.bh = tpopt.height / tpopt.startheight;
        if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
        if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
        if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
        if (tpopt.bh > 1) {
            tpopt.bw = 1;
            tpopt.bh = 1
        }
        if (tpopt.bw > 1) {
            tpopt.bw = 1;
            tpopt.bh = 1
        }
        tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
        if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
        if (tpopt.fullScreen == "on") {
            tpopt.height = tpopt.bw * tpopt.startheight;
            var cow = tpopt.container.parent().width();
            var coh = jQuery(window).height();
            if (tpopt.fullScreenOffsetContainer != undefined) {
                try {
                    var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                    jQuery.each(offcontainers, function(e, t) {
                        coh = coh - jQuery(t).outerHeight(true);
                        if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                    })
                } catch (e) {}
            }
            tpopt.container.parent().height(coh);
            tpopt.container.height(coh);
            tpopt.container.closest(".rev_slider_wrapper").height(coh);
            tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
            tpopt.container.css({
                height: "100%"
            });
            tpopt.height = coh;
        } else {
            tpopt.container.height(tpopt.height);
            tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
            tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
        }
    };

    /* CALL PLACEHOLDER */
    setREVStartSize();


    var tpj = jQuery;
    tpj.noConflict();
    var revapi1;



    tpj(document).ready(function() {



        if (tpj('#rev_slider_1_1').revolution == undefined) {
            revslider_showDoubleJqueryError('#rev_slider_1_1');
        } else {
            revapi1 = tpj('#rev_slider_1_1').show().revolution({

                dottedOverlay: "none",
                delay: 9000,
                startwidth: 1100,
                startheight: 550,
                hideThumbs: 200,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 2,

                simplifyAll: "off",
                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "preview1",
                touchenabled: "on",
                onHoverStop: "off",
                nextSlideOnWindowFocus: "off",

                swipe_threshold: 75,
                swipe_min_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "off",
                parallaxLevels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],

                keyboardNavigation: "off",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                spinner: "spinner0",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",



                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                isJoomla: true
            });



        }
    });


    //Scroll function
    //=========================================
    $(function() {
        if (window.innerWidth < 767) {
            $("#menu_nav ul:first-child").css({
                'overflow-x': 'hidden',
                'overflow-y': 'scroll',
                'height': window.innerHeight
            });
        }
    });
    
    //================================================
    //count dowm
    //================================================
    jQuery(function($) {
        $('#countdown').countdown('2018/10/05', function(event) {
            $(this).html(event.strftime('<div class="days"><span class="number">%-D</span><span class="string">%!D:Day,Days;</span></div><div class="hours"><span class="number">%H</span><span class="string">%!H:Hour,Hours;</span></div><div class="minutes"><span class="number">%M</span><span class="string">%!M:Minute,Minutes;</span></div><div class="seconds"><span class="number">%S</span><span class="string">%!S:Second,Seconds;</span></div>'));
        });
    });

    //================================================
    //match height of about block
    //=================================================
    $(function() {
        $('#about .about-icon').matchHeight({
            target: $('#about .about-text')
        });
    });
    //========================================
    // count function
    //======================================
   $('.count').each(function() {
        jQuery(this).appear(function() {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 1000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    });
    //================================================
    //Toggle function
    //=================================================
    //stick in the fixed 100% height behind the navbar but don't wrap it
    $('#slide-nav.navbar .container').append($('<div id="navbar-height-col"></div>'));
    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = 'section:first-child';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '80%';
    var menuneg = '-100%';
    var slideneg = '-80%';


    $("#slide-nav").on("click", toggler, function(e) {

        var selected = $(this).hasClass('slide-active');

        $('#menu_nav').stop().animate({
            right: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            right: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            right: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            right: selected ? '0px' : slidewidth
        });


        $(this).toggleClass('slide-active', !selected);
        $('#menu_nav').toggleClass('slide-active');


        $('#section:first-child, .navbar, body, .navbar-header').toggleClass('slide-active');


    });


    var selected = '#menu_nav, section:first-child, body, .navbar, .navbar-header';


    $(window).on("resize", function() {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }

    });
    //==================================================
    //NEWS SLIDER
    //================================================
    $("#news-slider").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        navigation: false,
        pagination: false

    });


    //==============================================
    //Team slider
    //============================================
    $("#team-slider").owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 600,
        paginationSpeed: 700,
        singleItem: true,
        autoPlay: 3000

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
    //==============================================
    //Team slider
    //============================================
    $("#cont-slider").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        pagination: false

        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
    //===============================================
    //animation
    //==============================================
    // Show element on scroll

    $(function() {
        var $elems = $('.animate-in');
        var winheight = $(window).height();
        var fullheight = $(document).height();

        $(window).scroll(function() {
            animate_elems();
        });

        function animate_elems() {
            var wintop = $(window).scrollTop(); // calculate distance from top of window
            // loop through each item to check when it animates
            $elems.each(function() {
                var $elm = $(this);

                var topcoords = $elm.offset().top; // element's distance from top of page in pixels

                if (wintop > (topcoords - (winheight * .99999))) {
                    // animate when top of the window is 3/4 above the element
                    $elm.addClass('animated');

                }

            });
        } // end animate_elems()
    });

}(jQuery));
