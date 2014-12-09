<?php
session_start();

$index = $_GET['index'];
unset($_SESSION['names'][$index]);
$_SESSION['names'] = array_values($_SESSION['names']);

header('location:list.php');
?>







