$(document).ready(function () {
    $('#register-user').click(function () {
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirm = $('#password-confirm').val();
        var passwordLength = password.length;
        var agreeTerms = $('#agreeTerms').is(':checked');

        // Regex pour valider les noms et l'email
        const nameRegex = /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/;
        const emailRegex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;

        // Validation du prénom
        if (firstname !== "" && nameRegex.test(firstname)) {
            $('#firstname').removeClass('is-invalid').addClass('is-valid');
            $('#error-register-firstname').text("");
        } else {
            $('#firstname').addClass('is-invalid').removeClass('is-valid');
            $('#error-register-firstname').text('First name is invalid');
        }

        // Validation du nom
        if (lastname !== "" && nameRegex.test(lastname)) {
            $('#lastname').removeClass('is-invalid').addClass('is-valid');
            $('#error-register-lastname').text("");
        } else {
            $('#lastname').addClass('is-invalid').removeClass('is-valid');
            $('#error-register-lastname').text('Last name is invalid');
        }

        // Validation de l'email
        if (email !== "" && emailRegex.test(email)) {
            $('#email').removeClass('is-invalid').addClass('is-valid');
            $('#error-register-email').text("");
        } else {
            $('#email').addClass('is-invalid').removeClass('is-valid');
            $('#error-register-email').text('Email is invalid');
        }

        // Validation du mot de passe
        if (passwordLength >= 8) {
            $('#password').removeClass('is-invalid').addClass('is-valid');
            $('#error-register-password').text("");
        } else {
            $('#password').addClass('is-invalid').removeClass('is-valid');
            $('#error-register-password').text('Password must be at least 8 characters long');
        }

        // Validation de la confirmation du mot de passe
        if (password === password_confirm && password_confirm !== "") {
            $('#password-confirm').removeClass('is-invalid').addClass('is-valid');
            $('#error-register-password-confirm').text("");
        } else {
            $('#password-confirm').addClass('is-invalid').removeClass('is-valid');
            $('#error-register-password-confirm').text('Passwords do not match');
        }

        // Validation des conditions générales
        if (agreeTerms) {
            $('#agreeTerms').removeClass('is-invalid').addClass('is-valid');
            $('#error-register-terms').text("");
            $('#form-register').submit()  
        } else {
            $('#agreeTerms').addClass('is-invalid').removeClass('is-valid');
            $('#error-register-terms').text('You must agree to the terms');
        }

        // Vérification finale
        if (
            firstname !== "" && nameRegex.test(firstname) &&
            lastname !== "" && nameRegex.test(lastname) &&
            email !== "" && emailRegex.test(email) &&
            passwordLength >= 8 &&
            password === password_confirm &&
            agreeTerms
        ) {
            alert('Form successfully validated!');
            // Vous pouvez soumettre le formulaire ici
        } else {
            alert('Please correct the errors in the form');
        }
    });
});
  // Événement pour l'input Terms and Conditions
  $('#agreeTerms').change(function () {
    var agreeTerms = $('#agreeTerms');
    if ($(this).is(':checked')) {
        $('#agreeTerms').removeClass('is-invalid').addClass('is-valid');
        $('#error-register-terms').text("");
    } else {
        $('#agreeTerms').addClass('is-invalid').removeClass('is-valid');
        $('#error-register-terms').text('You must agree to the terms');
    }
});


