
        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script src="{{ asset('frontend/js/libs/jquery.js')}}"></script>
        <script src="{{ asset('frontend/js/libs/jquery-ui.1.10.4.min.js')}}"></script>
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="{{ asset('frontend/js/bootstrap/bootstrap.js')}}"></script>

        <!--Totop-->
        <script type="text/javascript" src="{{ asset('frontend/js/totop/jquery.ui.totop.js')}}"></script>
        <!--Slide Revolution-->
        <script type="text/javascript" src="{{ asset('frontend/js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type='text/javascript' src="{{ asset('frontend/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
        <!-- Maps -->
        <script src="{{ asset('frontend/js/maps/gmap3.js')}}"></script>
        <!--Ligbox-->
        <script type="text/javascript" src="{{ asset('frontend/js/fancybox/jquery.fancybox.js')}}"></script>
        <!-- owl.carousel.min.js-->
        <script src="{{ asset('frontend/js/carousel/owl.carousel.min.js')}}"></script>
        <!-- Filter -->
        <script src="{{ asset('frontend/js/filters/jquery.isotope.js')}}" type="text/javascript"></script>
        <!-- Parallax-->

        <!--Lightbox-->
		<script type="text/javascript" src="{{ asset('frontend/templates/js/lightbox.min.js') }}"></script>


        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="{{ asset('frontend/js/main.js')}}"></script>

        <!------ For Popup images -------->
        <script src="{{ asset('frontend/js/sweetalert2.min.js')}}"></script>
        <!-- ======================= End JQuery libs =========================== -->



        <script>
            $(function () {
                $("#navbar-collapse-1 .nav li").hover(
                    function () {
                        $(this).toggleClass('open');
                    },
                    function () {
                        $(this).toggleClass('open');
                    });
            });
        </script>

        <script>
            // When the user scrolls the page, execute myFunction
            window.onscroll = function () { myFunction() };

            // Get the header
            var header = document.getElementById("menu");

            // Get the offset position of the navbar
            var sticky = header.offsetTop;

            // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>
        <!--Slider Function-->
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('.tp-banner').show().revolution({
                    dottedOverlay: "none",
                    delay: 5000,
                    startwidth: 1170,
                    startheight: 650,
                    minHeight: 450,
                    navigationType: "none",
                    navigationArrows: "solo",
                    navigationStyle: "preview"
                });
            }); //ready
        </script>
        <!--End Slider Function-->

</body>
</html>