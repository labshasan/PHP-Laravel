<?php
include_once('lib/library.php');

function addItem($student_name,$student_age,$student_gender,
                 $student_department,$student_hobby)
{

    $infoString = $student_name."\t".$student_age."\t".$student_gender."\t".$student_department."\t".$student_hobby."\n";
    $fp = fopen("textholder.txt", 'ab');
    flock($fp, LOCK_EX);
    fwrite($fp, $infoString, strlen($infoString));
    flock($fp, LOCK_UN);
    fclose($fp);
}

function editItem($student_index,$student_name='',$student_age=0,
                  $student_gender,$student_department,$student_hobby)
{

    $id = $student_index-1;

    //$student = array();
    if(empty($student_name))
    {
        return;
    }
    $fp = fopen("textholder.txt",'r+');
    $student = file("textholder.txt");
    $line = explode("\t",$student[$id]);

    $line[0] = $student_name;
    $line[1] = $student_age;
    $line[2] = $student_gender;
    $line[3] = $student_department;
    $line[4] = $student_hobby;
    $line = $line[0]."\t".$line[1]."\t".$line[2]."\t".$line[3]."\t".$line[4]."\n";

    $student[$id] = $line;
    /*echo "<pre>";
    print_r($student);die();*/

    $student = implode(array_values($student));


    fwrite($fp,$student);
    fclose($fp);
}

function getAllStudents(){
    $items = file("textholder.txt");
    $numberOfItems = count($items);
    $students = array();
    for ($i=0; $i<$numberOfItems; $i++)
    {
        $line = explode( "\t", $items[$i] );
        $students[] = array('id'=>$i+1,'sname' => $line[0],
            'age' => $line[1], 'gender' => $line[2],
            'department' => $line[3], 'hobby' => $line[4]);
    }
    /*echo "<pre>";
    print_r($students); die();*/
    return $students;
}

function getStudent($index){
    $id = $index - 1;
    $items = file("textholder.txt");
    $line = explode( "\t", $items[$id] );
    //$students = array();
    $students = array('sname' => $line[0],
        'age' => $line[1], 'gender' => $line[2],
        'department' => $line[3], 'hobby' => $line[4]);
    return $students;
}

function delStudent($index){
    $id = $index - 1;
    $items = file("textholder.txt");
//echo $items[$index];
    $remove = $items[$id];

    foreach($items as $key => $value)
        if(stristr($value, $remove)) unset($items[$key]);

    $data = implode(array_values($items));

    $file = fopen("textholder.txt",'w');
    fwrite($file, $data);
    fclose($file);
}