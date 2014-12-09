<?php

include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {

     $product_name = postData($_POST['product_name']);
     $product_qty = postData($_POST['product_qty']);

     addItemToDB($product_name,$product_qty);
}

else {
    header('location:'.WWW_PATH.'add.html');
}
header('location:'.WWW_PATH.'list.php');
?>








