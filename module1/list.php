<?php
session_start();
//print_r($_SESSION);
$length = count($_SESSION['names']);
?>

<html>
<head></head>
<body>
<div>
    <table border="1">
        <thead>

            <td>Sl</td>
            <td>Full Name</td>
            <td>Action</td>

        </thead>
        <tbody>

        <?php
            for($i=0; $i < $length; $i++){
                ?>
                <tr>
                    <td><?= $i+1; ?></td>
                    <td><?= $_SESSION['names'][$i]['full_name']; ?></td>
                    <td><?= $_SESSION['names'][$i]['fathers_name']; ?></td>
                    </tr>;
        <?php
            }
        ?>


        </tbody>

    </table>

<ul>
    <li>
    <a href = "add.html">Add View</a>
    </li>
</ul>

</div>

</body>
</html>