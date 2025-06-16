<?php 
    include('config.php');
    if (isset($_GET['product_id'])) {
        $product_id =$_GET['product_id'];


        $remove_query ="DELETE FROM `product_table` where product_id = $product_id";
        $query_run =mysqli_query($conn,$remove_query);
        if ($query_run) {
            echo "<script>alert(Product deleted successfully)";
            header("location:index.php");
        }
    }




?>