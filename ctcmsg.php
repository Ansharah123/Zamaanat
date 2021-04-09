<?php

$server = 'localhost';
$user = 'root';
$database = 'le_zamanat';
$password = '';

$connections = new mysqli($server,$user,$password,$database);
if($connections->connect_error) {
echo "error" . $connections->connect_error;
}
else{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
		

	$sql = "INSERT INTO `contactusdb` (`name`, `email`, `message`) VALUES ('$name', '$email', 
	'$message')";
			
    $result= $connections->query($sql); 
    
    if(isset($result)){
        header("location: contact.php");
        exit();
    }
    else{
        echo " sometingwrong";
        exit();
    }

	# code...
}
	

$connections->close();
?>