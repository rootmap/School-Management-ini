<?php
include('../db_Class.php');
$obj = new db_class();

$pid=$_GET['id'];
if($pid!=0)
{
	$sql1=$obj->SelectAllByID("stockvalidation",array("id"=>$pid));
   foreach($sql1 as $row)
   {
	  echo $row->kg;
   }
}
else
{
	echo 0;
}
?> 