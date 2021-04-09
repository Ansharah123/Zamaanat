<?php
 // $check = mysqli_connect("localhost","root","","zamaanat");
  if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    
  
    include 'dbcon.php';

    $res = mysqli_query($conn,"select * from registration where userName = '$userName'and password = '$password'" ) 
              or die("Failed to query database".mysqli_error($conn));

    $row = mysqli_fetch_array($res);

    if($row['userName'] == $userName && $row['password'] == $password){
    //  $verified = "Verified";
    header("Location: property-grid.php");
//    exit;
    }else{
    echo"NotVerified";
    header("Location: ligon-page.php");
    }
  }else{
    echo"Button is not clicked";
  }
?>