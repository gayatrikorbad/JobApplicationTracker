<?php
/* !Select the variables and define them as upper case. The order by is uncessary. */
$query = "SELECT item, value FROM config ORDER BY item";
$result = $database_object->query($query);

while($line = $result->fetch_assoc()){
	define(strtoupper($line['item']), $line['value']);
}

$result->free();

/* If DEBUG or DONT_SAVE_REPORT is enabled then turn on lots of error reporting. */
if(DEBUG || DONT_SAVE_REPORT){
	/* Sets the background colour of the 'Portal' logo at the top of the page to red.*/
	/* Are these two lines duplicating each other? */
	echo "<script src='js/debug.js' typetype='application/javascript'></script>";
	
	ini_set('display_errors',1);
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
}
?>