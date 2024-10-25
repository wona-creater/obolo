<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mine-Tech-Lab Is A Professional Creative Staking Platform" />

    <link rel="stylesheet"
        href="/homepage/../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* WhatsApp Button Styling */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .whatsapp-button img {
            width: 35px;
            height: 35px;
        }

        .whatsapp-button:hover {
            background-color: #20c857;
        }
    </style>




    <!-- SITE TITLE -->
    <title>Mine-Tech-Lab</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/homepage/assets44/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/homepage/assets44/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="/homepage/assets44/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="/homepage/https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/homepage/assets44/css/ionicons.min.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="/homepage/assets44/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/homepage/assets44/owlcarousel/css/owl.theme.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/homepage/assets44/css/magnific-popup.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/homepage/assets44/css/style.css">
    <link rel="stylesheet" href="/homepage/assets44/css/responsive.css">
    <link id="layoutstyle" rel="stylesheet" href="/homepage/assets44/color/theme.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="/homepage/https://www.googletagmanager.com/gtag/js?id=UA-106310707-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-106310707-1', {
            'anonymize_ip': true
        });
    </script>

    <!-- Start of StatCounter Code -->
    <script>
        <!--
        var sc_project = 11921154;
        var sc_security = "6c07f98b";
        var scJsHost = (("https:" == document.location.protocol) ?
            "https://secure." : "http://www.");
        //
        -->
        document.write("
    <sc"+"ript src='" +scJsHost +"statcounter.com/counter/counter.js'>
        </"+"script>");
    </script>
    <noscript>
        <div class="statcounter"><a title="web analytics" href="/homepage/https://statcounter.com/"><img
                    class="statcounter" src="/homepage/https://c.statcounter.com/11921154/0/6c07f98b/0/"
                    alt="web analytics" /></a></div>
    </noscript>
    <!-- End of StatCounter Code -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body data-spy="scroll" data-offset="110">

    <div class="preloader">
        <div id="g-spinner" class="loading">
            <div class="circle c1"></div>
            <div class="circle c2"></div>
            <div class="circle c3"></div>
            <div class="circle c4"></div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- START HEADER -->
    <header class="header_wrap fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand page-scroll animation" href="/homepage/#home" data-animation="fadeInLeft"
                    data-animation-delay="0.8s">
                    <img class="logo_light" width="170px" src="/homepage/assets44/images/logo.png" alt="logo" />
                    <img class="logo_dark" width="170px" src="/homepage/assets44/images/logo_dark.png"
                        alt="logo" />
                </a>
                <button class="navbar-toggler animation" data-animation="fadeInRight" data-animation-delay="1.2s"
                    type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i
                        class="fa fa-bars" style="font-size:24px"></i> </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav animation" data-animation="fadeInDown" data-animation-delay="1.2s">
                        <li><a class="nav-link page-scroll" href="#how_it_work">How it work</a></li>
                        <li><a class="nav-link page-scroll" href="#about">About</a></li>
                        <li><a class="nav-link page-scroll" href="#token">Live trading</a></li>
                        <li><a class="nav-link page-scroll" href="#road_map">Timeline</a></li>
                        <li><a class="nav-link page-scroll" href="#faq">FAQ</a></li>
                        <li><a class="nav-link page-scroll" href="#contact">Contact</a></li>
                    </ul>
                    <ul class="navbar-nav nav_btn animation" data-animation="fadeInRight" data-animation-delay="1.6s">
                        <li><a class="btn btn-default" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link page-scroll btn btn-default"
                                href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- START HEADER -->



    {{ $slot }}
    <!-- START FOOTER SECTION -->
    <footer>
        <div class="top_footer bg_blue_dark text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="footer_logo animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                            <a href="/homepage/index.html"><img alt="logo" width="250px"
                                    src="/homepage/assets44/images/logo.png"></a>
                        </div>
                        <div class="newsletter_form large_space">
                            <h4 class="animation footer_title" data-animation="fadeInUp" data-animation-delay="0.2s">
                                Subscribe Our Newsletter</h4>
                            <form class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                                <div class="outline_input"><input type="text" required
                                        placeholder="Enter Email Address" /></div>
                                <button type="submit" title="Subscribe" class="btn btn-default" name="submit"
                                    value="Submit">Subscribe <i class="fa fa-arrow-right"
                                        style="font-size:14px"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="rounded_shape rounded_shape2"></div>
        </div>
        <div class="bottom_footer staggered-animation-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright staggered-animation" data-animation="fadeInLeft"
                            data-animation-delay="0.1s">Mine-Tech-Lab Copyright © 2023 All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list_none footer_menu staggered-animation" data-animation="fadeInRight"
                            data-animation-delay="0.2s">
                            <li><a href="/homepage/#">Privacy Policy</a></li>
                            <li><a href="/homepage/#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <a href="/homepage/#" class="scrollup btn-default animation" data-animation="zoomIn" data-animation-delay="0.1s"
        style="display: none;"><i class="fa fa-arrow-up" style="font-size:20px"></i></a>

    <!-- Latest jQuery -->
    <script data-cfasync="false" src="/homepage/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/homepage/assets44/js/jquery-1.12.4.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="/homepage/assets44/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="/homepage/assets44/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="/homepage/assets44/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="/homepage/assets44/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="/homepage/assets44/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="/homepage/assets44/js/jquery.countdown.min.js"></script>
    <!-- particles min js  -->
    <script src="/homepage/assets44/js/particles.min.js"></script>
    <!-- scripts js -->
    <script src="/homepage/assets44/js/scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Flasher JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <script>
        $(document).on('change', '#langSel', function() {
            var code = $(this).val();
            window.location.href = "https://minetechlab.com/change-lang/" + code;
        });
    </script>
    <a href="https://wa.me/+447553182072" class="whatsapp-button" target="_blank">
        <img src="https://www.flaticon.com/free-icons/whatsapp" alt="WhatsApp">

    </a>
    <script>
        // Disable right-click
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        // Disable F12 key and Ctrl+Shift+I/J/U
        document.onkeydown = function(e) {
            if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && ['I', 'J', 'U'].includes(e.key.toUpperCase()))) {
                return false;
            }
        };

        // Disable Ctrl+U (View Source)
        document.onkeydown = function(e) {
            if (e.ctrlKey && e.key === 'u') {
                return false;
            }
        };
    </script>





</body>


</html>
