<?php
session_start();
$order_no=$_GET['orderNo'];
//echo $orderNo;
unset($_SESSION['products'][$order_no]);
//echo 'delete successfully.';
header('location:http://localhost:8080/Session CRUD/product_list.php');
?> 