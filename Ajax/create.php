<?php
include_once('lib/library.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Application Form</title>
    <meta charset="utf-8">
    <!-- Include meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include bootstrap stylesheets -->
    <link rel="stylesheet" href="lib/bootstrap.css">
<body>
<h1>Student Information Form</h1>
<form method="post" action="index.php" class="form-horizontal" role="form">
    <fieldset>

        <legend>Create Student Information</legend>
        <div class="form-group">
        <label class="control-label col-md-2" for="create_student_fname">First Name:</label>
            <div class="col-md-10">
                <input type="text" name="student_fname" id="create_student_fname" value=""/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_lname">Last Name:</label>
            <div class="col-md-10">
                <input type="text" name="student_lname" id="create_student_lname" value=""/>
            </div>
        </div>

        <!-- Other controls removed -->

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_addbtn"></label>
            <div class="col-md-10">
                <input class="btn-default" type="submit" id="create_student_addbtn" value="Add Student"/>
            </div>
        </div>


    </fieldset>
</form>


<script type='text/javascript' src='jquery-1.5-min.js'></script>
<script type="text/javascript">

    function addData(){
            //todo
    }

    $(document).ready(function(){
        $("#create_student_addbtn").bind("click", addData);
    });
</script>
</body>
</html>





