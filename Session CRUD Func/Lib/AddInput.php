<?php
include_once "/Const/Configuration.php";
session_start();

$keyname = $ProductSessionKeyName;

function add($product_name, $quantity)
{
    if(!array_key_exists($keyname, $_SESSION )){
        $_SESSION[$keyname] = array();
    }

    $order_no = (count($_SESSION[$keyname])+1);

    $_SESSION[$keyname][$order_no] = array('product_name' => $product_name,
        'quantity' => $quantity
    );
}

?>