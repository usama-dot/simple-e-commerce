<?php 
session_start();
include("../product/config.php");

if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    // Step 1: Get the user's row by username only (not password!)
    $select_query_login = "SELECT * FROM `admin_table` WHERE admin_name = '$user_name'";
    $query_run = mysqli_query($conn, $select_query_login);
    $row_count =mysqli_num_rows($query_run);
    if ($row_count > 0) {
        $row = mysqli_fetch_assoc($query_run);
        $hashed_password = $row['admin_password']; // assuming this is the hashed password column

        // Step 2: Verify the entered password with hashed password
        if (password_verify($user_password, $hashed_password)) {
            $_SESSION['admin'] = $user_name;
            echo "<script>
                alert('Login Successfully');
                window.location.href = '../mystore.php';
            </script>";
        } else {
            // Wrong password
            echo "<script>
                alert('Invalid username/password');
                window.location.href = 'login.php';
            </script>";
        }
    } else {
        // Username not found
        echo "<script>
            alert('Invalid username/password');
            window.location.href = 'login.php';
        </script>";
    }
}
?>
