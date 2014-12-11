<?php
include_once('constants.php');

$xmlfile = simplexml_load_file('sis.xml');

$user = $xmlfile->addChild('studentstore');

$fname = $user->addChild("student_fname", "babu");
$lname = $user->addChild("student_lname", "baba");
$address = $user->addChild("student_address", "mom");
$emailid = $user->addChild("student_email", "email@g.com");
$mphone = $user->addChild("student_mphone", "77434");
$user_notes = $user->addChild("student_dob", "1988-07-13");

$user->addAttribute("student_id", "3");

echo XMLFilePath;
$xmlfile->asXML(XMLFilePath);

?>