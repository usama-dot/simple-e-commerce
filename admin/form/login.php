

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin -Index page</title>
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
<body class = "bg-secondary">
    <div class="container ">

        <div class="row ">
            <div class="col-md-6 m-auto border shadow  font-monospace bg-white p-3 border-primary mt-4">

                <form action="login1.php" method="post">
                    <div class="mb-3">
                        <p class = "text-center text-warning fs-3 fw-bold">Login</p>
                    </div>

                    <div class="form-outine  mb-3">
                        <label for="admin_name" class = "form-label">Username</label>
                        <input type="text" placeholder = "Enter user name" class = "form-control" name = "user_name" required autocomplete = "off">
                    </div>
                     <div class="form-outine  mb-3">
                        <label for="admin_password" class = "form-label">Password</label>
                        <input type="password" placeholder = "Enter your password" class = "form-control" name = "user_password" required autocomplete = "new-password">
                    </div>
                   
                   
                    <button class ="form-control bg-danger my-3 fs-5 fw-bold text-white" name = "login">Login</button>
                     
                    <p class = "small fw-bold mt-3 text-center">Don't have an account ? <a href="register.php" class = "text-danger">Register</a></p>

                </form>

            </div>
        </div>
       
    </div>



</body>
</html>




