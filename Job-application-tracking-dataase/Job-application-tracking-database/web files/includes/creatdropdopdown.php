<?php
function build_drop_down_menu($database_object, $menugroup, $default, $label, $menuname){
$selected = "";

/* Get the menu items from the database. */
$query = "SELECT menuname, menutext FROM ".DROPDOWN_TABLE." WHERE menugroup=".$menugroup;
$result = $database_object->query($query);

echo "\n\n<label>".$label."</label>\n";
echo "<select name='".$menuname."'>";

while($line = $result->fetch_assoc()){
	if($default == $line['menutext']){
		$selected = "selected";
	}

	echo "<option value='".$line['menutext']."' ".$selected." >".$line['menutext']."</option>\n";
	
/* 	Reset $selected back to nothing. */
	$selected = "";
}

echo "</select>\n";

return 1;
}

?>