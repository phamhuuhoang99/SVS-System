<script src="{{ asset('templates/learning/js/responsiveslides.min.js') }}"></script>
<script>
    $(function() {
        $("#slider2").responsiveSlides({
            auto: true,
            pager: true,
            speed: 300,
            namespace: "callbacks",
        });
    });

</script>

<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });

</script>

<!--pop-up-box-->
<script type="text/javascript" src="{{ asset('templates/learning/js/modernizr.custom.53451.js') }}"></script>
<link href="{{ asset('templates/learning/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
<script src="{{ asset('templates/learning/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
<!--pop-up-box-->
<!--tab start here-->
<script type="text/javascript" src="{{ asset('templates/learning/js/colorfulTab.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#colorful").colorfulTab();

        $("#colorful-elliptic").colorfulTab({
            theme: "elliptic"
        });

        $("#colorful-flatline").colorfulTab({
            theme: "flatline"
        });

        $("#colorful-background-image").colorfulTab({
            theme: "flatline",
            backgroundImage: "true",
            overlayColor: "#002F68",
            overlayOpacity: "0.8"
        });

    });

</script>
<!--tab start here-->
