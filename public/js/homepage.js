/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.c-logo-part
 */
$(document).ready(function (e) {
    $('.res-nav_click').click(function () {
        $('ul.toggle').slideToggle(600)
    });

    $(document).ready(function () {
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 0) {
                $('#header_outer').addClass('fixed');
            } else {
                $('#header_outer').removeClass('fixed');
            }
        });

    });
    // https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html#callback-examples
    $('#phone').mask('0000-000-0000');
});

function resizeText() {
    var preferredWidth = 767;
    var displayWidth = window.innerWidth;
    var percentage = displayWidth / preferredWidth;
    var fontsizetitle = 25;
    var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
    $(".divclass").css("font-size", newFontSizeTitle)
}


$(document).ready(function (e) {
    $('#header_outer').scrollToFixed();
    $('.res-nav_click').click(function () {
        $('.main-nav').slideToggle();
        return false

    });

});

wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();

// $(window).load(function() {
//     $('a').bind('click', function(event) {
//         var $anchor = $(this);
//         $('html, body').stop().animate({
//             scrollTop: $($anchor.attr('href')).offset().top - 91
//         }, 1500, 'easeInOutExpo');
//         event.preventDefault();
//     });
// });

jQuery(document).ready(function ($) {
    // Portfolio Isotope
    var container = $('#portfolio-wrap');
    container.isotope({
        animationEngine: 'best-available',
        animationOptions: {
            duration: 200,
            queue: false
        },
        layoutMode: 'fitRows'
    });

    $('#filters a').click(function () {
        $('#filters a').removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        container.isotope({
            filter: selector
        });
        setProjects();
        return false;
    });

    function splitColumns() {
        var winWidth = $(window).width(),
            columnNumb = 1;
        if (winWidth > 1024) {
            columnNumb = 4;
        } else if (winWidth > 900) {
            columnNumb = 2;
        } else if (winWidth > 479) {
            columnNumb = 2;
        } else if (winWidth < 479) {
            columnNumb = 1;
        }

        return columnNumb;
    }

    function setColumns() {
        var winWidth = $(window).width(),
            columnNumb = splitColumns(),
            postWidth = Math.floor(winWidth / columnNumb);

        container.find('.portfolio-item').each(function () {
            $(this).css({
                width: postWidth + 'px'
            });
        });
    }

    function setProjects() {
        setColumns();
        container.isotope('reLayout');
    }

    container.imagesLoaded(function () {
        setColumns();
    });


    $(window).bind('resize', function () {
        setProjects();
    });

});
$(window).load(function () {
    jQuery('#all').click();
    return false;
});

$(document).on('click', '.btnSave', function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var name = $('#name').val(),
        phone = $('#phone').val(),
        email = $('#email').val(),
        message = $('#message').val();

    if (validation(name, phone, email, message)) {
        $.ajax({
            url: "contact/save",
            method: "POST",
            data: {
                name: name,
                phone: phone,
                email: email,
                message: message
            },
            dataType: "json",
            success: function (data) {
                if (data.success === true) {
                    $('#modalInfo').modal('show');
                    $('#name').val('');
                    $('#phone').val('');
                    $('#email').val('');
                    $('#message').val('');
                    clearbordermessage()

                    /** send email */
                    contactSendingEmail(name, phone, email, message);
                } else {
                    $('#modalError').modal('show');
                }
            },
            error: function (error) {
                $('#modalError').modal('show');
            }
        });
    }
});

function validation(name, phone, email, message) {
    clearbordermessage();
    var result = true;
    if (!name.trim()) {
        $('#name').css({ "border": "2px solid red" });
        $('.error-message-name').text('Vui lòng nhập họ tên');
        result = false;
    }
    if (!phone.trim()) {
        $('#phone').css({ "border": "2px solid red" });
        $('.error-message-phone').text('Vui lòng nhập số điện thoại');
        result = false;
    }
    if (!email.trim()) {
        $('#email').css({ "border": "2px solid red" });
        $('.error-message-email').text('Vui lòng nhập email');
        result = false;
    } else if (!validateEmail(email)) {
        $('#email').css({ "border": "2px solid red" });
        $('.error-message-email').text('Email không đúng');
        result = false;
    }
    if (!message.trim()) {
        $('#message').css({ "border": "2px solid red" });
        $('.error-message-message').text('Vui lòng nhập nội dung');
        result = false;
    }

    // set focus
    if (!name) {
        $('#name').focus();
    } else if (!phone) {
        $('#phone').focus();
    } else if (!email) {
        $('#email').focus();
    } else if (!validateEmail(email)) {
        $('#email').focus();
    } else if (!message) {
        $('#message').focus();
    }
    return result;
}

function clearbordermessage() {
    $('#name').removeAttr('style');
    $('#phone').removeAttr('style');
    $('#email').removeAttr('style');
    $('#message').removeAttr('style');
    $('.error-message-name').text('');
    $('.error-message-phone').text('');
    $('.error-message-email').text('');
    $('.error-message-message').text('');
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

window.fbAsyncInit = function () {
    FB.init({
        xfbml: true,
        version: 'v7.0'
    });
};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).ready(function () {
    $(window).scroll(function () {
        var $w = $(window).scrollTop();
        var $posFooter = $('.footer_section').offset().top - $('.sidebar-sticky').outerHeight();
        if ($w < 120) {
            $(".aside-groupNav").css({ "position": "static", "top": "80px" });
        } else if ($w > 120 && $w < $posFooter) {
            $(".aside-groupNav").css({ "position": "fixed", "top": "100px" });
        } else {
            $(".aside-groupNav").css({ "position": "fixed", "top": "-380px" });
        }
    });

    $('li > a').click(function () {
        $('li').removeClass();
        $(this).parent().addClass('active');
    });

    // $('.nav-main li a').click(function() {
    //     $('.nav-main li a').removeClass();
    //     $(this).addClass('li-active');
    // });
    $(".contentFeatured").find("a").click(function(e) {
        e.preventDefault();
        var section = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(section).offset().top - 90
        });
    });

});

function contactSendingEmail(name, phone, email, message) {
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: "/gui-mail/thong-tin-lien-he",
        method: "POST",
        data: {
            template: 'mail-templates.contact',
            subject: 'Thông tin liên hệ mới',
            toEmail: 'smartvietsolution@gmail.com',
            contents: {
                name: name,
                email: email,
                phone: phone,
                note: message,
            },
        },
        dataType: "json",
        success: (data) => console.log({ data }),
        error: (error) => console.error({ error }),
    });
}