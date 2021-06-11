$(document).ready(() => {
    $('#registerPhone').mask('0000-000-0000');

    $(document).on('click', '.btnRegister', async() => {
        const email = $('#registerEmail').val();
        const phone = $('#registerPhone').val();
        const password = $('#registerPassword').val();
        const confirmPassword = $('#registerConfirmPassword').val();

        if (registerValidation(email, phone, password, confirmPassword)) {
            if (await registerSecondValidation(email, phone)) {
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: "/dang-ky/luu",
                    method: "POST",
                    data: {
                        email: email,
                        password: password,
                        phone: phone,
                    },
                    dataType: "json",
                    success: (data) => {
                        if (data.success === true) {
                            $('#modalRegisterSuccess').modal('show');
                            $('#registerEmail').val('');
                            $('#registerPhone').val('');
                            $('#registerPassword').val('');
                            $('#registerConfirmPassword').val('');
                            registerClearBorderMessage();

                            /** send email */
                            registerSendingEmail(email, phone);
                            registerSendingEmailConfirmForTrialUsers(email, password);
                        } else {
                            console.log(data);
                            $('#modalError').modal('show');
                        }
                    },
                    error: (error) => {
                        console.error(error);
                        $('#modalError').modal('show');
                    },
                });
            }
        }
    });
});

function registerValidation(email, phone, password, confirmPassword) {
    let result = true;
    registerClearBorderMessage();

    if (!email.trim()) {
        $('#registerEmail').css({ "border": "2px solid red" });
        $('.error-message-registerEmail').text('Vui lòng nhập email');
        result = false;
    } else if (!validateEmail(email)) {
        $('#registerEmail').css({ "border": "2px solid red" });
        $('.error-message-registerEmail').text('Email không đúng');
        result = false;
    }
    if (!phone.trim()) {
        $('#registerPhone').css({ "border": "2px solid red" });
        $('.error-message-registerPhone').text('Vui lòng nhập số điện thoại');
        result = false;
    }
    if (!password.trim()) {
        $('#registerPassword').css({ "border": "2px solid red" });
        $('.error-message-registerPassword').text('Vui lòng nhập mật khẩu');
        result = false;
    } else if (password.trim().length < 6) {
        $('#registerPassword').css({ "border": "2px solid red" });
        $('.error-message-registerPassword').text('mật khẩu phải từ 6 kí tự trở lên');
        return false;
    }
    if (!confirmPassword.trim()) {
        $('#registerConfirmPassword').css({ "border": "2px solid red" });
        $('.error-message-registerConfirmPassword').text('Vui lòng nhập mật khẩu xác nhận');
        result = false;
    } else if (confirmPassword.trim() !== password.trim()) {
        $('#registerConfirmPassword').css({ "border": "2px solid red" });
        $('.error-message-registerConfirmPassword').text('Mật khẩu xác nhận không đúng');
        result = false;
    }

    /** set focus */
    if (!email) {
        $('#registerEmail').focus();
    } else if (!validateEmail(email)) {
        $('#registerEmail').focus();
    } else if (!phone) {
        $('#registerPhone').focus();
    } else if (!password) {
        $('#registerPassword').focus();
    } else if (!confirmPassword) {
        $('#registerConfirmPassword').focus();
    }

    return result;
}

function registerClearBorderMessage() {
    $('#registerEmail').removeAttr('style');
    $('#registerPhone').removeAttr('style');
    $('#registerPassword').removeAttr('style');
    $('#registerConfirmPassword').removeAttr('style');

    $('.error-message-register').text('');
    $('.error-message-registerEmail').text('');
    $('.error-message-registerPhone').text('');
    $('.error-message-registerPassword').text('');
    $('.error-message-registerConfirmPassword').text('');

    $('.register-error').css({ "padding": "0px" });
}

async function registerSecondValidation(email, phone) {
    const emailResult = await emailExisted(email);
    switch (emailResult.success) {
        case false:
            break;
        case true:
            $('.error-message-register').text('Người dùng đã tồn tại trong hệ thống');
            $('.register-error').css({ "padding": "10px" })
            return false;
        case null:
            $('.error-message-register').text(`Lỗi Database : ${emailResult.message}`);
            $('.register-error').css({ "padding": "10px" });
            return false;
        default:
            $('.error-message-register').text('lỗi khác');
            $('.register-error').css({ "padding": "10px" })
            return false;
    }

    const phoneResult = await phoneExisted(phone);
    switch (phoneResult.success) {
        case false:
            break;
        case true:
            $('.error-message-register').text('Số điện thoại đã tồn tại trong hệ thống');
            $('.register-error').css({ "padding": "10px" })
            return false;
        case null:
            $('.error-message-register').text(`Lỗi Database : ${phoneResult.message}`);
            $('.register-error').css({ "padding": "10px" });
            return false;
        default:
            $('.error-message-register').text('Lỗi khác');
            $('.register-error').css({ "padding": "10px" })
            return false;
    }

    return true;
}

function emailExisted(email) {
    return $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/dang-ky/luu/kiem-tra-email",
        method: "POST",
        data: { email: email },
        dataType: "json",
    });
}

function phoneExisted(phone) {
    return $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/dang-ky/luu/kiem-tra-sdt",
        method: "POST",
        data: { phone: phone },
        dataType: "json",
    });
}

function registerSendingEmail(email, phone) {
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/gui-mail/tai-khoan-dung-thu",
        method: "POST",
        data: {
            template: 'mail-templates.trial-users',
            subject: 'Người dùng thử mới',
            toEmail: 'luyen.nguyen.itbb@jvn.edu.vn',
            contents: {
                email: email,
                phone: phone,
            },
        },
        dataType: "json",
        success: (data) => console.log({ data }),
        error: (error) => console.error({ error }),
    });
}

function registerSendingEmailConfirmForTrialUsers(email, password) {
    const hiddenPart = password.slice(0, password.length - 3);
    const encodedPass = password.replace(hiddenPart, "*****");
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/gui-mail/tai-khoan-dung-thu/mail-xac-nhan",
        method: "POST",
        data: {
            template: 'mail-templates.trial-users-confirm',
            subject: 'Welcome to SVS System',
            toEmail: email,
            contents: {
                email: email,
                password: encodedPass,
            },
        },
        dataType: "json",
        success: (data) => console.log({ data }),
        error: (error) => console.error({ error }),
    });
}