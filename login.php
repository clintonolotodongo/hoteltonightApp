<?php
session_start();
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
  <?php include 'csslinks.php'; ?>
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
    <!--div class="login-back-button"><a href="page-login.php"><svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a></div-->
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="text-center px-4"><img class="login-intro-img" src="img/logo.jpg" alt=""></div>
            <!-- Register Form-->
            <div class="register-form mt-4 px-4">
              <h6 class="mb-3 text-center">Log in to continue to WhereTONIGHT App.</h6>
              <?php
              
              include 'conn.php';
              if(isset($_POST['login'])){
               $customer_tel = mysqli_real_escape_string($conn,$_POST['customer_tel']);
               $password = mysqli_real_escape_string($conn,$_POST['password']);
            
            
          $sql = mysqli_query($conn,"SELECT * FROM customers  WHERE customer_tel ='$customer_tel' AND customer_password ='$password'");
               if(mysqli_num_rows($sql) > 0){
                   $rows=mysqli_fetch_array($sql);
                   $_SESSION['user_id'] = $rows['customer_id'];
                   echo "<script>
                   window.location='page-home.php';
                   </script>";
               } else{
                   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
               }
                
               // Close connection
               mysqli_close($conn);
             }
               ?>
              <form action="index.php" method="POST">
                <div class="form-group">
                  <input class="form-control" name="customer_tel" type="number" placeholder="Telephone">
                </div>
                <div class="form-group">
                  <input class="form-control" name="password" type="password" placeholder="Enter Password">
                </div>
                <button class="btn btn-primary w-100" name="login" type="submit">Sign In</button>
              </form>
            </div>
            
            <!-- Login Meta-->
            <div class="login-meta-data text-center"><a class="stretched-link forgot-password d-block mt-3 mb-1" href="page-forget-password.html">Forgot Password?</a>
              <p class="mb-0">Didn't have an account? <a href="register.php">Register Now</a></p>
              <div class="login-meta-data text-center"><a class="stretched-link forgot-password d-block mt-3 mb-1" href="login-admin.php">Admin</a>
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
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/default/dark-mode-switch.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/default/active.js"></script>
    <script src="js/default/clipboard.js"></script>
    <!-- PWA-->
    <script src="js/pwa.js"></script>
  </body>
</html>