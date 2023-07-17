<?php
$database_object = new mysqli($dbhost_MET, $dbuser_MET, $dbpass_MET, $dbname_MET);

if($database_object->connect_error){
    die("Error connecting to MySQL database, $dbname_MET. Error: ".$database_object->connect_error);
    exit(999);
}
$database_object->set_charset("utf8");
?>