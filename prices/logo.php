<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>BRIMOSE||HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="brimose, BRIMOSE cctv-kenya ">
    <meta name="description" content="Programming Solutions">
    <link rel="icon" type="image/jpg" href="assets/images/logo.JPG">

    <link rel="stylesheet" href="../assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js" charset="utf-8"></script>
  </head>
  <body>
  <div id="content-wrapper">
    <header class="header header--bg">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php"><img src="assets/images/logo.JPG" alt="">BRIMOSE</a>
          </div>
          <div class="menu_bar collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="../index.php">HOME</a></li>
              <li><a href="../about.php">ABOUT</a></li>
              <li><a href="../products.php">PRODUCTS</a>
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
                  <form action="../product.php" method="post" class="search_box" id="form">
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
            <h1 class="header__content__title">BRIMOSE</h1>
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


    <div class="wrapper">
      <h1>BRIMOSE LOGO CHARGES</h1>

      <!-- Card 2 -->
      <div class="single-price l2">
        <h1>BRONZE</h1>
        <div class="price" style="  border: 2px solid rgb(70,200,242);">
          <h2>10,000/-</h2>
        </div>
        <div class="deals">
          <h4>6 Designs</h4>
          <h4>5 Revisions</h4>
          <h4>Digital, printable Formats</h4>
          <h4>Time Line: 5 DAYS</h4>
        </div>
        <a href="#" style="background: rgb(70,200,242) !important;">CHOOSE</a>
      </div>
      <!-- Card 3 -->
      <div class="single-price l2">
        <h1>Silver Plan</h1>
        <div class="price" style="  border: 2px solid #da4357;">
          <h2> 20,000/-</h2>
        </div>
        <div class="deals">
          <h4>12 Designs</h4>
          <h4>8 Revisions</h4>
          <h4>Digital, printable Formats</h4>
          <h4>Time Line: 5 DAYS</h4>
        </div>
        <a href="#">CHOOSE</a>
      </div>
      <!-- Card 4 -->
      <div class="single-price l2">
        <h1>Platinum Plan</h1>
        <div class="price" style="  border: 2px solid rgb(69, 191, 38);">
          <h2>30,000/-</h2>
        </div>
        <div class="deals">
          <h4>18 Designs</h4>
          <h4>10 Revisions</h4>
          <h4>Digital, printable Formats</h4>
          <h4>3D design</h4>
          <h4>Time Line: 5 DAYS</h4>
        </div>
        <a href="#" style="background:rgb(69, 191, 38);">CHOOSE</a>
      </div>

    </div>

    <script type="text/javascript">
      $(document).ready(function (){
        $("#gst").on('click',function(event){
                  console.log("LOG");
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: 770
          },800,function(){
            window.location.hash=hash;
          });
        });
      });
    </script>

  </body>
</html>
