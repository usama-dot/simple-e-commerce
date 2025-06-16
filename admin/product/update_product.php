<?php 
include("config.php");
    if (isset($_GET['product_id'])) {
        $product_id =$_GET['product_id'];


        //fetching data from db
        $select_query = "SELECT * FROM `product_table` where product_id = $product_id";
        $run_query_select=mysqli_query($conn,$select_query);
        $row_data = mysqli_fetch_assoc($run_query_select);

            $product_id =$row_data['product_id'];
            $product_name =$row_data['product_name'];
            $product_price =$row_data['product_price'];
            $product_image =$row_data['product_image'];
            $product_category =$row_data['product_category'];


        // inserting updated data 
        if (isset($_POST['update'])) {
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];            
            $product_category = $_POST['product_pages'];            

            $product_image= $_FILES['product_image']['name'];
            $tmp_image= $_FILES['product_image']['tmp_name'];

            
        // for pictures moving folder
        if ($product_name == '' || $product_price == '' || $product_image == '' || $product_category == '') {
            echo "<script>alert('Please fill all fields')</script>";
        }else {

            move_uploaded_file($tmp_image, "uploadimages/$product_image");
            

                // insert query 
            $update_query= "UPDATE `product_table` set product_name = '$product_name', product_price = '$product_price',
                             product_image = '$product_image', product_category= '$product_category' where product_id = $product_id"; 
            $query_run_update =mysqli_query($conn,$update_query);
            if ($query_run_update) {
                echo "<script>
                alert('Product Updated Successfully');
                window.location.href='index.php';
                </script>";
                
            }
        }
        }

    }

?>


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
<body>
    <div class="container ">

        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-4">

                <form action="" method="post" enctype = "multipart/form-data">
                    <div class="mb-3">
                        <p class = "text-center text-warning fs-3 fw-bold">Product Details</p>
                    </div>

                    <div class="form-outine  mb-3">
                        <label for="product_name" class = "form-label">Product Name</label>
                        <input type="text" value = "<?php echo $product_name; ?>" placeholder = "Enter product name" class = "form-control" name = "product_name" required>
                    </div>
                     <div class="form-outine  mb-3">
                        <label for="product_price" class = "form-label">Product Pirce</label>
                        <input type="text" value = "<?php echo $product_price; ?>" placeholder = "Enter product price" class = "form-control" name = "product_price" required>
                    </div>
                     <div class="form-outine  mb-3">
                        <label for="product_image" class = "form-label">Add Product Image</label>
                        <input type="file"  class = "form-control" name = "product_image" required>
                        <img src = "uploadimages/<?php echo $product_image; ?>" height = "90px" width ="200px" alt ="$product_name"/>
                    </div>
                     <div class="form-outine  mb-3">
                        <label class = "form-label">Select Page Categroy</label>
                        <select class="form-select" name = "product_pages"  required>
                            <option value ="home">Home</option>
                            <option value="laptop">Laptop</option>
                            <option value="bag">Bag</option>
                            <option value="mobile">Mobile</option>
                        </select>
                    </div>
                    <button class ="form-control bg-danger my-3 fs-5 fw-bold text-white" name = "update">Update</button>
                </form>

            </div>
        </div>
       
    </div>



  
</body>
</html>


