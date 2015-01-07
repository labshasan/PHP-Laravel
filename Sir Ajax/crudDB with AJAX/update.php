<?php

include_once('lib/library.php');
//$product = getProductDetail($_GET['index']);
$index = $_GET['index'];
$conn = mysql_connect('localhost','root','') or die('Cannot Connect to Server');
$db = mysql_select_db('shop',$conn)or die('Cannot Select Database');

$query = "SELECT * FROM products WHERE id=$index";
$result = mysql_query($query);
?>

<html>
<body>
<form method="post" action="edit.php">
<fieldset>

    <legend>Edit Your Item</legend>
    <?php    while ( $db_field = mysql_fetch_assoc($result)): ?>
        <label>Product Name</label>
        <input type= "text" name= "product_name" value=<?php echo $db_field['title'];?>>

        <label>Product Qty</label>
        <input type= "text" name= "product_qty" value=<?php echo $db_field['qty'];?>>
    <?php endwhile; ?>
        <input type="submit" value="Submit"/>
        <input type= "hidden" name= "product_index" value=<?php echo $_GET['index'];?>>

</fieldset>
</form>
</body>
</html>



