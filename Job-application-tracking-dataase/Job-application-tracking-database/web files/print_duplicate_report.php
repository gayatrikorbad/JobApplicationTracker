<?php

$_GET['title'] = 'Display duplicate report';
include_once("includes/header-htmlhead.php");
include_once("includes/header-navigation.php");

echo "<article>\n<div class='content'>\n";

$query = "SELECT reference, COUNT(reference) AS refCount, role FROM ".APP_TABLE." GROUP BY reference HAVING refCount > 1";
$result = $database_object->query($query);
$i = 1;

echo "<p>Summary of duplicate job applications by reference.</p>\n";

echo "<table id='summary'>\n";
echo "<thead><tr><th>No.</th><th>Count</th><th>Role</th><th>Reference</th></tr></thead><tbody>\n";

while($line = $result->fetch_assoc()){
	echo "<tr>";
	echo "<td class='centre'>$i</td><td class='centre'>$line[refCount]</td><td>$line[role]</td><td><a href='search_job_results.php?reference=$line[reference]'>$line[reference]</a></td>";
	echo "</tr>\n";
	$i++;
}
echo "</tbody>\n</table>\n";
$result->free_result();
include_once("library/close.php");

echo "</div><!-- End of content. -->\n</article>\n";

include_once("includes/footer.php");
?>