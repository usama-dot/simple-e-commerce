<?php
include("../connection/config.php");

if (isset($_POST['register_account'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_number = $_POST['user_number'];

    if ($user_name == '' || $user_email == '' || $user_password == '' || $user_number == '') {
        echo "<script>alert('Please fill in all fields');</script>";
    } else {
        $insert_data = "INSERT INTO user_panel (user_name, user_email, user_password, user_number) 
                        VALUES ('$user_name', '$user_email', '$user_password', $user_number)";
        
        $run_query = mysqli_query($conn, $insert_data);

        if ($run_query) {
            echo "<script>
                alert('Registered Successfully');
                window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>alert('Something went wrong while registering');</script>";
        }
    }
}
?>
