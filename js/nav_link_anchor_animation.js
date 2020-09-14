//link anchor animation script

$(document).ready(function() {
    $('.nav-link, #link-to-top').on('click', function() {
        var page = $(this).attr('href');
        var speed = 1000;

        $('html, body').animate({scrollTop: $(page).offset().top}, speed);
        return false;
    });
});
