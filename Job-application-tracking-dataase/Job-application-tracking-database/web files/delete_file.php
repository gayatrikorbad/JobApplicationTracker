<?php
$id = $_REQUEST['id'];

include_once("library/config.php");
include_once("library/open.php");

/* !Load some constants. Only define if they are not already defined. */
if(!defined('AAA_APPLICATION_CONSTANTS_DEFINED')){
	include_once("load_config.php");
}

/* !Get the filename for the id. Needed to delete the file from the hard drive. */
$query = "SELECT filename from ".UPLOADS_TABLE." WHERE id=$id";
$result = $database_object->query($query);
$line = $result->fetch_assoc();
$filename = $line['filename'];

/* !Delete the entry from the database. */
$query = "DELETE FROM ".UPLOADS_TABLE." WHERE id=$id";
$result = $database_object->query($query);

/* !Delete the file from the file store, the hard drive. */
unlink(UPLOADS_FOLDER_ABSOLUTE_PATH.$filename);

/* !Return to the page that shows the stored files. */
header('location: user_report_generic.php?reportnumber=107');
?>