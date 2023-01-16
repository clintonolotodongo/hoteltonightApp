<?php 
include 'conn.php';

if(isset($_POST['signup'])){
  $customer_name = mysqli_real_escape_string($conn,$_POST['customer_name']);
  $tel = mysqli_real_escape_string($conn,$_POST['customer_tel']);
  $gender = mysqli_real_escape_string($conn,$_POST['gender']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $sql = mysqli_query($conn,"INSERT INTO customers(customer_name,customer_tel,gender,password) VALUES('$customer_name','$tel','$gender','$password')");
  if($sql){
    $_SESSION['success'] = 'Farmer added successfully';

    
  }
  else{
    $_SESSION['error'] = $conn->error;
  }

}
else{
  $_SESSION['error'] = 'Fill up add form first';
}

header('location: index.php');



?>



<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>WhereTONIGHT App</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/apexcharts.css">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
</head>

  <body>
    <!-- Preloader-->
    <div class="preloader d-flex align-items-center justify-content-center" id="preloader">
      <div class="spinner-grow text-primary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Back Button-->
    <!--div class="login-back-button"><a href="page-login.html"><svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a></div-->
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="text-center px-4"><img class="login-intro-img" src="img/bg-img/36.png" alt=""></div>
            <!-- Register Form-->
            <div class="register-form mt-4 px-4">
              <h6 class="mb-3 text-center">Register to continue to WhereTONIGHT App</h6>
              <form action="" method="POST" >
                <div class="form-group text-start mb-3">
                  <input class="form-control" type="text" name="customer_name" placeholder="username">
                </div>
                <div class="form-group text-start mb-3">
                  <input class="form-control" type="text" name="customer_tel" placeholder="Telephone">
                </div>
                <div class="form-group text-start mb-3">
                  <label for="gender">Gender</label>
                  <select name="gender" id="">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    
                  </select>
                </div>
                <div class="form-group text-start mb-3">
                  <input class="form-control input-psswd" id="registerPassword" name="password" type="password" placeholder="New password">
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" id="checkedCheckbox" type="checkbox" value="" checked>
                  <label class="form-check-label text-muted fw-normal" for="checkedCheckbox">I agree with the terms &amp; privacy policy.</label>
                </div>
                <button class="btn btn-primary w-100" name="signup" type="submit">CREATE ACCOUNT</button>
              </form>
            </div>
            <!-- Login Meta-->
            <div class="login-meta-data text-center">
              <p class="mt-3 mb-0">Already have an account? <a class="stretched-link" href="page-login.php">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/default/internet-status.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/default/dark-mode-switch.js"></script>
    <!-- Password Strenght-->
    <script src="js/default/jquery.passwordstrength.js"></script>
    <script src="js/default/active.js"></script>
    <!-- PWA-->
    <script src="js/pwa.js"></script>
  </body>

</html>