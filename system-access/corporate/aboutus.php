<?php	
include('accounts/class_file/db_Class.php');
$obj = new db_class();
$obj->MySQL();

$ha=$_POST['cleditor'];
$full_date=date('Y-m-d');
$sql=mysql_query("INSERT INTO `inventory`.`big_data` (`id`, `content`) VALUES (NULL, '$ha')");
if($sql)
{
header('location: abt.php');
}
else
{
	mysql_error();
}
?>