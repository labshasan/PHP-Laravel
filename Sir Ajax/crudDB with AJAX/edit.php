<?php
include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {

    $product_name = postData($_POST['product_name']);
    $product_qty = postData($_POST['product_qty']);
    $product_index = postData($_POST['product_index']);

    //editItemToSession($product_index,$product_name,$product_qty);
    $conn = mysql_connect('localhost','root','') or die('Cannot Connect to Server');
    $db = mysql_select_db('shop',$conn)or die('Cannot Select Database');

    $query = "UPDATE products SET title = '{$product_name}', qty = '{$product_qty}' WHERE id=$product_index";
    echo $query;
    mysql_query($query);
}

header('location:'.WWW_PATH.'list.php');
?>







