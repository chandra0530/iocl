<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>IOCL Parivaar</title>

    <!-- Page Description and Author -->
    <meta name="description" content="IOCL Parivaar" />
    <meta name="author" content="IOCL Parivaar" />

 <!--  Favicons / Title Bar Icon  -->
 <link rel="shortcut icon" href="{{ asset('assets/images/favicon/icon.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon/icon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/favicon/icon.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/favicon/icon.png')}}" />

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}"> -->
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" type="text/css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" type="text/css" />
    <!-- Flat Icons -->
    <link rel="stylesheet" href="{{ asset('assets/flaticons/flaticons-link.css')}}" type="text/css" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css')}}" type="text/css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}" type="text/css" />
    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" type="text/css" />
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css')}}" type="text/css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css')}}"/>

    <!-- Main CSS   -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css" />
    <!-- Responsive CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/sharetastic.css')}}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/sharetastic.js')}}"></script>



    @stack('css')

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    <!-- Full Body Container -->
    <div id="all-area" class="all-section">

    @include('user.partials.nav2')
        @yield('content')
        


        <!-- Footer AREA START -->
        <footer class="footer">
            <div class="footer-main cbiz-bg section">
                <div class="container">    
                    <div class="row">
                        <div class="widgets">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="widget logo">
                                    <div class="wi-title">
                                        <a href="/"><img src="{{ asset('assets/images/IndianOil-Parivaar-Logo.png')}}" alt="Logo"></a>
                                    </div>
                                    <div class="wi-content">
                                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.</p>
                                        <ul class="wi-list">
                                            <li>
                                                <a href="#"><i class="fa fa-home"></i>iocl address</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-envelope-o"></i>admin@ioclparivar.com</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-phone"></i>contact details iocl</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div> <!-- /.widget -->
                            </div> <!-- /.col- -->
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="widget">
                                    <div class="wi-title">
                                       <h5>Popular Tags</h5>
                                    </div>
                                    <div class="wi-content wi-tags">
                                        <ul>
                                            <li><a href="#">Petroliun</a></li>
                                            <li><a href="#">Oil</a></li>
                                            <li><a href="#">Food</a></li>
                                           
                                        </ul>
                                    </div> <!-- /.wi-content -->
                                </div> <!-- /.widget -->
                                <div class="widget">
                                    <div class="wi-title">
                                       <h5>Social Media</h5>
                                    </div>
                                    <div class="wi-content wi-social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa normal-show fa-facebook"></i>
                                                    <i class="fa hover-show fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa normal-show fa-twitter"></i>
                                                    <i class="fa hover-show fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa normal-show fa-google-plus"></i>
                                                    <i class="fa hover-show fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa normal-show fa-pinterest-p"></i>
                                                    <i class="fa hover-show fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa normal-show fa-youtube"></i>
                                                    <i class="fa hover-show fa-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> <!-- /.wi-content -->
                                </div> <!-- /.widget -->
                            </div> <!-- /.col- -->
                            <div class="col-xs-12 col-sm-12 col-md-4">
                              
                            </div> <!-- /.col- -->
                        </div> <!-- /.widgets -->
                    </div> <!-- /.row -->  
                </div> <!-- /.container -->
            </div> <!-- /.footer-main -->
            <div class="copyright">
                <div class="container">
                  2020 All rights reserved. Terms of use and Privacy Policy
                </div>
            </div> <!-- /.copyright -->
        </footer> <!-- /.footer -->
        <!-- /Footer AREA END -->
        
        <!-- Go To Top Link -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div> <!-- /#all-area -->
    <!-- End Full Body / all-area -->




    <script>
    //   $('.sharetastic').sharetastic();
    function fbs_click(TheImg) {
     console.log(TheImg);
     var img = document.getElementById('image'+TheImg);

    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(img.src),'sharer','toolbar=0,status=0,width=626,height=436');return false;
}
function instagram(TheImg) {
     console.log(TheImg);
     var img = document.getElementById('image'+TheImg);

    window.open('http://www.instagram.com/');return false;
}

function whatsapp(TheImg) {
     console.log(TheImg);
     var img = document.getElementById('image'+TheImg);

    window.open('https://wa.me/+97333161261/?text=Hi checkout out event images '+encodeURIComponent(img.src));return false;
}
function mail(TheImg){
    var img = document.getElementById('image'+TheImg);
    window.open('mailto:test@example.com?subject=Checkoutout our event pictures&body='+encodeURIComponent(img.src));

}
function messenger(TheImg){
    var img = document.getElementById('image'+TheImg);
    window.open('fb-messenger://share?link=' + encodeURIComponent(img.src) + '&app_id=' + encodeURIComponent("1234"));

}

    </script>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- jQuery Migrate -->
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Contact Form Script -->
    <script src="{{ asset('assets/contact-script/validator.js')}}"></script>
    <script src="{{ asset('assets/contact-script/contact.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Slick Nav -->
    <script src="{{ asset('assets/js/jquery.slicknav.js')}}"></script>
    <!-- Slider Touch to work -->
    <script src="{{ asset('assets/js/jquery.mobile.custom.min.js')}}"></script>
    <!-- FancyBox -->
    <script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <!-- ProgressBar -->
    <script src="{{ asset('assets/js/jquery.lineProgressbar.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js')}}"></script>
    <!-- particles.js -->
    <script src="{{ asset('assets/js/particles.min.js')}}"></script>
    <script src="{{ asset('assets/js/particles-config.js')}}"></script>
    <!-- Google Map -->
   

    <!-- Main / Custom JS  -->
    <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>