<?php
 include 'connect.php';

 if (isset($_POST['update'])) {

        $id = $_POST['id'];
     $updateemail = $_POST['email'];
     $updatepassword = $_POST['password'];


    $sql_update = "UPDATE data SET id='$id', email = '$updateemail', password = '$updatepassword' WHERE id='$id' ";
   if(mysqli_query($conn, $sql_update)){
       echo "Update Successfully";
   };

 }
    



 
 $update_value = mysqli_query($conn, "SELECT * FROM data WHERE id ='" . $_GET['id'] . "'");
 $appare = mysqli_fetch_array($update_value);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    

<div class="container">
    <h1>Update</h1>
    <a href="index.php">Back To index file</a>
    <form method="POST" action="" >
      
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo  $appare['email'] ; ?>">
            <input type="hidden" name="id" value="<?php echo $appare['id']; ?>">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $appare['password']; ?>">
        </div>
       
        <button type="submit" class="btn btn-primary" name="update">update</button>
    </form>
</div>




</body>
</html>
