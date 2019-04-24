
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>สมัคสมาชิก</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

    <div class="container">

  <div class="py-5 text-center">
    <div class="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Back to Home</a></li>
      </ul>
    </div>
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>สมัคสมาชิก</h2>
    <p class="lead">โปรดกรอกรายละเอียดในส่วนต่างๆให้ครบถ้วน</p>
  </div>


    </div>
    <div class="col-md-8 order-md-1">
      <!-- <form action='' class="needs-validation" method='POST' novalidate > -->
      <form action=''  method='POST' >
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" name='fname' required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" name='lname' required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
            <label for="email">Email </label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" name='email' required>
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" name='id' required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Tel.</label>
          <input type="text" class="form-control" placeholder="0987654321" required name='tol' required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2"> Password </label>
          <input type="password" class="form-control"  placeholder="typing you password" name='pass' required>
        </div>

        <div class="mb-3">
            <label for="address2">Confirm Password </label>
            <input type="password" class="form-control"  placeholder="re-password" name='cf_pass' required>
          </div>
        <hr class="mb-4">




        <div class="d-block my-3">
          <label for="">type of member</label>
          <div class="custom-control custom-radio">
            <input id="credit" name="type" type="radio" class="custom-control-input" value='buy' checked required>
            <label class="custom-control-label" for="credit">ผู้ซื้อ</label>
          </div>

          <div class="custom-control custom-radio">
            <input id="paypal" name="type" type="radio" class="custom-control-input" value='sale' required>
            <label class="custom-control-label" for="paypal">ผู้ขาย</label>
          </div>
        </div>

        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">ลงทะเบียน</button>
      </form>
      <?php
include "us.php";
$conn = new mysqli($servername, $dbid, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!empty($_POST['id'])) {

  $id = $_POST['id'];
  $fname = $_POST['fname'] ;
  $lname = $_POST['lname'] ;
  $name = $fname.' '.$lname;
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $cf_pass = $_POST['cf_pass'];
  $type = $_POST['type'] ;
  $tol = $_POST['tol'] ;
  if ($pass == $cf_pass) {
    // code..
    $sql = "INSERT INTO `user`
    VALUES ('$name','$email','$id','$pass','$type','$tol')";

    if ($conn->query($sql) === TRUE) {
        echo "<br><div class='col-12 text-center zoomIn'><h4>ท่านได้ทำการสมัครเรียบร้อยแล้ว</h4></div><br>";
    } else {
     // same , id ,email ,
        // echo "Error: " . $sql . "<br>" . $conn->error ;
        $er = (string)( $conn->error);
        if ((strpos($er, 'Duplicate entry') !== false) and (strpos($er, "for key 'PRIMARY'") !== false) ){
          echo  "<br><div class='col-12 text-center zoomIn'><h4>ลงทะเบียนไม่สำเร็จ username นี้ถูกใช้งานแล้ว</h4></div><br>";
        }
        if ((strpos($er, 'Duplicate entry') !== false) and (strpos($er, "for key 'email'") !== false) ){
          echo "<br><div class='col-12 text-center zoomIn'><h4>ลงทะเบียนไม่สำเร็จ email นี้ถูกใช้งานแล้ว</h4></div><br>";
        }
        // if (TRUE) {
        //   echo "ก็มาดิครับ";
        // }
    }
  }else {
    echo "<br><div class='col-12 text-center zoomIn'><h4></h4>ลงทะเบียนไม่สำเร็จ รหัสผ่านไม่ตรงกัน</div><br>";
  }





}else{
  echo "<br><div class='col-12 text-center zoomIn'><h4>กรุณากรอกข้อมูลให้ครบถ้วนและถูกต้อง</h4></div><br>";
}

// name email id password type
// database
// primarykey id
// unique email
// sql table order , food ,restaurant , user

?>
    </div>
  </div>


  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>
