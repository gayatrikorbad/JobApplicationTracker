<?php
include_once("library/config.php");
include_once("library/open.php");

/* !Load some constants. Only define if they are not already defined. */
if(!defined('AAA_APPLICATION_CONSTANTS_DEFINED')){
	include_once("load_config.php");
}

$query = "DELETE FROM ".ALARMS_TABLE." WHERE DATE(alarmdate)<DATE(now())";

$result = $database_object->query($query);

if($result){
	header ('location: edit_config.php');
}else{
	echo "Failed to update the database.<br/>";
	echo "The query was : $query";
	exit(99);
}

?>