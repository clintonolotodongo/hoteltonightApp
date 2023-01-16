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