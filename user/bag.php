<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce bag page</title>
    <?php    include('header.php');
  
    include('../admin/product/config.php');
    ?>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">

    
   

    <h1 class='text-center text-warning my-4 font-monospace'>Bag</h2>
    

    <?php  
 

        $query_select_product = "SELECT * FROM `product_table`";
        $query_run =mysqli_query($conn,$query_select_product);
        while ($row_product =mysqli_fetch_assoc($query_run)) {
            $product_name = $row_product['product_name'];
            $product_price = $row_product['product_price'];
            $product_image = $row_product['product_image'];
            $product_category = $row_product['product_category'];

            if ($product_category == 'bag') {
         

            echo "
              <div class='col-md-6 col-lg-4 d-flex'>
                <form action='insertcart.php' method='post'>
                <div class='card m-auto h-100 ' style='width: 70%;'>
                    <img src='../admin/product/uploadimages/$product_image' class='card-img-top' alt='$product_name'>
                    <div class='card-body d-flex flex-column text-center'>
                    <h5 class='card-title text-danger fs-4 fw-bold'>$product_name</h5>
                    <p class='card-text text-danger fs-4 fw-bold'>Rs-$product_price</p>
                    <input type = 'hidden' class ='form-control' name = 'product_name' value = '$product_name'>
                    <input type = 'hidden' class ='form-control' name = 'product_price' value = '$product_price'>
                    <input type='number' name = 'product_quantity' min='1' max='20' placeholder='Quantity' class='form-control my-2'>
                    <input type='submit' name = 'addCart' value='Add to Cart' class='btn btn-warning text-white w-100 mt-auto'>
                    </div>
                </div>
                </form>
                </div>

            
            
            ";
        }
           
            }
    
    ?>

            </div>
        </div>
    </div>

</body>
</html>