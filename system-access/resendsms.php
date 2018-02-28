<?php
include_once('class/auth.php');
if(isset($_POST['save']))
{	
	$f=1;
	$phone=array();
	foreach($_POST['phone_number'] as $ss):
			$phone[]=$ss;
	$f++;	
	endforeach;
	
	$gotnumber=implode(",",$phone);
	$numbers=str_replace(",","|88",$gotnumber);
	$count=count($_POST['phone_number']);
	if($count!=0)
	{
		$ops->sms($numbers,$_POST['sms'],$brand,$school);
		$obj->Success("Successfully Send","total_send_sms.php");
	}
	else
	{
		$obj->Error("SMS Not Send","total_send_sms.php");
	}
}
?>