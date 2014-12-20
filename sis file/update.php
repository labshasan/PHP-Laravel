<?php
include_once('lib/library.php');
$modifyindex = getIndex();
$xmlfile = simplexml_load_file('lib/sis.xml');
$modifyItem = getModifyDetail($xmlfile, $modifyindex);
print_r($modifyItem);
?>

<html>
<body>
<form method="post" action="modify.php">
    <fieldset>

        <legend>Create Student Information</legend>

        <label>First Name:</label>
        <input type="text" name="student_fname" value='<?php echo $modifyItem->student_fname; ?>'/>
        <br/>

        <label>Last Name:</label>
        <input type="text" name= "student_lname" value='<?php echo $modifyItem->student_lname; ?>'/>
        <br/>

        <label>Address:</label>
        <input type="text" name= "student_address" value='<?php echo $modifyItem->student_address; ?>'/>
        <br/>

        <label>E-mail:</label>
        <input type="text" name= "student_email" value='<?php echo $modifyItem->student_email; ?>'/>
        <br/>

        <label>Mobile No:</label>
        <input type="text" name= "student_mphone" value='<?php echo $modifyItem->student_mphone; ?>'/>
        <br/>

        <label>Date of Birth:</label>
        <?php
        if(isset($modifyItem->student_dob))
        $StrFormat = strtotime($modifyItem->student_dob . " 00:00:00");

        ?>

        <input type="date" name= "student_dob" value='<?php
        if(isset($StrFormat))
            echo date('Y-m-d',$StrFormat);
        ?>' placeholder="(Date of Birth)"/>
        <br/>

        <label>Gender: </label>
        <input type="radio" name= "student_gender" value="Male"
            <?php if (isset($modifyItem->student_gender) &&
                $modifyItem->student_gender=="Male") echo "checked";?>>Male</input><br />
        <input type="radio" name= "student_gender" value="Female"
            <?php if (isset($modifyItem->student_gender) &&
                $modifyItem->student_gender=="Female") echo "checked";?> >Female</input>
        <br />

        <label>Marital Status:</label>
        <select name="student_mstatus" value='<?php echo $modifyItem->student_mstatus; ?>'>
            <option name="student_mstatus" value="single"
                <?php if(isset($modifyItem->student_mstatus) &&
                    $modifyItem->student_mstatus == "single") echo "selected"; ?>>Single</option>
            <option name="student_mstatus" value="married"
                <?php if(isset($modifyItem->student_mstatus) &&
                    $modifyItem->student_mstatus == "married") echo "selected"; ?>>Married </option>
        </select>
        <br />

        <label>Education</label>
        <br />
        <input type="radio" name="student_degree" value="ssc"
            <?php if(isset($modifyItem->student_degree) &&
                $modifyItem->student_degree == "ssc") echo "checked"; ?>>SSC</input><br />
        <input type="radio" name="student_degree" value="hsc"
            <?php if(isset($modifyItem->student_degree) &&
                $modifyItem->student_degree == "hsc") echo "checked"; ?>>HSC</input><br />
        <input type="radio" name="student_degree" value="honours"
            <?php if(isset($modifyItem->student_degree) &&
                $modifyItem->student_degree == "honours") echo "checked"; ?>>Honours</input><br />
        <input type="radio" name="student_degree" value="masters"
            <?php if(isset($modifyItem->student_degree) &&
                $modifyItem->student_degree == "masters") echo "checked"; ?>>Masters</input><br />
        <br/>

        <label>Hobbies:</label>
        <br />
        <input type="checkbox" name="student_hobby_reading" value="student_hobby_reading"
            <?php if(isset($modifyItem->student_hobby_reading) &&
                $modifyItem->student_hobby_reading == "student_hobby_reading") echo "checked"; ?>>Reading Books</input><br />
        <input type="checkbox" name="student_hobby_movie" value="student_hobby_movie"
            <?php if(isset($modifyItem->student_hobby_movie) &&
                $modifyItem->student_hobby_movie == "student_hobby_movie") echo "checked"; ?>>Watching Movies</input><br />
        <input type="checkbox" name="student_hobby_travel" value="student_hobby_travel"
            <?php if(isset($modifyItem->student_hobby_travel) &&
                $modifyItem->student_hobby_travel == "student_hobby_travel") echo "checked"; ?>>Traveling</input><br />
        <input type="checkbox" name="student_hobby_playing" value="student_hobby_playing"
            <?php if(isset($modifyItem->student_hobby_playing) &&
                $modifyItem->student_hobby_playing == "student_hobby_playing") echo "checked"; ?>>Playing</input><br />


        <input type="hidden" name="student_id" value='<?php echo $modifyindex; ?>'/><br />
        <input type="submit" value="Submit"/>

    </fieldset>
</form>
</body>
</html>