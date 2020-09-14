// Animates the competences progress bar when aos event is triggered

$(document).on("aos:in:competences", function() {
    $(".progress-bar").css("width", function() {
        return $(this).attr("aria-valuenow") + "%";
    });
});
