<?php

session_start();
include 'configuration.php';



?>



<!doctype html>
<html lang="en">

<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>आम्हीमराठी</title>
    <!-- Stylesheets & Fonts -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href="assetss/css/loader/loaders.css">
    <link rel="stylesheet" href="assetss/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assetss/css/bootstrap.css">
    <link rel="stylesheet" href="assetss/css/aos/aos.css">
    <link rel="stylesheet" href="assetss/css/swiper/swiper.css">
    <link rel="stylesheet" href="assetss/css/lightgallery.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="assetss/css/style.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assetss/css/responsive.css">

    
</head>

<body>
    <!-- Loader Start -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader End -->
    <!-- Header Start -->

    <header class="position-absolute w-100">
        <div class="container">
            <div class="top-header d-none d-sm-flex justify-content-between align-items-center">
                <div class="contact">
                    <a href="tel:+91 76209 30942" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>+91 76209 30942</a>
                    <a href="mailto:amhimarathi@gmail.com"><i class="fa fa-envelope"
                            aria-hidden="true"></i>amhimarathi@gmail.com</a>
                </div>
                <nav class="d-flex aic">
                    <a href="login.php" class="login"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
                    <ul class="nav social d-none d-md-flex">
                        <li><a href="https://www.facebook.com/%E0%A4%86%E0%A4%AE%E0%A5%8D%E0%A4%B9%E0%A5%80%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%A0%E0%A5%80-102284958691298/about/?ref=page_internal" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://instagram.com/amhi.marathi.58?igshid=zwq2xy1u2mgf"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/589osX1AyY7bFYh"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </nav>
            </div>



            <nav class="navbar navbar-expand-md navbar-light">
               <a class="navbar-brand" href="index.php" STYLE="FONT-SIZE:30PX;">MATRIMONY</a>
                <div class="group d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <a class="login-icon d-sm-none" href="login.php"><i class="fa fa-user"></i></a>
                    
                </div>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#ser">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="terms_and_conditions.php">Terms & conditions</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->


    <!-- Hero Start -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-1 col-md-11">
                    <div class="swiper-container hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200">शोध जोडीदाराचा,<br>अगदी आपल्या मनातला
                                    </h1>
                                    
                                    <a data-aos="fade-right" data-aos-delay="900" href="about_us.php" class="btn btn-primary">See
                                        More</a>
                                    <a data-aos="fade-right" data-aos-delay="900" href="login.php" class="btn btn-primary">Get
                                        In Touch</a>
                                </div>
                            </div>
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200">शोध जोडीदाराचा,<br>अगदी आपल्या मनातला
                                    </h1>
                                    
                                    <a data-aos="fade-right" data-aos-delay="900" href="about_us.php" class="btn btn-primary">See
                                        More</a>
                                    <a data-aos="fade-right" data-aos-delay="900" href="login.php" class="btn btn-primary">Get
                                        In Touch</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Add Control -->
            <span class="arr-left"><i class="fa fa-angle-left"></i></span>
            <span class="arr-right"><i class="fa fa-angle-right"></i></span>
        </div>
        <div class="texture"></div>
        <div class="diag-bg"></div>
    </section>
    <!-- Hero End -->

   



    <!-- Call To Action Start -->
    <section class="cta" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>FOR ANY INFORMATION PLEASE SUBSCRIBE US,</h2>
                    <p>GET ALL INFORMATION FROM OUR EXPERTS.</p>
                </div>
                <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="#subs" class="btn btn-primary">Subscribe Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->



    <!-- Services Start -->
    <section class="services" id="ser">
        <div class="container">
            <div class="title text-center">
                <h6>Our Servises</h6>
                <h1 class="title-blue">Why Choose Us</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <img class="mr-4" src="assetss/images/performance.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Privacy</h5>
                                We respect your privacy.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <img class="mr-4" src="assetss/images/secure.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Testing for perfection</h5>
                                Our websites performance has nuch better than other websites.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <img class="mr-4" src="assetss/images/performance.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Discussion of the idea</h5>
                                We discuss with new ideas if any one have thay can talk with us freely.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <img class="mr-4" src="assetss/images/secure.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Free of cost</h5>
                                    our site is totally free of cost for all user.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <img class="mr-4" src="assetss/images/performance.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Secure</h5>
                                Our site is more secure than others.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <img class="mr-4" src="assetss/images/performance.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Modern style</h5>
                                    We fully designed for modern couples.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->




    <!-- Featured Start -->
    <section class="featured">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                    <div class="title">
                        <h6 class="title-primary">Our Features</h6>
                        <h1 class="title-blue">a rich featured, epic & premium work.</h1>
                    </div>
                   
                    
                    <div class="media">
                        <i class="fa fa-magic mr-4"></i>
                        <div class="media-body">
                            <h5>Increased choice of profiles</h5>
                            
                        </div>
                 </div>
                <div class="media">
                        <i class="fa fa-magic mr-4"></i>
                        <div class="media-body">
                            <h5>Easy Registration Process</h5>
                            
                        </div>
                 </div>
                <div class="media">
                        <i class="fa fa-magic mr-4"></i>
                        <div class="media-body">
                            <h5>Safe and secure site. 100% privacy guaranteed</h5>
                            
                        </div>
                 </div>
                <div class="media">
                        <i class="fa fa-magic mr-4"></i>
                        <div class="media-body">
                            <h5> Level of security</h5>
                            
                        </div>
                 </div>
                <div class="media">
                        <i class="fa fa-magic mr-4"></i>
                        <div class="media-body">
                            <h5>any offer</h5>
                            
                        </div>
                 </div>
                
                <div class="media">
                        <i class="fa fa-magic mr-4"></i>
                        <div class="media-body">
                            <h5>Success Stories</h5>
                           
                        </div>
                </div>
                  
                   
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
                    <div class="featured-img" style="margin-top:66px;">
                        <img class="featured-big" src="assetss/images/featured-img1.jpg" alt="Featured 1">
                        <img class="featured-small" src="assetss/images/featured-img2.jpg" alt="Featured 2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured End -->




    <!-- Recent Posts Start -->
   <section class="recent-posts" id="re">
        <div class="container">
        <div class="title text-center">
                <h6>Recent Posts</h6>
                
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">15 jan, 2021</time>
                            <h3><a href="#re"><strong>Shivam</strong> gifted a Avangers Infinity Wars Book</a></h3>
                            <p><a href="#re">Avangers Infinity War</a>, <a href="#re">Books</a>
                            <!-- <a class="post-btn" href="Avangers.php"><i class="fa fa-arrow-right"></i></a> -->
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="assetss/images/post1.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="assetss/images/post2.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">20 jan, 2021</time>
                            <h3><a href="#re"><strong>Vaibhav</strong> Shared his life success story</a></h3>
                            <p><a href="#re">Success</a>, <a href="#re">Life</a> <br>
                            <!-- <a class="post-btn" href="seccess.php"><i class="fa fa-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">31 jan, 2021</time>
                            <h3><a href="#re"><strong>Angel Priya</strong> Recentaly married</a></h3>
                            <p><a href="#re">Marrage</a>, <a href="#re">Venues</a> <br>
                            <!-- <a class="post-btn" href="recent.php"><i class="fa fa-arrow-right"></i></a> -->
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="assetss/images/post3.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="assetss/images/post4.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">12 feb, 2021</time>
                            <h3><a href="#re">A new venue is added</a></h3>
                            <p><a href="#re">Venue</a>, <a href="#re">Wedding</a> <br>
                            <!-- <a class="post-btn" href="venues.php"><i class="fa fa-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <!-- <a href="see-more.php" class="btn btn-primary">See More</a> -->
            </div>
        </div>
    </section>
    <!-- Recent Posts End -->



    <!-- About Us -->
    <section class="trust" id="about">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-6" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                    <div class="title">
                        <h6 class="title-primary">About Us</h6>
                        <h1>We are here only for you.....!</h1>
                    </div>
                    <p>There are many matrimonial sites are availabel in the internet but the majour difference between them and us is we,<br>
					1. We respect your privacy <br>
					2. Customer Statisfaction is more important for us.<br>
					3. We provide high securuty to all users.
                    </p>
                    <a data-aos="fade-right" data-aos-delay="900" href="about_us.php" class="btn btn-primary">See
                                        More</a>
                  
                </div>
                <div class="col-xl-5 gallery">
                    <div class="row no-gutters h-100" id="lightgallery">
                        <a href="https://lorempixel.com/600/400/" class="w-50 h-100 gal-img" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="400">
                            <img class="img-fluid" src="assetss/images/gallery1.jpg" alt="Gallery Image">
                            <i class="fa fa-caret-right"></i>
                        </a>
                        <a href="https://lorempixel.com/600/400/" class="w-50 h-50 gal-img" data-aos="fade-up"
                            data-aos-delay="400" data-aos-duration="600">
                            <img class="img-fluid" src="assetss/images/gallery2.jpg" alt="Gallery Image">
                            <i class="fa fa-caret-right"></i>
                        </a>
                        <a href="https://lorempixel.com/600/400/" class="w-50 h-50 gal-img gal-img3" data-aos="fade-up"
                            data-aos-delay="0" data-aos-duration="600">
                            <img class="img-fluid" src="assetss/images/gallery3.jpg" alt="Gallery Image">
                            <i class="fa fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us -->



    <!-- Pricing Start -->
    <section class="pricing-table">
        <div class="container">
            <div class="title text-center">
                <h6 class="title-primary">Our prices</h6>
                <h1 class="title-blue">Price Table List</h1>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="0"
                        data-aos-duration="600">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class="desc"></p>
                        <p class="price">$30.00</p>
                        <p>Suitable Monthly plan</p>
                        <br><br><br>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="600">
                        <span>Anual</span>
                        <h2>Premium</h2>
                        <p class="desc"></p>
                        <p class="price">$55.00</p>
                        <p>5GB Storage Space</p>
                        <p>Add your success story</p>
                        <br><br><br>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="600"
                        data-aos-duration="600">
                        <span>Life Time</span>
                        <h2>VIP</h2>
                        <p class="desc"></p>
                        <p class="price">$99.99</p>
                        <p>Life time Access</p>
                        <br><br><br>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->







    <!-- Testimonial and Clients Start -->
    <section class="testimonial-and-clients">
        <div class="container">
		   <div class="title text-center">
                 <h6 class="title-primary">.</h6>
                <h1 class="title-blue">My Team</h1>
            </div>
            <div class="testimonials">
                <div class="swiper-container test-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assetss/images/shivam.JPG" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">Shivam</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">
                                        Developer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">A developer <strong> Shivam </strong> architect and develop websitesusing web technologies (i.e., HTML, CSS, JavaScript, PHP and mysql), which run on the Open Web Platform or act as compilation input for non-web platform environments</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assetss/images/Shreyas.JPG" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">Shreyas</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">
                                        Developer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">A developer <strong> Shreyas </strong> architect and develop websitesusing web technologies (i.e., HTML, CSS, JavaScript, PHP and mysql), which run on the Open Web Platform or act as compilation input for non-web platform environments</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assetss/images/vaibhav.JPG" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">Vaibhav</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">
                                        Designer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">A front-end developer <strong> Vaibhav </strong> Designs a websites, that means he designs how our wesite will look in browser</p>
                                </div>
                            </div>
                        </div>
						<div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="images/shubham.JPG" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">Shubham</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">
                                        Designer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">A front-end developer <strong> Shubham </strong> Designs a websites, that means he designs how our wesite will look in browser</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="test-pagination"></div>
                </div>
            </div>
            <div class="clients" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                <div class="swiper-container clients-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assetss/images/client1.png" alt="Client 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="assetss/images/client2.png" alt="Client 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="assetss/images/client3.png" alt="Client 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="assetss/images/client4.png" alt="Client 4">
                        </div>
                        <div class="swiper-slide">
                            <img src="assetss/images/client5.png" alt="Client 5">
                        </div>
                    </div>
                    <div class="test-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial and Clients End -->





    <!-- Call To Action 2 Start -->
    <section class="cta cta2" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>FOR ANY INFORMATION PLEASE SUBSCRIBE US,</h2>
                    <p>GET ALL INFORMATION FROM OUR EXPERTS.</p>
                </div>
                <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="#subs" class="btn btn-primary">Subscribe Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action 2 End -->




    <!-- Footer Start -->
    <footer>
        <!-- Widgets Start -->
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="single-widget contact-widget" data-aos="fade-up" data-aos-delay="0">
                            <h6 class="widget-tiltle">&nbsp;</h6>
                            <p>By subscribing to our mailing list you will always be update with the latest news from
                                us.
                            </p>
                            <div class="media">
                                <i class="fa fa-map-marker"></i>
                                <div class="media-body ml-3">
                                    <h6>Address</h6>
                                   96/96,<br>
                                    Chhatrapati Shivaji Maharaj Chowk, Ichalkaranji 416-115, Kolhapur
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-envelope-o"></i>
                                <div class="media-body ml-3">
                                    <h6>Have any questions?</h6>
                                    <a href="mailto:support@steelthemes.com">amhimarathi@gmail.com</a>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-phone"></i>
                                <div class="media-body ml-3">
                                    <h6>Call us & Hire us</h6>
                                    <a href="tel:+91 76209 30942"> +91 76209 30942</a>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-fax"></i>
                                <div class="media-body ml-3">
                                    <h6>Fax</h6>
                                    <a href="fax:919325110437">(91) 9325110437</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="single-widget twitter-widget" data-aos="fade-up" data-aos-delay="200">
                            <h6 class="widget-tiltle">Fresh Tweets</h6>
                            <div class="media">
                                <i class="fa fa-twitter"></i>
                                <div class="media-body ml-3">
                                    <h6><a href="#">@Themes,</a> Html Version Out Now</h6>
                                    <span>10 Mins Ago</span>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-twitter"></i>
                                <div class="media-body ml-3">
                                    <h6><a href="#">@Envato,</a> the best selling item of the day!</h6>
                                    <span>20 Mins Ago</span>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-twitter"></i>
                                <div class="media-body ml-3">
                                    <h6><a href="#">@Collis,</a> We Planned to Update the Enavto Author Payment Method
                                        Soon!</h6>
                                    <span>10 Mins Ago</span>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-twitter"></i>
                                <div class="media-body ml-3">
                                    <h6><a href="#">@SteelThemes,</a> Html Version Out Now</h6>
                                    <span>15 Mins Ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="single-widget recent-post-widget" data-aos="fade-up" data-aos-delay="400">
                            <h6 class="widget-tiltle">Latest Updates</h6>
                            <div class="media">
                                <a class="rcnt-img" href="#"><img src="assetss/images/rcnt-post1.png"
                                        alt="Recent Post"></a>
                                <div class="media-body ml-3">
                                    <h6><a href="#">New Venues Added</a></h6>
                                    <p><i class="fa fa-user"></i>laws Angles <i class="fa fa-eye"></i> 202 Views</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="rcnt-img" href="#"><img src="assetss/images/rcnt-post2.png"
                                        alt="Recent Post"></a>
                                <div class="media-body ml-3">
                                    <h6><a href="#">she and he recentaly got married.</a></h6>
                                    <p><i class="fa fa-user"></i>she <i class="fa fa-eye"></i> 20 Views</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="rcnt-img" href="#"><img src="assetss/images/rcnt-post3.png"
                                        alt="Recent Post"></a>
                                <div class="media-body ml-3">
                                    <h6><a href="#">she and he recentaly got married.</a></h6>
                                    <p><i class="fa fa-user"></i>he <i class="fa fa-eye"></i> 74 Views</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="rcnt-img" href="#"><img src="assetss/images/rcnt-post4.png"
                                        alt="Recent Post"></a>
                                <div class="media-body ml-3">
                                    <h6><a href="#">New wedding video is out</a></h6>
                                    <p><i class="fa fa-user"></i>video <i class="fa fa-eye"></i> 48 Views</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="single-widget tags-widget" data-aos="fade-up" data-aos-delay="800">
                            <h6 class="widget-tiltle">Popular Tags</h6>
                            <a href="#">Wedding</a>
                            <a href="#">Dating</a>
                            <a href="#">Events</a>
                            <a href="#">Art</a>
                            <a href="#">Success</a>
                            <a href="#">Our Story</a>
                        </div>
                        <div class="single-widget subscribe-widget" data-aos="fade-up" data-aos-delay="800">
                            <h6 class="widget-tiltle">Subscribe us</h6>
                            <p>Sign up for our mailing list to get latest updates and offers</p>
                            <form class="" method="get" id="subs">
                                <div class="input-group">
                                    <input class="field form-control" name="subscribe" type="email"
                                        placeholder="Email Address">
                                    <span class="input-group-btn">
                                        <button type="submit" name="submit-mail"><i class="fa fa-check"></i></button>
                                    </span>
                                </div>
                            </form>
                            <p>We respect your privacy</p>
                            <ul class="nav social-nav">
                                <li><a href="https://www.facebook.com/%E0%A4%86%E0%A4%AE%E0%A5%8D%E0%A4%B9%E0%A5%80%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%A0%E0%A5%80-102284958691298/about/?ref=page_internal" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://instagram.com/amhi.marathi.58?igshid=zwq2xy1u2mgf"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/589osX1AyY7bFYh"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Widgets End -->




        <!-- Foot Note Start -->
        <div class="foot-note">
            <div class="container">
                <div
                    class="footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center">
                    <p class="mb-0" data-aos="fade-right" data-aos-offset="0">&copy; 2021 All Rights Reserved</p>
                    <p class="mb-0" data-aos="fade-left" data-aos-offset="0"><a href="#">Terms Of Use</a><a
                            href="#">Privacy & Security
                            Statement</a></p>
                </div>
            </div>
        </div>
        <!-- Foot Note End -->
    </footer>
    <!-- Footer Endt -->


    <!--jQuery-->
    <script src="assetss/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="assetss/js/bootstrap.bundle.js"></script>
    <script src="assetss/js/loaders.css.js"></script>
    <script src="assetss/js/aos.js"></script>
    <script src="assetss/js/swiper.min.js"></script>
    <script src="assetss/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="assetss/js/main.js"></script>
</body>

</html>