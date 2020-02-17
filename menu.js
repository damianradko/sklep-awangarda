$(document).ready(function(){
    var NavY = $('.xd').offset().top;
    var stickyNav = function(){
        var ScrollY = $(window).scrollTop();
        if(ScrollY > NavY){
            $('.xd').addClass('sticky');

        }
        else{
            $('.xd').removeClass('sticky');
        }
    };
    stickyNav();
        $(window).scroll(function() {
            stickyNav();
        });
    });
