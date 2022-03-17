<?php

include_once 'connect.php';

if (isset($_POST['save'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


 $spl = "INSERT INTO data (email, password) VALUES ('$email', '$password') ";
    if (mysqli_query($conn, $spl)){
        echo "New record created successfully !";
    } else {
		echo "error";
	 }
	 mysqli_close($conn);
	
}

?>

