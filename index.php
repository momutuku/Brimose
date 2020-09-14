<!doctype html>
<html lang="en">
<head>
  <title>BRIMOSE||HOME</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="brimose, BRIMOSE cctv-kenya ">
  <meta name="description" content="Programming Solutions">
  <link rel="icon" type="image/jpg" href="assets/images/logo.JPG">

  <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div id="content-wrapper">
  <?php include 'includes/header.php'; ?>


  <section class="portfolio" id="port">
    <div class="container">
      <div class="page-section">
        <h2 class="page-section__title">FEATURE PRODUCTS</h2>
        <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
        <p class="page-section__paragraph">Belwo Are Our Key Products and services </p>
        <div class="portfolio__button-group">
          <a class="button button--default" data-filter="all" href="#">ALL</a>
          <a class="button button--default" data-filter=".webdev" href="#">WEB DEVELOPMENT</a>
          <a class="button button--default" data-filter=".udes" href="#">UI & UX DESIGN</a>
          <a class="button button--default" data-filter=".sofware" href="#">SOFTWARE</a>
          <a class="button button--default" data-filter=".sound" href="#">SOUND OP</a>
          <a class="button button--default" data-filter=".net" href="#">NETWORKING</a>
        </div>
        <div class="row gutters-40">
          <div class="col-md-4">
            <div class="portfolio__single-section mix webdev" data-order="1">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/web.jpeg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>WEB DEVELOPMENT</h4>
                  <p>Designer</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio__single-section mix  sofware" data-order="2">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/sd.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>SOFTWARE DEV</h4>
                  <p>Designer</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio__single-section mix sofware" data-order="3">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/sd.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>SOFTWARE DEV</h4>
                  <p>Designer</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row gutters-40">
          <div class="col-md-4">
            <div class="portfolio__single-section mix udes" data-order="4">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/ld.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>UI/UX DESIGN</h4>
                  <p>Design</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio__single-section mix sound" data-order="5">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/web.jpeg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>SOUND OP</h4>
                  <p>Sound</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio__single-section mix net" data-order="6">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/ct.png" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>NETWORKING</h4>
                  <p>Networking</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- <section class="brand-logo brand-logo--bg"> -->
    <div class="container">
      <h3 style="text-align: center;" >SPONSORS</h3>
      <br>
      <div class="row">
        <div class="brand-logo__wrapper">
          <li><img class="img-responsive" src="assets/images/brand-1.png" alt=""></li>
          <li><img class="img-responsive" src="assets/images/brand-2.png" alt=""></li>
          <li><img class="img-responsive" src="assets/images/brand-3.png" alt=""></li>
          <li><img class="img-responsive" src="assets/images/brand-4.png" alt=""></li>
          <li><img class="img-responsive" src="assets/images/brand-1.png" alt=""></li>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
  $(document).ready(function (){

    $("#gst").on('click',function(event){
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: 770
      },800,function(){
        window.location.hash=hash;
      });
    });
  });
</script>


<?php include 'includes/footer.php'; ?>
</div>

</body>
</html>
