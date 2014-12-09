<?php
include_once('lib/library.php');
?>

<!DOCTYPE html>
<html>
<head><title>Student Application Form</title>
<body>
<h1>Student Information Form</h1>
<form method="post" action="index.php">
    <fieldset>

        <legend>Create Student Information</legend>

        <label>First Name:</label>
        <input type="text" name="student_fname" value=""/>

        <label>Last Name:</label>
        <input type="text" name= "student_lname" value=""/>

        <label>Address:</label>
        <input type="text" name= "student_address" value=""/>

        <label>E-mail:</label>
        <input type="text" name= "student_email" value=""/>

        <label>Mobile No:</label>
        <input type="text" name= "student_mphone" value=""/>

        <label>Date of Birth:</label>
        <input type="date" name= "student_dob" value="" placeholder="(Date of Birth)"/>

        <label>Gender: </label>
        <input type="radio" name= "student_gender" value="Male">Male</input><br />
        <input type="radio" name= "student_gender" value="Female">Female</input>
        <br />

        <label>Marital Status:</label>
        <select name="student_mstatus" value="">
            <option selected name="student_mstatus" value="single">Single</option>
            <option name="student_mstatus" value="married">Married </option>
        </select>
        <br />

        <label>Education</label>
        <br />
        <input type="checkbox" name="student_degree" value="ssc">SSC</input><br />
        <input type="checkbox" name="student_degree" value="hsc">HSC</input><br />
        <input type="checkbox" name="student_degree" value="honours">Honours</input><br />
        <input type="checkbox" name="student_degree" value="masters">Masters</input><br />

        <input type="submit" value="Submit"/>

    </fieldset>
</form>
</body>
</html>





