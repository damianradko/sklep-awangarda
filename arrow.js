$(document).ready(function(){
    var NavY = $('.arrow').offset().top;
    var stickyNav = function(){
        var ScrollY = $(window).scrollTop();
        if(ScrollY > NavY){
            $('.arrow').addClass('visible');

        }
        else{
            $('.arrow').removeClass('visible');
        }
    };
    stickyNav();
        $(window).scroll(function() {
            stickyNav();
        });
    });
