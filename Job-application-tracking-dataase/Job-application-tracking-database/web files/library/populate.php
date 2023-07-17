<?php
include_once("config.php");
include_once("open.php");

/* !Load some constants. Only define if they are not already defined. */
if(!defined('AAA_APPLICATION_CONSTANTS_DEFINED')){
	include_once("../load_config.php");
}

$days_of_the_week = array("Sunday"=>"no","Monday"=>"no","Tuesday"=>"no","Wednesday"=>"no","Thursday"=>"no","Friday"=>"no","Saturday"=>"no");

$s = serialize($days_of_the_week);

$query = "UPDATE config SET value='$s' WHERE item='send_email_days'";
$result = $database_object->query($query);


?>