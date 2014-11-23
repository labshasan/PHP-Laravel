<?php
//print_r($_SERVER);

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
        header('location:http://localhost:8080/SimpleName.html');
}
else
{
    $fullname = "";
    $fathersname = "";
    if(array_key_exists('full_name', $_POST)){
        $fullname = $_POST['full_name'];

    }
    if(array_key_exists('fathers_name', $_POST)){
        $fathersname = $_POST['fathers_name'];
    }
}

?>

<html>

<head></head>

<label>PHP Code inside HTML:</label><br>
<span>Full Name: <?php echo $_POST['full_name'];?></span>
<br/>
<span>Father's Name: <?php echo $_POST['fathers_name'];?></span>


<br/>
<label>PHP Code inside HTML: using global variable</label><br>
<span>Full Name: <?php echo $fullname;?></span>
<br/>
<span>Father's Name: <?php echo $fathersname;?></span>

</html>



<?php
echo "<html>
<head></head>

<br><br>
<label>PHP Code inside HTML: using global variable</label><br>
<span>Full Name: $fullname</span>
<br/>
<span>Father's Name: $fathersname</span>

</html>";
?>