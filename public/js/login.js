$(document).ready(() => {
    $(document).on('click', '.btnLogin', () => {
        const email = $('#loginEmail').val();
        const password = $('#loginPassword').val();

        if (loginValidation(email, password)) {
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: "/dang-nhap/xac-nhan",
                method: "POST",
                data: {
                    email: email,
                    password: password,
                },
                dataType: "json",
                success: (data) => {
                    if (data.success === true) {
                        $('#loginEmail').val('');
                        $('#loginPassword').val('');
                        $('.error-message-login').text('');
                        $('.login-error').css({ "padding": "0px" })
                        window.location.href = 'https://core.smartvietsolution.com';
                    } else {
                        $('.error-message-login').text(data.message);
                        $('.login-error').css({ "padding": "10px" })
                    }
                },
                error: (error) => {
                    $('#modalError').modal('show');
                },
            });
        }
    });
});

function loginValidation(email, password) {
    let result = true;
    loginClearBorderMessage();

    if (!email.trim()) {
        $('#loginEmail').css({ "border": "2px solid red" });
        $('.error-message-loginEmail').text('Vui lòng nhập email');
        result = false;
    } else if (!validateEmail(email)) {
        $('#loginEmail').css({ "border": "2px solid red" });
        $('.error-message-loginEmail').text('Email không đúng');
        result = false;
    }
    if (!password.trim()) {
        $('#loginPassword').css({ "border": "2px solid red" });
        $('.error-message-loginPassword').text('Vui lòng nhập mật khẩu');
        result = false;
    }

    // set focus
    if (!email) {
        $('#loginEmail').focus();
    } else if (!validateEmail(email)) {
        $('#loginEmail').focus();
    } else if (!password) {
        $('#loginPassword').focus();
    }

    return result;
}

function loginClearBorderMessage() {
    $('#loginEmail').removeAttr('style');
    $('#loginPassword').removeAttr('style');
    $('.error-message-loginEmail').text('');
    $('.error-message-loginPassword').text('');
}