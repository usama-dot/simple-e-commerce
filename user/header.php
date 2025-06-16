<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
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
  <?php 
  session_start();

  $count = 0;
  if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
  }
  
  ?>
     <nav class="navbar navbar-light bg-light ">
            <div class="container-fluid font-monospace">
                <a class="navbar-brand"><h2 class = "text-warning">Dashboard</h2></a>
                <div class = "d-flex">
                <a href="index.php" class = "text-warning text-decoration-none pe-2"><i class = "fas fa-home"></i>Home</a>
                <a href="viewCart.php" class = "text-warning text-decoration-none pe-2"><i class = "fas fa-shopping-cart"></i>Cart-(<?php echo $count; ?>)</a>
                <span class = "text-warning pe-2">
                  <i class = "fas fa-user-shield "></i>Hello,
                  
                  <?php 

                    if (isset($_SESSION['user'])) {
                      echo $_SESSION['user'];
                      
                      echo "
                       | <a href='../user/form/logout.php'  class = 'text-warning text-decoration-none pe-2'><i class ='fas fa-sign-in-alt'></i>Logout |</a>
                      ";
                    }else{
                       echo "         
                        <a href='../user/form/login.php'  class = 'text-warning text-decoration-none pe-2'><i class ='fas fa-sign-in-alt'></i>Login |</a>
                      ";
                    }
                
                  ?>
                  
                  <a href="../admin/mystore.php"  class = "text-warning text-decoration-none pe-2">Admin</a>
                </span>
                </div>
            </div>
        </nav>
        <div class = "bg-danger text-center">
          <a href="laptop.php" class = "text-light text-decoration-none px-3 fs-3 fw-bold font-monospace">Laptops</a>
          <a href="mobile.php" class = "text-light text-decoration-none px-3 fs-3 fw-bold font-monospace">Mobiles</a>
          <a href="bag.php" class = "text-light text-decoration-none px-3 fs-3 fw-bold font-monospace">Bags</a>
        </div>
</body>
</html>