<?php
include_once "Lib/AddInput.php";
$order_no= getCount();
$products = getProducts();
//session_start();
//$order_no=count($_SESSION['products']);
//print_r($_SESSION);
?>
<html>
<head>
</head>
<body>
<div>
    <table border="1">
        <thead>
        <tr>
            <td>SI No </td>
            <td>Title</td>
            <td>Quantity</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php
        //for($i=1; $i <= $orderNo; $i++):
        foreach($products as $order_no => $value){
            ?>
            <tr>
                <td><?=$order_no?></td>
                <td><?=$products[$order_no]['product_name']?></td>
                <td><?=$products[$order_no]['quantity']?></td>
                <td><a href='edit_product.php?orderNo=<?php echo $order_no; ?>' >Edit</a> | <a href='delete_product.php?orderNo=<?php echo $order_no; ?>' >Delete</a> | <a href='show_product.php?orderNo=<?php echo $order_no; ?>' >Show</a></td>
            </tr>
<?php
//endfor;
        }
        ?>
        </tbody>
    </table>
    <ul>
        <li><a href="add_product.php">Add New Product</a></li>
    </ul>
</div>
</body>
</html>