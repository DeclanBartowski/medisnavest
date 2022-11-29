/*отправка формы**/
$(document).on('submit', '[data-form-feedback]', function () {
    const form = this;
    const formData = new FormData(this);
    formData.append('URL', location.href);
    BX.ajax.runComponentAction('sp:feedback',
        'send', {
            mode: 'class',
            signedParameters: defaultFeedbackParams.signedParameters,
            data: formData,
        })
        .then(function (response) {
            if (response.data.status == 'S') {

            } else {

            }
            $('.notify').html(response.data.msg);
        }, function (response) {
            $('.notify').html('Ошибка');
        });
    return false;
});