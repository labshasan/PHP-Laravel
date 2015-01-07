<?php
include_once('lib/library.php');
$conn = mysql_connect('localhost','root','') or die('Cannot Connect to Server');
$db = mysql_select_db('shop',$conn)or die('Cannot Select Database');

$query = "SELECT * FROM products";
$result = mysql_query($query);
//arraySortByColumn($_SESSION['names'], 'product_name');
?>

<html>
<head></head>
<body>
<div>
    <table border="1">
    <thead>
        <tr>
            <th>SL#</th>
            <th>Product Name</th>
            <th>Product Qty</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $i =0;
        while ( $db_field = mysql_fetch_assoc($result)):
            $i++;
    ?>
     <tr><td><?php echo $i?></td>
        <td><?php echo $db_field['title']?></td>
        <td><?php echo $db_field['qty']?></td>
        <td><a href='update.php?index=<?php echo $db_field['id']?>'>Edit</a> | <a href='delete.php?index=<?php echo $db_field['id']?>'>Delete</a> | <a href='show.php?index=<?php echo $db_field['id']?>'>Show</a></td>
    </tr>
    <?php
        endwhile;
    ?>
    </tbody>
    </table>
    <ul>
        <li><a href="create.html">Add new Record</a></li>
    </ul>
</div>

</body>
</html>






