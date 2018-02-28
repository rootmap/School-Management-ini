<?php
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$pid=$_GET['cid'];

$sql=mysql_query("SELECT * FROM ladger WHERE ladger_id='$pid'");
$d=0
$c=0;
while($rr=mysql_fetch_array($sql))
{
	$d+=$rr['debit'];
	$c+=$rr['cradit'];	
}
?>
<input type="text" name="cost" class="required short" value="<?php echo $d-$c; ?>">
