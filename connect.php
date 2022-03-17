<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'crud';

// Create connection
$conn =  mysqli_connect($servername, $username, $password, "$dbname");

// Check connection
if(!$conn){
    die('Could not Connect My Sql:' .$mysql_error());
}
?>