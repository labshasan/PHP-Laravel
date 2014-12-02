<?php
session_start();
$order_no=$_GET['orderNo'];
$_SESSION['PON']=$order_no;
?>
<html>
<head>
    <title>Order Your Desired Product:</title>
</head>
<header>
    <h3>BASIS PHP To Laravel</h3>
</header>
<body>
<form method="post" action="submit_edit_product.php" >
    <fieldset>
        <legend>Order Your Desired Product: </legend>
        <label>Product Name:</label>
        <input type="text" name="product_name" value="<?=$_SESSION['products'][$order_no]['product_name']?>" placeholder="Name of Product" required="required" />
        <label>Quantity:</label>
        <input type="number" name="quantity" value="<?=$_SESSION['products'][$order_no]['quantity']?>" placeholder="Quantity" required="required" min="1" />
        <input type="submit" value=" Update Product " />
    </fieldset>
</form>
</body>
</html>