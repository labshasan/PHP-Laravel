<?php
include_once "Configuration.php";
session_start();


function add($product_name, $quantity)
{
    global $ProductSessionKeyName;
    if(!array_key_exists($ProductSessionKeyName, $_SESSION )){
        $_SESSION[$ProductSessionKeyName] = array();
    }

    $order_no = (count($_SESSION[$ProductSessionKeyName])+1);

    $_SESSION[$ProductSessionKeyName][$order_no] = array('product_name' => $product_name,
        'quantity' => $quantity
    );
}

?>