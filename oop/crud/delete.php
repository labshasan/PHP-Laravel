<?php

include_once('lib/library.php');
$student = delStudent($_GET['index']);
header('location:list.php');
?>







