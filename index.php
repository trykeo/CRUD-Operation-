<?php

include 'signup.php';
include 'Retrieve.php';
include 'delete.php';


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    

</head>
<body>
    <div class="container mt-3">
            <h1>PHP CRUD</h1>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add User
                </button>
            </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- Modal Body -->

    <form action="signup.php" method="POST">
        <div class="form-floating mb-3 mt-3">
            <input type= "text" name="email" id="email" placeholder="Enter email"class="form-control">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" id="pwd" placeholder="Enter password" name="password" class="form-control">
            <label for="pwd">password</label>
        </div>
      
   


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
        <button type="submit" name="save"  class="btn btn-primary">Add User</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- User Table  -->
<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 0; 
            while ($row = mysqli_fetch_array($result)) { ?>
                
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                       <button class="btn btn-dark "> <a href="update_process.php?id=<?php echo $row['id']; ?>" class="text-white text-decoration-none">update</a></button>
                        <button class="btn btn-warning"><a href="delete.php?deleteid=<?php echo $row['id'];?>" class="text-dark text-decoration-none">Delete</a></button>
                    </td>
                </tr>
            <?php
            $i++;
            }
            ?>

        </tbody>
    </table>

</div>

</body>
</html>