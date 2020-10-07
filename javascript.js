$(document).ready(function() {

var yourNavigation = $(".navbar");
stickyDiv = "sticky";
firstNav = "first-navMargin";
 yourHeader = $('.header').height();
 window.addEventListener('resize', displayWidthCalc);
 window.onload = displayWidthCalc();
 function displayWidthCalc() {
     displayWidth = document.documentElement.clientWidth;
     console.log(displayWidth)
 }
 if (displayWidth > 890) {
     $(".burger-nav").removeClass(stickyDiv);
     $(".first-nav").removeAttr('id')
        $(window).scroll(function () {
            if ($(this).scrollTop() > yourHeader - 60) {
                yourNavigation.addClass(stickyDiv);
            } else {
                yourNavigation.removeClass(stickyDiv);
            }
        });
 } else if (displayWidth <= 890) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > yourHeader - 60) {
                yourNavigation.addClass(stickyDiv);
                $(".burger-nav").addClass(stickyDiv);
                $(".first-nav").attr('id', firstNav);
            } else {
                yourNavigation.removeClass(stickyDiv);
                $(".burger-nav").removeClass(stickyDiv);
                $(".first-nav").removeAttr('id')
            }
        });
     }
});
$(document).ready(function () {
    $(".burger-nav").on("click", function () {
        $(".nav-items ul").toggleClass("open");
    });
});
$(document).ready(function () {
    $(".nav-items ul").on("click", function () {
        $(".nav-items ul").toggleClass("open");
    });
    $(".fa-envelope").on("click", function () {
        $(".modal").toggleClass("form-hide");
    });
    $("#consultation").on("click", function () {
        $(".modal").toggleClass("form-hide");
    });
    $(".modal").on("click", function () {
        $(".modal").toggleClass("form-hide");
    });
    $(".email-form").on("click", function () {
        $(".modal").toggleClass("form-hide");
    });
});