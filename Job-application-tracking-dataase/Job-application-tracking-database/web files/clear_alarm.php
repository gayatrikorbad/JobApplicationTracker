<?php
include_once("library/config.php");
include_once("library/open.php");

/* !Load some constants. Only define if they are not already defined. */
if(!defined('AAA_APPLICATION_CONSTANTS_DEFINED')){
	include_once("load_config.php");
}

$query = "DELETE FROM ".ALARMS_TABLE." WHERE applicationid=$_POST[applicationid]";
$result = $database_object->query($query);

header('location: index.php');
?>