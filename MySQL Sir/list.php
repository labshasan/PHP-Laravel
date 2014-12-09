<?php
session_start();
if(!array_key_exists('names',$_SESSION)){
    $_SESSION['names']= array();
}


$length = count($_SESSION['names']);
print_r($_SESSION);

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
    for ($i=0;$i<$length;$i++):
    ?>
     <tr><td><?php echo $i+1?></td>
        <td><?php echo $_SESSION['names'][$i]['product_name']?></td>
        <td><?php echo $_SESSION['names'][$i]['product_qty']?></td>
        <td><a href='edit.php?index=<?php echo $i?>'>Edit</a> | <a href='delete.php?index=<?php echo $i?>'>Delete</a> | <a href='show.php?index=<?php echo $i?>'>Show</a></td>
    </tr>
    <?php
    endfor;
    ?>
    </tbody>
    </table>
    <ul>
        <li><a href="add.html">Add new Record</a></li>
    </ul>
</div>

</body>
</html>






