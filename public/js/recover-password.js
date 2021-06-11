$(document).ready(() => {

    /** send Email for confirmnation */
    $(document).on('click', '.sendEmailBtn', async () => {
        const email = $('#recoverPasswordEmail').val();
        if (recoverValidation(email)) {
            if (await recoverSecondValidation(email)) {
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: "/gui-mail/khoi-phuc-mat-khau",
                    method: "POST",
                    data: {
                        template: 'mail-templates.recover-password',
                        subject: 'Thay đổi mật khẩu',
                        toEmail: email,
                    },
                    dataType: "json",
                    success: (data) => console.log({ data }),
                    error: (error) => console.error({ error }),
                });

                $('#modalSendEmail').modal('show');
                $('#recoverPasswordEmail').val('');
                recoverClearBorderMessage();
            }
        }
    });

    /** reset password */
    $(document).on('click', '.createPasswordBtn', async () => {
        const token = $('#recoverPasswordToken').val();
        const password = $('#recoverPasswordNewPassword').val();
        console.log({ token });

        if (recoverValidationPassword(password)) {
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: "/khoi-phuc-mat-khau/reset-mat-khau",
                method: "POST",
                data: {
                    token: token,
                    password: password,
                },
                dataType: "json",
                success: (data) => {
                    console.log({ data });
                    if (data.success === true) {
                        $('#modalResetPassword').modal('show');
                        $('#recoverPasswordToken').val('');
                        $('#recoverPasswordNewPassword').val('');
                        recoverClearBorderMessage();
                    } else {
                        $('.error-message-recoverPassword').text(data.message);
                        $('.recoverPassword-error').css({ "padding": "10px" });
                    }
                },
                error: (error) => console.error({ error }),
            });
        }
    });
});

function recoverValidation(email) {
    recoverClearBorderMessage();

    if (!email.trim()) {
        $('.error-message-recoverPassword').text('Vui lòng nhập email');
        $('.recoverPassword-error').css({ "padding": "10px" });
        return false;
    } else if (!validateEmail(email)) {
        $('.error-message-recoverPassword').text('Email không đúng');
        $('.recoverPassword-error').css({ "padding": "10px" });
        return false;
    }

    return true
}

async function recoverSecondValidation(email) {
    const emailResult = await recoverEmailExisted(email);
    switch (emailResult.success) {
        case true:
            break;
        case false:
            $('.error-message-recoverPassword').text('Người dùng không tồn tại không hệ thống');
            $('.recoverPassword-error').css({ "padding": "10px" });
            return false;
        case null:
            $('.error-message-recoverPassword').text(`Lỗi Database : ${emailResult.message}`);
            $('.recoverPassword-error').css({ "padding": "10px" });
            return false;
        default:
            $('.error-message-recoverPassword').text('lỗi khác');
            $('.recoverPassword-error').css({ "padding": "10px" });
            return false;
    }

    return true;
}

function recoverValidationPassword(password) {
    recoverClearBorderMessage();

    if (!password.trim()) {
        $('.error-message-recoverPassword').text('Vui lòng nhập mật khẩu');
        $('.recoverPassword-error').css({ "padding": "10px" });
        return false;
    } else if (password.trim().length < 6) {
        $('.error-message-recoverPassword').text('mật khẩu phải từ 6 kí tự trở lên');
        $('.recoverPassword-error').css({ "padding": "10px" });
        return false;
    }

    return true
}

function recoverEmailExisted(email) {
    return $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/dang-ky/luu/kiem-tra-email",
        method: "POST",
        data: { email: email },
        dataType: "json",
    });
}

function recoverClearBorderMessage() {
    $('#recoverPasswordEmail').removeAttr('style');
    $('#recoverPasswordToken').removeAttr('style');
    $('#recoverPasswordNewPassword').removeAttr('style');

    $('.error-message-recoverPassword').text('');
    $('.recoverPassword-error').css({ "padding": "0px" });
}