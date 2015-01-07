<?php

include_once('lib/library.php');
$student = getStudent($_GET['index']);
//print_r($student);die();
?>

<html>
<body>
<form method="post" action="edit.php">
    <table border=0>
        <tr bgcolor=#cccccc>
            <td width=150>STUDENT</td>
            <td width=170>REGISTRATION FORM</td>
        </tr>
        <br>
        <tr>
            <td>Name</td>
            <td align=left><input type="text" name="student_name" value="<?php echo $student['sname']?>" size=15 maxlength=30></td>
        </tr>

        <tr>
            <td>Age</td>
            <td align=left><input type="text" name="student_age" value="<?php echo $student['age']?>" size=3 maxlength=30></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td align=left><input type="radio" name="student_gender" value="Male" size=3 maxlength=3 <?php if($student['gender']== "Male") {echo "checked";} ?>>Male</td>
            <td align=left><input type="radio" name="student_gender" value="Female" size=3 maxlength=3 <?php if($student['gender']== "Female"){echo "checked";} ?>>Female</td>
        </tr>
        <tr>
            <td>Department</td>
            <td><select name="student_department">
                    <option value = "a" <?php if ($student['department'] == 'ACCA') echo 'selected="selected"';?>>ACCA</option>
                    <option value = "b" <?php if ($student['department'] == 'BBA') echo 'selected="selected"';?>>BBA</option>
                    <option value = "c" <?php if ($student['department'] == 'CSE') echo 'selected="selected"';?>>CSE</option>
                    <option value = "d" <?php if ($student['department'] == 'Demography') echo 'selected="selected"';?>>Demography</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hobbies<?php echo $student['hobby']?></td>
            <td align=left><input type="checkbox" name="student_hobby" value="Drawing" size=15 maxlength=3
                    <?php
                        if( trim($student['hobby']) == 'Drawing' ) {
                                echo 'checked="checked"';
                        }
                    ?>>Drawing
            </td>
            <td align=left><input type="checkbox" name="student_hobby" value="Singing" size=15 maxlength=3
                    <?php
                    if( trim($student['hobby']) == 'Singing' ) {
                        echo 'checked="checked"';
                    }
                    ?>>Singing
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td colspan=2 align=left><input type=submit value="Submit"></td>
        </tr>
    </table>
    <input type= "hidden" name= "student_index" value=<?php echo $_GET['index'];?>>
</form>
</body>
</html>



