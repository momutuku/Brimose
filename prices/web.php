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
    <?php include 'header.php'; ?>

    <div class="wrapper">
      <h1>BRIMOSE WEBSITE CHARGES</h1>

      <!-- Card 2 -->
      <div class="single-price">
        <h1>Standard Plan</h1>
        <div class="price" style="bor">
          <h2>20,000/-</h2>
        </div>
        <div class="deals">
          <h4>Pages: 1 to 20</h4>
          <h4>Type: Static</h4>
          <h4>Domain Name</h4>
          <h4>Cross Browser Compatibility</h4>
          <h4>Database</h4>
          <h4>Images</h4>
          <h4>Languasges:Java, PHP, HTML</h4>
          <h4>Time Line: 5 DAYS</h4>
        </div>
        <a href="#">CHOOSE</a>
      </div>
      <!-- Card 3 -->
      <div class="single-price">
        <h1>Gold Plan</h1>
        <div class="price">
          <h2>35,000/-</h2>
        </div>
        <div class="deals">
          <h4>Pages: 1 to 40</h4>
          <h4>Type: Dynamic</h4>
          <h4>Domain Name</h4>
          <h4>Cross Browser Compatibility</h4>
          <h4>Database</h4>
          <h4>Images & Animations</h4>
          <h4>Basic SEO</h4>
          <h4>Visit Counter</h4>
          <h4>Online Forms</h4>
          <h4>Event Calander</h4>
          <h4>Languasges:Java, PHP, HTML</h4>
          <h4>Time Line: 10 DAYS</h4>
        </div>
        <a href="#">CHOOSE</a>
      </div>
      <!-- Card 4 -->
      <div class="single-price">
        <h1>Platinum Plan</h1>
        <div class="price">
          <h2>50,000/-</h2>
        </div>
        <div class="deals">
          <h4>Pages: 1 to 80</h4>
          <h4>Type: Dynamic</h4>
          <h4>Domain Name</h4>
          <h4>Cross Browser Compatibility</h4>
          <h4>Database</h4>
          <h4>Images & Animations</h4>
          <h4>Basic SEO & Social Media Profiles</h4>
          <h4>Visit Counter</h4>
          <h4>Online Forms</h4>
          <h4>Event Calander</h4>
          <h4>Documentation & C-Panel Training</h4>
          <h4>Languasges:Java, PHP, HTML</h4>
          <h4>Time Line: 20 DAYS</h4>
        </div>
        <a href="#">CHOOSE</a>
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
