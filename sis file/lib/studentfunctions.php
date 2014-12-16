<?php
include_once('lib/library.php');

function GetAllStudents()
{
    file_put_contents(TXTFilePath, json_encode($_SESSION));
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);
}

function addItemToSession($data)
{
    if(empty($data))
    {
        return;
    }
    global $student_store;
    global $student_keys;

    if(!array_key_exists($student_store,$_SESSION)){
        $_SESSION[$student_store]= array();
    }
    $length = count($_SESSION[$student_store]);

    foreach($_POST as $pk => $pv) {
            if (empty($_SESSION[$student_store][$length])) {
                $_SESSION[$student_store][$length] = array();
            }
            foreach ($student_keys as $k1 => $v1) {
                if ($pk == $k1) {
                    if(isset($_POST[$pk]))
                        $_SESSION[$student_store][$length][$pk] = $_POST[$pk];
                    else
                        $_SESSION[$student_store][$length][$pk] = '';
                }
            }
    }

    //text file
    file_put_contents(TXTFilePath, json_encode($_SESSION));
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);

    print_r($_SESSION);

    //$_SESSION['names'][$length] = array('product_name'=>$product_name,
    //    'product_qty'=>$product_qty);


    /*$product_name='';$product_qty=0;


    if(!array_key_exists('names',$_SESSION)){
        $_SESSION['names']= array();
    }

    $length = count($_SESSION['names']);
    $_SESSION['names'][$length] = array('product_name'=>$product_name,
        'product_qty'=>$product_qty);*/

}

function getStudentCount()
{
    global $student_store;
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);
    if(isset($_SESSION[$student_store])) {
        $length = count($_SESSION[$student_store]);
        return $length;
    }
    else
        return 0;
}

function getIndex()
{
    $index = $_GET[GET_ID];
    return $index;
}

function deleteByGettingIndex()
{
    global $student_store;
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);

    if(!array_key_exists($student_store,$_SESSION)){
        $_SESSION[$student_store]= array();
    }

    $delID = getIndex();
    unset($_SESSION[$student_store][$delID]);

    $_SESSION[$student_store] = array_values($_SESSION[$student_store]);
    sortNSaveStudentInfo();

    file_put_contents(TXTFilePath, json_encode($_SESSION));
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);
}

function sortNSaveStudentInfo()
{
    global $student_store;

    if(!array_key_exists($student_store,$_SESSION)){
        $_SESSION[$student_store]= array();
    }
    $name = array();
    foreach ($_SESSION[$student_store] as $key => $val)
    {
        $name[$key] = $val[SORT_COLUMN_STUDENT];
    }
    array_multisort($name, SORT_ASC, $_SESSION[$student_store]);
}

function editItemToSession($xmlfile, $data)
{
    if(empty($data))
    {
        return;
    }
    global $student_store;
    global $student_keys;

    $modify_index = $_POST[ID_COLUMN_STUDENT];


    $user = $xmlfile->xpath('//studentstore[@student_id="' . $modify_index . '"]');

    $user[0]->student_fname = $_POST['student_fname'];
    $user[0]->student_lname = $_POST['student_lname'];
    $user[0]->student_address = $_POST['student_address'];
    $user[0]->student_email = $_POST['student_email'];
    $user[0]->student_mphone = $_POST['student_mphone'];
    $user[0]->student_dob = $_POST['student_dob'];
    $user[0]->student_gender = $_POST['student_gender'];
    $user[0]->student_mstatus = $_POST['student_mstatus'];
    $user[0]->student_degree = $_POST['student_degree'];
    $user[0]->student_hobby_reading = $_POST['student_hobby_reading'];
    $user[0]->student_hobby_movie = $_POST['student_hobby_movie'];
    $user[0]->student_hobby_travel = $_POST['student_hobby_travel'];
    $user[0]->student_hobby_playing = $_POST['student_hobby_playing'];

    echo XMLFilePath;
    $xmlfile->asXML(XMLFilePath);

}

function getModifyDetail($xmlfile, $index)
{

    $studentToUpdate = array();
    foreach ($xmlfile as $student) {
        $i = $student->attributes()->student_id;

        if($i == $index) {
            return $student;
        }
    }
    return $studentToUpdate;
}

