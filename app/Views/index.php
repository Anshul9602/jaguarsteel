<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Jaguar Steel</title>
   <meta name="robots" content="noindex, follow">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- CSS (Font, Plugins & Style CSS files) -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
   <!-- Vendor CSS (Bootstrap & Icon Font) -->
   <link rel="stylesheet" href="<?php echo base_url('css/vendor/bootstrap.min.css'); ?>">
   <!-- Plugins CSS (All Plugins Files) -->
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/font-awesome.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/swiper-bundle.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/animate.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/odometer-theme-default.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/fancybox.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/plugins/magnific-pupup.css'); ?>">
   <!-- Style CSS -->
   <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
   <!-- Bootstrap JS and dependencies -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style>
      .sticky-header {
         position: absolute;
         width: 100%;
         z-index: 99999;
      }

      .main-menu>ul>li>a {
         color: #fff;
      }

      .sticky .main-menu>ul>li>a {
         color: #343c55;
      }
   </style>
</head>

<body>
   <header style="border:none" class="header-wrapper-two header-two sticky-header">
      <div class="custom-container">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div class="flex-center justify-content-between">
                     <!-- Header Logo Start -->
                     <div class="logo">
                        <a href="<?php echo base_url(''); ?>">
                           <img class="logo-2" src="<?php echo base_url(''); ?>/images/logo-main.png" alt="logoImage" style="width:165px;"></a>
                        </a>
                     </div>
                     <!-- Header Logo End -->
                     <div class="flex-center header-right">
                        <!-- Header Menu Start -->
                        <div class="d-none d-lg-flex header-right_menu">
                           <nav class="main-menu">
                              <ul>
                                 <li>
                                    <a href="<?php echo base_url(''); ?>">Home</a>
                                 </li>
                                 <li class="has-children">
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                       <li class="has-submenu"><a href="ourstory">Company</a>
                                       </li>
                                       <li class="has-submenu"><a href="career">Career</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-children">
                                    <a href="services">What We Do</a>
                                 </li>
                                 <li>
                                    <a href="csr">Social Responsibility</a>
                                 </li>
                                 <li>
                                    <a href="contact">Contact</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <!-- Header Menu End -->
                        <!-- Header Actions Start -->
                        <div class="header-right_actions flex-center">
                           <div class="input-group rounded">
                              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                           </div>
                           <div class="hamburger d-block d-lg-none">
                              <!-- Mobile Menu Hambarger Action Button Start -->
                              <a class="header-action-btn header-action-btn-menu hamburger_button d-flex" href="#/" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-header">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </a>
                              <!-- Mobile Menu Hambarger Action Button End -->
                           </div>
                        </div>
                        <!-- Header Social Actions End -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <div class="offcanvas offcanvas-end" id="offcanvas-header">
      <div class="offcanvas-header">
         <!-- Header Logo Start -->
         <div class="logo">
            <a href="\">
               <img src="<?php echo base_url(''); ?>/images/Jaguarsteel.png" alt="">
            </a>
         </div>
         <!-- Header Logo End -->
         <button type="button" class="btn-close text-reset mobilemenu-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
      </div>
      <div class="offcanvas-body">
         <!-- mobile menu navigation start -->
         <ul class="mobile-menu">
            <li>
               <a href="<?php echo base_url(''); ?>">HOME</a>
            </li>
            <li class="menu-item-has-children">
               <a href="ourstory">ABOUT</a>
            </li>
            <li class="menu-item-has-children">
               <a href="product">WHAT WE DO</a>
            </li>
            <li>
               <a href="career menu-item-has-children">CARRER</a>
               <ul class="dropdown">
                  <li>
                     <a href="ferrous">About Company</a>
                  </li>
                  <li>
                     <a href="ferrous">Leadership</a>
                  </li>
                  <li>
                     <a href="ferrous">Career</a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="csr">SOCIAL RESPONSIBILITY</a>
            </li>
            <li>
               <a href="contact">CONTACT</a>
            </li>
         </ul>
         </nav>
         <!-- mobile menu navigation end -->
      </div>
   </div>
   <!------------------Header ends--------------------->
   <!-- Slider Section start -->
   <div class="slider-one">
      <div class="sliderbg-1" data-bg-color="#322fb3" data-bg-image="<?php echo base_url(''); ?>/images/banner-x.jpg">
      </div>
      <div class="custom-container">
         <div class="swiper sliderone animation-style-01">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <!-- Single Slider Start -->
                  <div class="sliderone-slingle">
                     <div class="slider-content-wrapper">
                        <div class="sliderone-content">
                           <!-- Slider Content Start -->
                           <div class="slider-content" style="width:fit-content;">
                              <!-- <span class="subtitle">We Are Avers</span>  -->
                              <h2 class="title">Pioneers of<br> Steel Trading.</h2>
                              <p class="slider-text" style="max-width:70%">Delivering unmatched quality and strength for over a decade. Your trusted partner in steel solutions.</p>
                              <br>
                              <a href="services" class="btn-style-four" style="padding: 10px 20px;">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Single Slider End -->
               </div>
               <div class="swiper-slide">
                  <!-- Single Slider Start -->
                  <div class="sliderone-slingle">
                     <div class="slider-content-wrapper">
                        <div class="sliderone-content">
                           <!-- Slider Content Start -->
                           <div class="slider-content" style="width:fit-content;">
                              <!-- <span class="subtitle">We Are Avers</span>  -->
                              <h2 class="title">Grow Together.</h2>
                              <p class="slider-text" style="max-width:70%">Building stronger communities through sustainable practices and shared growth.</p>
                              <br>
                              <a href="csr" class="btn-style-four" style="padding: 10px 20px;">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Single Slider End -->
               </div>
               <div class="swiper-slide">
                  <!-- Single Slider Start -->
                  <div class="sliderone-slingle">
                     <div class="slider-content-wrapper">
                        <div class="sliderone-content">
                           <!-- Slider Content Start -->
                           <div class="slider-content" style="width:fit-content;">
                              <!-- <span class="subtitle">We Are Avers</span>  -->
                              <h2 class="title">Strength & Honor.</h2>
                              <p class="slider-text" style="max-width:70%">Forging a legacy of excellence with resilient steel and unwavering integrity.</p>
                              <br>
                              <a href="ourstory" class="btn-style-four" style="padding: 10px 20px;">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Single Slider End -->
               </div>

            </div>
            <!-- Swiper Pagination -->
            <div class="swiper-pagination sliderone-pagination"></div>
            <!-- Swiper Navigation -->
         </div>
      </div>
   </div>
   <!-- Slider Section End -->
   <!-- About Section Start -->
   <div class="section-padding about-two">

      <div class="container">
         <div class="row ">
            <div class="col-lg-6">
               <!-- Heading Start -->
               <div class="heading-one">
                  <div class="wow fadeIn" data-wow-duration="0.1s">
                     <span class="heading-one-subtitle" style="    text-transform: uppercase;">3 Decades Of leadership</span>
                     <br><br>
                     <h3 class="heading-one-title" style="    text-transform: uppercase;">Excellence in Metals <br> and Steel Trading</h3>
                  </div>

               </div>
               <!-- Heading End -->
            </div>
            <div class="col-lg-6">
               <div class="about-two-text wow fadeIn" data-wow-duration="0.1s">
                  <div class="row">
                     <div class="col-md-6">
                        <p>
                           <b>We have presence in 50+ countries with a sum of 750,000 MTs of scrap traded annually.</b>
                           <br /><br />

                           “Jaguar Steel & Coal Pte” is a distinguished market maker of ferrous and non-ferrous scrap products in containerised (TEUs) shipments
                           <br /><br />
                        </p>
                     </div>
                     <div class="col-md-6">
                        <p>

                           Our product range extends across steel, aluminium, rubber & paper scrap
                           <br /><br />
                           We are a trusted partner for the largest mills & foundries in South Asia & Far-East “

                        </p>
                        <a href="ourstory" class="btn-style-one"><span>Learn More</span></a>
                     </div>
                  </div>


               </div>
               <br><br>
               <!-- About Images Start -->
               <div class="about-two-images me-0">
                  <div class="about-two-images-one wow fadeIn" data-wow-duration="0.1s">
                     <img class="js-tilt" src="<?php echo base_url(''); ?>/images/steel-2.jpg" alt="QualityImage">
                     <div class="about-two-images-thumb gradient-2 wow flip" data-wow-duration="0.1s">
                        <span class="text">Since</span>
                        <span class="date">2012</span>
                     </div>
                  </div>
                  <div class="about-two-images-two wow fadeIn" data-wow-duration="0.1s">
                     <img class="js-tilt" src="<?php echo base_url(''); ?>/images/steel.jpg" alt="QualityImage">
                  </div>
               </div>
            </div>
            <!-- About Images End -->
         </div>

      </div>
   </div>

   <!-- About Section Start -->
   <!-- Service Section Start -->
   <div class="service section-padding position-relative">
      <div class="container">
         <div class="row">
            <h4 class="heading-one-subtitle" style="    text-transform: uppercase;">Our Products</h4>
            <br><br>
            <div class="col-lg-12 row wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
               <!-- Heading Start -->
               <div class="col-md-6 text-start">

                  <h1 class="heading-one-title" style="    text-transform: uppercase;">What we offer</h1>
                  <br><br><br>
                  <!-- <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, consectetur adipisicing</p> -->
               </div>
               <div class="col-md-6 text-end">


                  <a href="services" class="btn-style-one"><span>Learn More</span></a>

               </div>
               <!-- Heading End -->
            </div>
         </div>
         <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n30">
            <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
               <!-- Single Service Start -->
               <div class="service-single">
                  <div class="service-single-image">
                     <div class="">
                        <img src="<?php echo base_url(); ?>/images/ss1.png" alt="ServiceImage" width="100%">
                     </div>

                  </div>
                  <div class="content">

                     <h4 class="title">Ferrous Scrap </h4>
                     <a href="services" class="service-single-white-content">
                        <p> From the smallest foundries to the largest steelmakers, the world's most successful scrap consumers trust us to provide the raw material for their operations.</p>
                     </a>
                  </div>

               </div>
               <!-- Single Service End -->
            </div>
            <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
               <!-- Single Service Start -->

               <div class="service-single">
                  <div class="service-single-image">
                     <div class="">
                        <img src="<?php echo base_url(); ?>/images/ss2.png" alt="ServiceImage" width="100%">
                     </div>

                  </div>
                  <div class="content">

                     <h4 class="title">Non Ferrous Scrap</h4>
                     <a href="services" class="service-single-white-content">
                        <p>We also trade in non-ferrous scrap mainly Stainless Steel Scrap, Aluminium, Copper, Brass, Lead and Zinc.</p>
                     </a>
                  </div>

               </div>
               
               <!-- Single Service End -->
            </div>
            <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
               <!-- Single Service Start -->
               <div class="service-single">
                  <div class="service-single-image">
                     <div class="">
                        <img src="<?php echo base_url(); ?>/images/ss3.png" alt="ServiceImage" width="100%">
                     </div>

                  </div>
                  <div class="content">

                     <h4 class="title">Paper Scrap </h4>
                     <a href="services" class="service-single-white-content">
                        <p>Old corrugated containers are one of the core business areas.
                        The company is actively engaged in world-wide Trading of paper scrap.</p>
                     </a>
                  </div>

               </div>
              
               <!-- Single Service End -->
            </div>
         </div>
      </div>
    


   </div>
   
   <!-- Service Section End -->
   <br /><br /><br />
   <br /><br /><br />
   <!-- Support Section Start -->
   <div class="support mousemove">
      <div class="container">
         <div class="support-bg">
            <div class="support-bg-img">
               <img src="<?php echo base_url(''); ?>/images/support/support-bg.png" alt="Support">
            </div>
            <div class="row">
               <div class="col-md-6">
                  <!-- Heading Start -->
                  <div class="heading-one wow fadeIn" data-wow-duration="0.1s">
                     <span class="heading-one-subtitle" style="color:#fff;    text-transform: uppercase;">Corporate Social Responsibility</span><br><br>
                     <h3 class="heading-one-title"style="color:#fff;    text-transform: uppercase;">Going beyond environmental sustainability</h3>
                     <p class="heading-one-text">Our CSR efforts extend beyond environmental sustainability. We are dedicated to making a positive impact on the communities where we operate through.
                     </p>
                     <br />
                     <a href="csr" class="btn-style-one">
                        <span>Learn More</span>

                     </a>
                  </div>
                  <!-- Heading End -->
               </div>
               <div class="col-md-6">
                  <div class="support-man wow fadeIn" data-wow-duration="0.7s">
                     <img src="<?php echo base_url(''); ?>/images/support/support.jpg" alt="SupportMan">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Support Section End -->
   <div class="section-padding testimonial-two scene">
      <div class="container">
         <div class="row">
            <div class="col-12 wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s">
               <!-- Heading Start -->
               <div class="row">
                  <div class="row">
                     <div class="col-md-6">
                     <span class="heading-one-subtitle" style="    text-transform: uppercase;">Testimonials</span><br><br>
                     <h2 class="heading-one-title"style="    text-transform: uppercase;">What People Say</h2>
                     </div>
                     <div class="col-md-6"></div>
                  </div>
                 
               </div><br><br>
               <!-- Heading End -->
            </div>
         </div>
         <div class="row">
            <div class="col-12 position-relative wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s">
               <div class="testimonialtwo">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <!-- Testimonial Two Inner Start -->
                        <div class="testimonial-two-single">
                           <br />
                           <p class="text">Jaguar Steel & Coal has been one of our largest and longest standing partners for our steel sourcing needs.</p>
                           <div class="user">
                              <div class="user-meta">
                                 <span class="name">JSW</span>

                              </div>
                           </div>
                        </div>
                        <!-- Testimonial Two Inner End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Testimonial Two Inner Start -->
                        <div class="testimonial-two-single">
                           <br>
                           <p class="text">We trust jaguar to handle our scrap sourcing needs in the most professional & timely manner.</p>
                           <div class="user">
                              <div class="user-meta">
                                 <span class="name">Kirloskar</span>

                              </div>
                           </div>
                        </div>
                        <!-- Testimonial Two Inner End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Testimonial Two Inner Start -->
                        <div class="testimonial-two-single">
                           <br>
                           <p class="text">Our partnership with jaguar has been consistently reinforced with transparent, timely & professional handling of their committements.</p>
                           <div class="user">
                              <div class="user-meta">
                                 <span class="name">ISMT</span>

                              </div>
                           </div>
                        </div>
                        <!-- Testimonial Two Inner End -->
                     </div>
                  </div>
               </div>
               <!-- Testimonial arrow start -->
               <div class="testimonial-two-arrow">
                  <div class="swiper-arrow-long">
                     <div class="testimonial-slider-button-prev prev-button">
                        <img class="arrow-1" src="<?php echo base_url(''); ?>/images/slider/arrow-1.png" alt="ArrowImage">
                        <img class="arrow-2" src="<?php echo base_url(''); ?>/images/slider/arrow-2.png" alt="ArrowImage">
                     </div>
                     <div class="testimonial-slider-button-next next-button">
                        <img class="arrow-1" src="<?php echo base_url(''); ?>/images/slider/arrow-1.png" alt="ArrowImage">
                        <img class="arrow-2" src="<?php echo base_url(''); ?>/images/slider/arrow-2.png" alt="ArrowImage">
                     </div>
                  </div>
               </div>
               <!-- Testimonial arrow end -->
            </div>
         </div>
      </div>
   </div>
   <!-- Testimonial Section End -->
   <!-- Brand Section Start -->
   <div class="brand-four">
      <div class="container">
         <div class="row">
            <div class="col-12 wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s">
               <div class="brand-slider brand-style swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand//1.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand/2.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand/3.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand/4.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                     <div class="swiper-slide">
                        <!-- Single Brand Start -->
                        <a class="brand-before" href="#"><img src="<?php echo base_url(''); ?>/images/brand/5.png" alt="Brand-Image"></a>
                        <!-- Single Brand End -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Brand Section End -->
   <!-- Home Contact Form Start -->
   <div class="home-contact">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="home-contact_wrapper">
                  <!-- Home Contact Content Start -->
                  <div class="home-contact_content wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s">
                     <h4 class="subtitle">Contact Us</h4>
                     <h2 class="title">Stay Connected with Us</h2>
                     <p>Have questions or need assistance? We're here to help! Reach out to us, and we'll get back to you as soon as possible.</p>
                     <ul class="home-contact_info">
                        <li>
                           <div class="icon">
                              <i class="fas fa-phone-alt"></i>
                           </div>
                           <div class="details">
                              <h5 class="details-title">Call Us</h5>
                              <a href="tel:123-456-789" class="details-text">+65-66534102 / +65-66534103</a>
                           </div>
                        </li>
                        <li>
                           <div class="icon">
                              <i class="fas fa-envelope"></i>
                           </div>
                           <div class="details">
                              <h5 class="details-title">Email Us</h5>
                              <a href="mailto:sales@jaguarsteelandcoal.com" class="details-text">sales@jaguarsteelandcoal.com</a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <!-- Home Contact Content End -->
                  <!-- Home Content Form Start -->
                  <form class="home-contact_form wow fadeIn" fadeIndata-wow-duration=".01s" data-wow-delay=".1s">
                     <div class="form-single">
                        <input type="text" placeholder="Your name">
                     </div>
                     <div class="form-single">
                        <input type="email" placeholder="Your email" name="email">
                     </div>
                     <div class="form-single">
                        <input placeholder="Your phone" name="phone">
                     </div>
                     <div class="form-single">
                        <textarea name="message" placeholder="Write message here"></textarea>
                     </div>
                     <button type="submit" class="btn-style-four">Submit now</button>
                  </form>
                  <!-- Home Content Form End -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Home Contact Form End -->
   <br /><br />
</body>

</html>