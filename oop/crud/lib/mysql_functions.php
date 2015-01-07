<?php
include_once('lib/library.php');

$conn = mysql_connect(HOSTNAME,DB_USER,DB_PASSWORD) or die('Cannot Connect to Server');
$db = mysql_select_db(DB_NAME,$conn) or die('Cannot Connect to Database');

class StudentDataAccess{
    public $hostname;
    public $db_user;
    public $db_password;
    public $db_name;

    function __construct(){
        $this->hostname = HOSTNAME;
        $this->db_user = DB_USER;
        $this->db_password = DB_PASSWORD;
        $this->db_name = DB_NAME;
    }

    function addItem(){

    }

    function editItem(){

    }

    function getAllStudents(){

    }

    function getStudent(){

    }

    function delStudent(){

    }
}

function addItem($student_name,$student_age,$student_gender,
                           $student_department,$student_hobby){

    $query = "INSERT INTO students ( sname, age, gender, department, hobby) VALUES ('$student_name',$student_age,'$student_gender','$student_department','$student_hobby')";
    //echo $query; die();
    mysql_query($query);
    if(mysql_errno()>0){
        echo mysql_error();
    }
}
function editItem($student_id,$student_name,$student_age,$student_gender,
                 $student_department,$student_hobby){

    $query = "UPDATE students SET sname = '$student_name', age = '$student_age', gender = '$student_gender', department = '$student_department', hobby = '$student_hobby' WHERE id='$student_id'";
    //echo $query; die();
    mysql_query($query);
    if(mysql_errno()>0){
        echo mysql_error();
    }
}

function getAllStudents(){
    $query = "SELECT * FROM students";
    $result = mysql_query($query);
    $rows = array();
    while($row = mysql_fetch_assoc($result)){
        $rows[] = $row;
    }
    /*echo "<pre>";
    print_r($rows); die();*/
    return $rows;
}

function getStudent($id=null){
    if(is_null($id)){
        exit();
    }
    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);
    return $row;
}

function delStudent($id=null){
    if(is_null($id)){
        exit();
    }
    $query = "DELETE FROM students WHERE id = $id";
    $result = mysql_query($query);
    return $result;
}
?>