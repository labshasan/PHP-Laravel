<?php


$index = $_GET['index'];
$conn = mysql_connect('localhost','root','') or die('Cannot Connect to Server');
$db = mysql_select_db('shop',$conn)or die('Cannot Select Database');

$query = "DELETE FROM products WHERE id=$index";
$result = mysql_query($query);

header('location:list.php');
?>







