<?php
$_GET['title'] = 'Date report';
include_once("includes/header-htmlhead.php");
include_once("includes/header-navigation.php");

date_default_timezone_set('Europe/London');
/* Subtract 14 days from today's date. */
/* See http://www.php.net/manual/en/class.dateinterval.php  */
$date 			= new DateTime();
$today			= $date->format('Y-m-d');
$date 			= $date->sub(new DateInterval('P14D'));
$two_weeks	= $date->format('Y-m-d');

print<<<END
<article>
<div class="content">

<p>Create a report over a date range:</p>

<form action="print_date_report.php" method="post" id="met-form">

<fieldset title="Date range">
	<legend>Date range - YYYY-MM-DD</legend>
	<label>From:</label>
	<input type="date" name="date_from" autofocus value=$two_weeks>

	<label>To:</label>
	<input type="date" name="date_to" value=$today>
</fieldset>

<input type="submit" title="Create report" value="Create report" class="clearfix">
</form>

</div> <!-- End of content. -->
</article>
END;

include_once("includes/footer.php");
?>