<!DOCTYPE html>
<html lang="en" class=" js no-touch">

<head>
  <title>UbonDelivery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="indexmat/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="indexmat/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="indexmat/css/slick-team-slider.css" />
  <link rel="stylesheet" type="text/css" href="indexmat/css/style.css">
  <!-- =======================================================
    Theme Name: Tempo
    Theme URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--HEADER START-->
  <div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
          <a class="navbar-brand" href="1">UbonDelivery</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">ร้านอาหารทั้งหมด</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--HEADER END-->

  <!--BANNER START-->
  <div id="banner" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="jumbotron">
          <h1 class="small">อาหารเดลิเวอรี่ สั่งอาหารออนไลน์</h1>
          <p class="big">บริการสั่งอาหารออนไลน์ในจังหวัดอุบลราชธานี</p>
        </div>
      </div>
    </div>
  </div>
  <!--BANNER END-->


  <!--SERVICE START-->
  <div id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>วิธีการสั่งอาหาร</h1>
          <p>พียง 3 ขั้นตอนง่ายๆสำหรับสั่งอาหารออนไลน์กับร้านอาหารเดลิเวอรี่ </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
              <img src="indexmat/img/step2.png" alt="">
                <h4>เลือกร้านอาหารเดลิเวอรี่ เลือกเมนู</h4>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">

              <img src="indexmat/img/step3.png" alt="">
                <h4>ชำระเงินง่ายๆโดยเก็บเงินปลายทาง</h4>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
              <img src="indexmat/img/step4.png" alt="">
                <h4>อาหารอร่อยๆจาก ร้านอาหารเดลิเวอรี่ จะส่งตรงไปถึงที่ไม่ว่าจะเป็นที่บ้าน ที่่ทำงาน</h4>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--SERVICE END-->
  <div id="portfolio">
    <div class="container">
      <div class="page-title text-center">
        <h1>UBONDELIVERY</h1>
        <p>คือเว็บไซต์ที่จะมอบความสะดวกสบายกับทุกทุกคนในทุกที่ ทุกเมนู เพราะคุณสามารถทานอาหารที่ต้องการได้เพีบงแค่คลิ๊กเท่านั้น</p>
        <hr class="pg-titl-bdr-btm"></hr>
      </div>
      <div class="col-lg-3 col-md-4 portfolio-item filter-web">
          <img src="indexmat/img/1.jpg" alt="">
          <div class="details">
            <h4>เมนู</h4>
            <span>ต้มยำกุ้ง</span>
          </div>
      </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <img src="indexmat/img/2.jpg" alt="">
            <div class="details">
              <h4>เมนู</h4>
              <span>ต้มยำกุ้ง</span>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <img src="indexmat/img/3.jpg" alt="">
            <div class="details">
              <h4>เมนู</h4>
              <span>ต้มยำกุ้ง</span>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <img src="indexmat/img/4.jpg" alt="">
            <div class="details">
              <h4>เมนู</h4>
              <span>ต้มยำกุ้ง</span>
          </a>
        </div>

      </div>
    </div>
  </div>


        <div class="form-sec">
<?php
include 'us.php';

$loginform = "<form action='' method='post'  >
              <div class='page-title text-center'>
                  <h1>Login</h1>
                  <hr class='pg-titl-bdr-btm'></hr>
            <div class='col-md-4 form-group'>
              <input type='text' name='username' class='form-control text-field-box' id='user' placeholder='User' data-rule='user' data-msg='Please enter User' />
              <div class='validation'></div>
            </div>
            <div class='col-md-4 form-group'>
              <input type='password' class='form-control text-field-box' name='password' id='password' placeholder='Your Password' data-rule='password' data-msg='Please enter Password' />
              <div class='validation'></div>
            </div>
<button class='button-medium' type='submit' >login</button> <br>
</form><form action='register.php'>
  <button class='button-medium'>Register</button></a> </form>";
  $conn = new mysqli($servername, $dbid, $dbpass, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  if ((!empty($_POST['username'])) and (!empty($_POST['password']))) {
  $id = $_POST['username'];
  $pass = $_POST['password'];
  $sql = "SELECT * FROM `user` WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
        // output data of each row
        //
        while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            //print_r($row);

              $pname = $row['name'];
              if ($pass == $row['password']) {
                  echo "<div class='col-12 text-center zoomIn'><h3>login completed</h3></div><br>";
                  error_reporting(0);
                  setcookie('login',TRUE );
              }else {
                echo $loginform;
                  echo "<div class='col-12 text-center zoomIn'><h3>รหัสผ่านผิด</h3></div><br>";
              }

        }

    } else {
      echo $loginform;
        echo "<div class='col-12 text-center zoomIn'><h3>ไม่พบผู้ใช้นี้</h3></div><br>";
    }
  }else {
    echo $loginform;
  }


  // code...
 ?>


        </div>
      </div>
    </div>
  </div>
  <!--CONTACT END-->

  <!--FOOTER START-->
  <footer class="footer section-padding">
    <div class="container">
      <div class="row">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
          <h3>Follow us on</h3>
          <div class="footer_social">

          </div>
        </div>
        <!--- END COL -->
      </div>
      <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
  </footer>
  <!--FOOTER END-->
  <div class="footer-bottom">
    <div class="container">
      <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">


          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="indexmat/js/jquery.min.js"></script>
  <script src="indexmat/js/jquery.easing.min.js"></script>
  <script src="indexmat/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="indexmat/js/slick.min.js"></script>
  <script type="text/javascript" src="indexmat/js/custom.js"></script>
  <script src="indexmat/contactform/contactform.js"></script>

</body>

</html>
