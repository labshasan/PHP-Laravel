<?php
//mysql
$conn = mysql_connect('localhost', 'root','') or die('Cannot connect to Database Server;');
$db = mysql_select_db('shop',$conn) or die('');

?>