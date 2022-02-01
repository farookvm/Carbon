<?php
error_reporting(0);
$source = '';
$source = $_GET['utm_source'];
$medium = '';
$medium = $_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Carbon</title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--Cookie Alert-->
    <link rel="stylesheet" href="assets/css/cookiealert.css">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NB68XQ5');</script>
<!-- End Google Tag Manager -->

</head>

<body class="homepage-1">

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB68XQ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="main">

        <!-- Start headerarea -->
        <section class="headerarea">
            <div class="container">
                <div class="logo">
                    <a href="#">
                        <img src="assets/img/logo/carbon.png">
                    </a>
                </div>
            </div>
        </section>
        <!-- End headerarea -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area d-flex">
            <div class="container">
                <div class="row ban-mob-bg">
                    <!-- Welcome Intro Start -->
                    <div class="col-md-12">

                        <div class="row bn-content">
                            <div class="col-lg-8">

                                <h1>Ever wondered why students 
                                    from Kerala don't make 
                                    it to 1-9 rankings in 
                                   <span>NEET & JEE?</span>
                                </h1>
                                <div class="bn-cont-div">
                                    <h2>FREE Seminar Series By  IIT-JEE</h2>
                                    <h2>Entrance Guru <span>Shishir Mittal</span></h2>
                                </div>
                            </div>
                        </div>

                        <div class="bn-img"><img src="assets/img/bg/banner-bg.png" alt="" class="img-fluid"></div>
                        
                    </div>
                    <div class="col-12 d-lg-none">
                        <div class="bn-mob-img"><img src="assets/img/bg/banner-bg-mobile.png" alt="" class="img-fluid"></div>
                    </div>
                    <div class="col-lg-10">
                        <div class="welcome-form">
                            <h3>Book Your Seats Now</h3>
                            <form name="form1" method="post" action="email.php">
                                <div class="row form-align">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name" class="form-control" name="name"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input placeholder="Phone" class="form-control" name="phone"
                                                required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" class="form-control" name="email"
                                                required>
                                        </div>
                                        <div class="form-group form-group-btn">
                                            <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                            <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                            <input type="submit" value="submit" class="form-control" name="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Welcome Area End***** -->

        <!-- ***** Seminar Area Start***** -->
        <section class="seminar-area">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="seminar">
                         <h1>Why Attend this Seminar</h1>
                         <p>You get to meet the Coaching Guru Shishir Mittal, who will enlighten you with the secret recipe of being amongst 
                             the top 10 in NEET & JEE, by blending your hard work and our methodology. 
                             He would be introducing you to the systems of Kota, in Kerala flavour and guiding you on how to 
                             differentiate between the right and wrong methods while practicing for entrance tests.</p>
                        </div>
                    </div>
                </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="seminar-gray-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="seminar-dm">
                                    <div class="sem-date">26</div>
                                    <div class="sem-month">February</div>
                                </div>
                            </div>
                            <div class="col-8 d-flex align-self-center flex-column">
                                <div class="sem-venue">
                                    Kannur
                                </div>
                                <div class="sem-book-now">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="seminar-white-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="seminar-dm">
                                    <div class="sem-date">27</div>
                                    <div class="sem-month">February</div>
                                </div>
                            </div>
                            <div class="col-8 d-flex align-self-center flex-column">
                                <div class="sem-venue">
                                    Vatakara
                                </div>
                                <div class="sem-book-now">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="seminar-white-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="seminar-dm">
                                    <div class="sem-date">27</div>
                                    <div class="sem-month">February</div>
                                </div>
                            </div>
                            <div class="col-8 d-flex align-self-center flex-column">
                                <div class="sem-venue">
                                    Calicut
                                </div>
                                <div class="sem-book-now">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="seminar-orange-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="seminar-orange-dm">
                                    <div class="sem-orange-date">28</div>
                                    <div class="sem-orange-month">February</div>
                                </div>
                            </div>
                            <div class="col-8 d-flex align-self-center flex-column">
                                <div class="sem-orange-venue">
                                    Thrissur 
                                </div>
                                <div class="sem-orange-book-now">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="seminar-gray-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="seminar-dm">
                                    <div class="sem-date">01</div>
                                    <div class="sem-month">March</div>
                                </div>
                            </div>
                            <div class="col-8 d-flex align-self-center flex-column">
                                <div class="sem-venue">
                                    Kottakkal
                                </div>
                                <div class="sem-book-now">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="seminar-white-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="seminar-dm">
                                    <div class="sem-date">02</div>
                                    <div class="sem-month">March</div>
                                </div>
                            </div>
                            <div class="col-8 d-flex align-self-center flex-column">
                                <div class="sem-venue">
                                    Manjeri
                                </div>
                                <div class="sem-book-now">
                                   <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </section>
        <!-- ***** Seminar Area End***** -->

        <!-- ***** features Area Start***** -->

        <section class="features-area">

            <div class="container">
                <div class="row">
                     <div class="col-lg-4 d-flex align-self-center flex-column p-0">
                         <div class="feature-head">
                            <h5>key features</h5>
                            <h2>What makes us Unique</h2>
                         </div>
                     </div>
                     <div class="col-lg-4 p-0">
                         <div class="feature-box">
                            <img src="assets/img/features/features-icon.png" alt="">
                            <h4>Digitization blended with traditional methodologies</h4>
                         </div>
                     </div>
                     <div class="col-lg-4 p-0">
                        <div class="feature-box">
                            <img src="assets/img/features/features-icon.png" alt="">
                            <h4>Personalized education </h4>
                         </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="feature-box">
                            <img src="assets/img/features/features-icon.png" alt="">
                            <h4>Top-notch study material</h4>
                         </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="feature-box">
                            <img src="assets/img/features/features-icon.png" alt="">
                            <h4>Live doubt solving sessions</h4>
                         </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="feature-box">
                            <img src="assets/img/features/features-icon.png" alt="">
                            <h4>Concept clearing classes</h4>
                         </div>
                    </div>

                    <div class="col-12">
                        <div class="feature-book-now">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- ***** features Area End***** -->

        <section class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="testimonial">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="testimonial-left">

                                        <h5>testimonials</h5>
                                    <h3>Let's listen from Top Rankers</h3>
                                    <div class="testi-cont">
                                        <div class="testi-quote-cont">
                                            <div class="quote"><img src="assets/img/testimonials/quote.png" alt=""></div>
                                            <p>When I was pursuing my engineering entrance coaching, not much study material was available. 
                                                However, through Carbon-30, and the exceptional guidance and mentorship of Mr. Shishir Mittal, 
                                                students of Kerala are going to be benefited in a big way. The coaching that stresses on conceptual 
                                                clarity and quality with small batches of 30, is sure to fulfill the dreams of Kerala students of \
                                                acquiring top rankings in IIT JEE.</p>
                                        </div>
                                 <h4>MEERA K</h4>
                                 <h5>AIR-6 UPSC CSE 2020</h5>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="testi-video-img">
                                        <div class="vido-sec">
                                            <a href="https://www.youtube.com/embed/fgoDKBPwito" data-fancybox="images"><img src="assets/img/testimonials/testimonial.jpg" alt=""></a>
                                             </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="about-vyas">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/about/logo-vyas.png" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h5>about</h5>
                        <h3>Vyas Edification-KOTA</h3>
                        <p>Vyas Edification-KOTA LLP is the best IIT-JEE Coaching Institute in Kota, 
                            which was started by the leading educator, Mr. Shishir Mittal. Apart 
                            from IIT coaching, the institute also prepares students for NEET exams,
                             Board exams, NSEJS, KVPY, NTSE for students from Std. V to X.
                             Keeping up-to-date with the latest innovations in the digital sector, 
                             the institute has reformed the ways of learning. Vyas Edification-KOTA  blends
                              digitization with traditional methodologies to make learning more effective.
                               The academy has highly experienced faculties and AI-powered DPPs, 
                            which ensure personalized education to every student.</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="about-carbon-area">

            <div class="container">
                <div class="row about-carbon">
                    <div class="col-lg-8 p-0">
                        <div class="">
                            <h2>About Carbon Classes</h2>
                        <p>Carbon 30 Classes is a unique NEET/JEE Coaching Institute, well-equipped with all the advancements
                                and upgradation in technology. By associating with Mr.Shishir Mittal, a leading educator and one 
                                of the four founding fathers of Kota's education industry, Carbon 30 Classes aims at helping the 
                                students of Kerala excel in the country's toughest entrance examinations like NEET and JEE. Digitization 
                                is blended with traditional methodologies to make learning more effective. One-to-one interaction with 
                                students, daily monitoring, top-notch study material, frequent diagnostic tests, live doubt solving 
                                sessions, and concept clearing classes are the characteristic features of Carbon 30 Classes. The institute 
                                helps students discover their talent and  
                               prepares them to ace competitive exams with utmost ease and perfection.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0 ">
                    <a href="https://www.youtube.com/embed/N0yvYgdHsHc" data-fancybox="images"><img src="assets/img/about/shishir-mittal-video-img.jpg" alt=""></a>
                    </div>
                </div>
            </div>

        </section>
        

        <section class="footer-area">

            <div class="container">
                <div class="row footer">
                    <div class="col-lg-3">
                        <div class="foot-logo">

                            <img src="assets/img/logo/carbon.png" alt="">

                        </div>
                    </div>
                    <div class="col-lg-5">

                        <div class="book-seats-now">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Your Seats Now</a>
                        </div>
                        
                    </div>
    
                    <div class="col-lg-4">
                        <div class="foot-call">
                            <h4>
                                <span>Call</span><br>
                                +91 8921893624
                            </h4>
                        </div>
                        <div class="foot-mail">
                            <span>Mail</span><br>
                            <a href="#">carbon30official@gmail.com</a>
                        </div>
                    </div>
                </div>
                

                <div class="col-12">
                    <div class="copyright">

                        Copyright &copy; 2022 Carbon Classes, All rights reserved. Designed by 
                        <a href="http://www.theviralmafia.com/?utm_source=Appolos" target="_blank"> <img src="assets/img/logo/viralmafia.svg" height="20px"></a> |
                        <a href="#" data-toggle="modal" data-target="#myModal3">Privacy Policy</a>

                    </div>
                </div>

            </div>
    </div>

    </section>

    <!-- ***** Popup Area Start ***** -->
    <div class="appoint-model">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog log-sign" role="document">
                            <div class="col-lg-6 p-0 text-center pp-left">
                                <div class="popupleft-content">
                                    <h4>Limited Sloats Only</h4>
                                    <h3>Get A <span>Free</span> <br>Seminar</h3>
                                    <h4>Our consultant will get in touch with you</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <a href="#" class="download-close" data-dismiss="modal"
                                            aria-label="Close"><span>X</span></a>
                                    </div>
                                    <div id="letter5">
                                        <div class="letter_inner">
                                            <div class="heading color-b">
                                                <h2>Enquire Now</h2>
                                            </div>
                                            <div class="model-project-details">
                                                <div class="heading color-b">
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active tab-log"
                                                            id="profile2">
                                                            <form name="form2" method="post" action="email.php">
                                                                <div class="row">
                                                                    <div class="col-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Name" name="name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <input class="form-control" name="phone" 
                                                                                placeholder="Phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="email" class="form-control"
                                                                                placeholder="E-mail" name="email" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                                                            <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                                                            <input type="submit" class="form-control"
                                                                                value="Submit" name="submit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <a href="#" class="vertical_btn" data-toggle="modal" data-target="#exampleModal0">Join Now</a>

    <div class="cont_link_box">
        <a id="" href="tel:+918921893624" class="callnow_inte" target="_blank">
        <i class="fa fa-phone-alt" aria-hidden="true"></i>
        </a>
        <a id="" href="https://wa.me/+918921893624" class="whatsapp_inte" target="_blank">
        <i class="fab fa-whatsapp"></i>
        </a>
        </div>


    <!-- about Form-->
    <div class="modal fade popsec onload_pop" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close pop_button" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="privacy_onload">

                            <div class="pop-privacy-box">

                                <h4>Privacy Policy</h4>

                                <p>This privacy policy applies to the website( name). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                                <h4>Cookies Policy</h4>

                                <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                            </div>

                        </div>    
                        
                    </div>

                </div>
            </div>
    </div>

    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; <a href="#" data-toggle="modal" data-target="#myModal3">Learn more</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>
    <!-- END Bootstrap-Cookie-Alert -->



    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>

    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#exampleModal0").modal('show');
            }, 7000);
        });
    </script>
</body>

</html>