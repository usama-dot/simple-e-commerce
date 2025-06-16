<?php 
session_start();
include('product/config.php');


if (!isset($_SESSION['admin'])){
    // echo "<script>window.open('form/login.php')</script>";
    header("location:form/login.php");    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel</title>
       <!-- bootsrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- font awesome link -->
     
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
</head>
<body>
    <!-- navbar creating -->
        <nav class="navbar navbar-light bg-dark ">
            <div class="container-fluid text-white">
                <a class="navbar-brand"><h2 class = "text-white">My Store</h2></a>
                <span>
                    <i class = "fas fa-user-shield"></i>
                    Hello, <?php echo $_SESSION['admin']; ?> |
                    <i class = "fas fa-sign-out-alt"></i>
                    <a href="form/logout.php" class = "text-white text-decoration-none">Logout</a> |
                    <a href="../user/index.php" class = "text-white text-decoration-none">UserPanel</a>
                </span>
            </div>
        </nav>


    <!-- container for showing post and users -->
        <div class="container">
            <h2 class = "text-center my-4">Admin Dashboard</h2>
            <div class= " col-md-8 bg-danger text-center m-auto">
                <a href="product/index.php" class = "text-white text-decoration-none fs-3 fw-bold px-5">Add Post</a>
                <a href="users.php" class = "text-white text-decoration-none fs-3  fw-bold px-5">Users</a>
            </div>
        </div>

        <!-- footer including  -->
         <?php include('form/footer.php'); ?>
</body>
</html>