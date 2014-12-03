<?php
include_once "Lib/Configuration.php";
include_once "Lib/AddInput.php";


//session_start();
//echo "<pre>";
//print_r($_SERVER);
//print_r($_SESSION);
//print_r($_POST);
//echo "</pre>";
//form must be submitted to access this page
if( strtolower($_SERVER['REQUEST_METHOD']) == 'post' ){
    $product_name = "";
    $quantity = "";
    if(array_key_exists('product_name', $_POST)){
        $product_name = $_POST['product_name'];
    }
    if(array_key_exists('quantity', $_POST)){
        $quantity = $_POST['quantity'];
    }

    //func
    add($product_name,$quantity);
}else{
    header($ServerPath . 'add_product.php');
}
?>
<html>
<head></head>
<body>
<div>
    <dl>
        <dt><b>Product Name</b>:</dt>
        <dd><span><?php echo $product_name; ?></span></dd>
        <dt><b>quantity</b>:</dt>
        <dd><span><?php echo $quantity; ?></span></dd>
    </dl>
    <a href="product_list.php">Go to Product List</a>
</div>
</body>
</html>