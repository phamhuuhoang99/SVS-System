<script>
    addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }

    function learnMoreRedirect() {
        window.location="{{ URL::route('temp.cake-bakery.about') }}";
    }

    function supportRedirect() {
        window.location="{{ URL::route('temp.cake-bakery.contact') }}";
    }
</script>

<!-- Js files -->
<!-- JavaScript -->
<script src={{ URL::asset("templates/cake-bakery/js/jquery-2.2.3.min.js") }}></script>
<!-- Default-JavaScript-File -->

<!-- menu-js -->
<script>
    $('.navicon').on('click', function (e) {
      e.preventDefault();
      $(this).toggleClass('navicon--active');
      $('.toggle').toggleClass('toggle--active');
    });
</script>
<!-- //menu-js -->

<!-- move-top -->
<script src={{ URL::asset("templates/cake-bakery/js/move-top.js") }}></script>
<!-- easing -->
<script src={{ URL::asset("templates/cake-bakery/js/easing.js") }}></script>
<!--  necessary snippets for few javascript files -->
<script src={{ URL::asset("templates/cake-bakery/js/cakes-bakery.js") }}></script>
<script src={{ URL::asset("templates/cake-bakery/js/bootstrap.js") }}></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- header-active-js -->
<script src={{ URL::asset("templates/cake-bakery/js/header.js") }}></script>
<!-- //header-active-js -->