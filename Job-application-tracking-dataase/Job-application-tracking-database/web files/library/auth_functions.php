<?php
function Redirect($Str_Location, $Bln_Replace = 1, $Int_HRC = NULL)
{
	if(!headers_sent())
	{
	  header('location: '.urldecode($Str_Location), $Bln_Replace, $Int_HRC);
	  exit;
	}	
		exit('<meta http-equiv="refresh" content="0; url='.urldecode($Str_Location).'"/>');
		return;
}


function KillSession(){

$_SESSION = array();

/*
If it's desired to kill the session, also delete the session cookie.
Note: This will destroy the session, and not just the session data!
*/
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

/* Finally, destroy the session. */
session_destroy();
}

?>