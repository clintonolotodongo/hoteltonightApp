<?php
session_start();
include 'conn.php';
$id = $_SESSION['user_id'];
// echo"<script>alert('$id');</script>";
$usernameses = $_SESSION['admin_name'];
$emailses = $_SESSION['admin_email'];
$passses  =$_SESSION['admin_password'];


$adminrec= mysqli_query($conn,"SELECT * FROM users WHERE user_id = '$id'");
$rec = mysqli_fetch_array($adminrec);
$username = $rec['username'];
$email = $rec['email'];
$password = $rec['password'];


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
    <title>WhereTONIGHT</title>
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
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container">
        <!-- Paste your Header Content from here-->
        <!-- # Header Five Layout-->
        <!-- # Copy the code from here ...-->
        <!-- Header Content-->
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
          <!-- Logo Wrapper-->
          <div class="logo-wrapper"><a href="page-home.html"><img src="img/icons/ACoding.png" alt=""></a></div>
          <!-- Navbar Toggler-->
          <div class="navbar--toggler" id="affanNavbarToggler"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
        </div>
        <!-- # Header Five Layout End-->
      </div>
    </div>
    <!-- Dark mode switching-->
    <div class="dark-mode-switching">
      <div class="d-flex w-100 h-100 align-items-center justify-content-center">
        <div class="dark-mode-text text-center"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"/>
</svg>
          <p class="mb-0">Switching to dark mode</p>
        </div>
        <div class="light-mode-text text-center"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
</svg>
          <p class="mb-0">Switching to light mode</p>
        </div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>



    <!-- Side Nav Wrapper-->
    <div class="sidenav-wrapper" id="sidenavWrapper">
      <!-- Go Back Button-->
      <div class="go-back-btn" id="goBack">
        <svg class="bi bi-x" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"></path>
          <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"></path>
        </svg>
      </div>
      <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="sidenav-style1"></div>
        <!-- User Thumbnail-->
        <div class="user-profile"><img src="img/logo.jpg" alt=""></div>
        <!-- User Info-->
        <div class="user-info">
          <h6 class="user-name mb-0">WhereTONIGHT</h6><span>Enjoy The weekend </span>
        </div>
      </div>
      <!-- Sidenav Nav-->
      
    <?php include 'sidebar_admin.php';?>




    <div class="page-content-wrapper py-3 elements-page">
      <div class="container">
        <div class="elements-heading d-flex align-items-center mb-3">
          <div class="icon-wrapper"><svg width="24" height="24" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
          </div>

          <?php
	include 'conn.php';
   

	if(isset($_POST['addhotel'])){
    $hotel_phone = mysqli_real_escape_string($conn,$_POST['hotel_phone']);
		$check = mysqli_query($conn,"SELECT hotel_phone FROM hotel WHERE hotel_name = '$hotel_phone'");
    if(mysqli_num_rows($check) >0 ){
      echo"
            
      <div class='alert alert-danger'>Hotel Records Already Exist</div>
      ";
    }else{
      $hotel_name = mysqli_real_escape_string($conn,$_POST['hotel_name']);
      $hotel_address = mysqli_real_escape_string($conn,$_POST['hotel_address']);
      $hotel_phone = mysqli_real_escape_string($conn,$_POST['hotel_phone']);
      $hotel_desc = mysqli_real_escape_string($conn,$_POST['hotel_desc']);
      
      
      $filename = $_FILES['photo']['name'];
      if(!empty($filename)){
        move_uploaded_file($_FILES['photo']['tmp_name'], 'hotelimg/'.$filename);	
      }
		$sql = mysqli_query($conn,"INSERT INTO hotel(hotel_name,hotel_address,hotel_phone,hotel_photo,hotel_desc, hotel_email) VALUES ('$hotel_name','$hotel_address', '$hotel_phone', '$filename', '$hotel_desc', '$username')") or die(mysqli_error($conn));
		if($sql){
			echo"
            
            <div class='alert alert-success'>Advise posted</div>
            ";
		}
		else{
			echo"Something went wrong ";
		}
  }
	}
	else{
		echo"
    <div class='alert alert-danger'>No Hotel Added Yet, Fill the form</div>
    ";
	}

  
?>
          <div class="heading-text">
            <h5 class="mb-0">Add Hotel</h5><span>please provide the following information to add a hotel &amp; .</ter amp; span>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
              <div class="form-group">
                  

                  <div class="col-sm-9">
                  
                    <input type="text" class="form-control" placeholder="Hotel Name" name="hotel_name" required>
                  </div>
              </div>
              <div class="form-group">
                  

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Hotel Address"  name="hotel_address" required>
                  </div>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" placeholder="Hotel Email"  name="hotel_email" required>
                  </div>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" placeholder="Hotel phone" name="hotel_phone" required>
                  </div>
                

                            
                  
                 
              </div>
              
              <div class="form-group">
                  <label for="photo" >Hotel Photo</label>

                  <div class="col-sm-9">
                    <input type="file" class="form-control"  name="photo" id="photo">
                  </div>
              </div>
              <div class="form-group">
                  <label for="address" class="col-sm-3 control-label">Description</label>

                  <div class="col-sm-9">
                    <textarea type="text" placeholder="Description of the Hotel" class="form-control" name="hotel_desc"></textarea>
                  </div>
              </div>
              
              
              
              
              
          </div>
          <div class="form-group" >
            
            <input type="submit" value="ADD HOTEL" name="addhotel" style=" background-color: #516BEB; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
border-radius: 6px;
font-size: 16px;" value="Add product">
            </form>
          </div>
        </div>
      </div>
      <div class="container mt-3">
        <div class="elements-heading d-flex align-items-center mt-3 mb-3">
          <div class="icon-wrapper bg-danger"><svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-exclamation" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
</svg>
          </div>
          <?php
	include 'conn.php';
   

	if(isset($_POST['addprogramme'])){
  
      $hotel_id = mysqli_real_escape_string($conn,$_POST['hotel_id']);
      $programme_name = mysqli_real_escape_string($conn,$_POST['programme_name']);
      $programme_day = mysqli_real_escape_string($conn,$_POST['programme_day']);
      
      $programme_desc = mysqli_real_escape_string($conn,$_POST['programme_desc']);
      
      
      $filename = $_FILES['photo']['name'];
      if(!empty($filename)){
        move_uploaded_file($_FILES['photo']['tmp_name'], 'progimg/'.$filename);	
      }
		$sql = mysqli_query($conn,"INSERT INTO programmes(hotel_id,programme_name,programme_pic,programme_day,programme_desc) VALUES ('$hotel_id','$programme_name', '$filename', '$programme_day', '$programme_desc')") or die(mysqli_error($conn));
		if($sql){
			echo"
            
            <div class='alert alert-success'>Programme posted</div>
            ";
		}
		else{
			echo"Something went wrong ";
		}
  
	}
	else{
		echo"
    <div class='alert alert-danger'>No programme Added Yet, Fill the form</div>
    ";
	}

  
?>
          <div class="heading-text">
            <h5 class="mb-0">Add Programmes</h5><span>Add programmes for a particular hotel that will be viewed by customers.</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
              <div class="form-group">
                  

                  <div class="col-sm-9">
                  
                    <select  class="form-control" name="hotel_id" required>
                      <option value="" selected>- Select  Hotel-</option>
                      <?php
                      include 'conn.php';
                        $sql = mysqli_query($conn,"SELECT * FROM hotel");
                       
                        while($prow = mysqli_fetch_array($sql)){
                          echo "
                            <option value=".$prow['hotel_name'].">".$prow['hotel_name']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="programme Name"  name="programme_name" required>
                  </div>
                <div class="col-sm-9">
                    <label for="">Programme Day</label>
                    <input type="date" class="form-control"  name="programme_day" required>
                </div>
                
                

                            
                  
                 
              </div>
              
              <div class="form-group">
                  <label for="photo" >programme Preview Image</label>

                  <div class="col-sm-9">
                    <input type="file" class="form-control"  name="photo" id="photo">
                  </div>
              </div>
              <div class="form-group">
                  <label for="address" class="col-sm-3 control-label">Description</label>

                  <div class="col-sm-9">
                    <textarea type="text" placeholder="Program Description" class="form-control" name="programme_desc"></textarea>
                  </div>
              </div>
              
              
              
              
              
          </div>
          <div class="form-group" >
            
            <input type="submit" value="ADD PROGRAMME" name="addprogramme" style=" background-color: #516BEB; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
border-radius: 6px;
font-size: 16px;" value="Add product">
            </form>
          </div>
        </div>
      </div>
      <div class="container mt-3">
        <div class="elements-heading d-flex align-items-center mt-3 mb-3">
          <div class="icon-wrapper bg-success"><svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-ui-checks" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
<path fill-rule="evenodd" d="M2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646l2-2a.5.5 0 1 0-.708-.708L2.5 4.293l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0zm0 8l2-2a.5.5 0 0 0-.708-.708L2.5 12.293l-.646-.647a.5.5 0 0 0-.708.708l1 1a.5.5 0 0 0 .708 0z"/>
<path d="M7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
<path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg>
          </div>

          <?php
	include 'conn.php';
   

	if(isset($_POST['addproduct'])){
  
      $hotel_id = mysqli_real_escape_string($conn,$_POST['hotel_id']);
      $product_name = mysqli_real_escape_string($conn,$_POST['product_name']);
      $product_price = mysqli_real_escape_string($conn,$_POST['product_price']);
      
      $category_type = mysqli_real_escape_string($conn,$_POST['category_type']);
      $product_desc = mysqli_real_escape_string($conn,$_POST['product_desc']);
      
      $filename = $_FILES['photo']['name'];
      if(!empty($filename)){
        move_uploaded_file($_FILES['photo']['tmp_name'], 'prodimg/'.$filename);	
      }
		$sql = mysqli_query($conn,"INSERT INTO products(hotel_id,product_name,category_id,product_price,product_image,product_desc) VALUES ('$hotel_id','$product_name', '$category_type', '$product_price','$filename','$product_desc')") or die(mysqli_error($conn));
		if($sql){
			echo"
            
            <div class='alert alert-success'>Product addedd successfully</div>
            ";
		}
		else{
			echo"Something went wrong ";
		}
  
	}
	else{
		echo"
    <div class='alert alert-danger'>No products Added now, Fill the form</div>
    ";
	}

  
?>
          <div class="heading-text">
            <h5 class="mb-0">Add Hotel Products</h5><span>kindly add the product for a particular hotel Here.</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
          <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
              <div class="form-group">
                  

                  <div class="col-sm-9">
                  
                    <select  class="form-control" name="hotel_id" required>
                      <option value="" selected>- Select  Hotel-</option>
                      <?php
                      include 'conn.php';
                        $sql = mysqli_query($conn,"SELECT * FROM hotel");
                       
                        while($prow = mysqli_fetch_array($sql)){
                          echo "
                            <option value=".$prow['hotel_id'].">".$prow['hotel_name']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="product Name"  name="product_name" required>
                  </div>
                <div class="col-sm-9">
                    <label for="">Category Name</label>
                    <select  class="form-control" name="category_type" required>
                      <option value="" selected>- Select  Category-</option>
                      <?php
                      include 'conn.php';
                        $sql = mysqli_query($conn,"SELECT * FROM category");
                       
                        while($prow = mysqli_fetch_array($sql)){
                          echo "
                            <option value=".$prow['category_id'].">".$prow['category_type']."</option>
                          ";
                        }
                      ?>
                    </select>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="product price" name="product_price" required>
                  </div>
                

                            
                  
                 
              </div>
              
              <div class="form-group">
                  <label for="photo" >product Image</label>

                  <div class="col-sm-9">
                    <input type="file" class="form-control"  name="photo" id="photo">
                  </div>
              </div>
              <div class="form-group">
                  <label for="address" class="col-sm-3 control-label">Description</label>

                  <div class="col-sm-9">
                    <textarea type="text" placeholder="product Description" class="form-control" name="product_desc"></textarea>
                  </div>
              </div>
              
              
              
              
              
          </div>
          <div class="form-group" >
            
            <input type="submit" value="ADD Product" name="addproduct" style=" background-color: #516BEB; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
border-radius: 6px;
font-size: 16px;" value="Add product">
            </form>
          </div>
        </div>
      </div>
      <div class="container mt-3" style="display:none;">
        <div class="elements-heading d-flex align-items-center mt-3 mb-3" style="display:none;">
          <div class="icon-wrapper bg-danger"><svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="display:none;">
<path  fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
</svg>
          </div>
          <div class="heading-text" style="display:none;">
            <h5 class="mb-0">UI Elements</h5><span>Impress your visitors with beautiful designs.</span>
          </div>
        </div>
        
      </div>
      <div class="container mt-3" style="display:none;">
        <div class="elements-heading d-flex align-items-center mt-3 mb-3">
          <div class="icon-wrapper bg-success"><svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-tools" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
</svg>
          </div>
       
        </div>
       
      </div>
      <div class="container mt-3" style="display:none;">
        <div class="elements-heading d-flex align-items-center mt-3 mb-3">
          <div class="icon-wrapper bg-info"><svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-sliders" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M14 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM7 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM4.5 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9.5 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
<path fill-rule="evenodd" d="M9.5 4H0V3h9.5v1zM16 4h-2.5V3H16v1zM9.5 14H0v-1h9.5v1zm6.5 0h-2.5v-1H16v1zM6.5 9H16V8H6.5v1zM0 9h2.5V8H0v1z"/>
</svg>
          </div>
          <div class="heading-text" style="display:none;">
            <h5 class="mb-0">Carousel</h5><span>Display your content with a variety of styles.</span>
          </div>
        </div>
       
      </div>
      <div class="container mt-3" style="display:none;">
        <div class="elements-heading d-flex align-items-center mt-3 mb-3">
          <div class="icon-wrapper"><svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-table" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
</svg>
          </div>
          <div class="heading-text" style="display:none;">
            <h5 class="mb-0">Tables</h5><span>Show your data with tables.</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            
          </div>
        </div>
      </div>
      <div class="container mt-3" style="display:none;">
        <div class="elements-heading d-flex align-items-center mt-3 mb-3">
          <div class="icon-wrapper bg-info"><svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
<path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg>
          </div>
          <div class="heading-text" style="display:none;">
            <h5 class="mb-0">Timer</h5><span>Countdown or count up your milestones.</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body" style="display:none;">
            <!-- Page Item--><a class="page--item" href="#">Count Down<i class="fa fa-angle-right"></i></a>
            <!-- Page Item--><a class="page--item" href="#">Counter Up<i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="container mt-3" style="display:none;">
        <div class="elements-heading d-flex align-items-center mt-3 mb-3">
          <div class="icon-wrapper"><svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-bar-chart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5h-2v12h2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
</svg>
          </div>
          <div class="heading-text" style="display:none;">
            <h5 class="mb-0">Charts</h5><span>Lots of charts example are given below:</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body" style="display:none;">
            <!-- Page Item--><a class="page--item" href="element-area-charts.html">Area Chart<i class="fa fa-angle-right"></i></a>
            <!-- Page Item--><a class="page--item" href="element-column-charts.html">Column Chart<i class="fa fa-angle-right"></i></a>
            <!-- Page Item--><a class="page--item" href="element-line-charts.html">Line Chart<i class="fa fa-angle-right"></i></a>
            <!-- Page Item--><a class="page--item" href="element-pie-charts.html">Pie Chart<i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Nav-->
    <?php include 'footernav.php';?>
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