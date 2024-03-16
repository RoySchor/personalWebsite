function submitForm() {
    var formData = $('#contactForm').serialize();

    $.ajax({
        type: 'POST',
        url: 'send_email.php',
        data: formData,
        dataType: 'json',
        success: function(response) {
            console.log(response);
            $('#formMessage').text(response.message).show();
            $('#contactForm')[0].reset();
        },
        error: function() {
            $('#formMessage').text('There was an error. Please try again later.').show();
        }
    });
}
