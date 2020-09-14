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
