 <!--footer -->
 <footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top">
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>A propos de nous</h3>
                    </div>
                    <div class="footer-text">
                        <p>Otwoo s’est nouvellement installé à Madagascar en 2017. Son nouveau centre de production est à Antananarivo dans le quartier d’Antsakaviro, mais la société mère siège encore en France.</p>
                        <ul class="footer-social text-left mt-lg-4 mt-3">

                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fas fa-rss"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-vk"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Prenez le contact</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Emplacement :</h4>
                        <p>Lot II.M.97 Antsakaviro, Antananarivo.</p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <p>Telephone: +261 33 60 366 00</p>
                            <p>Email :
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                            <p>Site: www.otwoo.io</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Lien rapide</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="index.html">Maison</a>
                        </li>
                        <li>
                            <a href="about.html">Au sujet de</a>
                        </li>
                        <li>
                            <a href="404.html">Erreur</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pacquets de travail</a>
                        </li>
                        <li>
                            <a href="contact.html">Contactez-nous</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li>
                            <a href="how.html">Comment il travaille?</a>
                        </li>
                        <li>
                            <a href="contact.html">Pacquets de travail</a>
                        </li>
                        <li>
                            <a href="employer_list.html">Pour les employés</a>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Inscrivez-vous pour vos offres</h3>
                    </div>
                    <div class="footer-text">
                        <p>En s'abonnant notre liste de distribution vous le dernières nouvelles et mises à jour obtiendront toujours de nous.</p>
                        <form action="#" method="post">
                            <input class="form-control" type="email" name="Email" placeholder="Entrer votre Email..." required="">
                            <button class="btn2">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                            </button>
                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </footer>
    <!-- //footer -->

   <!--inscription-->
   

   
    <!-- js -->
    <!--/slider-->

      <script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>

      <script src="{{asset('frontend/js/sweetalert.js')}}"></script>

    <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.zoomslider.min.js')}}"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="{{asset('frontend/js/classie-search.js')}}"></script>
    <script src="{{asset('frontend/js/demo1-search.js')}}"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
   

    <!-- stats -->
    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.countup.js')}}"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

    <!-- //js -->
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <!--/ start-smoth-scrolling -->
    <script src="{{asset('frontend/js/move-top.js')}}"></script>
    <script src="{{asset('frontend/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->