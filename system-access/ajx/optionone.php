<?php
include("../class/auth.php");
$table="ams_marks_select";
$table1="ams_marks_mode";
$table2="ams_report";
$table3="ams_report2";
$table4="ams_performance";
$table5="ams_performance2";
extract($_GET);
if($o!='')
{
	if($o=='1'){  include("../include/one.php"); } 
	elseif ($o=='2') {  include("../include/optiontwo.php"); } 
	elseif ($o=='3') {  include("../include/optionthree.php"); } 
	elseif ($o=='4') {  include("../include/optionfour.php"); } 
	elseif ($o=='6') {  include("../include/optionfive.php"); } 
	elseif ($o=='5') {  include("../include/optionsix.php"); } 	
}

?>
