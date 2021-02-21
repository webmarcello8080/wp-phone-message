jQuery(document).ready(function ($) {

    var fullTelephone = wp_phone_message_data.fullPhoneNumber;

    $("#whatapp-form").submit(function (e) {
        e.preventDefault();
        var message = $('#wp-phone-message-message').val();
        var name = $('#wp-phone-message-name').val();
        var extra = $('#wp-phone-message-extra').val();
        var phone = $('#wp-phone-message-phone').val();
        var email = $('#wp-phone-message-email').val();
        var dropdown = $('#wp-phone-message-dropdown').val();
        var title = $('#wp-phone-message-title').val();

        if (whatappValidation(fullTelephone, 'whatapp-error')) {
            final_message = whatappCreateFinalMessage(name, extra, phone, email, message, dropdown);
            var whatappUrl = "https://wa.me/" + fullTelephone + "?text=" + final_message;

            popupwindow(whatappUrl, title, 1000, 700);
        }
        return false;
    });

    $("#whatapp-widget-form").submit(function (e) {
        e.preventDefault();
        var message = $('#wp-phone-message-widget-message').val();
        var name = $('#wp-phone-message-widget-name').val();
        var extra = $('#wp-phone-message-widget-extra').val();
        var phone = $('#wp-phone-message-widget-phone').val();
        var email = $('#wp-phone-message-widget-email').val();
        var dropdown = $('#wp-phone-message-widget-dropdown').val();

        if (whatappValidation(fullTelephone, 'whatapp-widget-error')) {
            final_message = whatappCreateFinalMessage(name, extra, phone, email, message, dropdown);
            var whatappUrl = "https://wa.me/" + fullTelephone + "?text=" + final_message;

            popupwindow(whatappUrl, 'Whatsapp Me', 1000, 700);
        }
        return false;
    });

    function popupwindow(url, title, w, h) {
        var left = (screen.width / 2) - (w / 2);
        var top = (screen.height / 2) - (h / 2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    }

    function whatappValidation(fullTelephone, errorTarget) {
        if (fullTelephone && fullTelephone != '0') {
            whatappErrorMessage(" ", errorTarget);
            return true;
        }
        else {
            whatappErrorMessage("Telephone number is not set or not valid.", errorTarget);
            return false;
        }
    }

    function whatappErrorMessage(errorMessage, errorTarget) {
        $("#" + errorTarget).text(errorMessage);
    }

    function whatappCreateFinalMessage(name, extra, phone, email, message, dropdown) {

        final_message = '';
        if (name !== undefined)
            final_message += name + ' %0a';
        if (extra !== undefined)
            final_message += extra + ' %0a';
        if (phone !== undefined)
            final_message += phone + ' %0a';
        if (email !== undefined)
            final_message += email + ' %0a';
        if (dropdown !== undefined)
            final_message += dropdown + ' %0a';

        final_message += message.replace(/[\r\n]/g, " %0a");

        return final_message;
    }

});