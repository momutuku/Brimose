<?php
    if (isset($_GET['prod'])) {
      $title = $_GET['prod'];
      // code...

    }

    if (isset($_POST['item'])) {
      $title = $_POST['item'];
      // echo $title;

    }else{
      $title = "";
      // header("Location:products.php");
    }



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title><?php echo $title; ?></title>

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
  <?php include 'includes/nav.php'; ?>

    <!-- Display Products -->

    <section class="portfolio">
      <div class="container">
        <div class="page-section">
          <h2 class="page-section__title">Results For <?php echo $title; ?></h2>
          <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
          <div class="row gutters-40">
          <?php
          $conn = mysqli_connect("localhost","root","","brimose");
          $retrieve = "SELECT * FROM products WHERE name ='$title' OR category = '$title' OR brand = '$title'";
          // $retrieve = "SELECT * FROM products WHERE name ='$title' OR category = '$title' OR brand = '$title' ORDER BY price ASC";

          $results = $conn->query($retrieve);
          if ($results) {
            if ($results->num_rows >0) {
              while ($rows = $results->fetch_assoc()) {
                $id = $rows['id'];
                $img = $rows['imgloc'];
                $brand = $rows['brand'];
                $price = $rows['price'];


                echo "
                <div class='col-md-4'>
                  <div class='portfolio__single-section mix category-a category-b category-c' data-order='1'>
                    <img class='portfolio__single-section__image img-responsive' src='assets/images/portfolio-1.png' alt=''>
                    <div class='portfolio__single-section__overlay'>
                      <div class='overlay-content'>
                        <h4>ACCESSORIES</h4>
                        <p>Designer</p>
                      </div>
                      <div class='portfolio__single-section__search-icon'>
                        <a href='product.php?prod=MOBILE'><img src='assets/images/search-icon.png' alt=''></a>
                      </div>
                    </div>
                  </div>
                </div>

                ";

              }

            }else {
              // echo "PRODUCT NOT FOUND";
              echo "<h3 class='page-section__title'>PRODUCT \"$title\" NOT FOUND</h3>";
            }
          }else{
            echo $conn->error;
          }





           ?>

          </div>
        </div>
      </div>
    </section>



<?php include 'includes/footer.php'; ?>



  </body>
</html>
