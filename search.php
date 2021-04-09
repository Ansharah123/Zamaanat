<?php
$conseller = mysqli_connect("localhost","root","","le_zamanat");

if(isset($_POST['submit'])){
    $city = $_POST['city'];

    //echo $city;

    $res = mysqli_query($conseller,"select * from verify where city = '$city'") 
            or die("Failed to query database");
    
            $row = mysqli_fetch_array($res);
            if($row){
              $city1 = $row['city']; 
            }
            else{
              $city1 = 0;
            }
            if($city1 == $city){
              //$verified = "Verified"
             // echo"Hello";
            }else{
              //$verified = "NotVerified"
              echo "Not run";
            }
}
?>