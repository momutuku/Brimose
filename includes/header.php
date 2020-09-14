<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">

    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="portfolio/assets/vendor/typed.js/typed.min.js"></script>
  </head>
  <body>
    <header class="header header--bg">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.JPG" alt=""><span class="typed" data-typed-items="BRIMOSE"></span></a>

          </div>
          <div class="menu_bar collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="index.php">HOME</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="products.php">PRODUCTS</a>
                <div class="sub-menu-1">
                  <ul>
                    <li><a href="../product.php?prod=MOBILE" data-filter=".category-a">Desktops</a></li>
                    <li><a href="../product.php?prod=MOBILE" data-filter=".category-b">Laptop</a></li>
                    <li><a href="../product.php?prod=MOBILE"  data-filter=".category-b"  >Mobile</a></li>
                    <li><a href="../product.php?prod=MOBILE" data-filter=".category-c">Printer</a></li>
                    <li><a href="../product.php?prod=MOBILE" data-filter=".category-d">CCTV</a></li>
                    <li><a href="../product.php?prod=MOBILE" data-filter=".category-e">Accessories</a></li>
                    <li><a href="../product.php?prod=MOBILE" data-filter=".category-f">Development</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="#">SERVICES</a></li>
              <li><a href="#">PROJECTS</a></li>
              <li><a href="#">BLOG</a></li>
              <li><a href="contact.php">CONTACT</a></li>
              <!-- Start Search -->
                  <form action="product.php" method="post" class="search_box" id="form">
                      <input type="text" class="searchtxt" name="item" placeholder="Product">
                      <input type="submit" class="search" value="" id="btn"/>
                      <!-- <img src="assets/images/search-icon.png" class="search" alt=""> -->
                  </form>
              <!-- End Search -->
            </ul>
          </div>
        </nav>

        <div class="header__content text-center">
            <!-- <span class="header__content__block">HELLO</span> -->
            <!-- <h1 class="header__content__title">BRIMOSE</h1> -->
            <h1 class="header__content__title">We Are BRIMOSE</h1>
            <ul class="header__content__sub-title">
              <a href="#"><li>UI&#47;UX DESIGNER <span class="padding">&#45;</span></li></a>
              <a href="#"><li>ONLINE STORE<span class="padding">&#45;</span></li></a>
              <a href="#"> <li>WEB DEVELOPER</li></a>
            </ul>
            <a class="header__button" id="gst" href="#">GET STARTED</a>

        </div>
        <div class="social-icon pull-right">
          <ul>
            <li><a href="https://web.facebook.com/brimose.brimose.9"><i class="flaticon-facebook-letter-logo"></i></a></li>
            <li><a href="https://twitter.com/Brimose2"><i class="flaticon-twitter-logo"></i></a></li>
            <!-- <li><a href="#"><i class="flaticon-behance-logo"></i></a></li> -->
            <!-- <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li> -->
          </ul>
        </div>
      </div>
    </header>
    <script src="portfolio/assets/vendor/jquery/jquery.min.js"></script>
    <script src="portfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="portfolio/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="portfolio/assets/vendor/php-email-form/validate.js"></script>
    <script src="portfolio/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="portfolio/assets/vendor/counterup/counterup.min.js"></script>
    <script src="portfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="portfolio/assets/vendor/venobox/venobox.min.js"></script>
    <script src="portfolio/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="portfolio/assets/vendor/typed.js/typed.min.js"></script>
    <script src="portfolio/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="portfolio/assets/js/main.js"></script>
  </body>

</html>
