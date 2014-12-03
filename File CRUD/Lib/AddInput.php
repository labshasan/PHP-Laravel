<?php
include_once "Configuration.php";
include_once "csv_to_array.php";
session_start();


function add($product_name, $quantity)
{
    global $ProductSessionKeyName;
    global $csvFileName;
    $data = csv_to_array($csvFileName);

    if(!array_key_exists($ProductSessionKeyName, $data )){
        $data[$ProductSessionKeyName] = array();
    }
    print_r($data[$ProductSessionKeyName]);
    $order_no = (count($data[$ProductSessionKeyName])+1);

    $data[$ProductSessionKeyName][$order_no] = array('product_name' => $product_name,
        'quantity' => $quantity
    );
    array_to_csv($csvFileName, $data);
}

function getCount()
{
    global $ProductSessionKeyName;
    global $csvFileName;
    $data = csv_to_array($csvFileName);
    if(!array_key_exists($ProductSessionKeyName, $data )){
        $data[$ProductSessionKeyName] = array();
    }
    $order_no=count($data[$ProductSessionKeyName]);
    return $order_no;
}

function getProducts()
{
    global $ProductSessionKeyName;
    global $csvFileName;
    $data = csv_to_array($csvFileName);
    if(!array_key_exists($ProductSessionKeyName, $data )){
        $data[$ProductSessionKeyName] = array();
    }

    return $data;
}

?>