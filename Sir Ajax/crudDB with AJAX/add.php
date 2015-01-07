<?php

include_once('lib/library.php');
$is_success= false;
if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {

     $product_name = postData($_POST['product_name']);
     $product_qty = postData($_POST['product_qty']);

     //addItemToSession($product_name,$product_qty);
    $conn = mysql_connect('localhost','root','') or die('Cannot Connect to Server');
    $db = mysql_select_db('shop',$conn)or die('Cannot Select Database');

    $query = "INSERT INTO products (title,qty) VALUES ('$product_name',$product_qty)";
    $is_success = mysql_query($query);

 }
 else {
    header('location:'.WWW_PATH.'create.html');
}

if($is_success){
    header('location:'.WWW_PATH.'list.php');
}

?>








