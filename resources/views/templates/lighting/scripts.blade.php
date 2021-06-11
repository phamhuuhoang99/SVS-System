<script src={{ asset('templates/lighting/js/responsiveslides.min.js') }}></script>
<script>
    $(function() {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: false,
        });
    });

</script>

<script src={{ asset('templates/lighting/js/bootstrap.js') }}></script>

<script src={{ asset('templates/lighting/js/responsiveslides.min.js') }}></script>
<script>
    $(function() {
        $("#slider").responsiveSlides({
            auto: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: false,
        });
    });

</script>
<script src={{ asset('templates/lighting/js/imagezoom.js') }}></script>
<script defer src={{ asset('templates/lighting/js/jquery.flexslider.js') }}></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });

</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src={{ asset('templates/lighting/js/jquery.jscrollpane.min.js') }}></script>
<script type="text/javascript" id="sourcecode">
    $(function() {
        $('.scroll-pane').jScrollPane();
    });

</script>
<!-- //the jScrollPane script -->

<!---->
<script type="text/javascript" src={{ asset('templates/lighting/js/jquery-ui.min.js') }}></script>
<script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 100000,
            values: [500, 100000],
            slide: function(event, ui) {
                $("#amount").val( ui.values[0]+"đ" + " - " + ui.values[1]+"đ");
            }
        });
        $("#amount").val("đ" + $("#slider-range").slider("values", 0) + " - " + $("#slider-range").slider("values", 1) +"đ");

    }); //]]>

</script>
<!---->


<!--script-->
<script>
    $(document).ready(function() {
        $(".tab1 .single-bottom").hide();
        $(".tab2 .single-bottom").hide();
        $(".tab3 .single-bottom").hide();
        $(".tab4 .single-bottom").hide();
        $(".tab5 .single-bottom").hide();

        $(".tab1 ul").click(function() {
            $(".tab1 .single-bottom").slideToggle(300);
            $(".tab2 .single-bottom").hide();
            $(".tab3 .single-bottom").hide();
            $(".tab4 .single-bottom").hide();
            $(".tab5 .single-bottom").hide();
        })
        $(".tab2 ul").click(function() {
            $(".tab2 .single-bottom").slideToggle(300);
            $(".tab1 .single-bottom").hide();
            $(".tab3 .single-bottom").hide();
            $(".tab4 .single-bottom").hide();
            $(".tab5 .single-bottom").hide();
        })
        $(".tab3 ul").click(function() {
            $(".tab3 .single-bottom").slideToggle(300);
            $(".tab4 .single-bottom").hide();
            $(".tab5 .single-bottom").hide();
            $(".tab2 .single-bottom").hide();
            $(".tab1 .single-bottom").hide();
        })
        $(".tab4 ul").click(function() {
            $(".tab4 .single-bottom").slideToggle(300);
            $(".tab5 .single-bottom").hide();
            $(".tab3 .single-bottom").hide();
            $(".tab2 .single-bottom").hide();
            $(".tab1 .single-bottom").hide();
        })
        $(".tab5 ul").click(function() {
            $(".tab5 .single-bottom").slideToggle(300);
            $(".tab4 .single-bottom").hide();
            $(".tab3 .single-bottom").hide();
            $(".tab2 .single-bottom").hide();
            $(".tab1 .single-bottom").hide();
        })
    });

</script>
<!-- script -->
