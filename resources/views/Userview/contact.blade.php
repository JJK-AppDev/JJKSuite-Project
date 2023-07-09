
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('/img/userviewimg/favicon.png')}}" type="image/png">
        <title>JJKSuite | Hotel Booking</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('/vendor/linericon/style.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/vendor/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/vendor/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('/vendor/owl-carousel/owl.carousel.min.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/responsive.css')}}">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="#"><img src="{{ asset('/img/userviewimg/Logo1.jpg')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="/index">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="/accomodation">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                            <!--<li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/blog-single">Blog Details</a></li>
                                </ul>
                            </li>-->
                            <li class="nav-item active"><a class="nav-link" href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Contact Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
            <!--  <div id="mapBox" class="mapBox"
                  data-lat="40.701083"
                  data-lon="-74.1522848"
                  data-zoom="13"
                  data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                  data-mlat="40.701083"
                  data-mlon="-74.1522848">
              </div> -->

              <!-- Google Maps -->
              <div class="mb-3">
                <iframe style="border:0; width: 100%; height: 420px;margin-bottom: 80px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15953.3766009543!2d103.6485044!3d1.5575724!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da7159fb8b6ad1%3A0xc85f6a7d09e02ab6!2sScholar%E2%80%99s%20Inn%20UTMJB!5e0!3m2!1sen!2smy!4v1688695860209!5m2!1sen!2smy" frameborder="0" allowfullscreen></iframe>
              </div><!-- End Google Maps -->

                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Scholar’s Inn, UTMJB</h6>
                                <p>Jalan Kempas 3, 81310 Johor Bahru</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+607 590 0747</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@colorlib.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn theme_btn button_hover">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->

        <!--================ start footer Area  =================-->
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Hotel</h6>
                            <p>Welcome to JJKSuite, we pride ourselves on providing exceptional service and a warm, welcoming environment.
                              Our knowledgeable staff is dedicated to making your stay truly memorable, catering to your
                              every need and ensuring that your Jujutsu Kaisen-inspired experience exceeds all expectations. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Accomodation</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="{{ asset('img/userviewimg/instagram/Image-01.jpg')}}" alt=""></li>
                                <li><img src="{{ asset('img/userviewimg/instagram/Image-02.jpg')}}" alt=""></li>
                                <li><img src="{{ asset('img/userviewimg/instagram/Image-03.jpg')}}" alt=""></li>
                                <li><img src="{{ asset('img/userviewimg/instagram/Image-04.jpg')}}" alt=""></li>
                                <li><img src="{{ asset('img/userviewimg/instagram/Image-05.jpg')}}" alt=""></li>
                                <li><img src="{{ asset('img/userviewimg/instagram/Image-06.jpg')}}" alt=""></li>
                                <li><img src="{{ asset('img/userviewimg/instagram/Image-07.jpg')}}" alt=""></li>
                                <li><img src="{{ asset('img/userviewimg/instagram/Image-08.jpg')}}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border_line"></div>
                <div class="footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">JJKSuite</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        		<!--================ End footer Area  =================-->


       <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('/js/popper.js')}}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('/vendor/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ asset('/vendor/nice-select/js/jquery.nice-select.js')}}"></script>
        <script src="{{ asset('/js/mail-script.js')}}"></script>
        <script src="{{ asset('/js/stellar.js')}}"></script>
        <script src="{{ asset('/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('/vendor/isotope/isotope-min.js')}}"></script>
        <script src="{{ asset('/js/stellar.js')}}"></script>
        <script src="{{ asset('/vendor/lightbox/simpleLightbox.min.j')}}s"></script>
        <!--gmaps Js
        <script src="{{ asset('/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
        <script src="{{ asset('/js/gmaps.min.js')}}"></script>-->
        <!-- contact js -->
        <script src="{{ asset('/js/jquery.form.js')}}"></script>
        <script src="{{ asset('/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('/js/contact.js')}}"></script>
        <script src="{{ asset('/js/custom.js')}}"></script>
    </body>
</html>
