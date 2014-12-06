<?php
include_once('lib/library.php');

function addItemToSession($product_name='',$product_qty=0)
{
    if(empty($product_name)){
        return;
    }

    if(!array_key_exists('names',$_SESSION)){
        $_SESSION['names']= array();
    }

    $length = count($_SESSION['names']);
    $_SESSION['names'][$length] = array('product_name'=>$product_name,
        'product_qty'=>$product_qty);

}

function editItemToSession($product_index, $product_name='',$product_qty=0)
{

    if(empty($product_name)){
        return;
    }

    if(!array_key_exists('names',$_SESSION)){
        $_SESSION['names']= array();
    }

    $_SESSION['names'][$product_index]['product_name']= $product_name;
    $_SESSION['names'][$product_index]['product_qty']= $product_qty;
}

function getProductDetail($index){

    return $product = array('name'=>$_SESSION['names'][$index]['product_name'],
        'qty'=>$_SESSION['names'][$index]['product_qty']);
}

function getData($data){
    return $data;
}

function postData($data){
    return $data;
}