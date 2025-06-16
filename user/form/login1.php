<?php
session_start();
include("../connection/config.php");

if (isset($_POST['login_account'])) {

    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    // select query for checking login info 
    $select_query="SELECT * FROM `user_panel` where user_name = '$user_name' or user_password = '$user_password'";
    $query_run =mysqli_query($conn, $select_query);
    $row_count = mysqli_num_rows($query_run);
    
    if ($row_count > 0) {
        $_SESSION['user'] = $user_name;
          echo "<script>
                alert('Login Successfully');
                window.location.href = '../index.php';
            </script>";
    }else{
          echo "<script>
                alert('Invalid username/password');
                window.location.href = 'login.php';
            </script>";
    }

}
?>
