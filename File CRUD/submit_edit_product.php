<?php
session_start();
//echo "<pre>";
//print_r($_SERVER);
//print_r($_SESSION);
//print_r($_POST);
//echo "</pre>";
//form must be submitted to access this page
if( strtolower($_SERVER['REQUEST_METHOD']) == 'post' ){
    $product_name = "";
    $quantity = "";
    $deliveryDate = "";
    if(array_key_exists('product_name', $_POST)){
        $product_name = $_POST['product_name'];
    }
    if(array_key_exists('quantity', $_POST)){
        $quantity = $_POST['quantity'];
    }
    if(!array_key_exists('products', $_SESSION )){
        $_SESSION['products'] = array();
    }
    $order_no = $_SESSION['PON'];
// echo $orderNo;
    $oldOrder=$_SESSION['products'][$order_no];
    $newOrder=array(
        'product_name' => $product_name,
        'quantity' => $quantity
    );
// echo "<pre>";
// print_r($_SESSION['products'][$orderNo]);
// print_r($newOrder);
    $editedOrder=array_replace($oldOrder, $newOrder);
// print_r(array_replace($oldOrder, $newOrder));
//echo "</pre/>";
    $_SESSION['products'][$order_no]=$editedOrder;
    header('location:http://localhost:8080/Session CRUD/product_list.php');
}else{
    header('location:http://localhost:8080/Session CRUD/add_product.php');
}
?>