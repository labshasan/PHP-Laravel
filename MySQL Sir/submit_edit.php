<?php
include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {

    $product_name = postData($_POST['product_name']);
    $product_qty = postData($_POST['product_qty']);
    $product_index = postData($_POST['productId']);

    editItemToSession($product_index, $product_name,$product_qty);
}

header('location:'.WWW_PATH.'list.php');
?>







