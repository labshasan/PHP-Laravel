<?php

include_once "Configuration.php";




function array_combine2($arr1, $arr2) {
    $count = min(count($arr1), count($arr2));
    return array_combine(array_slice($arr1, 0, $count), array_slice($arr2, 0, $count));
}



/**
 * Convert a comma separated file into an associated array.
 * The first row should contain the array keys.
 *
 * Example:
 *
 * @param string $filename Path to the CSV file
 * @param string $delimiter The separator used in the file
 * @return array
 * @link http://gist.github.com/385876
 * @author Jay Williams <http://myd3.com/>
 * @copyright Copyright (c) 2010, Jay Williams
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
function csv_to_array($filename='', $delimiter=',')
{
    //if(!file_exists($filename) || !is_readable($filename))
    //    return FALSE;
    echo $filename;
    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data= array_combine2($header, $row);
        }
        fclose($handle);
    }
    return $data;
}
/**
 * Example
 */
//print_r(csv_to_array('example.csv'));

function array_to_csv($filename, $data)
{
    global $ProductSessionKeyName;
   //$filename = "mydata.cvs";
   $handle = fopen($filename, "w");
   //fwrite($handle, $data);

    foreach ($data[$ProductSessionKeyName] as $id=>$value)
    {
        echo $id;
        echo ' ';
        echo $value;
        echo ' ';
        $line = $id . ' ' . $value;
        fputcsv($handle,explode(',',$line));
    }
   fclose($handle);

}

?> 