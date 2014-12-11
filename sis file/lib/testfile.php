<?php
include_once('constants.php');

$xmlfile = simplexml_load_file('sis.xml');

echo 'PRINT_R';
echo '<br/>';
print_r($xmlfile);
echo '<br/>';
?>

<html>
<body>

<?php
foreach ($xmlfile as $student) {
    echo '<br/>';
    echo "
            <tr>
                    <td>{$student->attributes()->student_id}</td>
                    <td>{$student->student_fname}</td>
                    <td>{$student->student_lname}</td>
                    <td>{$student->student_address}</td>
                    <td>{$student->student_email}</td>
                    <td>{$student->student_mphone}</td>
                    <td>{$student->student_dob}</td>
            </tr>
            ";
    //<td>{date('Y-m-d', $student->student_dob))}</td>
    //$result = $date->format('Y-m-d H:i:s');
    echo '<br/>';
    ?>
<?php
    //$dobirth = '"' . $student->student_dob . '"';
    $StrFormat = strtotime($student->student_dob . " 00:00:00");
?>
    <input type="date" name= "student_dob"
           value='<?php echo date('Y-m-d',$StrFormat);?>' placeholder="(Date of Birth)"/>
<?php

}
?>




</body>
</html>