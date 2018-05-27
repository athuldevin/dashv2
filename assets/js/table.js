/**
 * Projet Name : Dynamic Form Processing with PHP
  * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2013, Students3k.com
 * http://students3k.com

 */
 function call() {
     $.getJSON("lookup.php?SerialNo=" + document.getElementById("SerialNo").value,
           function(data){
             $.each(data, function(i,item){
               if (item.field == "MRP") {
                 var x = document.getElementById("MRP");
                 x.value = item.value+'.00';
               }
             });
           });
   };





function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 5){							// limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum Limit exceeded");
	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	rowCount--;
	table.deleteRow(1);
		}
