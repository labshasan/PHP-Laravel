<?php
session_start();
?>
<html>
<head></head>
<body>
<div>
    <!-- Use proper table format -->
    <table border="1">
        <thead>
        <tr>
            <th>SI No</th>
            <th>Product Name</th>
            <th>Product Qty.</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $order_no=$_GET['orderNo'];
        ?>
        <tr>
            <td><?=$order_no?></td>
            <td><?=$_SESSION['products'][$order_no]['product_name']?></td>
            <td><?=$_SESSION['products'][$order_no]['quantity']?></td>
            <td><a href='edit_product.php?orderNo=<?php echo $order_no; ?>' >Edit</a> | <a href='delete_product.php?orderNo=<?php echo $order_no; ?>' >Delete</a></td>
        </tr>
        </tbody>
    </table>
    <ul>
        <li><a href="add_product.php"> Add New Product</a></li>
    </ul>
</div>
</body>
</html>