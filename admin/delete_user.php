<?php 
    include('product/config.php');
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];


        $delete_query = "DELETE FROM `admin_table` where id = $delete_id";
        $run_query =mysqli_query($conn,$delete_query);
        if ($run_query) {
            echo "<script>
                alert('Delete successfully');
                window.location.href='users.php';
            </script>";
        }
    }



?>