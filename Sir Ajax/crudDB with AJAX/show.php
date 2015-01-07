<?php
$index = $_GET['index'];
$conn = mysql_connect('localhost','root','') or die('Cannot Connect to Server');
$db = mysql_select_db('shop',$conn)or die('Cannot Select Database');

$query = "SELECT * FROM products WHERE id=$index";
$result = mysql_query($query);

?>

<html>
<head></head>
<body>
<p>
<?php    while ( $db_field = mysql_fetch_assoc($result)): ?>
<span><b>Product Name</b>:<?php echo $db_field['title']; ?></span>
<br/>
<span><b>Product Qty</b>: <?php  echo $db_field['qty']; ?></span>
<?php endwhile; ?>
</p>
    <a href="list.php">Go to list</a>
</body>
</html>






