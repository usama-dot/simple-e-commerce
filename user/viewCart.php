<?php 
// session_start();
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Detail</title>
    
</head>
<body>
    <?php include('header.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-light my-4 rounded">
                <h1 class = "text-warning">Cart Details</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-md-6 col-lg-9 col-sm-12">
                <table class="table table-bordered  text-center">
                    <thead class = "bg-danger text-white">
                        <tr>
                            <th>Sl No</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quanity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            $totalPrice =0;
                            $subtotal =0;
                            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                foreach ($_SESSION['cart'] as $key => $value){
                                    $totalPrice = $value['productPrice'] * $value['productQuantity'];
                                    $subtotal += $value['productPrice'] * $value['productQuantity'];$totalPrice = $value['productPrice'] * $value['productQuantity'];
                                   
                                    echo "
                                     <form action='insertcart.php' method='POST'>
                                        <tr>
                                            <td>" . ($key + 1) . "</td>
                                            <td><input type = 'hidden' value = '$value[productName]' name ='product_name'>$value[productName]</td>
                                            <td><input type = 'hidden' value = '$value[productPrice]' name ='product_price'>$value[productPrice]</td>
                                            <td><input type = 'text' value = '$value[productQuantity]' name ='product_quantity'></td>
                                            <td>$totalPrice</td>
                                            <td><button class='btn btn-warning' name = 'update'>Update</button></td>
                                            <td><button class='btn btn-danger' name = 'remove'>Delete</button></td>
                                            <td><input type = 'hidden' value = '$value[productName]' name ='item'></td>
                                        </tr>
                                        </form>
                                    ";
                                }
                            } else {
                                echo "<tr><td colspan='7'>Cart is empty</td></tr>";
                            }
                        ?>


                         
                     
                    </tbody>
                </table>
            </div>
                <div class = "col-lg-3 text-center">
                    <h3>Total</h3>
                    <h1 class = "text-white bg-danger"><?php echo number_format($subtotal,2);?></h1>
                </div>
        </div>
    </div>
</body>
</html>