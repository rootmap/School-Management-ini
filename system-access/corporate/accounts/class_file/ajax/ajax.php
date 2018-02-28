<?php
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$pid=$_GET['id'];
if($pid!=0)
{
	$obj->sql("SELECT * FROM product WHERE id='$pid'");
   while($row=mysql_fetch_array($obj->result))
   {
	  echo $row['price'];
   }
}
else
{
	echo 0;
}
?> 