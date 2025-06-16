<?php
include("../product/config.php");

if (isset($_POST['admin_register'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
    $user_number = $_POST['user_number'];

    if ($user_name == '' || $user_email == '' || $user_password == '' || $user_number == '') {
        echo "<script>alert('Please fill in all fields');</script>";
    } else {
        

        $insert_data = "INSERT INTO `admin_table`(admin_name, admin_email, admin_password, admin_number) 
                        VALUES ('$user_name', '$user_email', '$hashed_password', '$user_number')";
        
        $run_query = mysqli_query($conn, $insert_data);

        if ($run_query) {
            echo "<script>
                alert('Admin registered successfully');
                window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>alert('Something went wrong while registering');</script>";
        }
    }
}
?>
