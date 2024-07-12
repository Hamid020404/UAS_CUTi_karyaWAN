<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">

  <title>Apk Cuti - App Landing Page HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('landing/assets/css/templatemo-chain-app-dev.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/css/animated.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.css') }}">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="{{ asset('landing/assets/images/logo.png') }}" alt="Chain App Dev">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
              <li class="scroll-to-section"><a href="#newsletter">Newsletter</a></li>
              <li>
                <div class="gradient-button"><a id="modal_trigger" href="{{ url('/login') }}"><i class="fa fa-sign-in-alt"></i> Sign
                    In Now</a></div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Chainternaily Apps Chain Company</h2>
                    <p>Aplikasi yang didesain khusus untuk karyawan dari perusahaan Chain
                      sebagai mobilisasi cuti yang teratur.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#">Login <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#">Register <i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Amazing <em>Services &amp; Features</em> for you</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>If you need the greatest collection of HTML templates for your business, please visit <a rel="nofollow"
                href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need to have a contact form PHP
              script, go to <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more
              information.</p>
          </div>
        </div>
      </div>
    </div>

    <footer id="newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="section-heading">
              <h4>Join our mailing list to receive the news &amp; latest trends</h4>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-3">
            <form id="search" action="#" method="GET">
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on"
                      required>
                  </fieldset>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <fieldset>
                    <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="footer-widget">
              <h4>Contact Us</h4>
              <p>Rio de Janeiro - RJ, 22795-008, Brazil</p>
              <p><a href="#">010-020-0340</a></p>
              <p><a href="#">info@company.co</a></p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="footer-widget">
              <h4>About Us</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="footer-widget">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="#">Free Apps</a></li>
                <li><a href="#">App Engine</a></li>
                <li><a href="#">Programming</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">App News</a></li>
              </ul>
              <ul>
                <li><a href="#">App Dev Team</a></li>
                <li><a href="#">Digital Web</a></li>
                <li><a href="#">Normal Apps</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="footer-widget">
              <h4>About Our Company</h4>
              <div class="logo">
                <img src="assets/images/white-logo.png" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright © 2022 Chain App Dev Company. All Rights Reserved.
                <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>