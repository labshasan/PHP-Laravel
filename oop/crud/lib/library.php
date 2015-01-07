<?php
session_start();

include_once('lib/configuration.php');
include_once('lib/storage_wrapper_functions.php');

if(DEBUG == 0){
    ini_set('display_errors','Off');
    error_reporting(0);
}
else{
    ini_set('display_errors','On');
    error_reporting(1);
}

function getData($data){

    if ($data == "a") {
        $data = 'ACCA';
    } elseif ($data == "b") {
        $data = 'BBA';
    } elseif ($data == "c") {
        $data = 'CSE';
    } else {
        $data = 'Demography';
    }
    return $data;
}

function postData($data){
    return $data;
}



