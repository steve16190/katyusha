/* Style v1.0 - (c) Stephen John Smith. License: Apache 2.0 */
/* A script to control the style javascript behaviour sitewide */

/******************/
/**On Load Events**/
/******************/

/*Rotate header image every 6 seconds*/
//$(document).ready(function () {
//    var img_array = [1, 2, 3, 4, 5, 6, 7],
//        newIndex = 0,
//        index = 0,
//        interval = 6000;
//    (function changeBg() {
//
//        //  --------------------------
//        //  For random image rotation:
//        //  --------------------------
//        newIndex = Math.floor(Math.random() * 10) % img_array.length;
//        index = (newIndex === index) ? newIndex -1 : newIndex;
//
//        $('.header').css('background', function () {
//            $('#top').animate({
//                backgroundColor: 'transparent'
//            }, 1000, function () {
//                setTimeout(function () {
//                    $('#top').animate({
//                        backgroundColor: 'rgb(255,255,255)'
//                    }, 1000);
//                }, 3000);
//            });
//            return 'url(/img/bg/bg_' + img_array[index] + '.JPG) no-repeat center center scroll';
//        });
//        $('.header').css({'background-size': 'cover'});
//        setTimeout(changeBg, interval);
//    })();
//});



/******************/
/******Theme*******/
/******************/

// Closes the sidebar menu
$("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

// Opens the sidebar menu
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

// Scrolls to the selected menu item on the page
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});