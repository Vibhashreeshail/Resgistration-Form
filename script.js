$(document).ready(function() {
    // Prevent form submission for client-side validation
    $('#registration-form').submit(function(event) {
        var isValid = true;

        // Check if all fields are filled
        $('#registration-form input, #registration-form select, #registration-form textarea').each(function() {
            if ($(this).val() == '') {
                isValid = false;
                $(this).css('border', '1px solid red');
            } else {
                $(this).css('border', '1px solid #ccc');
            }
        });

        if (!isValid) {
            alert("Please fill all fields correctly.");
            event.preventDefault();
        }
    });
});
