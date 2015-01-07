<?php
//$index = $_GET['index'];
$conn = mysql_connect('localhost','root','') or die('Cannot Connect to Server');
$db = mysql_select_db('shop',$conn)or die('Cannot Select Database');

$query = "SELECT * FROM products WHERE id=2";
$result = mysql_query($query);

//$length = mysql_fetch_assoc($result);

//echo "<pre>";
while ( $db_field = mysql_fetch_assoc($result)){
    echo $db_field['id'].''.$db_field['title'].''.$db_field['qty'];
}
?>