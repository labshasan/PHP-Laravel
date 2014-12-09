<?php
function addItemToDB($product_name='',$product_qty=0)
{

    //mysql

    $query = "INSERT INTO products (title, qty) VALUES('$product_name', $product_qty)";
    mysql_query($query);
    if(mysql_errno > 0){
        echo mysql_error();
        //die();
        //log error
    }
}

?>