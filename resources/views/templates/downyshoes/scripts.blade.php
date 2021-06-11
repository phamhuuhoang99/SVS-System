    <script type="text/javascript" src={{ asset("templates/downyshoes/js/jquery-2.1.4.min.js") }}></script>
    <script src={{ asset("templates/downyshoes/js/modernizr-2.6.2.min.js") }}></script>
    <script src={{ asset("templates/downyshoes/js/classie.js") }}></script>
    <script src={{ asset("templates/downyshoes/js/demo1.js") }}></script>
    <script src={{ asset("templates/downyshoes/js/imagezoom.js") }}></script>

    <script src={{ asset("templates/downyshoes/js/jquery-ui.js") }}></script>

    <script src={{ asset("templates/downyshoes/js/minicart.js") }}></script>
    <script>
        shoe.render();

        shoe.cart.on('shoe_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>

    <script src={{ asset("templates/downyshoes/js/search.js") }}></script>

    <script src={{ asset("templates/downyshoes/js/responsiveslides.min.js") }}></script>
    <script>
        $(function() {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>

    <script type="text/javascript" src={{ asset("templates/downyshoes/js/move-top.js") }}></script>
    <script type="text/javascript" src={{ asset("templates/downyshoes/js/easing.js") }}></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>


    <script type="text/javascript" src={{ asset("templates/downyshoes/js/easy-responsive-tabs.js") }}></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
    <script type="text/javascript" src={{ asset("templates/downyshoes/js/jquery.flexslider.js") }}></script>
	<script>
		$(document).ready(function () {

            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        });
	</script>

    <script type="text/javascript" src={{ asset("templates/downyshoes/js/bootstrap-3.1.1.min.js") }}></script>
