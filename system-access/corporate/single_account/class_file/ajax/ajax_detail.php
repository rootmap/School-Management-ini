<?php
include('../db_Class.php');
$obj = new db_class();

$pid=$_GET['id'];
if($pid!=0)
{
	$sql1=$obj->SelectAllByID("account_module_product",array("id"=>$pid));
   foreach($sql1 as $row)
   {
	  echo $row->description;
   }
}
else
{
	echo 0;
}
?> 