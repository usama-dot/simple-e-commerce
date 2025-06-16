<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Register</title>
            <!-- bootsrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
</head>
<body class = "bg-secondary">
    <div class="tontainer">
        <div class="row">
            <div class="col-md-4  m-auto mt-5 bg-white">
                <form action="register1.php" method="post" class = "p-4">
                    <h2 class = "text-warning font-monospace mb-4 text-center">Register Admin</h2>

                    <div class="form-outline mb-3">
                        <label for="user_name" class ="form-label">Username</label>
                        <input type="text" name = "user_name" class = "form-control" 
                        placeholder="Enter user name" autocomplete = "off"  required>
                    </div>
                      <div class="form-outline mb-3">
                        <label for="user_email" class ="form-label">Email</label>
                        <input type="email" name = "user_email" class = "form-control" 
                        placeholder="Enter your email" autocomplete = "off"  required>
                    </div>
                      <div class="form-outline mb-3">
                        <label for="user_password" class ="form-label">Password</label>
                        <input type="password" name = "user_password" class = "form-control" 
                        placeholder="Enter your password" autocomplete = "new-password"  required>
                    </div>
                      <div class="form-outline mb-3">
                        <label for="user_number" class ="form-label">Mobile Number</label>
                        <input type="number" name = "user_number" class = "form-control" 
                        placeholder="Enter user number" autocomplete = "off"  required>
                    </div>
                    
                    
                        
                        <button class = "form-control btn btn-danger fs-5 fw-bold" name="admin_register">Register</button>
                        <p class = "small fw-bold mt-3 text-center">Already have an account ? <a href="login.php" class = "text-danger">Login</a></p>

                   

                </form>
            </div>
        </div>
    </div>
</body>
</html>