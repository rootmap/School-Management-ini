<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="../plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="../plugins/imgareaselect/css/imgareaselect-default.css" media="screen">
<link rel="stylesheet" type="text/css" href="../plugins/jgrowl/jquery.jgrowl.css" media="screen">
<link rel="stylesheet" type="text/css" href="../custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css" href="../plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="../plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css" href="../plugins/cleditor/jquery.cleditor.css" media="screen">
<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="../css/mws-style.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="../css/demo.css" media="screen">

<link rel="stylesheet" type="text/css" href="../custom-plugins/wizard/wizard.css" media="screen">
<!-- jQuery-UI Stylesheet -->

<link rel="stylesheet" type="text/css" href="../jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="../jui/css/jquery.ui.timepicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="../jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="../css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/themer.css" media="screen">


<script type="text/javascript" src="simpletreemenu.js"></script>
<link href="simpletree.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.em{}
.em:hover{ background:#093; }
</style>
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","addrowforjournal.php?q="+str,true);
xmlhttp.send();
}

function showUsers(str)
{
if (str=="")
  {
  document.getElementById("txtHints").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHints").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","addacountajax.php?p="+str,true);
xmlhttp.send();
}
</script>
<script type="text/javascript">
function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable').deleteRow(i);
}


function insRow()
{
    var x=document.getElementById('POITable');
       // deep clone the targeted row
    var new_row = x.rows[0].cloneNode(true);
       // get the total number of rows
    var len = x.rows.length;
       // set the innerHTML of the first row 
	
       // grab the input from the first cell and update its ID and value
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.id = inp1.id;
    inp1.value = '';
	
	
       // grab the input from the first cell and update its ID and value
    var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
    inp2.id = inp2.id;
    inp2.value = '0';

	

	

       // append the new row to the table
    x.appendChild( new_row );
}
function insRows()
{
    var x=document.getElementById('POITables');
       // deep clone the targeted row
    var new_row = x.rows[0].cloneNode(true);
       // get the total number of rows
    var len = x.rows.length;
       // set the innerHTML of the first row 
	
       // grab the input from the first cell and update its ID and value
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.id = inp1.id;
    inp1.value = '';


	

	

       // append the new row to the table
    x.appendChild( new_row );
}
function displayResult()
{
document.getElementById("myTable").deleteRow(2);
}
function cloneRow()
{
	var row = document.getElementById("rowToClone"); // find row to copy
	var table = document.getElementById("tableToModify"); // find table to append to
	var clone = row.cloneNode(true); // copy children too
	clone.id = "newID"; // change id or other attributes/contents
	table.appendChild(clone); // add new row to end of table
}
function createRow()
		{
			var row = document.createElement('tr'); // create row node
			var col = document.createElement('td'); // create column node
			var col2 = document.createElement('td'); // create second column node
			var col3 = document.createElement('td'); // create column node
			var col4 = document.createElement('td'); // create second column node
			var col5 = document.createElement('td'); // create column node
			var col6 = document.createElement('td'); // create second column node
			row.appendChild(col); // append first column to row
			row.appendChild(col2); // append second column to row
			row.appendChild(col3); // append first column to row
			row.appendChild(col4); // append second column to row
			row.appendChild(col5); // append first column to row
			row.appendChild(col6); // append second column to row

			col.innerHTML = "qwe"; // put data in first column
			col2.innerHTML = "rty"; // put data in second column
			var table = document.getElementById("tableToModify"); // find table to append to
			table.appendChild(row); // append row to table
		}
</script>
<script language="javascript">
		function addNumbers()
		{
				var val1 = parseInt(document.getElementById("opt_a_debit").value);
				var val2 = parseInt(document.getElementById("opt_b_debit").value);
				var ansD = document.getElementById("totaldebit");
				ansD.value = val1 + val2;
		}
		
		function addNumbers_cradit()
		{
				var val1 = parseInt(document.getElementById("opt_a_cradit").value);
				var val2 = parseInt(document.getElementById("opt_b_cradit").value);
				var ansD = document.getElementById("totalcradit");
				ansD.value = val1 + val2;
		}
		
</script>

<link rel="stylesheet" type="text/css" href="../css/splitmenubuttons.css" />

<script type="text/javascript" src="../js/splitmenubuttons.js">

/***********************************************
* AnyLink CSS Menu script v2.0- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Project Page at http://www.dynamicdrive.com/dynamicindex1/anylinkcss.htm for full source code
***********************************************/

</script>

<script type="text/javascript">

//anylinkcssmenu.init("menu_anchors_class") ////Pass in the CSS class of anchor links (that contain a sub menu)
anylinkcssmenu.init("anchorclass")
</script>
<script>
function showbutt(cat)
{
if (cat=="")
  {
  document.getElementById("showcat").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showcat").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","class_file/ajax/catagory.php?cid="+cat,true);
xmlhttp.send();
}
</script>


<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
<SCRIPT language="javascript">
        function addRow(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
 
            var colCount = table.rows[0].cells.length;
 
            for(var i=0; i<colCount; i++) {
 
                var newcell = row.insertCell(i);
 
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    case "select-one":
                            newcell.childNodes[0].selectedIndex = 0;
                            break;
                }
            }
        }
 
        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
            }catch(e) {
                alert(e);
            }
        }
 
    </SCRIPT>

<title>Accounts By AMS IT</title>

</head>