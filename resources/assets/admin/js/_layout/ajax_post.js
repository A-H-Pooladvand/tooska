$(function () {
    $('.btn-ajax').click(function () {
        // Select the form
        let $form = $('#admin-layout').find('#form');
        let $formAction = $form.attr('action');

        $.post($formAction, $form.serialize()).done(function (response) {
            if (response['message']) {
                $form.empty().append(
                    '<div class="alert alert-success">' + response['message'] + '</div>'
                );
            }
        }).fail(function (response) {
            $form.find('.ajax-error-message').remove();
            let $errors = response.responseJSON;
            $form.prepend(
                '<div class="alert alert-danger ajax-error-message alert-dismissible" role="alert">\n' +
                '    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n' +
                '    <strong>خطا!</strong> لطفا موارد زیر را برطرف نمایید.\n' +
                '</div>'
            );

            $.each($errors['errors'], function (i, val) {
                $('<div>' +
                    '<small> - ' + val + '</small>' +
                    '</div>').appendTo($form.find('.ajax-error-message'));
            });
        });

    });
});