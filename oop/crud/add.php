<?php

include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {

     $student_name = postData($_POST['student_name']);
     $student_age = postData($_POST['student_age']);
     $student_gender = postData($_POST['student_gender']);
     $student_department = getData($_POST['student_department']);
     $student_hobby = postData($_POST['student_hobby']);

     addItem($student_name,$student_age,$student_gender,
        $student_department,$student_hobby);
}

else {
    header('location:'.WWW_PATH.'create.html');
}
header('location:'.WWW_PATH.'list.php');
?>








