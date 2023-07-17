<?php

$role = $_POST['role'];
$reference = $_POST['reference'];
$company = $_POST['company'];
$location = $_POST['location'];
$url = $_POST['url'];

$day_rate = $_POST['day_rate'];
$salary_low = $_POST['salary_low'];
$salary_high = $_POST['salary_high'];

$via = $_POST['via'];
$agency = $_POST['agency'];
$contact_email = $_POST['contact_email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$telephone = $_POST['telephone'];
$status = $_POST['status'];
$notes = $_POST['notes'];
$cv_used = $_POST['cv'];

$id = $_POST['id'];

if(isset($_POST['follow_up'])){
	$follow_up = TRUE;
} else {
	$follow_up = FALSE;
}

if(isset($_POST['contract'])){
	$contract = TRUE;
} else {
	$contract = FALSE;
}

include_once("library/config.php");
include_once("library/open.php");

/* !Load some constants. Only define if they are not already defined. */
if(!defined('AAA_APPLICATION_CONSTANTS_DEFINED')){
	include_once("load_config.php");
}

$query = "UPDATE ".APP_TABLE." SET role='$role', reference='$reference', day_rate='$day_rate', contract='$contract', salary_low='$salary_low', salary_high='$salary_high', via='$via', company='$company', first_name='$first_name', last_name='$last_name', contact_email='$contact_email', url='$url', telephone='$telephone', status='$status', notes='$notes', agency='$agency', location='$location', follow_up='$follow_up', cv_used=$cv_used WHERE id='$id'";

$result = $database_object->query($query);

/* !This code does nothing useful. */
$_GET = array();
if($result){
	$_GET['success'] = "TRUE";
	header ('location: index.php');
}else{
	$_GET['success'] = "FALSE";
	header ('location: index.php');
}

?>