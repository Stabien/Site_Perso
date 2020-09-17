//link-top-icone display script
$(document).on("scroll", function() {
    if (window.scrollY > 500)
        $('#link-to-top').fadeIn();
    else
        $('#link-to-top').fadeOut();
});
