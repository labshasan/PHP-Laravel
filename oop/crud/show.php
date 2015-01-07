<?php
include_once('lib/library.php');
$student = getStudent($_GET['index']);
/*echo "<pre>";
print_r($_SESSION['names']);die();*/

?>

<html>
<head></head>
<body>
<p>
<span><b>Name</b>:<?php echo $student['sname']; ?></span>
<br/>
<span><b>Age</b>: <?php  echo $student['age']; ?></span>
<br/>
<span><b>Gender</b>:<?php echo $student['gender']; ?></span>
<br/>
<span><b>Department</b>: <?php  echo $student['department']; ?></span>
<br/>
<span><b>Hobby</b>:<?php echo $student['hobby']; ?></span>
</p>
    <a href="list.php">Go to list</a>
</body>
</html>






