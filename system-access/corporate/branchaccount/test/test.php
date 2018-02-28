<?php
    echo '<html><head>';
    echo '<title>Adding rows</title>';
    //the Java-script part which generates the new rows
    //(i guess the "row-name"-manipulation must be embedded here, i just don't get how :-( )
    echo
    '<SCRIPT language="javascript">
    function addRowEntry(tableID){
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    var colCount = table.rows[0].cells.length;
    for(var i=0; i<colCount; i++) {
    var newcell = row.insertCell(i);
    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
    }
    }
    </SCRIPT>';
    echo '</head>';
    //the body-part which contains the button with the "onclick"-call on that function
    echo '<body>';
    //the form which on submit should pass all those created rows into the $_POST-Variables
    echo '<form action="passToEvaluationScript.php" method="POST">';
    //the button with the "onClick"-call
    echo "<input type='button' value='add row entry' onClick=addRowEntry('myTable')>";
    //the table which get the additional row
    echo '<table id="myTable">';
    echo '<tr>';
    echo '<td>';
    //this element should actually be renamed each click
    //e.g. 10 consecutive clicks should create 10 of these "drop-down-boxes"
    //each named country1, country2, ........ country10 respectively
    echo '<SELECT name="country">
    <OPTION value="in">India</OPTION>
    <OPTION value="de">Germany</OPTION>
    <OPTION value="fr">France</OPTION>
    <OPTION value="us">United States</OPTION>
    <OPTION value="ch">Switzerland</OPTION>
    </SELECT>';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '<input type="submit">';
    echo '</form>';
    echo '</body>';
    echo '</html>';
?>