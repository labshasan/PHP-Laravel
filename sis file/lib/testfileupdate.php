<?php
include_once('constants.php');

$xmlfile = simplexml_load_file('sis.xml');
$user = $xmlfile->xpath('//studentstore[@student_id="' . 3 . '"]');

$user[0]->student_fname = "babu first name";
$user[0]->student_lname = "baba last name";
$user[0]->student_address = "mom inside";
$user[0]->student_email = "email1@g.com";
$user[0]->student_mphone = "77434";
$user[0]->student_dob = "1988-09-13";

echo XMLFilePath;
$xmlfile->asXML(XMLFilePath);

?>
