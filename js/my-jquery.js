$(document).ready(function() {
    $('#formSubmit').on('submit', function(e) {
        e.preventDefault();
        // Reset previous error messages and classes
        $('.form-control-input, .form-control-textarea').removeClass('error success');
        $('.error-message').text('');

        // Validate the form data
        var isValid = true;

        // Get the form data
        var name = $('input[name="name"]').val().trim();
        var email = $('input[name="email"]').val().trim();
        var subject = $('input[name="subject"]').val().trim();
        var message = $('textarea[name="message"]').val().trim();
        var phone = $('input[name="phone"]').val().trim();

        // Check if the name is not empty
        if (name === '') {
            isValid = false;
            $('input[name="name"]').addClass('error').next('.error-message').text('Name is required.');
        } else {
            $('input[name="name"]').addClass('success');
        }

        // Check if the email is not empty and is in proper format
        if (email === '') {
            isValid = false;
            $('input[name="email"]').addClass('error').next('.error-message').text('Email is required.');
        } else if (!validateEmail(email)) {
            isValid = false;
            $('input[name="email"]').addClass('error').next('.error-message').text('Email is not valid.');
        } else {
            $('input[name="email"]').addClass('success');
        }

        // Check if the subject is not empty
        if (subject === '') {
            isValid = false;
            $('input[name="subject"]').addClass('error').next('.error-message').text('Subject is required.');
        } else {
            $('input[name="subject"]').addClass('success');
        }

        // Check if the subject is not empty
        if (subject === '') {
            isValid = false;
            $('input[name="phone"]').addClass('error').next('.error-message').text('Phone Number is required.');
        } else {
            $('input[name="phone"]').addClass('success');
        }

        // Check if the message is not empty
        if (message === '') {
            isValid = false;
            $('textarea[name="message"]').addClass('error').next('.error-message').text('Message is required.');
        } else {
            $('textarea[name="message"]').addClass('success');
        }
                
        // Display the error message if the form is not valid
        if (isValid){

        var formData = $(this).serialize();
        // console.log(formData);
        // debugger
        var submitButton = $(this).find('button[type="submit"]');
        submitButton.append(` <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`);
        var formData = $(this).serialize();
        $.ajax({
            url: 'https://script.google.com/macros/s/AKfycbz9tSMJox6uA0m7jH3rFxHS0SXgCfvyEpCJbOOaXRHIM8u42Yo2h1PJvAOmEyyx2rpQbw/exec', // Change to your route
            type: 'POST',
            data: formData,
            success: function(response) {
                window.location.href = 'https://www.thetechcare.in/thankyou';
            },
            error: function(error) {
                submitButton.remove(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`);
                console.error(error);
                alert('There was an error saving data to Excel.');
            }
        });
    }
    });

    function validateEmail(email) {
        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return re.test(email);
    }

});








