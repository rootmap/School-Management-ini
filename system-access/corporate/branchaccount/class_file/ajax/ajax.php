<?php
include('../db_Class.php');
$obj = new db_class();

$pid=$_GET['id'];
if($pid!=0)
{
	$sql1=$obj->SelectAllByID("stockvalidation",array("id"=>$pid));
   foreach($sql1 as $row)
   {
	  $totalprice=$row->tprice;
	  $totalkg=$row->kg;
	  $uniteprice=$totalprice/$totalkg;
	  echo number_format($uniteprice,2);
   }
}
else
{
	echo 0;
}
?> 