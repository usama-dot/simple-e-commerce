<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin users</title>
         <!-- bootsrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
</head>
<body>
    <?php include('mystore.php'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10">
                <table class="table table-bordered bg-secondary text-center text-white">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $count = 0;
                            include('product/config.php');

                            // fetching record data users 
                            $select_users_query = "SELECT * FROM `admin_table`";
                            $run_query_users = mysqli_query($conn,$select_users_query);
                            $row_count = mysqli_num_rows($run_query_users);

                            while($row_count_result=mysqli_fetch_assoc($run_query_users)){
                                $user_id =$row_count_result['id'];   
                                $user_name =$row_count_result['admin_name'];
                                $user_email =$row_count_result['admin_email'];
                                $user_number =$row_count_result['admin_number'];
                                $count++;

                                       echo "

                                        <tr>
                                            <td>$count</td>
                                            <td>$user_name</td>
                                            <td>$user_email</td>
                                            <td>$user_number</td>
                                            <td><a href='delete_user.php?delete=$user_id' class = 'btn btn-danger'>Delete</a></td>
                                            
                                        </tr>
                            
                            
                            ";
                            }
                            

                        ?>
                     
                    </tbody>
                </table>
            </div>
            <div class="col-md-2 text-center">
                <h1 class = "">Total</h1>
                <h2 class ="bg-danger text-white"><?php echo $row_count; ?></h2>
            </div>
        </div>
    </div>

            <!-- footer including  -->
         <?php include('form/footer.php'); ?>
</body>
</html>