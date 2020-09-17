// Animation of the navbar on scroll
$(document).ready(function() {
    if (window.scrollY > 0) {
        $("header").css({
            "transition": "0.6s",
            "background": "white",
            "box-shadow": "0 10px 30px rgba(0, 0, 0, 0.19), 0 6px 10px rgba(0, 0, 0, 0.23)",
        });
        $(".navbar-brand").css({
            "transition": "0.6s",
            "color": "black"
        });
        $(".nav-link").css({
            "transition": "0.6s",
            "opacity": "1"
        });
        $('.nav-link').attr("style", "color: black !important");
        $(".navbar-toggler-icon").css("background-image", "url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")");
    }
});
$(document).on("scroll", function() {
    if (window.scrollY > 0) {
        $("header").css({
            "transition": "0.6s",
            "background": "white",
            "box-shadow": "0 10px 30px rgba(0, 0, 0, 0.19), 0 6px 10px rgba(0, 0, 0, 0.23)",
        });
        $(".navbar-brand").css({
            "transition": "0.6s",
            "color": "black"
        });
        $(".nav-link").css({
            "transition": "0.6s",
            "opacity": "1"
        });
        $('.nav-link').attr("style", "color: black !important");
        $(".navbar-toggler-icon").css("background-image", "url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")");
    }
    else {
        $("header").css({
            "transition": "0.3s",
            "background": "none",
            "box-shadow": "none"
        });
        $(".navbar-brand").css({
            "transition": "0.3s",
            "color": "white"
        });
        $(".nav-link").css({
            "transition": "0.3s",
            "color": "white",
            "opacity": "0.8"
        });
        $(".navbar-toggler-icon").css("background-image", "url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")");
    }
});

//Underline nav-link on scroll position

var nav_link = $('.nav-link').children();
var sections = $('.section');
var height_section = [0, 0, 0, 0, 0];

height_section[0] = 630;

$(document).on('scroll', function() {
    var limit = document.body.offsetHeight - window.innerHeight;

    for (var i = 1; i < 7; i++)
        height_section[i] = height_section[i - 1] + sections[i - 1].clientHeight;
    for (var i = 1; i < 6; i++) {
        if (window.scrollY < height_section[i] && window.scrollY >= height_section[i - 1])
            $(nav_link[i - 1]).css("width", "100%");
        else {
            if (window.scrollY == 0)
                $('.nav-link').children().css("width", "0%");
            else
                $(nav_link[i - 1]).css("width", "0%");
        }
    }
    if (window.scrollY >= limit - 1 || window.scrollY >= height_section[5]) {
        $('.nav-link').children().css("width", "0%");
        $(nav_link[5]).css("width", "100%");
    }
    else
        $(nav_link[5]).css("width", "0%");
});

//link anchor animation script
$(document).ready(function() {
    $('.nav-link, #link-to-top').on('click', function() {
        var page = $(this).attr('href');
        var speed = 1000;

        $('html, body').animate({scrollTop: $(page).offset().top}, speed);
        return false;
    });
});
