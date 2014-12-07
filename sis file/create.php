<?php
include_once('lib/library.php');
?>

<!DOCTYPE html>
<html>
<body>
<form method="post" action="index.php">
    <fieldset>

        <legend>Create Student Information</legend>

        <label>Student Name</label>
        <input type="text" name="student_name" value=""/>

        <label>Class</label>
        <input type="text" name= "student_class" value=""/>

        <input type="submit" value="Submit"/>

    </fieldset>
</form>
</body>
</html>