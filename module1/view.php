<?php
session_start();
if( strtolower($_SERVER['REQUEST_METHOD']) == 'post' ){
	
	$full_name = "";
	$fathers_name = "";
	
	if(array_key_exists('full_name', $_POST)){
		$full_name = $_POST['full_name'];
	}
	
	if(array_key_exists('fathers_name', $_POST)){
		$fathers_name = $_POST['fathers_name'];
	}
	//$_SESSION['full_name'] = $full_name;
	//$_SESSION['fathers_name'] = $fathers_name;

    if(!array_key_exists('names', $_SESSION)){
        $_SESSION['names'] = array();
    }

    $length = count($_SESSION['names']);
    $_SESSION['names'][$length]['full_name'] = $full_name;
    $_SESSION['names'][$length]['fathers_name'] = $fathers_name;


    //same
    //$_SESSION['names'][$length] = array('full_name' => $full_name, 'fathers_name' =>  $fathers_name);

	
}else{
	header('location:http://localhost:8080/module1/understandingCRUD.html');
}




?>
<html>
<head></head>
<body>
<p>
<span><b>Full Name</b>: <?php echo $full_name; ?></span>
<br />
<span><b>Fathers Name</b>: <?php echo $fathers_name; ?></span>
</p>

<a href = "list.php">Go To List</a>
</body>
</html>






