<?php
include_once('constants.php');

$xmlfile = simplexml_load_file('sis.xml');
unset($xmlfile->studentstore[1]);

echo XMLFilePath;
$xmlfile->asXML(XMLFilePath);

?>