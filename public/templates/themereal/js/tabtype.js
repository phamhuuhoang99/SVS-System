$(document).ready(function() {
    $("#MobilePreview").click(function() {
        $('.device-preview').css({ "max-width": "360px", "margin": "0px 0px 0px -160px", "left": "50%" });
        $('.device-preview-controls li a').removeClass('device-preview-controls__toggle--active');
        $(this).addClass('device-preview-controls__toggle--active');
    });
    $("#DesktopPreview").click(function() {
        $('.device-preview').css({ "max-width": "100%", "margin": "0px", "top": "42px", "left": "0px" });
        $('.device-preview-controls li a').removeClass('device-preview-controls__toggle--active');
        $(this).addClass('device-preview-controls__toggle--active');
    });
    $("#TabletPreview").click(function() {
        $('.device-preview').css({ "max-width": "768px", "max-height": "1024px", "margin": "0px 0px 0px -395px", "left": "50%" });
        $('.device-preview-controls li a').removeClass('device-preview-controls__toggle--active');
        $(this).addClass('device-preview-controls__toggle--active');
    });

    function hiddenHeader() {
        var width = $(window).width();
        console.log(width)
        if (width < 1200) {
            $('#PageContainer').css('padding-top', '0px')
        } else {
            $('#PageContainer').css('padding-top', '42px')
        }
    }
    //Hidden tabType when load page and check width <1200px
    hiddenHeader();
    //Hidden tabType when width <1200px
    $(window).resize(() => {
        hiddenHeader()
    });

});