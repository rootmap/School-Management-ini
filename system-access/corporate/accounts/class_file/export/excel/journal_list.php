<?php
session_start();
include('../../db_Class.php');
//include('header_footer_file/header.php');
$obj = new db_class();
$obj->MySQL();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 

<script type="text/javascript" src="js/autofill.js"></script>
<script language="JavaScript">
function Check(chk)
{ 
if(document.myform.Check_ctr.checked==true)
{
for (var i = 0; i < chk.length; i++)
{
chk[i].checked = true ;
}
}
else
{
for (i = 0; i < chk.length; i++)
chk[i].checked = false ;
}
}
</script>
</head>
<body>
<table width="660" border="1" cellpadding="1" cellspacing="0">
  <tr>
    <td width="149" bgcolor="#33CC00"><strong>S/L</strong></td>
    <td width="323" bgcolor="#33CC00"><strong>Description</strong></td>
    <td width="82" bgcolor="#33CC00"><strong>Date</strong></td>
  </tr>
  <?php

/*$from=1;
$to=3;
$qrys=mysql_query("select * from asset_voucher where id between '$from' and '$to'");*/

$qrys=mysql_query("select * from  journal_description");
while($result=mysql_fetch_array($qrys))
	{
  echo '<tr>
    <td>'.$result['id'].'</td>
    <td>'.$result['jd'].'</td>
    <td>'.$result['jddate'].'</td>
  </tr>';
  }
  ?>
</table>
<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once("class_lib/excelwriter.class.php");

$excel=new ExcelWriter("billreport.xls");
if($excel==false)	
echo $excel->error;
$myArr=array("");
$myArr=array("Journal Description");
$excel->writeLine($myArr);
$myArr=array("");
$excel->writeLine($myArr);
$myArr=array("S/L","Description","Date");
$excel->writeLine($myArr);
/*$from=1;
$to=3;*/
$qry=mysql_query("select * from journal_description");
if($qry!=false)
{
	$i=1;
	while($res=mysql_fetch_array($qry))
	{			
		$myArr=array($res['id'],$res['jd'],$res['jddate']);
		$excel->writeLine($myArr);
		$i++;
	}
}
?>
<meta http-equiv="refresh" content="2;url=billreport.xls">
</body>
</html>
