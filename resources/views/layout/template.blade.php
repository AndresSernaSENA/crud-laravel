<!DOCTYPE html>
<!--Tomado de: https://www.youtube.com/watch?v=DtN98YOdnzQ minuto 29:01 06/07/2023-->
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('title')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    @yield('content')
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">
      <div id="home">
        <!-- Top Banner--><a class="section section-banner text-center d-none d-xl-block" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/banner-bg-02-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/banner-bg-02-1920x60.jpg) 1x, url(images/banner/banner-bg-02-3840x120.jpg) 2x )" target="_blank"><img src="images/banner/banner-fg-02-1600x60.png" srcset="images/banner/banner-fg-02-1600x60.png 1x, images/banner/banner-fg-02-3200x120.png 2x" alt="" width="1600" height="310"></a>
        <!-- Page Header-->
        <header class="section page-header">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="images/logo-default-223x50.png" alt="" width="223" height="50"/></a></div>
                  </div>
                  <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                      <!-- RD Navbar Share-->
                      <div class="rd-navbar-share fl-bigmug-line-share27" data-rd-navbar-toggle=".rd-navbar-share-list">
                        <ul class="list-inline rd-navbar-share-list">
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-facebook" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-twitter" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                      </div>
                      <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#services">Services</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#projects">Projects</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#team">Team</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#news">News</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contacts</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="4859" data-simulate-touch="true" data-direction="vertical" data-nav="false">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-2-1770x742.jpg">
              <div class="swiper-slide-caption section-md">
                <div class="container">
                  <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Mobile App Development</h1>
                  <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Since our establishment, we have been delivering high-quality and sustainable software solutions for corporate purposes of worldwide businesses.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-4-1770x742.jpg">
              <div class="swiper-slide-caption section-md">
                <div class="container">
                  <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Experienced Team</h1>
                  <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">We are a team of qualified software developers, aimed at creating unique and powerful tools for your business & everyday life.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/slider-1-slide-6-1770x742.jpg">
              <div class="swiper-slide-caption section-md">
                <div class="container">
                  <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">Award-Winning Software</h1>
                  <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">The software solutions developed by our company have been numerously awarded for usability and innovative features.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination__module">
            <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
            <div class="swiper-pagination__divider"></div>
            <div class="swiper-pagination"></div>
          </div>
        </section>

      </div>
      <!-- See all services-->
      <section class="section section-sm section-first bg-default text-center" id="services">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-7 col-lg-5 col-xl-6 text-lg-left wow fadeInUp"><img src="images/index-1-415x592.png" alt="" width="415" height="592"/>
            </div>
            <div class="col-lg-7 col-xl-6">
              <div class="row row-30">
                <div class="col-sm-6 wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div>
                      <h3 class="box-icon-modern-big-title">What We Offer</h3>
                      <div class="box-icon-modern-decor"></div><a class="button button-primary button-ujarak" href="#">View All Services</a>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".1s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-phone-in-out"></div>
                    <h5 class="box-icon-modern-title"><a href="#">CORPORATE<br>SOLUTIONS</a></h5>
                    <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Need specific software for your company? We are ready to develop it!</p>
                  </article>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".2s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-headset"></div>
                    <h5 class="box-icon-modern-title"><a href="#">CALL CENTER<br>SOLUTIONS</a></h5>
                    <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">Our experts provide custom products of any complexity for call centers.</p>
                  </article>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".3s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon linearicons-outbox"></div>
                    <h5 class="box-icon-modern-title"><a href="#">CLOUD<br>DEVELOPMENT</a></h5>
                    <div class="box-icon-modern-decor"></div>
                    <p class="box-icon-modern-text">We can also offer you reliable cloud development solutions.</p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Cta-->
      <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="images/parallax-1.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay">
            <div class="container">
              <div class="row row-30 justify-content-end text-right">
                <div class="col-sm-7">
                  <h3 class="wow fadeInLeft">Let's Develop Your Next Great App!</h3>
                  <p>Do you need a unique software solution for your company? We know how to help you!</p>
                  <div class="group-sm group-middle group justify-content-end"><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal">Get in Touch</a><a class="button button-white-outline button-ujarak" href="#">Learn More</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Latest Projects-->
      <section class="section section-sm section-fluid bg-default text-center" id="projects">
        <div class="container-fluid">
          <h2 class="wow fadeInLeft">Latest Projects</h2>
          <p class="quote-jean wow fadeInRight" data-wow-delay=".1s">In our portfolio, you can browse the latest products developed for our clients for different corporate purposes. Our qualified team of interface designers and software developers is always ready to create something unique for you.</p>
          <div class="isotope-filters isotope-filters-horizontal">
            <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
            <ul class="isotope-filters-list" id="isotope-3">
              <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
              <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">mobile Apps</a></li>
              <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Custom Software</a></li>
              <li><a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">QA & Testing</a></li>
              <li><a href="#" data-isotope-filter="Type 4" data-isotope-group="gallery">UX and Design</a></li>
            </ul>
          </div>
          <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 4">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-1-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-1-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">FinStep</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 1" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-2-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-2-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Mobile Finance</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-3-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Q-Manage</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 3" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-4-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">WeatherCast</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-5-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Home Calendar</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 1" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-6-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">MPlanner</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 2" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-7-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">Alice Messenger</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 3" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure"><img src="images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350"/>
                </div>
                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-gallery-8-420x350.jpg" alt="" width="420" height="350"/></a>
                    <h5 class="thumbnail-classic-title"><a href="#">WiseMoney</a></h5>
                  </div>
                  <p class="thumbnail-classic-text">We work hard on every app to deliver top-notch features with great UI that you won’t find anywhere else.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Years of experience-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="row row-30 row-xl-24 justify-content-center align-items-center align-items-lg-start text-left">
            <div class="col-md-6 col-lg-5 col-xl-4 text-center"><a class="text-img" href="#">
                <div id="particles-js"></div><span class="counter">10</span></a></div>
            <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
              <div class="text-width-extra-small offset-top-lg-24 wow fadeInUp">
                <h3 class="title-decoration-lines-left">Years of Experience</h3>
                <p class="text-gray-500">RatherApp is a team of highly experienced app designers and developers creating unique software for you.</p><a class="button button-secondary button-pipaluk" href="#">Get in touch</a>
              </div>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="row justify-content-center border-2-column offset-top-xl-26">
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">2</span><span class="symbol">k</span>
                    </div>
                    <h6 class="counter-amy-title">apps developed</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">40</span>
                    </div>
                    <h6 class="counter-amy-title">Consultants</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">12</span>
                    </div>
                    <h6 class="counter-amy-title">Awards won</h6>
                  </div>
                </div>
                <div class="col-9 col-sm-6">
                  <div class="counter-amy">
                    <div class="counter-amy-number"><span class="counter">160</span>
                    </div>
                    <h6 class="counter-amy-title">Employees</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-12 align-self-center">
              <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft"><a class="clients-classic" href="#"><img src="images/clients-9-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".1s"><a class="clients-classic" href="#"><img src="images/clients-10-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".2s"><a class="clients-classic" href="#"><img src="images/clients-3-270x117.png" alt="" width="270" height="117"/></a></div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay=".3s"><a class="clients-classic" href="#"><img src="images/clients-11-270x117.png" alt="" width="270" height="117"/></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Meet The Team-->
      <section class="section section-sm section-fluid bg-default" id="team">
        <div class="container-fluid">
          <h2>Meet The Team</h2>
          <div class="row row-sm row-30 justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-11-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Ryan Wilson</a></h4>
                  <p class="team-classic-status">Director of Production</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-12-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Jill Peterson</a></h4>
                  <p class="team-classic-status">UI Designer</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-13-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Sam Robinson</a></h4>
                  <p class="team-classic-status">Senior Developer</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".3s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-14-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Mary Lee</a></h4>
                  <p class="team-classic-status">Software Developer</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- You dream — we embody-->
      <section class="section section-sm bg-default text-md-left">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft">
              <h2>Get More With Us</h2>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big text-center text-md-left" id="tabs-6">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link nav-link-big active" href="#tabs-6-1" data-toggle="tab">01</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link nav-link-big" href="#tabs-6-2" data-toggle="tab">02</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link nav-link-big" href="#tabs-6-3" data-toggle="tab">03</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link nav-link-big" href="#tabs-6-4" data-toggle="tab">04</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-6-1">
                    <h5 class="font-weight-normal">FREE APPS</h5>
                    <p>We regularly upload new free apps to our website, which is fully accessible to our clients and subscribers. You can also find out about free apps in our blog.</p>
                    <div class="group-sm group-middle"><a class="button button-secondary button-pipaluk" href="#modalCta" data-toggle="modal">Get in touch</a><a class="button button-default-outline button-wapasha" href="#">Learn More</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-6-2">
                    <h5 class="font-weight-normal">GET SOCIAL</h5>
                    <p>Every app we develop has built-in social support that allows you to stay connected to your accounts on Facebook, Instagram, Twitter and other networks.</p>
                    <div class="group-sm group-middle"><a class="button button-secondary button-pipaluk" href="#modalCta" data-toggle="modal">Get in touch</a><a class="button button-default-outline button-wapasha" href="#">Learn More</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-6-3">
                    <h5 class="font-weight-normal">CUSTOMER SERVICE</h5>
                    <p>Every customer of RatherApp can get access to our friendly and qualified 24/7 support via chat or phone. Fell free to ask us any question!</p>
                    <div class="group-sm group-middle"><a class="button button-secondary button-pipaluk" href="#modalCta" data-toggle="modal">Get in touch</a><a class="button button-default-outline button-wapasha" href="#">Learn More</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-6-4">
                    <h5 class="font-weight-normal">GREAT USABILITY</h5>
                    <p>All our apps are designed to have great usability in order to easily operate our applications. That is why our software has high ratings and lots of awards.</p>
                    <div class="group-sm group-middle"><a class="button button-secondary button-pipaluk" href="#modalCta" data-toggle="modal">Get in touch</a><a class="button button-default-outline button-wapasha" href="#">Learn More</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay=".1s">
              <div class="owl-carousel owl-style-1" data-items="2" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true" data-autoplay="true"><a class="box-device" href="#"><img src="images/index-4-313x580.png" alt="" width="313" height="580"/></a><a class="box-device" href="#"><img src="images/index-5-313x580.png" alt="" width="313" height="580"/></a><a class="box-device" href="#"><img src="images/index-4-313x580.png" alt="" width="313" height="580"/></a><a class="box-device" href="#"><img src="images/index-5-313x580.png" alt="" width="313" height="580"/></a></div>
            </div>
          </div>
        </div>
      </section>

      <!-- What people Say-->
      <section class="section section-sm section-bottom-70 section-fluid bg-default">
        <div class="container-fluid">
          <h2>What people Say</h2>
          <div class="row row-50 row-sm">
            <div class="col-md-6 col-xl-4 wow fadeInRight">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                  <div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-11-75x75.jpg" alt="" width="75" height="75"/></a></div>
                  <div class="unit-body">
                    <h4 class="quote-modern-cite"><a href="#">Catherine Williams</a></h4>
                    <p class="quote-modern-status">Regular client</p>
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">RatherApp offers a high caliber of resources skilled in Microsoft Azure .NET, mobile and Quality Assurance. They became our true business partners over the past three years.</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                  <div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-12-75x75.jpg" alt="" width="75" height="75"/></a></div>
                  <div class="unit-body">
                    <h4 class="quote-modern-cite"><a href="#">Rupert Wood</a></h4>
                    <p class="quote-modern-status">Regular client</p>
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">RatherApp powered us with a competent team to develop products for banking services. The team has been delivering results within budget and time, which is amazing.</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <!-- Quote Modern-->
              <article class="quote-modern quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                  <div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" src="images/user-20-75x75.jpg" alt="" width="75" height="75"/></a></div>
                  <div class="unit-body">
                    <h4 class="quote-modern-cite"><a href="#">Samantha Brown</a></h4>
                    <p class="quote-modern-status">Regular client</p>
                  </div>
                </div>
                <div class="quote-modern-text">
                  <p class="q">RatherApp is a highly skilled and uniquely capable firm with multitudes of talent on-board. We have collaborated on a number of diverse projects that have been a great success.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Pricing-->
      <section class="section section-sm section-bottom-70 section-fluid bg-default">
        <div class="container">
          <h2>Pricing</h2>
          <div class="row row-30 justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4">
              <div class="box-pricing box-pricing-black">
                <div class="box-pricing-body">
                  <h5 class="box-pricing-title">basic</h5>
                  <h3 class="box-pricing-price">$500.00</h3>
                  <div class="box-pricing-time">starting at</div>
                  <div class="box-pricing-divider">
                    <div class="divider"></div><span>Basic</span>
                  </div>
                  <ul class="box-pricing-list">
                    <li class="active">Concept development</li>
                    <li class="active">UI design</li>
                    <li>Configuration management</li>
                    <li>Software quality assurance</li>
                    <li>App integration</li>
                  </ul>
                </div>
                <div class="box-pricing-button"><a class="button button-lg button-block button-gray-4" href="#">Get started</a></div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">
              <div class="box-pricing box-pricing-black box-pricing-popular">
                <div class="box-pricing-body">
                  <h5 class="box-pricing-title">Optimal</h5>
                  <h3 class="box-pricing-price">$800.00</h3>
                  <div class="box-pricing-time">starting at</div>
                  <div class="box-pricing-divider">
                    <div class="divider"></div><span>Optimal</span>
                  </div>
                  <ul class="box-pricing-list">
                    <li class="active">Concept development</li>
                    <li class="active">UI design</li>
                    <li class="active">Configuration management</li>
                    <li class="active">Software quality assurance</li>
                    <li>App integration</li>
                  </ul>
                </div>
                <div class="box-pricing-button"><a class="button button-lg button-block button-primary" href="#">Get started</a></div>
                <div class="box-pricing-badge">popular</div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">
              <div class="box-pricing box-pricing-black">
                <div class="box-pricing-body">
                  <h5 class="box-pricing-title">Ultimate</h5>
                  <h3 class="box-pricing-price">$1200.00</h3>
                  <div class="box-pricing-time">starting at</div>
                  <div class="box-pricing-divider">
                    <div class="divider"></div><span>Ultimate</span>
                  </div>
                  <ul class="box-pricing-list">
                    <li class="active">Concept development</li>
                    <li class="active">UI design</li>
                    <li class="active">Configuration management</li>
                    <li class="active">Software quality assurance</li>
                    <li class="active">App integration</li>
                  </ul>
                </div>
                <div class="box-pricing-button"><a class="button button-lg button-block button-gray-4" href="#">Get started</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Latest blog posts-->
      <section class="section section-sm bg-default" id="news">
        <div class="container">
          <h2>Latest blog posts</h2>
          <div class="row row-45">
            <div class="col-sm-6 col-lg-4 wow fadeInLeft">
              <!-- Post Modern-->
              <article class="post post-modern"><a class="post-modern-figure" href="#"><img src="images/post-10-370x307.jpg" alt="" width="370" height="307"/>
                  <div class="post-modern-time">
                    <time datetime="2019-07-04"><span class="post-modern-time-month">07</span><span class="post-modern-time-number">04</span></time>
                  </div></a>
                <h4 class="post-modern-title"><a href="#">Benefits of Async/Await</a></h4>
                <p class="post-modern-text">Asynchronous functions are a good and bad thing in JavaScript. The good side is that asynchronous functions are non-blocking and...</p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".1s">
              <!-- Post Modern-->
              <article class="post post-modern"><a class="post-modern-figure" href="#"><img src="images/post-11-370x307.jpg" alt="" width="370" height="307"/>
                  <div class="post-modern-time">
                    <time datetime="2019-07-17"><span class="post-modern-time-month">07</span><span class="post-modern-time-number">17</span></time>
                  </div></a>
                <h4 class="post-modern-title"><a href="#">Key Considerations of iPaaS</a></h4>
                <p class="post-modern-text">Digital transformation requires cloud appropriate adoption, legacy IT systems modernization, and Agile-based methodologies for faster...</p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
              <!-- Post Modern-->
              <article class="post post-modern"><a class="post-modern-figure" href="#"><img src="images/post-12-370x307.jpg" alt="" width="370" height="307"/>
                  <div class="post-modern-time">
                    <time datetime="2019-07-22"><span class="post-modern-time-month">07</span><span class="post-modern-time-number">22</span></time>
                  </div></a>
                <h4 class="post-modern-title"><a href="#">Never Stop Optimizing Your Code</a></h4>
                <p class="post-modern-text">In this tutorial, we will discuss the Hibernate Query Language. HQL is an object-oriented query language. Hibernate Query...</p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact information-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:#">+1 323-913-4688</a></p>
                  <p class="box-contacts-link"><a href="tel:#">+1 323-888-4554</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#">mail@demolink.org</a></p>
                  <p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left" id="contacts">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Get in touch</h3>
            </div>
            <div class="title-classic-text">
              <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
            </div>
          </article>
          <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" >
                  <label class="form-label" for="contact-your-name-2">Your Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" >
                  <label class="form-label" for="contact-email-2">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" >
                  <label class="form-label" for="contact-phone-2">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" ></textarea>
                </div>
              </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
          </form>
        </div>
      </section>

      <!-- Bottom Banner-->
      <section class="section section-fluid"><a class="section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/banner-bg-01-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/banner-bg-01-1920x310.jpg) 1x, url(images/banner/banner-bg-01-3840x620.jpg) 2x )" target="_blank"><img src="images/banner/banner-fg-01-1600x310.png" srcset="images/banner/banner-fg-01-1600x310.png 1x, images/banner/banner-fg-01-3200x620.png 2x" alt="" width="1600" height="310"></a></section>

      <!-- RD Google Map-->
      <section class="section section-fluid">
        <!-- Google Map-->
        <section class="section">
          <div class="google-map-container" data-center="6036 Richmond hwy., Alexandria, VA, 2230" data-zoom="5" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
              <li data-location="6036 Richmond hwy., Alexandria, VA, 2230" data-description="6036 Richmond hwy., Alexandria, VA, 2230" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
            </ul>
          </div>
        </section>
      </section>

      <!-- Page Footer-->
      <footer class="section section-fluid footer-minimal context-dark">
        <div class="bg-gray-15">
          <div class="container-fluid">
            <div class="footer-minimal-inset oh">
              <ul class="footer-list-category-2">
                <li><a href="#">UI Design</a></li>
                <li><a href="#">Windows/Mac OS Apps</a></li>
                <li><a href="#">Android/iOS Apps</a></li>
                <li><a href="#">Cloud Solutions</a></li>
                <li><a href="#">Customer Support</a></li>
              </ul>
            </div>
            <div class="footer-minimal-bottom-panel text-sm-left">
              <div class="row row-10 align-items-md-center">
                <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                  <div>
                    <ul class="list-inline list-inline-sm footer-social-list-2">
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 order-sm-first">
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>RatherApp</span>
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-md-right"><span>All rights reserved.</span> <span>Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <div class="modal fade" id="modalCta" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Contact Us</h4>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact-modal" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-name" type="text" name="name" >
                      <label class="form-label" for="contact-modal-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-email" type="email" name="email" >
                      <label class="form-label" for="contact-modal-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-phone" type="text" name="phone" >
                      <label class="form-label" for="contact-modal-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-modal-message">Message</label>
                      <textarea class="form-input textarea-lg" id="contact-modal-message" name="message" ></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>