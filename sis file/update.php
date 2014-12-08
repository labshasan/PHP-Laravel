<?php
include_once('lib/library.php');
$modifyindex = getIndex();
$modifyItem = getModifyDetail($modifyindex);
print_r($modifyItem);
?>

<html>
<body>
<form method="post" action="modify.php">
    <fieldset>

        <legend>Change Student Information</legend>

        <label>Student Name</label>
        <input type= "text" name= "student_name" value='<?php echo $modifyItem['student_name']; ?>'>

        <label>Class</label>
        <input type= "text" name= "student_class" value='<?php echo $modifyItem['student_class'];?>'>



        <input type="submit" value="Submit"/>
        <input type= "text" name="student_id"  value='<?php echo $modifyindex;?>'>

    </fieldset>
</form>
</body>
</html>