<?php

define('WWW_PATH','http://localhost:8080/sis/');
define('GET_ID','index');

//Here I am preserving table name / storage name used for storing  data - student.
$student_store = 'studentstore';

//Here I am preserving all columns/names used for posting data - student.
$student_keys = array(
    'student_name'=>'Student Name',
    'student_class' => 'Class'
);

define('SORT_COLUMN_STUDENT','student_name');
define('ID_COLUMN_STUDENT','student_id');