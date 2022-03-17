<?php

include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];



    $sql_delete = "DELETE FROM data WHERE id = $id";
  $delete = mysqli_query($conn, $sql_delete);
if ($delete == TRUE ) {
    header("location: ./index.php?delete=success");
    
}

}








?>