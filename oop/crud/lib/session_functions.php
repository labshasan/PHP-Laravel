<?php
include_once('lib/library.php');

function addItem($student_name='',$student_age=0,$student_gender,$student_department,$student_hobby)
{
    if (empty($student_name)) {
        return;
    }

    if (!array_key_exists('names', $_SESSION)) {
        $_SESSION['names'] = array();
    }

    $length = count($_SESSION['names']);
    $_SESSION['names'][$length] = array('id'=>$length+1,'sname' => $student_name,
        'age' => $student_age, 'gender' => $student_gender,
        'department' => $student_department, 'hobby' => $student_hobby);
    /*echo "<pre>";
    print_r($_SESSION);die();*/
}
function editItem($student_index,$student_name='',$student_age=0,
                           $student_gender,$student_department,$student_hobby)
{
    //$index = $_SESSION['edit_index'];
    if(empty($student_name)){
        return;
    }

    if(!array_key_exists('names',$_SESSION)){
        $_SESSION['names']= array();
    }

    $_SESSION['names'][$student_index-1]['sname']= $student_name;
    $_SESSION['names'][$student_index-1]['age']= $student_age;
    $_SESSION['names'][$student_index-1]['gender']= $student_gender;
    $_SESSION['names'][$student_index-1]['department']= $student_department;
    $_SESSION['names'][$student_index-1]['hobby']= $student_hobby;
}
function getAllStudents(){
    if(!array_key_exists('names',$_SESSION)){
        $_SESSION['names']= array();
    }
    /*echo "<pre>";
    print_r($_SESSION);die();*/
    return $_SESSION['names'];
}
function getStudent($index){
    //$id = $index - 1;
    return $_SESSION['names'][$index-1];
}

function delStudent($index){
    //$id = $index - 1;
    unset($_SESSION['names'][$index-1]);
    $_SESSION['names'] = array_values($_SESSION['names']);
}
