<!-- jQuery (necessary for Bootstrap JavaScript plugins) -->
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

<!--webfont-->
    <script src={{ URL::asset("templates/hotel-deluxe/js/jquery-1.11.1.min.js") }} type="text/javascript"></script>
    <script src={{ URL::asset("templates/hotel-deluxe/js/login.js") }} type="text/javascript"></script>
    <script src={{ URL::asset("templates/hotel-deluxe/js/jquery.easydropdown.js") }}></script>
<!--//webfont-->

<!--Animation-->
    <script src={{ URL::asset("templates/hotel-deluxe/js/wow.min.js") }}></script>
    <script>
        new WOW().init();
    </script>
<!--//Animation-->

<!--Header-->
    <script src={{ URL::asset("templates/hotel-deluxe/js/responsive-nav.js") }} type="text/javascript"></script>
<!--//Header-->

<!----search-scripts---->
    <script src={{ URL::asset("templates/hotel-deluxe/js/classie.js") }}></script>
    <script src={{ URL::asset("templates/hotel-deluxe/js/uisearch.js") }}></script>
    <script>
        new UISearch(document.getElementById('sb-search'));
    </script>
<!----//search-scripts---->

<!------ Light Box ------>
    <script src={{ URL::asset("templates/hotel-deluxe/js/jquery.swipebox.min.js") }}></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>
<!------ Eng Light Box ------>