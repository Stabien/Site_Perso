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
