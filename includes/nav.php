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
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.JPG" alt="">BRIMOSE</a>
          </div>
          <div class="menu_bar  collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="index.php">HOME</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="products.php">PRODUCTS</a>
                <div class="sub-menu-1">
                  <ul>
                    <li><a href="product.php?prod=desktop" data-filter=".category-a">Desktops</a></li>
                    <li><a href="product.php?prod=laptop" data-filter=".category-b">Laptop</a></li>
                    <li><a href="product.php?prod=mobile"  data-filter=".category-b"  >Mobile</a></li>
                    <li><a href="product.php?prod=printer" data-filter=".category-c">Printer</a></li>
                    <li><a href="product.php?prod=cctv" data-filter=".category-d">CCTV</a></li>
                    <li><a href="product.php?prod=accessories" data-filter=".category-e">Accessories</a></li>
                    <li><a href="product.php?prod=dev" data-filter=".category-f">Development</a></li>
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
      </div>
    </header>
  </body>
</html>
