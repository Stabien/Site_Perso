//submit scroll and text validation

$('form').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var url = form.attr('action');
    var inputs = $('.contact_input');
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    for (var i = 0; i < 4; i++) {
        if (inputs.eq(i).val().length < 2 && i != 2) {
            inputs.eq(i).attr('style', 'border: 2px solid red');
            return false;
        }
        else if (i == 2 && re.test(inputs.eq(i).val()) == false) {
            inputs.eq(i).attr('style', 'border: 2px solid red');
            return false;
        }
        else
            inputs.eq(i).css('border', 'none');
    }
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function() {
            $('#form_submit').css('display', 'block');
            $('.contact_input').val('');
        }
    });
});
