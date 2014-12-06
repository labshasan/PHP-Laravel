<?php
    include_once('lib/library.php');
    $product = getProductDetail($_GET['index']);
?>


<html>
<body>
<form method="post" action="submit_edit.php">
<fieldset>

    <legend>Edit Your Item</legend>

        <label>Product Name</label>
        <input type= "text" name= "product_name" value='<?php echo $product['name']; ?>'>

        <label>Product Qty</label>
        <input type= "text" name= "product_qty" value='<?php echo $product['qty'];?>'>



        <input type="submit" value="Submit"/>
        <input type= "text" name= "productId" value='<?php echo $_GET['index'];?>'>

</fieldset>
</form>
</body>
</html>



