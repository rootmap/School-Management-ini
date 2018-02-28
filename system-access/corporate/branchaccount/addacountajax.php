<?php
include('class_file/auth.php');

$q=$_GET['p'];
if($q!='')
{
	$main=substr($q,0,1);
	$maine=substr($q,1,100);

	$tablename=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"tab_name");
	$tabone=$obj->SelectAllByVal("account_module_list_of_head_accounts","id",$main,"head_title");
	?>
    <option value="0" selected>--------------<?php echo $tabone ?>------------</option>
    <?php
	$ssss=$obj->SelectAll("account_module_head_list");
	foreach($ssss as $rowss)
	{
	?>
	<option value="<?php echo $rowss->id; ?>"><?php echo $tabone."--".$rowss->head_title; ?></option>
	<?php
	}
													
}
else
{
?>
<option value="0" selected>--------------------------</option>

<?php	
	
}
?>