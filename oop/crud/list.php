<?php
include_once('lib/library.php');
$students = getAllStudents();

/*echo "<pre>";
print_r($students);die();*/
$length = count($students);
?>

<html>
<head></head>
<body>
<div>
    <table border="1">
    <thead>
        <tr>
            <th>SL#</th>
            <th>Student Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Hobby</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sl = 1;
    foreach ($students as $val){
    ?>
     <tr><td><?php echo $sl;$sl++ ?></td>
        <td><?php echo $val['sname']?></td>
        <td><?php echo $val['age']?></td>
        <td><?php echo $val['gender']?></td>
        <td><?php echo $val['department']?></td>
        <td><?php echo $val['hobby']?></td>
        <td><a href='update.php?index=<?php echo $val['id']?>'>Edit</a> |
            <a href='delete.php?index=<?php echo $val['id']?>'>Delete</a>|
            <a href='show.php?index=<?php echo $val['id']?>'>Show</a>
        </td>
    </tr>
    <?php
    };
    ?>
    </tbody>
    </table>
    <ul>
        <li><a href="create.html">Add new Record</a></li>
    </ul>
</div>

</body>
</html>