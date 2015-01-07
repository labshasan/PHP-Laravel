<?php

if(STORAGE == 'mysql'){
    include_once('lib/mysql_functions.php');
}
elseif(STORAGE == 'session'){
    include_once('lib/session_functions.php');
}
elseif(STORAGE == 'file'){
    include_once('lib/file_functions.php');
}