var addheader = $('[name="addheader"]');
var removeheader = $('[name="removeheader"]');

/* When the 'Add header' button is clicked on count the existing headers and then add a new header and cell to the table. */
addheader.click(function(){
	var numberofheaders = $("[name='headercells'] td").length;
	var newheadernumber = numberofheaders + 1;
	console.log("Add header button clicked on! New number of headers is: " + newheadernumber);
	
	$("<th>Header " + newheadernumber + "</th>").appendTo('[name="headerheaders"]');
	$("<td><input type='text' name='header[]' value='New header " + newheadernumber + "'></td>").appendTo('[name="headercells"]');
});

/* When the 'Remove header' button is clicked on remove the last header and cell from the table. */
removeheader.click(function(){
	var numberofheaders = $("[name='headercells'] td").length;
	
/* 	Only remove a header if there is more than two of them. */
	if(numberofheaders>2){
		newheadernumber = numberofheaders - 1;
		$("[name='headerheaders'] th:last-child").remove();	
		$("[name='headercells'] td:last-child").remove();
		console.log("Remove header button clicked on! New number of headers is: " + newheadernumber);
	}
});

/* Listeners attached to two buttons in the cells section. */
var addcell = $('[name="addcell"]');
var removecell = $('[name="removecell"]');

/* When the 'Add cell' button is clicked on count the existing headers and then add a new header and cell to the table. */
addcell.click(function(){
	var numberofcells = $("[name='cellcells'] td").length;
	var newcellnumber = numberofcells + 1;
	console.log("Add cell button clicked on! New number of cells is: " + newcellnumber);
	
	$("<th>Cell " + newcellnumber + "</th>").appendTo('[name="cellheaders"]');
	$("<td><input type='text' name='cell[]' value='<td>%s</td>'></td>").appendTo('[name="cellcells"]');
});

/* When the 'Remove cell' button is clicked on remove the last header and cell from the table. */
removecell.click(function(){
		var numberofcells = $("[name='cellcells'] td").length;

/* 	Only remove a cell if there is more than two of them. */
	if(numberofcells>2){
		var newcellnumber = numberofcells - 1;
		$("[name='cellheaders'] th:last-child").remove();	
		$("[name='cellcells'] td:last-child").remove();
		console.log("Remove header button clicked on! New number of cells is: " + newcellnumber);
	}
});