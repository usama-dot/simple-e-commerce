<?php 
include("config.php");


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
     <a href="../mystore.php" class = "btn btn-primary mt-3">Back to dashboard</a>

        <div class="row">
            
            <div class="col-md-6 m-auto border border-primary mt-4">

                <form action="" method="post" enctype = "multipart/form-data">
                    <div class="mb-3">
                        <p class = "text-center text-warning fs-3 fw-bold">Product Details</p>
                    </div>

                    <div class="form-outine  mb-3">
                        <label for="product_name" class = "form-label">Product Name</label>
                        <input type="text" placeholder = "Enter product name" class = "form-control" name = "product_name" required>
                    </div>
                     <div class="form-outine  mb-3">
                        <label for="product_price" class = "form-label">Product Pirce</label>
                        <input type="text" placeholder = "Enter product price" class = "form-control" name = "product_price" required>
                    </div>
                     <div class="form-outine  mb-3">
                        <label for="product_image" class = "form-label">Add Product Image</label>
                        <input type="file"  class = "form-control" name = "product_image" required>
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
                    <button class ="form-control bg-danger my-3 fs-5 fw-bold text-white" name = "submit">Upload</button>
                </form>

            </div>
        </div>
       
    </div>


    <div class="container">

        <div class="row">

            <div class="col-md-8 m-auto">
                
                   <table class="table border border-warning fs-5 font-monospace table-hover my-4">
                    <thead class = "text-center bg-dark text-white">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class=" text-center">
                        <?php 
                            // fetching data 
                            $select_query_data= "SELECT * FROM `product_table`";
                            $query_data_run = mysqli_query($conn,$select_query_data);
                            ;
                            while ($result_data = mysqli_fetch_assoc($query_data_run)) {
                                $product_id =$result_data['product_id'];
                                $product_name =$result_data['product_name'];
                                $product_price =$result_data['product_price'];
                                $product_image =$result_data['product_image'];
                                $product_category =$result_data['product_category'];

                                echo "

                                    <tr>
                                        <td>$product_id</td>
                                        <td>$product_name</td>
                                        <td>$product_price</td>
                                        <td><img src = 'uploadimages/$product_image' alt ='$product_name' height ='80px'/></td>
                                        <td>$product_category</td>
                                        
                                        <td><a href='update_product.php?product_id=$product_id' class = 'btn btn-warning'>Update</a></td>
                                        <td><a href='remove_product.php?product_id=$product_id' class = 'btn btn-danger'>Remove</a></td>
                                        
                                    </tr>

                                ";
                            }
                        
                        
                        
                        ?>
                    
                        </tbody>
                        </table>

                    </div>
                </div>
            </div>

</body>
</html>


<?php 

    

    if (isset($_POST['submit'])) {

        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_category = $_POST['product_pages'];
        

        $product_image = $_FILES['product_image']['name'];
        $tmp_image = $_FILES['product_image']['tmp_name'];


        // for pictures moving folder
        if ($product_name == '' || $product_price == '' || $product_image == '' || $product_category == '') {
            echo "<script>alert('Please fill all fields')</script>";
        }else {

            move_uploaded_file($tmp_image, "uploadimages/$product_image");
            

                // insert query 
            $insert_query= "INSERT INTO `product_table`(product_name,product_price,product_image,product_category)
            values('$product_name','$product_price','$product_image','$product_category')";
            $query_run =mysqli_query($conn,$insert_query);
            if ($query_run) {
                echo "<script>alert('Product Added Successfully')</script>";
                echo "<script>window.open('index.php')</script>";
            }
        }
      

       
    }




?>
