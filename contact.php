<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CONTACTS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="brimose, BRIMOSE, brimose-contacts, ">
    <meta name="description" content="Programming Solutions">
    <link rel="icon" type="image/jpg" href="assets/images/logo.JPG">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="">
            <h1 class="page-section__title">Contact Us</h1>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-4">
            <p><span>Address:</span> P.O. Box 10655-00100, Nairobi, Kenya</p>
          </div>
          <div class="col-md-4">
            <p><span>Phone:</span> <a href="tel://1234567920">+2547********</a></p>
          </div>
          <div class="col-md-4">
            <p><span>Email:</span> <a href="mailto:info@brimose.com">info@brimose.com</a></p>
          </div>

        </div>
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-lg-6 d-flex">
            <div id="p" class="bg-white">
              <section class="ftco-section ftco-section-parallax bg-secondary ftco-no-pb">
                <div class="parallax-img d-flex align-items-center">
                  <div class="container">
                    <!-- <div class="row d-flex justify-content-center"> -->
                      <div class="col-md-7  heading-section heading-section-white heading-section-no-line ftco-animate">
                        <h2>Newsletter</h2>
                        <p>SIGN UP TO GET OUR NEWSLETTER</p>
                        <div class="row d-flex justify-content-center mt-4 mb-4">
                          <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                              <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Enter email address">
                                <br>
                                <input type="submit" value="Subscribe" class="submit px-3">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- </div> -->
                </div>
              </section>

            </div>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
    $(document).ready(function (){

      $("#gst").on('click',function(event){
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: 720
        },800,function(){
          window.location.hash=hash;
        });
      });
    });
</script>



      <?php include 'includes/footer.php'; ?>
  </body>
</html>
