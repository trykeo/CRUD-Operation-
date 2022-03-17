<?php
 include 'connect.php';

 if (isset($_POST['update'])) {
        $id = $_POST['id'];
     $updateemail = $_POST['email'];
     $updatepassword = $_POST['password'];


    $sql_update = "UPDATE data SET email = '$updateemail', password = '$updatepassword' WHERE id = $id ";
    mysqli_query($conn, $sql_update);


    



 
 $update_value = mysqli_query($conn, "SELECT * FROM data WHERE id ='" . $_GET['userid'] . "'");
 $appare = mysqli_fetch_array($update_value);



 }

?>