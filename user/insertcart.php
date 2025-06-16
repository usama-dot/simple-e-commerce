


<?php 
session_start();

if (isset($_SESSION['user'])) {
    # code...


if (isset($_POST['addCart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];

    // ✅ Initialize cart if not set (handles session_destroy case)
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // ✅ Duplicate check
    $check_product = array_column($_SESSION['cart'], 'productName');
    if (in_array($product_name, $check_product)) {
        echo "
        <script>
            alert('Product Already Added');
            window.location.href='index.php';
        </script>
        ";
        exit;
    }

    // ✅ Add to cart
    $_SESSION['cart'][] = array(
        'productName' => $product_name,
        'productPrice' => $product_price,
        'productQuantity' => $product_quantity
    );

    header("Location: viewCart.php");
    exit;
}


// removing cart 
if(isset($_POST['remove'])){
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header("location:viewCart.php");
            exit;
        }
    }
}

if (isset($_POST['update'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $item = $_POST['item'];

    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $item) {
            $_SESSION['cart'][$key] = array(
                'productName' => $product_name,
                'productPrice' => $product_price,
                'productQuantity' => $product_quantity
            );
            header("Location: viewCart.php");
            exit;
        }
    }
}

}else{
    header("location:form/login.php");
}

?>
